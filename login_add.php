<?php
        session_start();

        $connect = mysqli_connect("localhost","root","","employee_managment");

        if (isset($_POST['username']) && isset($_POST['password'])) 
        {
            $username = $_POST['username'];
            $password = $_POST['password'];

            $query = mysqli_query($connect,"SELECT * FROM users WHERE username = '$username' AND password = '$password'");

            $row = mysqli_fetch_assoc($query);
                
            if ($row) 
            {
                $_SESSION['username'] = $row['username'];
                $_SESSION['password'] = $row['password'];
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
                    header('Location: user/index.php');
                }
                    
            } 
            else 
            {  
                $_SESSION['message'] = 'Invalid username or password';
                header('Location: index.php');
            }
                
        }

?>
		