<?php
    
    

    $connect = mysqli_connect("localhost","root","","employee_managment");

    $id = $_GET['id'];

    $query = mysqli_query($connect,"SELECT * FROM admin WHERE id = $id");

    $task = mysqli_fetch_assoc($query);
    
?>

<html>
<head>
    <title>Update Task</title>
</head>
<body>

<h2>Update Task Information</h2>
<form action="update_employee.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $task['id']; ?>">

    <label>ID:<label>          
    <input type="text" name="emp_id" value="<?php echo $task['emp_id']; ?>"><br><br>
    
    <label>Firstname:<label>          
    <input type="text" name="firstname" value="<?php echo $task['firstname']; ?>"><br><br>

    <label>lastname:</label>
    <input type="text" name="lastname" value="<?php echo $task['lastname']; ?>" required><br><br>


    <label >Department:</label>
    <select name="department_id" required>
    
        <?php

        $connect = mysqli_connect("localhost","root","","employee_managment");

        if(isset($_POST['submit']))
        {
            $department_id = $_POST['department_id'];
            $department_name = $_POST['department_name'];
        }        
        $query = mysqli_query($connect,"select department_id, department_name from department");

        echo "<table border='1' align='center'>";
        while($row = mysqli_fetch_assoc($query))
        {  
            $selected = ($task['department_id'] == $row['department_id']) ? 'selected' : '';
            echo "<option value='" . $row['department_id'] . "' $selected>" . $row['department_name'] . "</option>"; 
        }  
        ?>
        
    </select><br><br>

    <label>Email:</label>
    <input type="email" name = "email" value="<?php echo $task['email']; ?>" required><br><br>
    
    <label>phone:</label>
    <input type="text" name = "phone" value="<?php echo $task['phone']; ?>" required><br><br>

    <label>Birthdate:</label>
    <input type="date" name = "birthdate" value="<?php echo $task['birthdate']; ?>" required><br><br>

    <label>Date of Joining:</label>
    <input type="date" name = "joiningdate" value="<?php echo $task['joiningdate']; ?>" required><br><br>

    
    <label>Current Photo:</label><br>
    <img src="../images/<?php echo $task['photo']; ?>" alt="Current Photo" width="100"><br><br>
    <input type="file" name="photo"><br><br>
    
    <label>address:</label>
    <input type="textarea" name ="address" value="<?php echo $task['address']; ?>" required><br><br>

    <input type="submit" value="Update"  name="submit">
</form>

</body>
</html>


