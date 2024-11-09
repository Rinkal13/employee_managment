<?php

    $connect = mysqli_connect("localhost","root","","employee_managment");

    $id = $_GET['id'];

    $record = mysqli_query($connect, "select username from users WHERE id = '$id'");
    $row = mysqli_fetch_assoc($record);
    $username = $row['username'];

    $deleteAdminQuery = "delete from admin where username = '$username'";
    mysqli_query($connect, $deleteAdminQuery);

    session_start();
    $_SESSION['message']="User Delete Succesfully....";
    header("Location: user_display.php");

?>