<?php
session_start();

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Server\RequestHandlerInterface;
use Slim\Factory\AppFactory;

require __DIR__ . '/../../vendor/autoload.php';

$app = AppFactory::create(); //App creating

$app->addRoutingMiddleware();



// Define Custom Error Handler
//check if email exist in database its a middleware used in registration /regform operation when user click reg button

$check_email = function (Request $request, RequestHandlerInterface $handler) {
    // Get the email from the request body
    $email = $request->getParsedBody()['mail'];

    // Query the database for the email
    include '../app/model/dump.php';

    $query = "SELECT*FROM `user` WHERE `email`='$email'";
    $result = mysqli_query($con,$query);
    $count = mysqli_num_rows($result);

    // If the email exists in the database, return an error response
    if ($count > 0) {
        
        $response = new \Slim\Psr7\Response();
       
        return $response->withHeader('Location', '/reg?email=exist')->withStatus(302);

    
        
   
    }

    // Call the next middleware and return its response
    
    return $handler->handle($request);

    
};

$check_login = function (Request $request, RequestHandlerInterface $handler){
    $emailvalu = $request->getParsedBody()['emailval'];
    $passw = $request->getParsedBody()['passval'];

    include '../app/model/dump.php';

    $query = "SELECT*FROM `user` WHERE `email`='$emailvalu'";
    $result = mysqli_query($con,$query);
    $count = mysqli_num_rows($result);

    if($count>0){
        $row = mysqli_fetch_assoc($result);
        if(password_verify($passw, $row['pass'])){
            $_SESSION['id'] = $row['slno'];
            $_SESSION['email'] = $row['email'];
            $response = new \Slim\Psr7\Response();
            return $response->withHeader('Location', '/?login=success')->withStatus(302);

        }else{
            $response = new \Slim\Psr7\Response();
            return $response->withHeader('Location', '/log?pass=wrong')->withStatus(302);
        }


    }else{

        $response = new \Slim\Psr7\Response();
        return $response->withHeader('Location', '/log?email=notexist')->withStatus(302);
    }


};


$errorMiddleware = $app->addErrorMiddleware(true, true, true); //for production (false,true,true)

// Set the Not Found Handler
$errorMiddleware->setErrorHandler(
    HttpNotFoundException::class,
    function (Request $request, Throwable $exception, bool $displayErrorDetails) {
        $response = new Response();
        $response->getBody()->write('404 NOT FOUND');

        return $response->withStatus(404);
    });

// Set the Not Allowed Handler
$errorMiddleware->setErrorHandler(
    HttpMethodNotAllowedException::class,
    function (Request $request, Throwable $exception, bool $displayErrorDetails) {
        $response = new Response();
        $response->getBody()->write('405 NOT ALLOWED');

        return $response->withStatus(405);
    });

    //initial when a user say www.something.com they land here
$app->get('/', function (Request $request, Response $response, $args) {
    ob_start();
    include '../app/view/landing.php';
    $content = ob_get_clean();
    
    // Send the response
    $response->getBody()->write($content);
    return $response;
    
});

//registration button in navbar takes to reg page
$app->get('/reg', function (Request $request, Response $response, $args) {
    ob_start();
    include '../app/view/reg.php';
    $content = ob_get_clean();
    
    // Send the response
    $response->getBody()->write($content);
    return $response;
    
});

//registration form button operation here it checks a middleware above code
$app->post('/regform', function (Request $request, Response $response, $args) {
    $fname=$_POST['frname'];
    $lname=$_POST['lsname'];
    $mail=$_POST['mail'];
    $passw= $_POST['passw'];
    $passw = password_hash($passw, PASSWORD_DEFAULT);

    $imgnam = $_FILES['imguser']['name'];
    $ext = explode(".",$imgnam);
    $n = count($ext);
    $ext = $ext[$n-1];



    $imgname = $fname.$lname.'.'.$ext;
    $imgtmp = $_FILES['imguser']['tmp_name'];

    $dest = '../app/userimg/'.$imgname;

    include '../app/model/dump.php';

    if($con){
        $query = "INSERT INTO `user`(`fname`, `lname`, `email`, `pass`, `img`) VALUES ('$fname','$lname','$mail','$passw','$imgname')";
        $result = mysqli_query($con, $query);
    
        if($result === true){
            move_uploaded_file($imgtmp, $dest);

            return $response->withHeader('Location', '/reg?reg=success')->withStatus(302);

        }
    
    }else{
        return $response->withHeader('Location', '/reg?con=failed')->withStatus(302);

    }

    // Send the response
   
    
    
})->add($check_email);

//login button in navbar starts this operation
$app->get('/log', function (Request $request, Response $response, $args) {
    ob_start();
    include '../app/view/login.php';
    $content = ob_get_clean();
    
    // Send the response
    $response->getBody()->write($content);
    return $response;
    
});

//login process after clicking the button
$app->post('/logindata', function (Request $request, Response $response, $args) {

    // Send the response
    
})->add($check_login);

//logout button
$app->get('/logout', function (Request $request, Response $response, $args) {

    session_destroy();
    session_unset();


    // Send the response
    
    return $response->withHeader('Location', '/')->withStatus(302);
    
});

//profile button clicking operation
$app->get('/profile', function (Request $request, Response $response, $args) {

    include '../app/model/dump.php';
    $query = "SELECT*FROM `user` WHERE `slno`=".$_SESSION['id'];
    $result = mysqli_query($con,$query);
    $row = mysqli_fetch_assoc($result);
    $firstn = $row['fname']; 
    $lastn = $row['lname'];
    $imgnm = $row['img'];
    $emailad = $row['email'];

    $image_path = '../app/userimg/'.$imgnm;
    $image_type = mime_content_type($image_path);
    $image_data = file_get_contents($image_path);
    $image_data_uri = 'data:' . $image_type . ';base64,' . base64_encode($image_data);

    ob_start();
    include '../app/view/profile.php';
    $content = ob_get_clean();
    
    // Send the response
    $response->getBody()->write($content);
    return $response;
    
    // Send the response
    
});

$app->get('/delid',function(Request $request, Response $response, $args){
    include '../app/model/dump.php';
    if ($con){
        $query = "SELECT*FROM `user` WHERE `slno`=".$_SESSION['id'];
        $result = mysqli_query($con,$query);
        $row = mysqli_fetch_assoc($result);
        
        $imgnm = $row['img'];
        $image_path = '../app/userimg/'.$imgnm;

        if(unlink($image_path)){
            $query2 = "DELETE FROM `user` WHERE `slno`=".$_SESSION['id'];
            $result = mysqli_query($con,$query2);

            session_destroy();
            session_unset();
            return $response->withHeader('Location','/?delete=success')->withStatus(302);
            

        }else{
            return $response->withHeader('Location','/?delete=fail')->withStatus(302);

        }
        
    }

});

//Afterclicking edit buttonthisfunctionsactivate
$app->get('/editid',function(Request $request, Response $response, $args){
    include '../app/model/dump.php';
    if ($con){
        $query = "SELECT*FROM `user` WHERE `slno`=".$_SESSION['id'];
        $result = mysqli_query($con,$query);
        $row = mysqli_fetch_assoc($result);

        $frname = $row['fname'];
        $laname=$row['lname'];
        $emal= $row['email'];
        
        

      
        
    }

    ob_start();
    include '../app/view/edit.php';
    $content = ob_get_clean();
    
    // Send the response
    $response->getBody()->write($content);
    return $response;

});

//after clicking edit submit this operation start
$app->post('/editform', function (Request $request, Response $response, $args) {

    $friname = $_POST['frname'];
    $lstname = $_POST['lsname'];
    $mailv = $_POST['mail'];

   include '../app/model/dump.php';
   if($con){
    $query = "UPDATE `user` SET `fname`='$friname', `lname`='$lstname', `email`='$mailv' WHERE `slno`=".$_SESSION['id'];
    $result = mysqli_query($con, $query);
    if($result === true){
        session_destroy();
        session_unset();
        return $response->withHeader('Location','/?editvid=success')->withstatus(302);

    }else{
        return $response->withHeader('Location','/?editvid=fail')->withstatus(302);
    }
   }else{
        return $response->withHeader('Location','/?editvid=fail')->withstatus(302);
   }


    // Send the response
    
});



$app->run();