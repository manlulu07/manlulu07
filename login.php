<?php
    include ('header.php');
?>
                    <header class="header">
                    <nav class="navbar navbar-expand-lg">
                         <div class="container">
                         <a class="navbar-brand" href="index.php"><h2>Luther Car Dealership<em>.</em></h2></a>
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


<div class="spacer" style="width: 100%; height: 100px;"></div>

<section class="vh-100" style="background-color: rgb(238, 238, 238);">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-3 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">
          <h3 class="mb-5">Log in</h3>
                <?php
                if(@$_GET['empty']==true)
                {
                ?>
                <div class="alert-light text-danger my-3"><?php echo $_GET['empty'] ?></div>
                <?php
                }
                ?>
                <?php
                if(@$_GET['invalid']==true)
                {
                ?>
                <div class="alert-light text-danger my-3"><?php echo $_GET['invalid'] ?></div>
                <?php
                }
                ?>

                


            <form action="process.php" method="post">
            <div class="form-outline mb-4">
              <input type="text" id="username" class="form-control form-control-lg" name="username" placeholder="Username" />
            </div>

            <div class="form-outline mb-4">
              <input type="password" id="password" class="form-control form-control-lg" name="password" placeholder="Password" />
            </div>


            <button class="btn btn-primary btn-lg btn-block" type="login" name="login"><i class="bi bi-box-arrow-right"></i> Login</button>
            </form>
            <hr class="my-4">


          </div>
        </div>
      </div>
    </div>
  </div>
</section>
               
<?php
    include ('footer.php');
?>

