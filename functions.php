<?php
require_once 'db_connection.php';

if(isset($_POST['brand']) && isset($_POST['mileage']) && isset($_POST['power']) && isset($_POST['transmition']) && isset($_POST['amount']) && isset($_POST['submit'])){

  // check title and content empty or not
  if(!empty($_POST['brand']) && !empty($_POST['mileage']) && !empty($_POST['power']) && !empty($_POST['transmition']) && !empty($_POST['amount'])){

      // Escape special characters.
      $brand = mysqli_real_escape_string($conn, htmlspecialchars($_POST['brand']));
      $mileage = mysqli_real_escape_string($conn, htmlspecialchars($_POST['mileage']));  
      $power = mysqli_real_escape_string($conn, htmlspecialchars($_POST['power'])); 
      $transmition = mysqli_real_escape_string($conn, htmlspecialchars($_POST['transmition']));
      $amount = mysqli_real_escape_string($conn, htmlspecialchars($_POST['amount']));  
      $image = $_FILES['images'];

      print_r ($image);
      echo "<br>";
      $image_file_name = $image['name'];
      print_r($image_file_name);
      echo "<br>";
  
      $image_error = $image['error'];
      print_r($image_error);
      echo "<br>";
  
      $image_tmp = $image['tmp_name'];
      print_r ($image_tmp);
      echo "<br>";
  
      $filename_seperate = explode('.',$image_file_name);
      print_r($filename_seperate);
      echo "<br>";
  
      $file_extension = strtolower($filename_seperate[1]);
      print_r($file_extension);
  
      $extension = array('jpeg','jpg','png');
      if(in_array($file_extension, $extension)){
          $upload_image = 'assets/images/'.$image_file_name;
          move_uploaded_file($image_tmp, $upload_image);

          // Insert data into database
      $insert_query = mysqli_query($conn,"INSERT INTO posts(brand,mileage,power,transmition,amount,images) VALUES('$brand','$mileage','$power','$transmition','$amount','$upload_image')");

          //Now check if data has been inserted
          if($insert_query){
              echo "<script>alert('Data inserted');window.location.href = 'insert.php';</script>";
              exit(0);
          }else{
              echo "<h3>Data was not inserted!</h3>";
          }
      
        }
  }else{
      echo "<h4>Please fill all fields</h4>";
  }

}  

if(isset($_POST['update_brand']) && isset($_POST['update_mileage']) && isset($_POST['update_power']) && isset($_POST['update_transmition']) && isset($_POST['update_amount'])){

    if(!empty($_POST['update_brand']) && !empty($_POST['update_mileage']) && !empty($_POST['update_power']) && !empty($_POST['update_transmition']) && !empty($_POST['update_amount'])){

      $brand = mysqli_real_escape_string($conn, htmlspecialchars($_POST['update_brand']));
      $mileage = mysqli_real_escape_string($conn, htmlspecialchars($_POST['update_mileage']));  
      $power = mysqli_real_escape_string($conn, htmlspecialchars($_POST['update_power'])); 
      $transmition = mysqli_real_escape_string($conn, htmlspecialchars($_POST['update_transmition']));
      $amount = mysqli_real_escape_string($conn, htmlspecialchars($_POST['update_amount']));  

      $id = $_GET['id'];

      $image = $_FILES['update_images'];

      print_r ($image);
      echo "<br>";
      $image_file_name = $image['name'];
      print_r($image_file_name);
      echo "<br>";
  
      $image_error = $image['error'];
      print_r($image_error);
      echo "<br>";
  
      $image_tmp = $image['tmp_name'];
      print_r ($image_tmp);
      echo "<br>";
  
      $filename_seperate = explode('.',$image_file_name);
      print_r($filename_seperate);
      echo "<br>";
  
      $file_extension = strtolower($filename_seperate[1]);
      print_r($file_extension);
  
      $extension = array('jpeg','jpg','png');
      if(in_array($file_extension, $extension)){
          $upload_image = 'assets/images/'.$image_file_name;
          move_uploaded_file($image_tmp, $upload_image);

  
 

      $update_query = mysqli_query($conn,"UPDATE posts SET brand='$brand',mileage='$mileage',power='$power',transmition='$transmition',amount='$amount',images='$upload_image' WHERE id=$id");

      if($update_query){
        echo "<script>alert('Post Updated');window.location.href = 'admin.php';</script>";
        exit;
    }else{
        echo "<h3>Data was not updated!</h3>";

        }
    }
    }else{
        echo "<h4>Please fill all fields</h4>";
    }
}



function get_all_data(){
     global $conn;  
     $result = mysqli_query($conn, "SELECT * FROM posts");

     if(mysqli_num_rows($result) > 0){
      echo '<div class="col-12 pt-5"><h1> All Cars For Sale </H1></div> <br><br>';
      

          while($row = mysqli_fetch_assoc($result)){
          echo' 
          

  

          <div class="col-md-4">
          <div class="card mb-4 box-shadow">
            <img class="card-img-top" src="'.$row['images'].'" alt="add image">
            <div class="card-body">
                <h4 class="">Brand: <a class="text-secondary" href="single.php?id='.$row['id'].'">'.$row['brand'].'</a></h4>
                <hr>
                <h6 class="">Mileage: <a class="text-secondary" href="single.php?id='. $row['id'].'">'.$row['mileage'].'</a> km</h6>
                <hr>

                <h6 class="">Power: <a class="text-secondary" href="single.php?id='. $row['id'].'">'.$row['power'].'</a> cc</h6>
                <hr>

                <h6 class="">Transmition: <a class="text-secondary" href="single.php?id='. $row['id'].'">'.$row['transmition'].'</a></h6>
                <hr>

                <h6 class="">Amount: $<a class="text-secondary" href="single.php?id='. $row['id'].'">'.$row['amount'].'</a></h6>
                <hr>


                <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <a href="single.php?id='.$row['id'].'" class="btn btn-sm btn-outline-primary" role="button" aria-pressed="true">View</a> |

                <a href="buy.php" type="button" class="btn btn-outline-success" role="button" aria-pressed="true"> Buy </a>

                </div>
              </div>
            </div>
          </div>
        </div>   
         

               
              ';
          }

     }else "<h3>Database not working</h3>";
     die;
}

function get_admin_data()
{
  global $conn;  
  $result = mysqli_query($conn, "SELECT * FROM posts");

  if(mysqli_num_rows($result) > 0){
   echo '<div class="col-12 pt-5"><h1>All Cars <a href="insert.php"><button class="btn btn-warning" style="margin-bottom: 20px;"><i class="fa fa-plus" aria-hidden="true"></i> Add new Car</button></a></H1></div>';

       while($row = mysqli_fetch_assoc($result)){
       echo' 
       



       <div class="container-fluid">
       <table class="table-responsive table-bordered"">
           <thead>
               <tr>
               
                   <th>ID</th>
                   <th class="col-sm-4">Brand</th>
                   <th class="col-sm-3">Mileage</th>
                   <th class="col-sm-3">Power</th>
                   <th class="col-sm-3">Transmition</th>
                   <th class="col-sm-3">Amount</th>
                   <th class="col-sm-3">Image</th>
                   <th class="col-sm-2">View</th>
                   <th class="col-sm-2">Edit</th>
                   <th class="col-sm-2">Delete</th>

               </tr>
           </thead>
           <tbody>
           <tr>
           <td><h4 class=""><a class="text-secondary" >'.$row['id'].'</a></h4></td>
           <td><h4 class=""><a class="text-secondary" href="single.php?id='.$row['id'].'">'.$row['brand'].'</a></h4></td>
           <td><h6 class=""><a class="text-secondary" >'.$row['mileage'].'</a></h6></td>
           <td><h6 class=""><a class="text-secondary" >'.$row['power'].'</a></h6></td>
           <td><h6 class=""><a class="text-secondary" >'.$row['transmition'].'</a></h6></td>
           <td><h6 class=""><a class="text-secondary" >'.$row['amount'].'</a></h6></td>
           <td><h6 class=""><a class="text-secondary" href="single.php?id='. $row['id'].'"><img src="'.$row['images'].'" width="150" height="150"/></a></h6></td>
           <td><a href="single.php?id='.$row['id'].'" class="btn btn-sm btn-outline-success" role="button" aria-pressed="true">View</a></td>
           <td><a href="update.php?id='.$row['id'].'" class="btn btn-sm btn-outline-warning" role="button" aria-pressed="true">Edit</a></td>
           <td><a href="delete.php?id='.$row['id'].'" class="btn btn-sm btn-danger" role="button" aria-pressed="true">Delete</a></td> ';


           echo '



           </tr>
           </tbody>
       </table>
   </div>
     

            
           ';
       }

  }else "<h3>Database not working</h3>";
  die;


}

function update_get()
{

    if(isset($_GET['id']) && is_numeric($_GET['id'])){

        global $conn;
        $id = $_GET['id'];
        $get_id = mysqli_query($conn, "SELECT * FROM posts WHERE id='$id'");

            if(mysqli_num_rows($get_id) === 1){
                $row = mysqli_fetch_assoc($get_id);
                return($row);
            }
    }

}

function delete()
{
    global $conn;
    if(isset($_GET['id']) && is_numeric($_GET['id'])){

        $user_id =$_GET['id'];
        $delete_user = mysqli_query($conn, "DELETE FROM posts WHERE id='$user_id'");
        if($delete_user){
            echo "<script>alert('Car Deleted');window.location.href = 'admin.php';</script>";
            exit;
        }else{
            echo "<h3>Data was not Deleted!</h3>";
    
            }
    
    }
}

function get_all_edit_data()
{

    global $conn;
    $get_data = mysqli_query($conn, "SELECT * FROM posts");
    if(mysqli_num_rows($get_data) > 0)
    {
        echo '
                <table class="table table-striped">
                <tr>
                    <th><h2>Edit Data</h2></th>
                </tr>';
                while($row = mysqli_fetch_assoc($get_data)){

                    echo '
                        <tr>
                        <td>'.$row['brand'].'</td>

                        <td>
                        <a href="update.php?id='.$row['id'].'">Edit</a> |  <a href="delete.php?id='.$row['id'].'">Delete</a> 
                        </td>
                        </tr>

                    
                    ';



                }
                echo '</table>';
            }else
            {
                echo '<h3> Please more cars</h3>';
            }
        
        
}


function single_page(){
    global $row;
 echo '
 
 
  <img class="card-img-top" src="'.$row['images'].'" alt="Card image cap">

 
 ';

}










?>

