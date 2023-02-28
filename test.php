<?php
    require_once 'functions.php';
    include('header.php');
?>

<div class="container">
  <div class="row">
  <?php get_all_data();?>
  </div>
</div>


<?php include('footer.php'); ?>

<h4 class="">Brand: <a class="text-secondary" href="single.php?id='. $row['id'].'">'.$row['brand'].'</a></h4>
                              <h6 class=""><a class="text-secondary" href="single.php?id='. $row['id'].'">'.$row['mileage'].'</a></h6>
                              <h6 class=""><a class="text-secondary" href="single.php?id='. $row['id'].'">'.$row['power'].'</a></h6>
                              <h6 class=""><a class="text-secondary" href="single.php?id='. $row['id'].'">'.$row['transmition'].'</a></h6>
                              <h6 class=""><a class="text-secondary" href="single.php?id='. $row['id'].'">'.$row['amount'].'</a></h6>


                              <a href="single.php?id='.$row['id'].'" class="btn btn-sm btn-outline-primary" role="button" aria-pressed="true">View</a>
                                <a href="update.php?id='.$row['id'].'" class="btn btn-sm btn-outline-secondary" role="button" aria-pressed="true>Edit</a>"

                                


                                