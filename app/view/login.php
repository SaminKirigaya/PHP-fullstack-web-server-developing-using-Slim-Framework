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
    <link rel="stylesheet" href="../../public/css/login.css">



    <title>Slim Framework</title>
</head>
<body>
    <!--Navbar -->
    <?php include '../app/segments/navbar.php';?>
    <!--Navbar -->

    <?php 
        if (isset($_GET['pass']) && $_GET['pass']=="wrong"){
            echo '    <div class="container-fluid m-0 p-0 w-100">
                            <div class="row row-cols-1 row-cols-md-12 p-0">
                                <div class="col-xs-1 col-md-12">
                                    <div class="alert alert-danger alert-dismissible mb-0 fade show" role="alert">
                                    
                                        <strong> Login Failed .</strong> Wrong password entered .
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
        if (isset($_GET['email']) && $_GET['email']=="notexist"){
            echo '    <div class="container-fluid m-0 p-0 w-100">
                            <div class="row row-cols-1 row-cols-md-12 p-0">
                                <div class="col-xs-1 col-md-12">
                                    <div class="alert alert-danger alert-dismissible mb-0 fade show" role="alert">
                                    
                                        <strong> Login Failed .</strong> Make sure the email is registered.
                                        <button type="button" class="close alrtdes" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>';
        }
    ?>



    <div class="container-fluid vw-100 part1">
        <section class="container vw-50 log">
            <form action="/logindata" method="post">
                <div class="row row-cols-1 row-cols-md-3 d-flex justify-content-center">
                    <div class="col mt-5">
                        
                        <input type="email" class="form-control formdes" id="mail" aria-describedby="emailHelp" name="emailval" autocomplete="off" autofill="off">
                        <div id="emailHelp" class="form-text textdes"><small>EMAIL :</small></div>

                    </div>


                </div>
                <div class="row row-cols-1 row-cols-md-3 d-flex justify-content-center ">
                    <div class="col  ">
                    
                        <input type="password" class="form-control formdes " id="pass" aria-describedby="emailHelp" name="passval" autocomplete="off" autofill="off">
                        <div id="passHelp" class="form-text textdes "><small>PASSWORD :</small></div>

                    </div>

                </div>
                <div class="row row-cols-1 row-cols-md-3 d-flex justify-content-center mt-5">
                    <div class="col d-flex justify-content-center ">
                    
                        <button type="submit" class="btn btn-primary">Submit</button>
                      
                    </div>

                </div>


            </form>
        </section>

    </div>

    <div class="container-fluid vw-100 part2">
        <div class="d-flex justify-content-center part2">
            <small><p>copyright law &copy; 2023 @samin arnob </p></small>
        </div>

    </div>


    





    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <script src="../../public/js/landing.js"></script>
    

</body>
</html>