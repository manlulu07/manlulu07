<?php
    include('header.php');
    require_once 'functions.php';
?>
  <body>
               
                    <!-- Header -->
                    <header class="header">
                    <nav class="navbar navbar-expand-lg">
                         <div class="container">
                         <a class="navbar-brand d-flex" href="index.php"><h2>Luther Car Dealership<em>.</em></h2></a>
                         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                         <span class="navbar-toggler-icon"></span>
                        </button>
                         <div class="collapse navbar-collapse" id="navbarResponsive">
                         <ul class="navbar-nav ml-auto">
                              <li class="nav-item active">
                              <a class="nav-link" href="index.php"><i class="bi bi-house"></i> Home
                                   <span class="sr-only">(current)</span>
                              </a>
                              </li> 
                              <li class="nav-item">
                              <a class="nav-link" href="cars.php"><i class="bi bi-car-front"></i> Cars</a>
                              </li>
                              <li class="nav-item ">
                                   <a class="nav-link"  href="about.php"><i class="bi bi-blockquote-right"></i> About</a>
                                   
                              </li>
                              <li class="nav-item">
                              <a class="nav-link" href="contact.php"><i class="bi bi-inbox"></i> Contact Us</a>
                              </li>
                              <li class="nav-item">
                              <a class="nav-link" href="login.php"><i class="bi bi-gear-fill"> </i>Admin Dashboard</a>
                              </li>

                         </ul>
                         </div>
                         </div>
                    </nav>
                    </header>
                    <hr>
                    <br>
                    <br>
                    <br>
                    <br>





          <div class="container">
            <div class="row">

            <?php get_all_data();?>
            </div>
          </div>
          
<?php include('footer.php'); ?>