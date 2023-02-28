<?php
    include('header.php');
    require_once ('functions.php');
    //require_once ('upload.php');

?>
                
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


<div class="container">
    <div class="row">
        <div class="col pt-5">
            <h2>Enter Car Details</h2>
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="brand">Brand</label>
                        <input type="text" name="brand" class="form-control" id="brand" placeholder="brand">
                    </div>
                    <div class="form-group">
                        <label for="mileage">Mileage</label>
                        <input type="text" name="mileage" class="form-control" id="mileage" placeholder="Mileage">
                    </div>
                    <div class="form-group">
                        <label for="power">Power</label>
                        <input type="text" name="power" class="form-control" id="power" placeholder="Power">
                    </div>
                    <div class="form-group">
                        <label for="transmition">Transmition</label>
                        <input type="text" name="transmition" class="form-control" id="transmition" placeholder="Transmition">
                    </div>
                    <div class="form-group">
                        <label for="amount">Amount</label>
                        <input name="amount" class="form-control" id="amount" placeholder="Amount">
                    </div>
                    <div class="form-group">
                        <label for="images">Images</label>
                        <input name="images" type="file" class="form-control" id="images" placeholder="Image" value="Upload">
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    </div>

                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </form>
                <hr>
                <?php get_all_edit_data() ?>
        </div>
    </div>

</div>
<?php include ('footer.php'); ?>