<?php
session_start();
if (isset($_SESSION['username'])) {
    echo "Welcome, " . $_SESSION['username'] . "";

} 

?>
<html>
    <head>
        <title>Employee Managment</title>
        <style>
            a{
                padding: 70px;
                margin-left: 190px;
            }
        </style>
    </head>
    <body>
        <h1 align="center">Employee Managment</h1>
        <table>
            <tr>
                <?php 
                $connect = mysqli_connect("localhost","root","","employee_managment");
                
                echo "<a href='view.php'>View Profile</a> ";?>
                <a href="leave.php">Leave Application</a>
                <a href="logout.php">Logout</a><br><br> 
            </tr>
        <table>
    </body>
</html>