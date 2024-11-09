<?php

$connect = mysqli_connect("localhost","root","","employee_managment");

if(isset($_POST['submit']))
{
    $id = $_POST['id'];
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

    move_uploaded_file($_FILES['photo']['tmp_name'],"../images/".$photo);
   
    $update = mysqli_query($connect,"update admin set emp_id = '$emp_id',username = '$username',password='$password',firstname = '$firstname',lastname='$lastname',department_id='$department_id',email='$email',phone='$phone',birthdate='$birthdate',joiningdate='$joiningdate',photo ='$photo',address='$address' where id = '$id'");
    session_start();
    $_SESSION['message'] = "Employee updated successfully";
    header('location: index.php');

}
?>