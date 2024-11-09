<?php
 
    $connect = mysqli_connect("localhost","root","","employee_managment");

    if (isset($_SESSION['username'])) {
        echo "Welcome, " . $_SESSION['username'] . "";
    }
    
    if(isset($_POST['submit']))
    {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $type = $_POST['type'];

        if (isset($_POST['status'])) {
            $status = $_POST['status'];
        } else {
            $status = ($type == 'Admin') ? 'Approved' : 'Pending';
        }

        $query = mysqli_query($connect,"insert into users values('','$firstname','$lastname','$email','$username','$password','$type','$status')");
        
        if (isset($_POST['username']) && isset($_POST['password'])) 
        {   

            $query = mysqli_query($connect,"SELECT * FROM users WHERE type='$type'");

            $row = mysqli_fetch_assoc($query);
                    
            if ($row) 
            {
                $_SESSION['type'] = $row['type'];

                if ($row['type'] == 'Admin') 
                {
                    header('Location: admin/index.php');
                } 
                else if ($row['type'] == 'Employee') 
                {
                    header('Location: employee/index.php');
                }
                else if ($row['type'] == 'User') 
                {
                    header('Location: user/view.php');
                }
                     
            } 
            else 
            {  
                $_SESSION['message'] = 'Please Try Again...';
                header('Location: index.php');
            }
        }
    }
?>