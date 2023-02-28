<?php
    include ('header.php');
    require_once 'functions.php';
 ?>

<body>

               <!-- Header -->
               <header class="header">
               <nav class="navbar navbar-expand-lg">
                    <div class="container">
                    <a class="navbar-brand" href="index.php"><h2>Luther Car Dealership<em>.</em></h2></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                   </button>
                    <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                  <a class="nav-link" href="admin.php"><i class="bi bi-gear-fill"></i></i> Dashboard</a>
                  </li>

                  <li class="nav-item">
                  <a class="nav-link" href="logout.php?logout"><i class="bi bi-box-arrow-left"></i> Logout</a>
                  </li>

                    </ul>
                    </div>
                    </div>
               </nav>
               </header>
               <div class="spacer" style="width: 100%; height: 100px;"></div>


        </div>


            <?php
                session_start();

                if(isset($_SESSION['user']))
                {
                    echo '';
                }
                else
                {
                    header("location:login.php");
                }

            ?>
            <div class="container">
            <div class="row">
            <?php get_admin_data();?>
            </div>
            </div>

<?php include ('footer.php');?>
