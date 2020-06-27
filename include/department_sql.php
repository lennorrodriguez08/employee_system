<?php include "connection.php"; 

$sql = "SELECT * FROM department";
$result = mysqli_query($connection, $sql);

if (!$result) {
    die("QUERY SELECT ALL DEPARTMENT FAILED" . mysqli_error($connection));
}
    echo "<option value=''>Department</option>"; 
while ($row = mysqli_fetch_assoc($result)) {
    $department_name = $row['department_name'];

    echo "<option value='$department_name'>$department_name</option>";
}

?>