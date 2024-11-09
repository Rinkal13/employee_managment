<?php

$connect = mysqli_connect("localhost","root","","employee_managment");

session_start();

$username = $_SESSION['username']; 

if (isset($_GET['username'])) {
    $username = $_GET['username'];
}
if(isset($_POST['submit']))
{
    $emp_id = $_POST['emp_id'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $department_id = $_POST['department_id'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $birthdate = $_POST['birthdate'];
    $joiningdate = $_POST['joiningdate'];
    $photo = $_FILES['photo']['name'];
    $address = $_POST['address'];

    if ($_FILES['photo']['name']) {
        $photo = $_FILES['photo']['name'];
        move_uploaded_file($_FILES['photo']['tmp_name'], "../images/" . $photo);
    } else {
        $photo = $task['photo'];
    }
    
    $update = mysqli_query($connect,"update admin set emp_id = '$emp_id',firstname = '$firstname',lastname='$lastname',department_id='$department_id',email='$email',phone='$phone',birthdate='$birthdate',joiningdate='$joiningdate',photo='$photo',address='$address' where username = '$username'");

    session_start();
    $_SESSION['message'] = "Employee updated successfully";
    header('location: view.php');
}
?>