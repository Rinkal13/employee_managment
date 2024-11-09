<?php
session_start();
if (isset($_SESSION['username'])) {
    echo "Welcome, " . $_SESSION['username'] . "";

} 
?>
<html>
    <head>
        <title>Admin Managment</title>
        <style>
            a{
                padding: 20px;
                margin-left: 150px;
            }
        </style>
    </head>
    <body>
        <h1 align="center">Admin Managment</h1>
        <table>
            <tr>
                
                <a href="adddepartment.php">Add Department</a>
                <a href="addemployees.php">Add Employees</a>
                <a href="index.php">All Employee</a>
                <a href="user_display.php">All Users</a>
                <a href="logout.php">Logout</a><br>
                
            </tr>
        <table>
    </body>
</html>