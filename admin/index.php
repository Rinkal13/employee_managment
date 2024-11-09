<?php include("header.php"); ?>
<html>
    <head>
        <title>Admin Data</title>
        
    </head>
<body>
<br>       
<table border="1">
    <tr>
        <th>NO</th>
        <th>Employee ID</th>
        <th>Username</th>
        <th>Password</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Department Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Birthdate</th>
        <th>Date of Joining</th>
        <th>Photo</th>
        <th>Address</th>
        <th>Action</th>
    </tr>
<?php
        
        
        if (!isset($_SESSION['username'])) {
            header('Location: ../index.php');
            exit();
        }
    
        $connect = mysqli_connect("localhost","root","","employee_managment");
        
        if (isset($_SESSION['message'])) {
            echo $_SESSION['message'];
            unset($_SESSION['message']);
            echo '<meta http-equiv="refresh" content="2">';
        }

        if (isset($_POST['submit'])) {
            $emp_id = $_POST['emp_id'];
            $username = $_POST['username'];
            $password = $_POST['password'];
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $department_name = $_POST['department_name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $birthdate = $_POST['birthdate'];
            $joiningdate = $_POST['joiningdate'];
            $photo = $_POST['photo'];
            $address = $_POST['address'];
            
        }
        $query = mysqli_query($connect, "SELECT admin.*, department.department_name FROM admin JOIN department ON admin.department_id = department.department_id");
        $count = 1;
        while ($row = mysqli_fetch_assoc($query)) {
            echo "<tr>";
            echo "<td>" . $count . "</td>";
            echo "<td>" . $row['emp_id'] . "</td>";
            echo "<td>" . $row['username'] . "</td>";
            echo "<td>" . $row['password'] . "</td>";
            echo "<td>" . $row['firstname'] . "</td>";
            echo "<td>" . $row['lastname'] . "</td>";
            echo "<td>" . $row['department_name'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['phone'] . "</td>";
            echo "<td>" . $row['birthdate'] . "</td>";
            echo "<td>" . $row['joiningdate'] . "</td>";
            echo "<td><img src='../images/".$row['photo']."' height=100 width=100></td>";
            echo "<td>" . $row['address'] . "</td>";
            echo "<td><a href='edit_employee.php?id=" . $row['id']. "'>Edit</a>||<a href='delete_employee.php?id=" . $row['id']. "'>delete</a></td>";
            echo "</tr>";
            $count++;
        }

        echo "</table>";

?>

</body>
</html>