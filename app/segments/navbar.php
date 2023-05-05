<?php 
echo'<nav class="navbar navbar-expand-lg bgdes">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Office Logo</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item padclass ">
                        <a id="act1" class="nav-link active" aria-current="page" href="https://localhost">Home</a>
                    </li>
                    <li class="nav-item padclass">
                        <a id="act2" class="nav-link" href="#">Projects</a>
                    </li>

                    <li class="nav-item padclass">
                        <a id="act3" class="nav-link" href="#">About Us</a>
                    </li>
                    
                    <li class="nav-item padclass">
                        <a id="act4" class="nav-link" href="#">Contact</a>
                    </li>';
                    
                    if (isset($_SESSION['id']) && !empty($_SESSION['id'])){
                        echo '<li class="nav-item padclass2">
                                    <a id="act5" class="nav-link" href="/logout">Logout</a>
                                </li>';
                    }
                

                    if (!isset($_SESSION['id'])){
                        echo '  <li class="nav-item padclass3">
                                    <a id="act6" class="nav-link" href="/log">Login</a>
                                </li>

                                <li class="nav-item padclass4">
                                    <a id="act7" class="nav-link" href="/reg">Registration</a>
                                </li>';

                    }


        echo    '</ul>

            </div>
        </div>
    </nav>';

?>    