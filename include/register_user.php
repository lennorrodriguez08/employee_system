<?php include "connection.php"; 

        $employee_id = $_POST['employee_id'];
        $employee_password = $_POST['employee_password'];
        $employee_role = $_POST['employee_role'];

        $employee_id = mysqli_real_escape_string($connection, $employee_id);
        $employee_password = mysqli_real_escape_string($connection, $employee_password);
        $employee_role = mysqli_real_escape_string($connection, $employee_role);

        $employee_password = password_hash($employee_password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO users (employee_id, employee_password, employee_role) VALUES ($employee_id, '$employee_password', '$employee_role')";
        $result = mysqli_query($connection, $sql);
    
?>