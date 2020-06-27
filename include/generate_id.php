<?php include "connection.php"; 

    $sql = "SELECT * FROM all_employee ORDER BY id DESC LIMIT 1";
    $result = mysqli_query($connection, $sql);

    if (!$result) {
        die("FAILED" . mysqli_error($connection));
    }

    while ($row = mysqli_fetch_assoc($result)) {
        $last_id = $row['id'];
        echo $last_id + 1;
    }

?>