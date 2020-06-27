<?php include "connection.php"; 

// READ ALL EMPLOYEE
$sql = "SELECT * FROM all_employee ORDER BY id DESC";
$result = mysqli_query($connection, $sql);

while ($row = mysqli_fetch_assoc($result)) {
    $id = $row['id'];
    $first_name = $row['first_name'];
    $middle_name = $row['middle_name'];
    $last_name = $row['last_name'];
    $birthday = $row['birthday'];
    $email = $row['email'];
    $home_address = $row['home_address'];
    $job_title = $row['job_title'];
    $department = $row['department'];
    $employment_status = $row['employment_status'];
    $salary = $row['salary'];
    $date_hired = $row['date_hired'];
    $sss = $row['sss'];
    $pagibig = $row['pagibig'];
    $philhealth = $row['philhealth'];
    $tin = $row['tin'];
    $employee_role = $row['employee_role'];
    $password = $row['password'];

    echo "<tr>";
    echo "<td>$id</td>";
    echo "<td>$first_name</td>";
    echo "<td>$middle_name</td>";
    echo "<td>$last_name</td>";
    echo "<td>$job_title</td>";
    echo "<td>$department</td>";
    echo "<td>$salary</td>";
    echo "<td>$date_hired</td>";
    echo "<td class='text-center view-more action'><button type='submit' class='view-more-target' data-id='$id' data-first='$first_name' data-middle='$middle_name' data-last='$last_name' data-birthday='$birthday' data-email='$email' data-home='$home_address' data-job='$job_title' data-department='$department' data-status='$employment_status' data-salary='$salary' data-hired='$date_hired' data-sss='$sss' data-pagibig='$pagibig' data-philhealth='$philhealth' data-tin='$tin' data-role='$employee_role' data-password='$password'>View More</button></td>";
    echo "<td class='text-center update action'><button type='submit' class='update_target' data-id='$id' data-first='$first_name' data-middle='$middle_name' data-last='$last_name' data-birthday='$birthday' data-email='$email' data-home='$home_address' data-job='$job_title' data-department='$department' data-status='$employment_status' data-salary='$salary' data-hired='$date_hired' data-sss='$sss' data-pagibig='$pagibig' data-philhealth='$philhealth' data-tin='$tin' data-role='$employee_role' data-password='$password'>Update</button></td>";
    echo "<td class='text-center archive action'><button type='submit' name='archive' class='archive_target' data-id='$id' data-first='$first_name' data-middle='$middle_name' data-last='$last_name' data-birthday='$birthday' data-email='$email' data-home='$home_address' data-job='$job_title' data-department='$department' data-status='$employment_status' data-salary='$salary' data-hired='$date_hired' data-sss='$sss' data-pagibig='$pagibig' data-philhealth='$philhealth' data-tin='$tin' data-role='$employee_role' data-password='$password'>Archive</button></td>";
    echo "<td class='text-center delete action'><button name='target_delete' type='submit' class='delete_target' data-id='$id'>Delete</button></td>";
    echo "</tr>";
}

    // DELETE EMPLOYEE
    if (isset($_POST['target_delete'])) {
        $target_delete = $_POST['target_delete'];
    
        $sql = "DELETE FROM all_employee WHERE id = '$target_delete'";
        $result = mysqli_query($connection, $sql);
    
        if (!$result) {
            die("QUERY FAILED" . mysqli_error($connection));
        }
    }

    // ARCHIVE EMPLOYEE
    if (isset($_POST['archive'])) {
        $archive_id = $_POST['archive_id'];
        $archive_first_name = $_POST['archive_first_name'];
        $archive_middle_name = $_POST['archive_middle_name'];
        $archive_last_name = $_POST['archive_last_name'];
        $archive_birthday = $_POST['archive_birthday'];
        $archive_email = $_POST['archive_email'];
        $archive_home_address = $_POST['archive_home_address'];
        $archive_job_title = $_POST['archive_job_title'];
        $archive_department = $_POST['archive_department'];
        $archive_employment_status = $_POST['archive_employment_status'];
        $archive_salary = $_POST['archive_salary'];
        $archive_date_hired = $_POST['archive_date_hired'];
        $archive_sss = $_POST['archive_sss'];
        $archive_pagibig = $_POST['archive_pagibig'];
        $archive_philhealth = $_POST['archive_philhealth'];
        $archive_tin = $_POST['archive_tin'];
        $archive_employee_role = $_POST['archive_employee_role'];
        $archive_password = $_POST['archive_password'];

        $sql = "INSERT INTO archive (archive_id, archive_first_name, archive_middle_name, archive_last_name, archive_birthday, archive_email, archive_home_address, archive_job_title, archive_department, archive_employment_status, archive_salary, archive_date_hired, archive_sss, archive_pagibig, archive_philhealth, archive_tin, archive_employee_role, archive_password) VALUES ('$archive_id', '$archive_first_name', '$archive_middle_name', '$archive_last_name', '$archive_birthday', '$archive_email', '$archive_home_address', '$archive_job_title', '$archive_department', '$archive_employment_status', '$archive_salary', '$archive_date_hired', '$archive_sss', '$archive_pagibig', '$archive_philhealth', '$archive_tin', '$archive_employee_role', '$archive_password')";
        $result = mysqli_query($connection, $sql);

        $sql = "DELETE FROM all_employee WHERE id = '$archive_id'";
        $result = mysqli_query($connection, $sql);

        if (!$result) {
            die("QUERY ARCHIVE FAILED" . mysqli_error($connection));
        }
    }

    // UPDATE EMPLOYEE
    if (isset($_POST['update_id'])) {
        $update_id = $_POST['update_id'];
        $update_first_name = $_POST['update_first_name'];
        $update_middle_name = $_POST['update_middle_name'];
        $update_last_name = $_POST['update_last_name'];
        $update_birthday = $_POST['update_birthday'];
        $update_email = $_POST['update_email'];
        $update_home_address = $_POST['update_home_address'];
        $update_job_title = $_POST['update_job_title'];
        $update_department = $_POST['update_department'];
        $update_employment_status = $_POST['update_employment_status'];
        $update_salary = $_POST['update_salary'];
        $update_date_hired = $_POST['update_date_hired'];
        $update_sss = $_POST['update_sss'];
        $update_pagibig = $_POST['update_pagibig'];
        $update_philhealth = $_POST['update_philhealth'];
        $update_tin = $_POST['update_tin'];
        $update_employee_role = $_POST['update_employee_role'];
       
        $sql = "UPDATE all_employee SET first_name = '$update_first_name', middle_name = '$update_middle_name', last_name = '$update_last_name', birthday = '$update_birthday', email = '$update_email', home_address = '$update_home_address', job_title = '$update_job_title', department = '$update_department', employment_status = '$update_employment_status', salary = '$update_salary', date_hired = '$update_date_hired', sss = '$update_sss', pagibig = '$update_pagibig', philhealth = '$update_philhealth', tin = '$update_tin', employee_role = '$update_employee_role' WHERE id = '$update_id'";
        $result = mysqli_query($connection, $sql);

        if (!$result) {
            die("QUERY UPDATE FAILED" . mysqli_error($connection));
        }
    }

    // ADD DEPARTMENT
    if (isset($_POST['department_name'])) {
        $department_name = $_POST['department_name'];

        $sql = "INSERT INTO department (department_name) VALUES ('$department_name')";
        $result = mysqli_query($connection, $sql);
    }

    

?>