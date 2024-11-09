<?php

$connect = mysqli_connect("localhost","root","","employee_managment");

session_start();

$username = $_SESSION['username']; 

if (isset($_GET['id'])) {
    $id = $_GET['id'];
}
if(isset($_POST['submit']))
{
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    
    $update = mysqli_query($connect,"update users set firstname = '$firstname',lastname='$lastname',email='$email',username='$username' where id = '$id'");

    session_start();
    $_SESSION['message'] = "updated successfully";
    header('location: view.php');
}
?>