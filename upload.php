<?php
    include('header.php');
    require_once 'functions.php';


if(isset($_POST['submit'])){

    $image = $_FILES['file'];

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
        $sql = "INSERT INTO posts (images) VALUES ('$upload_image')";
        $result = mysqli_query($conn, $sql);

        if($result)
        {
            echo '
            <div class="alert alert-success" role="alert">
            <strong>Success</strong> Image inserted succesfully
            </div>
            
            ';
        }else{
            die(mysqli_error($conn));
        }
    }
}




?>
