<?php 

session_start();

if (!isset($_SESSION['employee_role'])) {
    header("Location: ./index.php");
}

?>