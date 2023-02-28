<?php
require_once 'db_connection.php';
session_start();



if(isset($_POST['submit'])
{
    $brand = mysqli_real_escape_string($conn, htmlspecialchars($_POST['brand']));
    $mileage = mysqli_real_escape_string($conn, htmlspecialchars($_POST['mileage']));  
    $power = mysqli_real_escape_string($conn, htmlspecialchars($_POST['power'])); 
    $transmition = mysqli_real_escape_string($conn, htmlspecialchars($_POST['transmition']));
    $amount = mysqli_real_escape_string($conn, htmlspecialchars($_POST['amount']));  

    $insert_query = mysqli_query($conn,"INSERT INTO posts(brand,mileage,power,transimition,amount) VALUES('$brand','$mileage','$power','$transmition','$amount')");

    if(insert_query)
    {
        $_SESSION['message'] = "Car added successfully";
        header("Location: insert.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Car NOT added";
        header("Location: insert.php");
        exit(0);

    }

}
