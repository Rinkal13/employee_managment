<?php

    $connect = mysqli_connect("localhost","root","","employee_managment");

    $id = $_GET['id'];

    $query = mysqli_query($connect,"delete from admin where id = '$id '");
    session_start();
    $_SESSION['message']="Employee Delete....";
    header("Location: index.php");
    
?>