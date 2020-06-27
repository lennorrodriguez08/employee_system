<?php include "connection.php"; 

$login_employee_id = $_POST['login_employee_id'];
$login_employee_password = $_POST['login_employee_password'];
$login_employee_role = $_POST['login_employee_role'];

$login_employee_id = mysqli_real_escape_string($connection, $login_employee_id);
$login_employee_password = mysqli_real_escape_string($connection, $login_employee_password);

$sql = "SELECT * FROM all_employee WHERE id = '$login_employee_id'";
$result = mysqli_query($connection, $sql);
$count_user = mysqli_num_rows($result);

while ($row = mysqli_fetch_assoc($result)) {
    $db_id = $row['id'];
    $db_employee_role = $row['employee_role'];
    $db_password = $row['password'];
}

if ($count_user == 0) {
    echo "error";
}   else {

    if ($login_employee_id == $db_id) {

        if (password_verify($login_employee_password, $db_password)) {
            
            if ($db_employee_role == "Administrator" && $db_employee_role == $login_employee_role) {
                echo "admin";

                session_start();
                $_SESSION['current_id'] = $db_id;
                $_SESSION['employee_role'] = $db_employee_role;

            }   else if ($db_employee_role == "Regular Employee" && $db_employee_role == $login_employee_role) {
                echo "employee";

                session_start();
                $_SESSION['current_id'] = $db_id;
                $_SESSION['employee_role'] = $db_employee_role;

            }   else {
                echo "error";
            }
        }   else {
            echo "error";
        }
        
    }   else {
        echo "error";
    }
}


?>