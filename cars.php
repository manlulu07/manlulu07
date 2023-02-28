<?php
require_once 'functions.php';
    include('header.php');
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


    <div class="heading-page header-text">
      <section class="page-heading">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="text-content">
                <h4>Cars</h4>
                <h2>Choose from our cars!</h2>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    

    


    <section class="blog-posts grid-system">
      <div class="container">
        <section class="contact-us">
          <div class="contact-form">
            <form action="#">
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label>Used/New:</label>
                 
                             <select>
                                  <option value="">All</option>
                                  <option value="new">New vehicle</option>
                                  <option value="used">Used vehicle</option>
                             </select>
                        </div>
                    </div>
            
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label>Vehicle Type:</label>
                 
                             <select>
                                  <option value="">--All --</option>
                                  <option value="">--All --</option>
                                  <option value="">--All --</option>
                                  <option value="">--All --</option>
                                  <option value="">--All --</option>
                             </select>
                        </div>
                    </div>
            
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label>Make:</label>
                 
                             <select>
                                  <option value="">-- All --</option>
                                  <option value="">-- All --</option>
                                  <option value="">-- All --</option>
                                  <option value="">-- All --</option>
                                  <option value="">-- All --</option>
                                  <option value="">-- All --</option>
                                  <option value="">-- All --</option>
                             </select>
                        </div>
                    </div>
            
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label>Model:</label>
                 
                             <select>
                                  <option value="">-- All --</option>
                                  <option value="">-- All --</option>
                                  <option value="">-- All --</option>
                                  <option value="">-- All --</option>
                             </select>
                        </div>
                    </div>
            
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label>Price:</label>
                 
                             <select>
                                  <option value="">-- All --</option>
                                  <option value="">-- All --</option>
                                  <option value="">-- All --</option>
                                  <option value="">-- All --</option>
                             </select>
                        </div>
                    </div>
            
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label>Mileage:</label>
                 
                             <select>
                                  <option value="">-- All --</option>
                                  <option value="">-- All --</option>
                                  <option value="">-- All --</option>
                                  <option value="">-- All --</option>
                             </select>
                        </div>
                    </div>
            
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label>Engine size:</label>
                 
                             <select>
                                  <option value="">-- All --</option>
                                  <option value="">-- All --</option>
                                  <option value="">-- All --</option>
                                  <option value="">-- All --</option>
                             </select>
                        </div>
                    </div>
            
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label>Power:</label>
                 
                             <select>
                                  <option value="">-- All --</option>
                                  <option value="">-- All --</option>
                                  <option value="">-- All --</option>
                                  <option value="">-- All --</option>
                             </select>
                        </div>
                    </div>
            
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label>Fuel:</label>
                 
                             <select>
                                  <option value="">-- All --</option>
                                  <option value="">-- All --</option>
                                  <option value="">-- All --</option>
                                  <option value="">-- All --</option>
                             </select>
                        </div>
                    </div>
            
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label>Gearbox:</label>
                 
                             <select>
                                  <option value="">-- All --</option>
                                  <option value="">-- All --</option>
                                  <option value="">-- All --</option>
                                  <option value="">-- All --</option>
                             </select>
                        </div>
                    </div>
            
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label>Doors:</label>
                 
                             <select>
                                  <option value="">-- All --</option>
                                  <option value="">-- All --</option>
                                  <option value="">-- All --</option>
                                  <option value="">-- All --</option>
                             </select>
                        </div>
                    </div>
            
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label>Number of seats:</label>
                 
                             <select>
                                  <option value="">-- All --</option>
                                  <option value="">-- All --</option>
                                  <option value="">-- All --</option>
                                  <option value="">-- All --</option>
                             </select>
                        </div>
                    </div>
                </div>
                
                <div class="col-sm-4 offset-sm-4">
                  <div class="main-button">
                      <a href="#">Search</a>
                  </div>
                </div>
                <br>
                <br>
            </form>
          </div>
        </section>
    
    <div class="container">
        <div class="row">
        <?php get_all_data();?>
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