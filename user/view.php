<?php

include ("index.php");


$connect = mysqli_connect("localhost", "root", "", "employee_managment");

$username = $_SESSION['username']; 
$password = $_SESSION['password'];


if (isset($_GET['username']) && isset($_GET['password']))
{
    $username = $_GET['username'];
    $password = $_GET['password'];
}

echo "<table border='1'>
<tr>
    <th>ID</th>
   
    <th>First Name</th>
    <th>Last Name</th>
    <th>Email</th>
    <th>Username</th>
    <th>Password</th>
    <th>Actions</th>
</tr>";

$query = mysqli_query($connect, "SELECT * FROM users WHERE username = '$username' and password ='$password'");
$count = 1;
while ($row = mysqli_fetch_assoc($query)) {
    echo "<tr>";
    echo "<td>" .$count. "</td>";
   
    echo "<td>" . $row['firstname'] . "</td>";
    echo "<td>" . $row['lastname'] . "</td>";
    echo "<td>" . $row['email'] . "</td>";
    echo "<td>" . $row['username'] . "</td>";
    echo "<td>" . $row['password'] . "</td>";
    echo "<td><a href='edit_employee.php?id=" . $row['id'] . "'>Edit</a></td>";
    echo "</tr>";

    $count++;
}

echo "</table>";

?>
