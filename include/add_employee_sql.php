<?php include "connection.php"; 

    if (isset($_POST['id'])) {
        $id = $_POST['id'];
        $first_name = $_POST['first_name'];
        $middle_name = $_POST['middle_name'];
        $last_name = $_POST['last_name'];
        $birthday = $_POST['birthday'];
        $email = $_POST['email'];
        $home_address = $_POST['home_address'];
        $job_title = $_POST['job_title'];
        $department = $_POST['department'];
        $employment_status = $_POST['employment_status'];
        $salary = $_POST['salary'];
        $date_hired = $_POST['date_hired'];
        $sss = $_POST['sss'];
        $pagibig = $_POST['pagibig'];
        $philhealth = $_POST['philhealth'];
        $tin = $_POST['tin'];
        $employee_role = $_POST['employee_role'];
        $password = $_POST['password'];

        $password = password_hash($password, PASSWORD_DEFAULT);
    }

    $sql = "INSERT INTO all_employee (id, first_name, middle_name, last_name, birthday, email, home_address, job_title, department, employment_status, salary, date_hired, sss, pagibig, philhealth, tin, employee_role, password) VALUES ($id, '$first_name', '$middle_name', '$last_name', '$birthday', '$email', '$home_address', '$job_title', '$department', '$employment_status', '$salary', '$date_hired', '$sss', '$pagibig', '$philhealth', '$tin', '$employee_role', '$password')";
    $result = mysqli_query($connection, $sql);

    if (!$result) {
        die("QUERY FAILED" . mysqli_error($connection));
    }
?>