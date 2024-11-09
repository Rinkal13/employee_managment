<?php include("header.php"); ?>
<h1>All Employeee</h1>
<br>       
<table border="1">
    <tr>
        <th>NO</th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
        <th>Username</th>
        <th>Password</th>
        <th>Type</th>
        <th>status</th>
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
            echo '<meta http-equiv="refresh" content="1">';
        }

        if (isset($_POST['submit'])) {
        
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $email = $_POST['email'];
            $username = $_POST['username'];
            $type = $_POST['type'];
            $status = $_POST['status'];
        }

        $query = mysqli_query($connect,"select * from users where status='pending' and type='employee'");

        $count = 1;
        while ($row = mysqli_fetch_assoc($query)) 
        {
            echo "<tr>";
            echo "<td>" . $count . "</td>";
            echo "<td>" . $row['firstname'] . "</td>";
            echo "<td>" . $row['lastname'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['username'] . "</td>";
            echo "<td>" . $row['password'] . "</td>";
            echo "<td>" . $row['type'] . "</td>";
            echo "<td>" . $row['status'] . "</td>";
            echo "<td><a href='edit_status.php?id=" . $row['id']. "'>Approved</a></td>";
            echo "</tr>";
            $count++;
        }
        echo "</table>";

?>

<h1>All Admin</h1>
<br>       
<table border="1">
    <tr>
        <th>NO</th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
        <th>Username</th>
        <th>Password</th>
        <th>Type</th>
        <th>status</th>
        <th>Action</th>
    </tr>
<?php

        $connect = mysqli_connect("localhost","root","","employee_managment");
        
        if (isset($_SESSION['message'])) {
            echo $_SESSION['message'];
            unset($_SESSION['message']);
            echo '<meta http-equiv="refresh" content="1">';
        }

        if (isset($_POST['submit'])) {
        
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $email = $_POST['email'];
            $username = $_POST['username'];
            $type = $_POST['type'];
            $status = $_POST['status'];
        }

        $query = mysqli_query($connect,"select * from users where status='Approved'");

        $count = 1;
        while ($row = mysqli_fetch_assoc($query)) 
        {
            echo "<tr>";
            echo "<td>" . $count . "</td>";
            echo "<td>" . $row['firstname'] . "</td>";
            echo "<td>" . $row['lastname'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['username'] . "</td>";
            echo "<td>" . $row['password'] . "</td>";
            echo "<td>" . $row['type'] . "</td>";
            echo "<td>" . $row['status'] . "</td>";
            echo "<td><a href='edit_user.php?id=" . $row['id']. "'>Edit</a> || <a href='delete_user.php?id=" . $row['id']. "'>delete</a></td>";
            echo "</tr>";
            $count++;
        }
        echo "</table>";

?>






<h1>All users</h1>
<br>       
<table border="1">
    <tr>
        <th>NO</th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
        <th>Username</th>
        <th>Password</th>
        <th>Type</th>
        <th>status</th>
        <th>Action</th>
    </tr>
<?php

        $connect = mysqli_connect("localhost","root","","employee_managment");
        
        if (isset($_SESSION['message'])) {
            echo $_SESSION['message'];
            unset($_SESSION['message']);
            echo '<meta http-equiv="refresh" content="1">';
        }

        if (isset($_POST['submit'])) {
        
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $email = $_POST['email'];
            $username = $_POST['username'];
            $type = $_POST['type'];
            $status = $_POST['status'];
        }

        $query = mysqli_query($connect,"select * from users where type='user'");

        $count = 1;
        while ($row = mysqli_fetch_assoc($query)) 
        {
            echo "<tr>";
            echo "<td>" . $count . "</td>";
            echo "<td>" . $row['firstname'] . "</td>";
            echo "<td>" . $row['lastname'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['username'] . "</td>";
            echo "<td>" . $row['password'] . "</td>";
            echo "<td>" . $row['type'] . "</td>";
            echo "<td>" . $row['status'] . "</td>";
            echo "<td><a href='user_status.php?id=" . $row['id']. "'>EMPLOYEE</a></td>";
            echo "</tr>";
            $count++;
        }
        echo "</table>";

?>

</body>
</html>