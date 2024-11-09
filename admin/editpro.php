<?php

$connect = mysqli_connect("localhost", "root", "", "employee_managment");

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $type = $_POST['type'];

    $status = ($type == 'Admin') ? 'Approved' : 'Pending';

    $update = mysqli_query($connect, "UPDATE users SET firstname='$firstname', lastname='$lastname', email='$email', username='$username', password='$password', type='$type', status='$status' WHERE id='$id'");
    session_start();
    $_SESSION['message'] = "Employee updated successfully";
    header('location: user_display.php');
}
?>
