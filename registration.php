<html>
    <head>
        <title>Create a New User</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
    <h1 align="center">Signup Here</h1>
        <table align="center">
           <form action="registration_add.php" method="POST">
           <tr>
                <td>Firstname:</td>
                <td><input type="text" name="firstname" required></td>
            </td>
            </tr>
            <tr>
                <td>Lastname:</td>
                <td><input type="text" name="lastname" required></td>
            </td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="email" name="email" required></td>
            </tr>
            <tr>
                <td>Username:</td>
                <td><input type="text" name="username" required pattern="[a-z,A-Z]*"></td>
            </td>
            </tr>
            
            <tr>
                <td>Paasword:</td>
                <td><input type="password" name="password" required></td>
            </td>
            </tr>

            <tr>
                <td>Type:</td>
                <td>
            <select name="type">
                        <option>--Select--</option>
                        <option>Admin</option>
                        <option>Employee</option>
                        <option>User</option>
            </select>
                </td>
            </tr>

            <tr> 
                <td><input type="submit" name="submit" value="Signup"></td>
            </tr>
            
        </form>
        </table>
    </body>
</html>