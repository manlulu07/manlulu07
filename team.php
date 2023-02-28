<?php
    include('header.php');
?>
  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.php"><h2>Car Dealer Website<em>.</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="index.php">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li> 
              <li class="nav-item">
                <a class="nav-link" href="cars.html">Cars</a>
              </li>

              <li class="nav-item dropdown">
                  <a class="nav-link" href="about.php" role="button">About</a>
                  
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.html">Contact Us</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="heading-page header-text">
      <section class="page-heading">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="text-content">
                <h4>Team</h4>
                <h2>our awesome members!</h2>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    
    <!-- Banner Ends Here -->


    <section class="blog-posts grid-system">
      <div class="container">
        <div class="all-blog-posts">
          <div class="row">
            <div class="col-md-3 col-sm-4">
              <div class="blog-post">
                <div class="blog-thumb">
                  <img src="assets/images/team-image-1-646x680.jpg" alt="">
                </div>
                <div class="down-content">
                  <span>CEO</span>
                  <h4>John Doe</h4>
                  <ul class="post-info">
                    <li><a href="#"><i class="fa fa-facebook"></i></a> &nbsp;</li>
                    <li>&nbsp; <a href="#"><i class="fa fa-twitter"></i></a> &nbsp;</li>
                    <li>&nbsp; <a href="#"><i class="fa fa-linkedin"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>

            <div class="col-md-3 col-sm-4">
              <div class="blog-post">
                <div class="blog-thumb">
                  <img src="assets/images/team-image-2-646x680.jpg" alt="">
                </div>
                <div class="down-content">
                  <span>Support</span>
                  <h4>Jane Smith</h4>
                  <ul class="post-info">
                    <li><a href="#"><i class="fa fa-facebook"></i></a> &nbsp;</li>
                    <li>&nbsp; <a href="#"><i class="fa fa-twitter"></i></a> &nbsp;</li>
                    <li>&nbsp; <a href="#"><i class="fa fa-linkedin"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>

            <div class="col-md-3 col-sm-4">
              <div class="blog-post">
                <div class="blog-thumb">
                  <img src="assets/images/team-image-3-646x680.jpg" alt="">
                </div>
                <div class="down-content">
                  <span>Support</span>
                  <h4>Samanta Green</h4>
                  <ul class="post-info">
                    <li><a href="#"><i class="fa fa-facebook"></i></a> &nbsp;</li>
                    <li>&nbsp; <a href="#"><i class="fa fa-twitter"></i></a> &nbsp;</li>
                    <li>&nbsp; <a href="#"><i class="fa fa-linkedin"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>

            <div class="col-md-3 col-sm-4">
              <div class="blog-post">
                <div class="blog-thumb">
                  <img src="assets/images/team-image-4-646x680.jpg" alt="">
                </div>
                <div class="down-content">
                  <span>Support</span>
                  <h4>Mark Dawn</h4>
                  <ul class="post-info">
                    <li><a href="#"><i class="fa fa-facebook"></i></a> &nbsp;</li>
                    <li>&nbsp; <a href="#"><i class="fa fa-twitter"></i></a> &nbsp;</li>
                    <li>&nbsp; <a href="#"><i class="fa fa-linkedin"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <ul class="social-icons">
              <li><a href="#">Facebook</a></li>
              <li><a href="#">Twitter</a></li>
              <li><a href="#">Behance</a></li>
              <li><a href="#">Linkedin</a></li>
            </ul>
          </div>
          <div class="col-lg-12">
            <div class="copyright-text">
              <p>
                Copyright © 2020 Company Name
                | Template by: <a href="https://www.phpjabbers.com/">PHPJabbers.com</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </footer>
<?php include('footer.php')