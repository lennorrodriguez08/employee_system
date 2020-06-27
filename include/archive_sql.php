<?php include "connection.php"; 

// QUERY TO DISPLAY ALL DATA IN ARCHIVE DB
$sql = "SELECT * FROM archive ORDER BY archive_id DESC";
$result = mysqli_query($connection, $sql);

while ($row = mysqli_fetch_assoc($result)) {
    $archive_id = $row['archive_id'];
    $archive_first_name = $row['archive_first_name'];
    $archive_middle_name = $row['archive_middle_name'];
    $archive_last_name = $row['archive_last_name'];
    $archive_job_title = $row['archive_job_title'];
    $archive_department = $row['archive_department'];
    $archive_salary = $row['archive_salary'];
    $archive_date_hired = $row['archive_date_hired'];
    $archive_email = $row['archive_email'];
    $archive_birthday = $row['archive_birthday'];
    $archive_home_address = $row['archive_home_address'];
    $archive_employment_status = $row['archive_employment_status'];
    $archive_sss = $row['archive_sss'];
    $archive_pagibig = $row['archive_pagibig'];
    $archive_philhealth = $row['archive_philhealth'];
    $archive_tin = $row['archive_tin'];
    $archive_employee_role = $row['archive_employee_role'];

    echo "<tr>";
    echo "<td>$archive_id</td>";
    echo "<td>$archive_first_name</td>";
    echo "<td>$archive_middle_name</td>";
    echo "<td>$archive_last_name</td>";
    echo "<td>$archive_job_title</td>";
    echo "<td>$archive_department</td>";
    echo "<td>$archive_salary</td>";
    echo "<td>$archive_date_hired</td>";
    echo "<td>$archive_email</td>";
    echo "<td class='text-center view-more action'><button type='submit' class='view-more-target' data-id='$archive_id' data-first='$archive_first_name' data-middle='$archive_middle_name' data-last='$archive_last_name' data-birthday='$archive_birthday' data-email='$archive_email' data-home='$archive_home_address' data-job='$archive_job_title' data-department='$archive_department' data-status='$archive_employment_status' data-salary='$archive_salary' data-hired='$archive_date_hired' data-sss='$archive_sss' data-pagibig='$archive_pagibig' data-philhealth='$archive_philhealth' data-tin='$archive_tin' data-role='$archive_employee_role'>View More</button></td>";
    echo "<td class='text-center delete action'><button type='submit' class='delete_target' data-id='$archive_id'>Delete</button></td>";
    echo "</tr>";
}

// DELETE ARCHIVED EMPLOYEE
if (isset($_POST['delete_employee'])) {
    $delete_target = $_POST['delete_employee'];

    $sql = "DELETE FROM archive WHERE archive_id = '$delete_target'";
    $result = mysqli_query($connection, $sql);

    if (!$result) {
        die("DELETE ARCHIVE QUERY FAILED" . mysqli_error($connection));
    }
}
?>