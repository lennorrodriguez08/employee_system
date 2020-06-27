<?php include "connection.php"; 

session_start();
if (isset($_SESSION['current_id'])) {
    $current_id = $_SESSION['current_id'];

    $sql = "SELECT * FROM all_employee WHERE id = '$current_id'";
    $result = mysqli_query($connection, $sql);

    while ($row = mysqli_fetch_assoc($result)) {
        $current_first_name = $row['first_name'];
        $current_last_name = $row['last_name'];

        echo "$current_first_name" . " " . "$current_last_name";
    }
}
?>