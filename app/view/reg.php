<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bruno+Ace+SC&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    
    
   <link rel="stylesheet" href="../../public/css/landing.css"> 
   <link rel="stylesheet" href="../../public/css/reg.css"> 

    <title>Slim Framework</title>
</head>
<body>
    <div class="container-fluid px-0 m-0 navw">
        <?php include '../app/segments/navbar.php';?>
    </div>

    <?php 
        if (isset($_GET['email']) && $_GET['email']=="exist"){
            echo '    <div class="container-fluid m-0 p-0 w-100">
                            <div class="row row-cols-1 row-cols-md-12 p-0">
                                <div class="col-xs-1 col-md-12">
                                    <div class="alert alert-danger alert-dismissible mb-0 fade show" role="alert">
                                    
                                        <strong> Registration Failed .</strong> Your email id already exists. 
                                        <button type="button" class="close alrtdes" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>';
        }
    ?>

    <?php 
        if (isset($_GET['reg']) && $_GET['reg']=="success"){
            echo '    <div class="container-fluid m-0 p-0 w-100">
                            <div class="row row-cols-1 row-cols-md-12 p-0">
                                <div class="col-xs-1 col-md-12">
                                    <div class="alert alert-success alert-dismissible mb-0 fade show" role="alert">
                                    
                                        <strong> Registration Succesful .</strong> please Login in the page to continue. 
                                        <button type="button" class="close alrtdes" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>';
        }
    ?>

    <?php 
        if (isset($_GET['con']) && $_GET['con']=="failed"){
            echo '    <div class="container-fluid m-0 p-0 w-100">
                            <div class="row row-cols-1 row-cols-md-12 p-0">
                                <div class="col-xs-1 col-md-12">
                                    <div class="alert alert-danger alert-dismissible mb-0 fade show" role="alert">
                                    
                                        <strong> Registration Failed .</strong> Error in connection occured. Try again later.
                                        <button type="button" class="close alrtdes" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>';
        }
    ?>




    <div class="container-fluid m-0 p-0 mb-0 part1 ">
        <div class="container-fluid w-50 my-3  px-3 info opa">
            <div class="d-flex justify-content-center py-2 "><small><p>Make sure your both name only contain letter.Your email is valid. Your password can only have -, _, @, numbers, letters and 6-50 digit long. Your uploaded image is in jpg or jpeg format. Make sure your password and confirm password matches. </p></small></div>
            
        </div>
        <section class="container w-50  text-light py-5 mt-5 opa">
            <form action="/regform" method="post" enctype="multipart/form-data">

                <div class="row row-cols-1 row-cols-md-2 g-3">
                
                    <div id="fnam" class="col">
                        <label for="fname">First Name:</label>
                        <input type="text" class="form-control " id="fname" name="frname" autocomplete="off">
                    </div>
                    <div id="lnam" class="col">
                        <label for="lname">Last Name:</label>
                        <input type="text" class="form-control " id="lname" name="lsname" autocomplete="off">
                    </div>

                </div>
                
                <div class="row row-cols-1 row-cols-md-2 g-3">
                
                    <div id="mal" class="col">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control " id="email" name="mail" autocomplete="off">
                    </div>

                </div>
                <div class="row row-cols-1 row-cols-md-2 g-3">
                
                    <div id="pss" class="col">
                        <label for="pass">Password:</label>
                        <input type="password" class="form-control " id="pass" name="passw" autocomplete="off">
                    </div>
                    <div id="cpss" lass="col">
                        <label for="conpass">Confirm Password:</label>
                        <input type="password" class="form-control " id="conpass" name="conpassw" autocomplete="off">
                    </div>

                </div>

                <div id="pim" class="row row-cols-1 row-cols-md-2 g-3 py-4 ">
                    <div class="col">
                        <label for="img">Profile Image :</label>
                        <input type="file" class="form-control-file " id="img" name="imguser" autocomplete="off">
                    </div>
            

                </div>
                
                <div class="row row-cols-1 row-cols-md-1 py-4 px-0 ">
                    <div id="subbt" class="d-flex justify-content-center"> 
                        <button id="pgsub" type="submit" class="btn sub disabled">Submit</button>

                    </div>

            

                </div>




            
            </form>

        </section>

    </div>
        

    

    <div class="container-fluid m-0 p-0 part2">
        <div class="d-flex justify-content-center pt-5 ">
            <p><small>&copy;copyright law 2023 @samin arnob</small></p>
        </div>

    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <script src="../../public/js/landing.js"></script>
    <script src="../../public/js/reg.js"></script>
</body>
</html>