<?php 
    
    session_start();
    if ($_SESSION['employee_role'] != "Administrator" && $_SESSION['employee_role'] != "Regular Employee") {
        header("Location: ./index.php");
    }   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Profile Update</title>
    <link rel="icon" type="image/png" sizes="16x16" href="./img/c-express-icon.png">
    <link rel="stylesheet" href="./css/all.css">
    <link rel="stylesheet" href="./css/main.css">
    <script src="https://code.jquery.com/jquery-3.5.0.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
    <script src="./js/script.js"></script>
</head>
<body>
    <?php include "./semantics/employee_nav.php"; ?>
    <section id="current-employee-form">
        <form action="./include/update_current_employee.php" method="POST" autocomplete="off" id="form_current">
            <div class="form-container" id="current-container">
                
            </div>
        </form>
    </section>
</body>
</html>