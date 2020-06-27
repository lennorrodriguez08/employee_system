<?php 

$host = "localhost";
$user = "root";
$password = "";
$db = "employee_system";

$connection = mysqli_connect($host, $user, $password, $db);

if (!$connection) {
    die("Connection Failed" . mysqli_error($connection));
}

?>