<?php include "./semantics/header.php"; ?>
    <?php include "./semantics/nav.php"; ?>
    <form action="./include/sort_by_date_hired.php" method="POST" autocomplete="off">
        <section id="sub-nav">
            <div class="item-1">
                <div class="item">
                    <select name="sort" id="sort-select">
                        <option value="">Sort options ..</option>
                        <option value="date_hired">Date Hired</option>
                        <option value="department">Department</option>
                        <option value="employee_id">Employee ID</option>
                        <option value="employee_name">Employee Name</option>
                        <option value="job_title">Job Title</option>
                        <option value="salary">Salary</option>
                    </select>
                    <input type="submit" value="Sort" id="sort-now">
                </div>
                <div class="item">
                    <label for="">Search</label>
                    <input type="text" name="search" id="search">
                </div>
            </div>
            <div class="item-2">
                <div>
                    <img src="./img/employee_login.png" alt="">
                </div>
                <p><a href="./include/logout.php" onclick="javascript: return confirm('Are You Sure You Want To Logout?')" class="user_name_display"></a></p>
            </div>
        </section>
    </form>
        <section id="table">
            <form action="./include/read_employees.php" method="POST" autocomplete="off">
                <div>
                    <table border="1" cellspacing="0" cellpadding="0" role="presentation">
                        <thead>
                            <tr>
                                <th>Employee ID</th>
                                <th>First Name</th>
                                <th>Middle Name</th>
                                <th>Last Name</th>
                                <th>Job Title</th>
                                <th>Department</th>
                                <th>Monthly Salary</th>
                                <th>Date Hired</th>
                                <th colspan="4" class="text-center">Action Status</th>
                            </tr>
                        </thead>
                        <tbody id="employees_table"></tbody>
                    </table>
                </div>
            </form>
        </section>
        <?php include "./semantics/add_form_employee.php"; ?>
        <?php include "./semantics/update_form_employee.php"; ?>
        <?php include "./semantics/add_form_department.php"; ?>
        <?php include "./semantics/view_more.php"; ?>
        <?php include "./semantics/archive_info.php"; ?>
        <?php include "./semantics/archive_more.php"; ?>
</body>
</html>