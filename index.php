<?php include "./include/connection.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Login</title>
    <link rel="icon" type="image/png" sizes="16x16" href="./img/c-express-icon.png">
    <link rel="stylesheet" href="./css/main.css">
    <script src="https://code.jquery.com/jquery-3.5.0.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
    <script src="./js/script.js"></script>
</head>
<body class="body">
    <div class="login">
        <div class="login-1">
            <h2>Employee Information System 
            </h2>
            <img src="./img/login-img.png" alt="">
            <div class="login-form">
                <form action="./include/login_user.php" method="POST" autocomplete="off">
                    <div>
                        <input type="text" name="login_employee_id" id="login_employee_id" placeholder="Employee ID">
                        <input type="password" name="login_employee_password" id="login_employee_password" placeholder="Employee Password">
                        <select name="login_employee_role" id="login_employee_role">
                            <option value="">Select Employee Role</option>
                            <option value="Regular Employee">Employee</option>
                            <option value="Administrator">Administrator</option>
                        </select>
                        <input type="submit" name="login" value="Login" id="login">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>