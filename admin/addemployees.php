<?php 
    include("header.php"); 

    if (!isset($_SESSION['username'])) {
        header('Location: ../index.php');
        exit();
    }
?>
<html>
    <head>
        <title>Add Employees</title>
    </head>
    <body>
    <h1 align="center">Add Employees</h1>
        <table align="center">
            <form action="employees_add.php" method="POST" enctype="multipart/form-data">
            <tr>
                <td>ID</id>
                <td><input type="text" name="emp_id" required></td>
            </tr>
            <tr>
                <td>Username</id>
                <td><input type="text" name="username" required></td>
            </tr>
            <tr>
                <td>Password</id>
                <td><input type="password" name="password" required></td>
            </tr>
            <tr>
                <td>First Name:</id>
                <td><input type="text" name="firstname" required></td>
            </tr>
            <tr>
                <td>Last Name:</id>
                <td><input type="text" name="lastname" required></td>
            </tr>
            <tr>
                <td>Department</id>
                <td> <select name="department_id" required>
                <option value="">--Select Department--</option>
                <?php
                    $connect = mysqli_connect("localhost","root","","employee_managment");

                    $query = mysqli_query($connect, "select department_id, department_name from department");

                    while ($row = mysqli_fetch_assoc($query))
                    {
                        echo "<option value='" . $row["department_id"] . "'>" . $row["department_name"] . "</option>";
                    }
                    ?>
                </select>
                 </td>
            </tr>
            <tr>
                <td>Email</id>
                <td><input type="email" name="email" required></td>
            </tr>
            <tr>
                <td>Phone No:</id>
                <td><input type="number" name="phone" required></td>
            </tr>
            <tr>
                <td>Date of Birth:</id>
                <td><input type="date" name="birthdate" required></td>
            </tr>

            <tr>
                <td>Joining Date:</id>
                <td><input type="date" name="joiningdate" required></td>
            </tr>

            <tr>
                <td>Photo:</id>
                <td><input type="file" name="photo" required></td>
            </tr>

            <tr>
                <td>Address:</id>
                <td><input type="textarea" name="address" required></td>
            </tr>

            <tr>
                <td><input type="submit" name="submit" value="Add Details"></td>
            </tr>
                </form>
        </table>



    </body>
</html>