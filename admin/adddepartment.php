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
    <h1 align="center">Add Department</h1>
        <table align="center">
           <form action="department_add.php" method="POST">
            <tr>
                <td>Add Department:</id>
                <td><input type="text" name="department_name" required></td>
            </td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" value="Add Details"></td>
            </tr>
        </form>
        </table>
    </body>
</html>