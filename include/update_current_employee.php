<?php include "connection.php"; 
    session_start();
    if (isset($_POST['current_id'])) {
        $current_id = $_POST['current_id'];
        $current_first_name = $_POST['current_first_name'];
        $current_middle_name = $_POST['current_middle_name'];
        $current_last_name = $_POST['current_last_name'];
        $current_birthday = $_POST['current_birthday'];
        $current_email = $_POST['current_email'];
        $current_home_address = $_POST['current_home_address'];
        $current_job_title = $_POST['current_job_title'];
        $current_department = $_POST['current_department'];
        $current_employment_status = $_POST['current_employment_status'];
        $current_salary = $_POST['current_salary'];
        $current_date_hired = $_POST['current_date_hired'];
        $current_sss = $_POST['current_sss'];
        $current_pagibig = $_POST['current_pagibig'];
        $current_philhealth = $_POST['current_philhealth'];
        $current_tin = $_POST['current_tin'];
        $current_password = $_POST['current_password'];

        $current_password = password_hash($current_password, PASSWORD_DEFAULT);

        $sql = "UPDATE all_employee SET first_name = '$current_first_name', middle_name = '$current_middle_name', last_name = '$current_last_name', birthday = '$current_birthday', email = '$current_email', home_address = '$current_home_address', job_title = '$current_job_title', department = '$current_department', employment_status = '$current_employment_status', salary = '$current_salary', date_hired = '$current_date_hired', sss = '$current_sss', pagibig = '$current_pagibig', philhealth = '$current_philhealth', tin = '$current_tin', password = '$current_password' WHERE id = '$current_id'";
        $result = mysqli_query($connection, $sql);

        if (!$result) {
            die("CURRENT EMPLOYEE QUERY UPDATE FAILED" . mysqli_error($connection));
        }
        
    }

?>