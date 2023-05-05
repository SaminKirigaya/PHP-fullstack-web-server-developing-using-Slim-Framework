
<?php 
require_once '../app/controller/app.php';

?>

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

    <title>Slim Framework</title>
</head>
<body>
    <!--Navbar-->
    <?php include '../app/segments/navbar.php';?>
    <!--Navbar-->
    <?php 
        if (isset($_GET['editvid']) && $_GET['editvid']=="success"){
            echo '    <div class="container-fluid m-0 p-0 w-100">
                            <div class="row row-cols-1 row-cols-md-12 p-0">
                                <div class="col-xs-1 col-md-12">
                                    <div class="alert alert-success alert-dismissible mb-0 fade show" role="alert">
                                    
                                        <strong> Account Editing Successful .</strong> Please log in again to confirm it was you ...
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
        if (isset($_GET['editvid']) && $_GET['editvid']=="fail"){
            echo '    <div class="container-fluid m-0 p-0 w-100">
                            <div class="row row-cols-1 row-cols-md-12 p-0">
                                <div class="col-xs-1 col-md-12">
                                    <div class="alert alert-danger alert-dismissible mb-0 fade show" role="alert">
                                    
                                        <strong> Account Editing Failed .</strong> Sorry some error occured, please try again later...
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
        if (isset($_GET['delete']) && $_GET['delete']=="success"){
            echo '    <div class="container-fluid m-0 p-0 w-100">
                            <div class="row row-cols-1 row-cols-md-12 p-0">
                                <div class="col-xs-1 col-md-12">
                                    <div class="alert alert-success alert-dismissible mb-0 fade show" role="alert">
                                    
                                        <strong> Account Deletion Successful .</strong> Thanks for staying with us ...
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
        if (isset($_GET['delete']) && $_GET['delete']=="fail"){
            echo '    <div class="container-fluid m-0 p-0 w-100">
                            <div class="row row-cols-1 row-cols-md-12 p-0">
                                <div class="col-xs-1 col-md-12">
                                    <div class="alert alert-danger alert-dismissible mb-0 fade show" role="alert">
                                    
                                        <strong> Account Deletion Failed .</strong> Sorry some error occured, Try again leter ...
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
        if (isset($_GET['login']) && $_GET['login']=="success"){
            echo '    <div class="container-fluid m-0 p-0 w-100">
                            <div class="row row-cols-1 row-cols-md-12 p-0">
                                <div class="col-xs-1 col-md-12">
                                    <div class="alert alert-success alert-dismissible mb-0 fade show" role="alert">
                                    
                                        <strong> Login Successful .</strong> Please continue browsing...
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
        if (isset($_SESSION['id'])){
            echo '    <div class="container-fluid m-0 p-0 w-100">
                            <div class="row row-cols-1 row-cols-md-12 p-0">
                                <div class="col-xs-1 col-md-12">
                                    <div class="alert alert-success alert-dismissible mb-0 fade show" role="alert">
                                    
                                        <strong> Welcome Back... '.$_SESSION['email'].'.</strong>  Please continue browsing...
                                        <button type="button" class="close alrtdes" >
                                            <a class="viewpro" href="https://localhost/profile">View Profile</a>
                                            
                                        </button>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>';
        }
    ?>



    <div class="container-fluid  dessecond ">

        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#2efaca" fill-opacity="1" d="M0,160L17.1,181.3C34.3,203,69,245,103,234.7C137.1,224,171,160,206,154.7C240,149,274,203,309,213.3C342.9,224,377,192,411,170.7C445.7,149,480,139,514,122.7C548.6,107,583,85,617,74.7C651.4,64,686,64,720,69.3C754.3,75,789,85,823,106.7C857.1,128,891,160,926,160C960,160,994,128,1029,117.3C1062.9,107,1097,117,1131,106.7C1165.7,96,1200,64,1234,58.7C1268.6,53,1303,75,1337,80C1371.4,85,1406,75,1423,69.3L1440,64L1440,0L1422.9,0C1405.7,0,1371,0,1337,0C1302.9,0,1269,0,1234,0C1200,0,1166,0,1131,0C1097.1,0,1063,0,1029,0C994.3,0,960,0,926,0C891.4,0,857,0,823,0C788.6,0,754,0,720,0C685.7,0,651,0,617,0C582.9,0,549,0,514,0C480,0,446,0,411,0C377.1,0,343,0,309,0C274.3,0,240,0,206,0C171.4,0,137,0,103,0C68.6,0,34,0,17,0L0,0Z"></path></svg>
        <div class="wave2">

            <p>"Failure doesn't exist. It's only a chance of success." </p>

        </div>

        <svg class="wave1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#2efaca" fill-opacity="1" d="M0,160L26.7,181.3C53.3,203,107,245,160,229.3C213.3,213,267,139,320,144C373.3,149,427,235,480,240C533.3,245,587,171,640,160C693.3,149,747,203,800,229.3C853.3,256,907,256,960,250.7C1013.3,245,1067,235,1120,240C1173.3,245,1227,267,1280,261.3C1333.3,256,1387,224,1413,208L1440,192L1440,320L1413.3,320C1386.7,320,1333,320,1280,320C1226.7,320,1173,320,1120,320C1066.7,320,1013,320,960,320C906.7,320,853,320,800,320C746.7,320,693,320,640,320C586.7,320,533,320,480,320C426.7,320,373,320,320,320C266.7,320,213,320,160,320C106.7,320,53,320,27,320L0,320Z"></path></svg>

        <div id="animserv" class="container-fluid vw-100 vh-100 services">
            <div class="container"> 
                <div class="row w-30">
                    <div class="col serv"><p class="pborder">Our Services</p></div>
                    
                </div>
            </div>
            <div class="container py-2 ">
                <div class="row row-cols-1 row-cols-md-3 row-cols-lg-4 g-4 py-5">
                    <div class="col">   
                        <div class="card carddes" >
                            <img src="/public/img/sp1.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title titldes">Service 1</h5>
                                <p class="card-text ">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <div class="d-flex justify-content-center">
                                    <a href="#" class="btn btn-primary btdes">View More</a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col">   
                        <div class="card carddes" >
                            <img src="/public/img/sp2.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title titldes">Service 2</h5>
                                <p class="card-text ">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <div class="d-flex justify-content-center">
                                    <a href="#" class="btn btn-primary btdes">View More</a>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col">   
                        <div class="card carddes" >
                            <img src="/public/img/sp3.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title titldes">Service 3</h5>
                                <p class="card-text ">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <div class="d-flex justify-content-center">
                                    <a href="#" class="btn btn-primary btdes">View More</a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col">   
                        <div class="card carddes" >
                            <img src="/public/img/sp4.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title titldes">Service 4</h5>
                                <p class="card-text ">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <div class="d-flex justify-content-center">
                                    <a href="#" class="btn btn-primary btdes">View More</a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col">   
                        <div class="card carddes" >
                            <img src="/public/img/sp5.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title titldes">Service 5</h5>
                                <p class="card-text ">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <div class="d-flex justify-content-center">
                                    <a href="#" class="btn btn-primary btdes">View More</a>
                                </div>
                            </div>

                        </div>
                    </div>
                    
                
                </div>

            </div>


        </div>




    </div>
    
    
    <div class=" container m-0">
            
            <p class="cp d-flex justify-content-center pt-3"><small>&copy;copyright law 2023 @samin arnob</small></p>
    </div>  




   

    



    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <script src="../../public/js/landing.js"></script>
    <script src="../../public/js/slid.js"></script>
    



</body>
</html>