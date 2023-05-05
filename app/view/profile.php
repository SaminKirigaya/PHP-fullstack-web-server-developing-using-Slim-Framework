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
    <link rel="stylesheet" href="../../public/css/profile.css">


    <title>Slim Framework</title>
</head>
<body>
    <!--Navbar-->
    <?php include '../app/segments/navbar.php';?>
    <!--Navbar-->

    <div class="container-fluid m-0 p-0 part1">
        <section class="container log">
            <div class="row row-cols-1 row-cols-md-1 m-0 p-1">
                <div class="col pt-4 d-flex justify-content-center">
                    <div class="card crdbg" >
                        <div class="row row-cols-1 row-cols-md-3 m-0 p-0 d-flex justify-content-center">
                            <div class="col">
                                <img src="<?php echo $image_data_uri; ?>" class="card-img-top cardimgdes" alt="#">
                            </div>
                        </div>
                        
                        <div class="card-body crdbdtop ">
                            <div class="row row-cols-1 row-cols-md-1 m-0 px-1 d-flex justify-content-center">
                                <div class="col d-flex justify-content-center">
                                    <p class="card-title">Email : <?php echo $emailad; ?> </p>

                                </div>    
                            </div>
                            <div class="row row-cols-1 row-cols-md-1 m-0 px-1 d-flex justify-content-center">
                                <div class="col d-flex justify-content-center">
                                    <p class="card-text">First Name : <?php echo $firstn; ?></p>
                                
                                </div>    
                            </div>
                            <div class="row row-cols-1 row-cols-md-1 m-0 px-1 d-flex justify-content-center">
                                <div class="col d-flex justify-content-center">
                                    <p class="card-text">Last Name : <?php echo $lastn; ?></p>
                                
                                </div>    
                            </div>
                            <div class="row row-cols-1 row-cols-md-1 m-0 px-1 d-flex justify-content-center">
                                <div class="col d-flex justify-content-center">
                                    <p class="card-text">Password : ************* </p><br><br>
                                
                                </div>    
                            </div>



                            <div class="row row-cols-1 row-cols-md-1 m-0 px-1 d-flex justify-content-center">
                                <div class="col d-flex justify-content-center">
                                    <a href="/editid" class="btn btn-primary me-1 ">Edit</a>
                                    <a href="/delid" class="btn btn-primary">Delete</a>

                                </div>

                            </div>
                            
                        </div>
                    </div>
                </div>
                
            </div>

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
    
</body>
</html>