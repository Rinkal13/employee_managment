<?php

    $connect = mysqli_connect("localhost","root","","employee_managment");

    $id = $_GET['id'];

    $query = mysqli_query($connect,"SELECT * FROM users WHERE id = $id");

    $task = mysqli_fetch_assoc($query);
    
?>

<html>
<head>
    <title>Update Task</title>
</head>
<body>

<h2>Update Information</h2>
<form action="editpro.php" method="post">
    <input type="hidden" name="id" value="<?php echo $task['id']; ?>">
    
    <label>Firstname:<label>          
    <input type="text" name="firstname" value="<?php echo $task['firstname']; ?>"><br><br>

    <label>lastname:</label>
    <input type="text" name="lastname" value="<?php echo $task['lastname']; ?>" required><br><br>

    <label>Email:<label>          
    <input type="text" name="email" value="<?php echo $task['email']; ?>"><br><br>

    <label>Username:<label>          
    <input type="text" name="username" value="<?php echo $task['username']; ?>"><br><br>

    <label>Password:<label>          
    <input type="password" name="password" value="<?php echo $task['password']; ?>"><br><br>

    <label>Type:<label>          

    <select name="type" required>
        <option>--Select Type--</option>
        <option <?php if ($task['type'] == 'Admin') echo 'selected'; ?>>Admin</option>
        <option  <?php if ($task['type'] == 'Employee') echo 'selected'; ?>>Employee</option>

    </select><br><br>

    <input type="submit" name="submit" value="Update"><br>

</form>
</body>
</html>
    