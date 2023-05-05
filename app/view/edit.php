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
    <link rel="stylesheet" href="../../public/css/edit.css">

    <title>Slim Framework</title>
</head>
<body>
    <!--NAVBAR-->
    <?php include '../app/segments/navbar.php';?>
    <!--NAVBAR-->

    <div class="container-fluid vw-100 m-0 p-0 part1 ">
        <section class="container w-50 text-light pad  ">
            <form action="/editform" method="post" >

                <div class="row row-cols-1 row-cols-md-2 g-3">

                    <div id="fnam" class="col">
                        <label for="fname">First Name:</label>
                        <input type="text" class="form-control " id="fname" name="frname" autocomplete="off" placeholder="<?php echo $frname; ?>">
                    </div>
                    <div id="lnam" class="col">
                        <label for="lname">Last Name:</label>
                        <input type="text" class="form-control " id="lname" name="lsname" autocomplete="off" placeholder="<?php echo $laname; ?>">
                    </div>

                </div>

                <div class="row row-cols-1 row-cols-md-2 g-3">

                    <div id="mal" class="col">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control " id="email" name="mail" autocomplete="off" placeholder="<?php echo $emal; ?>">
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
    
    <div class="container-fluid vw-100 m-0 p-0 part2 ">
    <div class="d-flex justify-content-center cop">
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
    <script src="../../public/js/edit.js"></script>
</body>
</html>