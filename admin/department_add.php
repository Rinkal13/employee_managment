<?php

$connect = mysqli_connect("localhost","root","","employee_managment");

if(isset($_POST['submit']))
{
    $department_name= $_POST['department_name'];
    $insert = mysqli_query($connect,"insert into department values ('','$department_name')");
    session_start();
    $_SESSION['message']="Add Department Succesfully....";
    header("Location: index.php");
}
?>