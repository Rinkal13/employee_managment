<?php

$connect = mysqli_connect("localhost","root","","employee_managment");

if(isset($_POST['submit']))
{
    $emp_id = $_POST['emp_id'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $department_id = $_POST['department_id'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $birthdate = $_POST['birthdate'];
    $joiningdate = $_POST['joiningdate'];
    $photo = $_FILES['photo']['name'];
    $address = $_POST['address'];

    move_uploaded_file($_FILES['photo']['tmp_name'], "../images/" . $photo);

    $insert = mysqli_query($connect,"INSERT INTO admin (emp_id, username, password, firstname, lastname, department_id, email, phone, birthdate, joiningdate, photo, address)VALUES ('$emp_id','$username','$password' ,'$firstname', '$lastname', '$department_id', '$email', '$phone', '$birthdate', '$joiningdate', '$photo', '$address')");

    session_start();
    $_SESSION['message']="Employee Add Succesfully....";
    header("Location: index.php");

    // $id = $_GET['id'];

    // $query = mysqli_query($connect, "SELECT * FROM users WHERE id = '$id'");
    // $row = mysqli_fetch_assoc($query);


    // if(isset($_POST['submit']))
    // {
    //     $status = $_POST['status'];
    //     $type = $_POST['type'];
    // }
    // $update = "update users SET status = 'pending', type='employee' where id = '$id'";
    // $row2 = mysqli_query($connect, $update);

}

?>
