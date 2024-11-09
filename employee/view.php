<?php

include ("index.php");

if (!isset($_SESSION['username'])) {
    header('Location: ../index.php');
    exit();
}
$connect = mysqli_connect("localhost", "root", "", "employee_managment");

$username = $_SESSION['username']; 

if (isset($_GET['username'])) 
{
    $username = $_GET['username'];
}

echo "<table border='1'>
<tr>
    <th>Employee ID</th>
    <th>Username</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Department</th>
    <th>Email</th>
    <th>Phone</th>
    <th>Birthdate</th>
    <th>Joining Date</th>
    <th>Photo</th>
    <th>Address</th>
    <th>Actions</th>
</tr>";

$query = mysqli_query($connect, "SELECT admin.*, department.department_name FROM admin JOIN department ON admin.department_id = department.department_id WHERE username = '$username'");
while ($row = mysqli_fetch_assoc($query)) {
    echo "<tr>";
    echo "<td>" . $row['emp_id'] . "</td>";
    echo "<td>" . $row['username'] . "</td>";
    echo "<td>" . $row['firstname'] . "</td>";
    echo "<td>" . $row['lastname'] . "</td>";
    echo "<td>" . $row['department_name'] . "</td>";
    echo "<td>" . $row['email'] . "</td>";
    echo "<td>" . $row['phone'] . "</td>";
    echo "<td>" . $row['birthdate'] . "</td>";
    echo "<td>" . $row['joiningdate'] . "</td>";
    echo "<td><img src='../images/".$row['photo']."' height=100 width=100></td>";
    echo "<td>" . $row['address'] . "</td>";
    echo "<td><a href='edit_employee.php?id=" . $row['id'] . "'>Edit</a></td>";
    echo "</tr>";
}

echo "</table>";

?>
