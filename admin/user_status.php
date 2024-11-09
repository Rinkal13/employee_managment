<?php

        $connect = mysqli_connect("localhost", "root", "", "employee_managment");

        $id = $_GET['id'];

        $query = mysqli_query($connect, "SELECT * FROM users WHERE id = '$id'");
        $row = mysqli_fetch_assoc($query);

        if (isset($_POST['submit'])) {
            
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $email = $_POST['email'];
            $username = $_POST['username'];
            $type = $_POST['type'];
            $status = $_POST['status'];
        }

        $update = "update users SET status = 'pending', type='Employee' where id = '$id'";
        $row2 = mysqli_query($connect, $update);


        session_start();
        $_SESSION['message'] = "Employee successfully....";


    
        header("Location: user_display.php");

?>
