<?php include "connection.php"; 
        session_start();
    if (isset($_SESSION['current_id'])) {
        $current_id = $_SESSION['current_id'];

        $sql = "SELECT * FROM all_employee WHERE id = '$current_id'";
        $result = mysqli_query($connection, $sql);

        while ($row = mysqli_fetch_assoc($result)) {
            $current_id = $row['id'];
            $current_first_name = $row['first_name'];
            $current_middle_name = $row['middle_name'];
            $current_last_name = $row['last_name'];
            $current_job_title = $row['job_title'];
            $current_department = $row['department'];
            $current_salary = $row['salary'];
            $current_date_hired = $row['date_hired'];
            $current_email = $row['email'];
            $current_birthday = $row['birthday'];
            $current_home_address = $row['home_address'];
            $current_employment_status = $row['employment_status'];
            $current_sss = $row['sss'];
            $current_pagibig = $row['pagibig'];
            $current_philhealth = $row['philhealth'];
            $current_tin = $row['tin'];
            $current_password = $row['password'];
            $current_employee_role = $row['employee_role'];
        }
            echo "
            <div class='form-div'>
                <div class='form-input'>
                    <label for=''>Employee ID</label>
                    <input type='text' name='current_id' id='current_id' disabled value='$current_id'>
                </div>
                <div class='form-input'>
                    <label for=''>First Name</label>
                    <input type='text' name='current_first_name' id='current_first_name' value='$current_first_name'>
                </div>
                <div class='form-input'>
                    <label for=''>Middle Name</label>
                    <input type='text' name='current_middle_name' id='current_middle_name' value='$current_middle_name'>
                </div>
                <div class='form-input'>
                    <label for=''>Last Name</label>
                    <input type='text' name='current_last_name' id='current_last_name' value='$current_last_name'>
                </div>
                <div class='form-input'>
                    <label for=''>Birthday</label>
                    <input type='text' name='current_birthday' id='current_birthday' value='$current_birthday'>
                </div>
                <div class='form-input'>
                    <label for=''>Email Address</label>
                    <input type='text' name='current_email' id='current_email' value='$current_email'>
                </div>
                <div class='form-input'>
                    <label for=''>Home Address</label>
                    <input type='text' name='current_home_address' id='current_home_address' value='$current_home_address'>
                </div>
                <div class='form-input'>
                    <label for=''>Job Title</label>
                    <input type='text' name='current_job_title' id='current_job_title' disabled value='$current_job_title'>
                </div>
                <div class='form-input'>
                    <label for=''>Department</label>
                    <input type='text' name='current_department' id='current_department' disabled value='$current_department'>
                </div>
                <div class='form-input'>
                    <label for=''>Employment Status</label>
                    <input type='text' name='current_employment_status' id='current_employment_status' disabled value='$current_employment_status'>
                </div>
                <div class='form-input'>
                    <label for=''>Monthly Salary</label>
                    <input type='text' name='current_salary' id='current_salary' disabled value='$current_salary'>
                </div>
                <div class='form-input'>
                    <label for=''>Date Hired</label>
                    <input type='text' name='current_date_hired' id='current_date_hired' disabled value='$current_date_hired'>
                </div>
                <div class='form-input'>
                    <label for=''>SSS No.</label>
                    <input type='text' name='current_sss' id='current_sss' value='$current_sss'>
                </div>
                <div class='form-input'>
                    <label for=''>Pag-Ibig No.</label>
                    <input type='text' name='current_pagibig' id='current_pagibig' value='$current_pagibig'>
                </div>
                <div class='form-input'>
                    <label for=''>Philhealth No.</label>
                    <input type='text' name='current_philhealth' id='current_philhealth' value='$current_philhealth'>
                </div>
                <div class='form-input'>
                    <label for=''>TIN No.</label>
                    <input type='text' name='current_tin' id='current_tin' value='$current_tin'>
                </div>
                <div class='form-input'>
                    <label for=''>Change Password</label>
                    <input type='password' name='current_password' value='' id='current_password'>
                </div>
                <div class='form-input'>
                    <input type='submit' name='current_employee_update' id='current_employee_update' value='Update'>
                </div>
            </div>
        ";
    }

?>