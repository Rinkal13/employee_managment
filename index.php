<?php
session_start();

if (isset($_SESSION['message'])) 
{
    echo $_SESSION['message'];
    unset($_SESSION['message']);
    echo '<meta http-equiv="refresh" content="1">';
}   
?>
<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
    <h1 align="center">Employee Managment System</h1><br>
    <h1 align="center">Login</h1>
        <table align="center">
           <form action="login_add.php" method="POST">
           <tr>
                <td class="label">Username:</id>
                <td><input type="text" name="username" required pattern="[a-z,A-Z]*"></td>
            </td>
            </tr>
            <tr>
                <td class="label">Password:</id>
                <td><input type="password" name="password" required ></td>
            </td>
            </tr>
            
            <tr> 
                <td><input type="submit" name="submit" value="Login"></td>
                
            </tr>
            <tr>
                <td><td><a href="registration.php">Signup</a></td></td>
            </tr>
            
            
            

        </form>
        </table>
    </body>
</html>