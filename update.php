<?php
require_once ('functions.php');
include ('header.php');
$row = update_get();
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


<div class="container">
<div class="col pt-5">

    <h2>Update Data</h2>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>?id=<?php echo $row['id'];?> " method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="update_brand">Brand</label>
                        <input type="text" name="update_brand" class="form-control" id="brand" placeholder="brand" value="<?php echo $row['brand']?>" required>
                    </div>
                    <div class="form-group">
                        <label for="update_mileage">Mileage</label>
                        <input type="text" name="update_mileage" class="form-control" id="mileage" placeholder="Mileage" value="<?php echo $row['mileage']?>" required>
                    </div>
                    <div class="form-group">
                        <label for="update_power">Power</label>
                        <input type="text" name="update_power" class="form-control" id="power" placeholder="Power" value="<?php echo $row['power']?>" required>
                    </div>
                    <div class="form-group">
                        <label for="update_transmition">Transmition</label>
                        <input type="text" name="update_transmition" class="form-control" id="transmition" placeholder="Transmition" value="<?php echo $row['transmition']?>" required>
                    </div>
                    <div class="form-group">
                        <label for="update_amount">Amount</label>
                        <input name="update_amount" class="form-control" id="amount" placeholder="Amount" value="<?php echo $row['amount']?>" required>
                    </div>
                    <div class="form-group">
                        <label for="update_images">Images</label>
                        <input name="update_images" type="file" class="form-control" id="update_images" placeholder="Image" value="<?php echo $row['images']?>" required>
                        <button type="submit" name="edit_submit" class="btn btn-primary">Update</button>
                    </div>

                    <button type="submit" name="edit_submit" class="btn btn-primary">Update</button>
                </form>



</div>

</div>


<?php include ('footer.php');?>
