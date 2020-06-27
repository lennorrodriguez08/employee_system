<?php 

include "./include/connection.php"; 
// include "./include/session.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Register</title>
    <link rel="icon" type="image/png" sizes="16x16" href="./img/c-express-icon.png">
    <link rel="stylesheet" href="./css/main.css">
    <script src="https://code.jquery.com/jquery-3.5.0.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
    <script src="./js/script.js"></script>
</head>
<body class="body">
    <div class="login">
        <div class="login-1">
            <h2>Employee Information With<br>
                Support System
            </h2>
            <img src="./img/login-img.png" alt="">
            <div class="login-form">
                <form action="./include/register_user.php" method="POST" autocomplete="off" id="register_form">
                    <div>
                        <input type="text" name="employee_id" id="last_id" placeholder="Employee ID" disabled value="">
                        <input type="password" name="employee_password" placeholder="New Employee Password" id="employee_password">
                        <select name="employee_role" id="employee_role">
                            <option value="">Select Employee Role</option>
                            <option value="reg_employee">Employee</option>
                            <option value="admin_employee">Administrator</option>
                        </select>
                        <input type="submit" name="employee_register" value="Register" id="register">
                        <a href="index.php" class="create">Login Now</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
