<?php
    
    $connect = mysqli_connect("localhost","root","","employee_managment");

    $id = $_GET['id'];

    $query = mysqli_query($connect,"SELECT * FROM users WHERE id = $id");

    $task = mysqli_fetch_assoc($query);
    
?>

<html>
<head>
    <title>Update Profile</title>
</head>
<body>

<h2>Update Task Information</h2>
<form action="update_employee.php" method="post">
    <input type="hidden" name="id" value="<?php echo $task['id']; ?>">

    <label>Firstname:<label>          
    <input type="text" name="firstname" value="<?php echo $task['firstname']; ?>"><br><br>

    <label>lastname:</label>
    <input type="text" name="lastname" value="<?php echo $task['lastname']; ?>" required><br><br>

    
    <label>email:</label>
    <input type="email" name = "email" value="<?php echo $task['email']; ?>" required><br><br>

    <label>Username:</label>
    <input type="text" name = "username" value="<?php echo $task['username']; ?>" required><br><br>

    <label>Current Password:</label>
    <input type="password" name="password"  value="<?php echo $task['password']; ?>" required><br><br>

    <input type="submit" value="Update"  name="submit">
</form>

</body>
</html>


