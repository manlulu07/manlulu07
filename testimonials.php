<?php
    include('header.php');
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

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="heading-page header-text">
      <section class="page-heading">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="text-content">
                <h4>Testimonials</h4>
                <h2>Read what people say about us!</h2>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    
    <!-- Banner Ends Here -->


    <div class="blog-posts">
      <div class="container">
        <div class="sidebar-item comments">
          <div class="content">
            <ul>
              <li>
                <div class="author-thumb">
                  <img src="assets/images/comment-author-01.jpg" alt="">
                </div>
                <div class="right-content">
                  <h4>John Doe<span>10.07.2020</span></h4>
                  <p>Fusce ornare mollis eros. Duis et diam vitae justo fringilla condimentum eu quis leo. Vestibulum id turpis porttitor sapien facilisis scelerisque. Curabitur a nisl eu lacus convallis eleifend posuere id tellus.</p>
                </div>
              </li>
              <li>
                <div class="author-thumb">
                  <img src="assets/images/comment-author-02.jpg" alt="">
                </div>
                <div class="right-content">
                  <h4>Jane Smith<span>10.07.2020</span></h4>
                  <p>Nullam nec pharetra nibh. Cras tortor nulla, faucibus id tincidunt in, ultrices eget ligula. Sed vitae suscipit ligula. Vestibulum id turpis volutpat, lobortis turpis ac, molestie nibh.</p>
                </div>
              </li>
              <li>
                <div class="author-thumb">
                  <img src="assets/images/comment-author-03.jpg" alt="">
                </div>
                <div class="right-content">
                  <h4>Kate Blue<span>10.07.2020</span></h4>
                  <p>Nullam nec pharetra nibh. Cras tortor nulla, faucibus id tincidunt in, ultrices eget ligula. Sed vitae suscipit ligula. Vestibulum id turpis volutpat, lobortis turpis ac, molestie nibh.</p>
                </div>
              </li>

              <li>
                <div class="author-thumb">
                  <img src="assets/images/comment-author-01.jpg" alt="">
                </div>
                <div class="right-content">
                  <h4>John Doe<span>10.07.2020</span></h4>
                  <p>Fusce ornare mollis eros. Duis et diam vitae justo fringilla condimentum eu quis leo. Vestibulum id turpis porttitor sapien facilisis scelerisque. Curabitur a nisl eu lacus convallis eleifend posuere id tellus.</p>
                </div>
              </li>
              <li>
                <div class="author-thumb">
                  <img src="assets/images/comment-author-02.jpg" alt="">
                </div>
                <div class="right-content">
                  <h4>Jane Smith<span>10.07.2020</span></h4>
                  <p>Nullam nec pharetra nibh. Cras tortor nulla, faucibus id tincidunt in, ultrices eget ligula. Sed vitae suscipit ligula. Vestibulum id turpis volutpat, lobortis turpis ac, molestie nibh.</p>
                </div>
              </li>
            </ul>
          </div>
        </div>

        <br>
        <br>
        <div class="row justify-content-md-center">
            <div class="col-md-3">
              <div class="main-button">
                <a href="#">Load More</a>
              </div>
            </div>
          </div>
      </div>
    </div>

    
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
<?php include('footer.php'); ?>