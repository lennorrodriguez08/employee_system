<?php include "connection.php"; 

// SEARCH
    if (isset($_POST['search'])) {
        $search = $_POST['search'];

        $sql = "SELECT * FROM all_employee WHERE first_name LIKE '%$search%'";
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
    }

    ?>