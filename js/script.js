$(document).ready(function() {
    
    // GENERATE ID 
    function generateId() {
        $.ajax({

            url: "./include/generate_id.php",
            type: "POST",
            success: function(data1) {
                $("#id").val(data1);
            }
        });
    }

    generateId();

    // LOGIN
    $("#login").on("click", function(e) {
        
        e.preventDefault();
        
        var login_employee_id = $("#login_employee_id").val();
        var login_employee_password = $("#login_employee_password").val();
        var login_employee_role = $("#login_employee_role").val();

        if (login_employee_id !== "" && login_employee_password !== "" && login_employee_role !== "") {

            $.ajax({

                url: "./include/login_user.php",
                type: "POST",
                data: {login_employee_id:login_employee_id, login_employee_password:login_employee_password, login_employee_role:login_employee_role},
                dataType: "text",
                success: function(data) {
                    
                    if (data == "error") {
                        alert("Incorrect Username or Password");
                    }   else if (data == "admin") {
                        window.location = "./admin_dashboard.php";
                    }   else if (data == "employee") {
                        window.location = "./employee.php";
                    }

                }

            });

        }   else {
            alert("Please Fill All The Fields");
        }

    });

    // DISPLAY USER'S NAME

    function loadUserName() {

        $.ajax({

            url: "./include/user_name_display.php",
            type: "POST",
            success: function(username) {
                $(".user_name_display").html(username);
            }

        });

    }

    loadUserName();

    // EMPLOYEE INFO DASHBOARD
   function loadCurrentEmployee() {

    $.ajax({

        url: "./include/current_employee.php",
        type: "POST",
        success: function(current) {
            $("#current-container").html(current);
        }

    });

   }

   loadCurrentEmployee();

    // UPDATE CURRENT EMPLOYEE
    $("#form_current").on("click", function(e) {
        e.preventDefault();

        if (e.target.id == "current_employee_update") {
            

        var current_id = $("#current_id").val();
        var current_first_name = $("#current_first_name").val();
        var current_middle_name = $("#current_middle_name").val();
        var current_last_name = $("#current_last_name").val();
        var current_birthday = $("#current_birthday").val();
        var current_email = $("#current_email").val();
        var current_home_address = $("#current_home_address").val();
        var current_job_title = $("#current_job_title").val();
        var current_department = $("#current_department").val();
        var current_employment_status = $("#current_employment_status").val();
        var current_salary = $("#current_salary").val();
        var current_date_hired = $("#current_date_hired").val();
        var current_sss = $("#current_sss").val();
        var current_pagibig = $("#current_pagibig").val();
        var current_philhealth = $("#current_philhealth").val();
        var current_tin = $("#current_tin").val();
        var current_password = $("#current_password").val();

        if (confirm("Update Profile?")) {

            $.ajax({

                url: "./include/update_current_employee.php",
                type: "POST",
                data: {current_id:current_id, current_first_name:current_first_name, current_middle_name:current_middle_name, current_last_name:current_last_name, current_birthday:current_birthday, current_email:current_email, current_home_address:current_home_address, current_job_title:current_job_title, current_department:current_department, current_employment_status:current_employment_status, current_salary:current_salary, current_date_hired:current_date_hired, current_sss:current_sss, current_pagibig:current_pagibig, current_philhealth:current_philhealth, current_tin:current_tin, current_password:current_password},
                dataType: "text",
                success: function() {
                    loadCurrentEmployee();
                    alert("Profile Updated Successfully");
                }

            });

        }

        }

    });

    // READ EMPLOYEES
    function readEmployees() {
        $.ajax({

            url: "./include/read_employees.php",
            type: "POST",
            success: function (data) {
                $("#employees_table").html(data);
            }
    
        });
    }

    readEmployees();

    // UPDATE EMPLOYEE FORM HIDE
    $("#exit-icon-update").on("click", function() {

        $("#update-form").hide();
    });

    // VIEW EMPLOYEE FORM HIDE
    $("#exit-icon-view").on("click", function() {

        $("#view-form").hide();
    });

    // ADD EMPLOYEE FORM HIDE AND SHOW
    $("#exit-icon").on("click", function() {

        $("#add-form").hide();
    });

    $(".add_employee_icon").on("click", function() {
        // ECHO ALL DEPARTMENT 
        
        $.ajax({

            url: "./include/department_sql.php",
            type: "POST",
            success: function(data2) {
                $("#department").html(data2);
            }
        });

        $("#add-form").show();
    });

    // ADD EMPLOYEE TO DB
    $("#add_new_employee").on("click", function(e) {

        e.preventDefault();

        var id = $("#id").val();
        var first_name = $("#first_name").val();
        var middle_name = $("#middle_name").val();
        var last_name = $("#last_name").val();
        var birthday = $("#birthday").val();
        var email = $("#email").val();
        var home_address = $("#home_address").val();
        var job_title = $("#job_title").val();
        var department = $("#department").val();
        var employment_status = $("#employment_status").val();
        var salary = $("#salary").val();
        var date_hired = $("#date_hired").val();
        var sss = $("#sss").val();
        var pagibig = $("#pagibig").val();
        var philhealth = $("#philhealth").val();
        var tin = $("#tin").val();
        var employee_role = $("#employee_role").val();
        var password = $("#password").val();
        
        if (employee_role == "") {
            alert("Please Fill Employee Role Field");
        }   else {
            $.ajax({

                url: "./include/add_employee_sql.php",
                type: "POST",
                data: {id:id, first_name:first_name, middle_name:middle_name, last_name:last_name, birthday:birthday, email:email, home_address:home_address, job_title:job_title, department:department, employment_status:employment_status, salary:salary, date_hired:date_hired, sss:sss, pagibig:pagibig, philhealth:philhealth, tin:tin, employee_role:employee_role, password:password},
                dataType: "text",
                success: function() {
                    readEmployees();
                    alert("New Employee Added Successfully");
                    $("#add-form").hide();
                    $("#to_add_form")[0].reset();
                    generateId();
                }
            });
        }

    });

    // DELETE EMPLOYEE
    $("#employees_table").on("click", function(e) {

        e.preventDefault();

        if (e.target.className == "delete_target") {
            var target_delete = $(e.target).data("id");
            
            if (confirm("Delete Employee With ID " + target_delete + "?")) {
                
                var confirmPassword = prompt("Enter Admin Password To Proceed");

                if (confirmPassword == "admin") {

                    $.ajax({

                        url: "./include/read_employees.php",
                        type: "POST",
                        data: {target_delete:target_delete},
                        dataType: "text",
                        success: function() {
                            readEmployees();
                            $("#search").val("");
                            alert("Employee Deleted Successfully");
                        }
    
                    });
                }   else {
                    alert("Employee Deletion Unsuccessful");
                }

            }// ARCHIVE EMPLOYEE
        }   else if (e.target.className == "archive_target") {
            var archive_id = $(e.target).data("id");
            var archive_first_name = $(e.target).data("first");
            var archive_middle_name = $(e.target).data("middle");
            var archive_last_name = $(e.target).data("last");
            var archive_birthday = $(e.target).data("birthday");
            var archive_email = $(e.target).data("email");
            var archive_home_address = $(e.target).data("home");
            var archive_job_title = $(e.target).data("job");
            var archive_department = $(e.target).data("department");
            var archive_employment_status = $(e.target).data("status");
            var archive_salary = $(e.target).data("salary");
            var archive_date_hired = $(e.target).data("hired");
            var archive_sss = $(e.target).data("sss");
            var archive_pagibig = $(e.target).data("pagibig");
            var archive_philhealth = $(e.target).data("philhealth");
            var archive_tin = $(e.target).data("tin");
            var archive_employee_role = $(e.target).data("role");
            var archive_password = $(e.target).data("password");
            var archive = "archive";
            if (confirm("Archive Employee ID " + archive_id + "?")) {

                if (prompt("Enter Admin Password To Proceed") == "admin") {
                        
                    $.ajax({

                        url: "./include/read_employees.php",
                        type: "POST",
                        data: {archive:archive, archive_id:archive_id, archive_first_name:archive_first_name, archive_middle_name:archive_middle_name, archive_last_name:archive_last_name, archive_birthday:archive_birthday, archive_email:archive_email, archive_home_address:archive_home_address, archive_job_title:archive_job_title, archive_department:archive_department, archive_employment_status:archive_employment_status, archive_salary:archive_salary, archive_date_hired:archive_date_hired, archive_sss:archive_sss, archive_pagibig:archive_pagibig, archive_philhealth:archive_philhealth, archive_tin:archive_tin, archive_employee_role:archive_employee_role, archive_password:archive_password},
                        dataType: "text",
                        success: function() {
                            readEmployees();
                            alert("Archiving Employee With ID " + archive_id + " Successful");
                            $("#search").val("");
                            loadArchiveTable();
                        }
                    });

                }   else {
                    alert("Archiving Employee With ID " + archive_id + " Unsuccessful");
                }

            }
            // UPDATE EMPLOYEE
        }   else if (e.target.className == "update_target") {
            var update_id = $(e.target).data("id");
            var update_first_name = $(e.target).data("first");
            var update_middle_name = $(e.target).data("middle");
            var update_last_name = $(e.target).data("last");
            var update_birthday = $(e.target).data("birthday");
            var update_email = $(e.target).data("email");
            var update_home_address = $(e.target).data("home");
            var update_job_title = $(e.target).data("job");
            var update_department = $(e.target).data("department");
            var update_employment_status = $(e.target).data("status");
            var update_salary = $(e.target).data("salary");
            var update_date_hired = $(e.target).data("hired");
            var update_sss = $(e.target).data("sss");
            var update_pagibig = $(e.target).data("pagibig");
            var update_philhealth = $(e.target).data("philhealth");
            var update_tin = $(e.target).data("tin");
            var update_employee_role = $(e.target).data("role");
            // ECHO ALL DEPARTMENT
            $.ajax({

                url: "./include/department_sql.php",
                type: "POST",
                success: function(data3) {
                    $("#update_department").html(data3);
                }
            });

            $("#update-form").show();

            var update_id = $("#update_id").val(update_id);
            var update_first_name = $("#update_first_name").val(update_first_name);
            var update_middle_name = $("#update_middle_name").val(update_middle_name);
            var update_last_name = $("#update_last_name").val(update_last_name);
            var update_birthday = $("#update_birthday").val(update_birthday);
            var update_email = $("#update_email").val(update_email);
            var update_home_address = $("#update_home_address").val(update_home_address);
            var update_job_title = $("#update_job_title").val(update_job_title);
            var update_department = $("#update_department").val(update_department);
            var update_employment_status = $("#update_employment_status").val(update_employment_status);
            var update_salary = $("#update_salary").val(update_salary);
            var update_date_hired = $("#update_date_hired").val(update_date_hired);
            var update_sss = $("#update_sss").val(update_sss);
            var update_pagibig = $("#update_pagibig").val(update_pagibig);
            var update_philhealth = $("#update_philhealth").val(update_philhealth);
            var update_tin = $("#update_tin").val(update_tin);
            var update_employee_role = $("#update_employee_role").val(update_employee_role);

            $("#update_employee").on("click", function(e) {
                e.preventDefault();
            var update_id = $("#update_id").val();
            var update_first_name = $("#update_first_name").val();
            var update_middle_name = $("#update_middle_name").val();
            var update_last_name = $("#update_last_name").val();
            var update_birthday = $("#update_birthday").val();
            var update_email = $("#update_email").val();
            var update_home_address = $("#update_home_address").val();
            var update_job_title = $("#update_job_title").val();
            var update_department = $("#update_department").val();
            var update_employment_status = $("#update_employment_status").val();
            var update_salary = $("#update_salary").val();
            var update_date_hired = $("#update_date_hired").val();
            var update_sss = $("#update_sss").val();
            var update_pagibig = $("#update_pagibig").val();
            var update_philhealth = $("#update_philhealth").val();
            var update_tin = $("#update_tin").val();
            var update_employee_role = $("#update_employee_role").val();
            var update_employee = "update_employee";
            if (update_employee_role == "") {
                alert("Please Fill Employee Role Field");
            }   else {

                if (confirm("Update Employee With ID " + update_id + "?")) {
                    $.ajax({

                        url: "./include/read_employees.php",
                        type: "POST",
                        data: {update_id:update_id, update_employee:update_employee, update_first_name:update_first_name, update_middle_name:update_middle_name, update_last_name:update_last_name, update_birthday:update_birthday, update_email:update_email, update_home_address:update_home_address, update_job_title:update_job_title, update_department:update_department, update_employment_status:update_employment_status, update_salary:update_salary, update_date_hired:update_date_hired, update_sss:update_sss, update_pagibig:update_pagibig, update_philhealth:update_philhealth, update_tin:update_tin, update_employee_role:update_employee_role},
                        dataType: "text",
                        success: function() {
                            alert("Employee Updated Successfully");
                            $("#update-form").hide();
                            $("#search").val("");
                            readEmployees();
                        }
    
                    });
                }

            }

            }); // VIEW MORE 
        }   else if (e.target.className == "view-more-target") {

            var view_id = $(e.target).data("id");
            var view_first_name = $(e.target).data("first");
            var view_middle_name = $(e.target).data("middle");
            var view_last_name = $(e.target).data("last");
            var view_birthday = $(e.target).data("birthday");
            var view_email = $(e.target).data("email");
            var view_home_address = $(e.target).data("home");
            var view_job_title = $(e.target).data("job");
            var view_department = $(e.target).data("department");
            var view_employment_status = $(e.target).data("status");
            var view_salary = $(e.target).data("salary");
            var view_date_hired = $(e.target).data("hired");
            var view_sss = $(e.target).data("sss");
            var view_pagibig = $(e.target).data("pagibig");
            var view_philhealth = $(e.target).data("philhealth");
            var view_tin = $(e.target).data("tin");
            var view_employee_role = $(e.target).data("role");

            $("#view-form").show();

            var view_id = $("#view_id").val(view_id);
            var view_first_name = $("#view_first_name").val(view_first_name);
            var view_middle_name = $("#view_middle_name").val(view_middle_name);
            var view_last_name = $("#view_last_name").val(view_last_name);
            var view_birthday = $("#view_birthday").val(view_birthday);
            var view_email = $("#view_email").val(view_email);
            var view_home_address = $("#view_home_address").val(view_home_address);
            var view_job_title = $("#view_job_title").val(view_job_title);
            var view_department = $("#view_department").val(view_department);
            var view_employment_status = $("#view_employment_status").val(view_employment_status);
            var view_salary = $("#view_salary").val(view_salary);
            var view_date_hired = $("#view_date_hired").val(view_date_hired);
            var view_sss = $("#view_sss").val(view_sss);
            var view_pagibig = $("#view_pagibig").val(view_pagibig);
            var view_philhealth = $("#view_philhealth").val(view_philhealth);
            var view_tin = $("#view_tin").val(view_tin);
            var view_employee_role = $("#view_employee_role").val(view_employee_role);
        }
        
    });

    // ADD DEPARTMENT
    $(".add_department_icon").on("click", function() {
        $("#add-form-department").show();
    });

    $("#exit-icon-department").on("click", function() {

        $("#add-form-department").hide();
    });

    $("#add_department").on("click", function(e) {

        e.preventDefault();
        var department_name = $("#new_department_name").val();

        if (department_name == "") {
            alert("Department Name Must Be Filled");
        }   else {

            $.ajax({

                url: "include/read_employees.php",
                type: "POST",
                data: {department_name:department_name},
                dataType: "text",
                success: function () {
                    $("#add-form-department").hide();
                    alert("New Department Added Successfully");
                    $("#department_form")[0].reset();
                }
            });

        }

    });

    // ARCHIVE TABLE FORM
    function loadArchiveTable() {
        $.ajax({

            url: "include/archive_sql.php",
            type: "POST",
            success: function(data3) {
                $("#archive_table").html(data3);
            }
    
        });
    }

    loadArchiveTable();

    // ARCHIVE SHOW AND HIDE
    $(".archive_icon").on("click", function() {
        loadArchiveTable();
        $("#archive-info-form").show();
    });

    $("#exit-icon-archive").on("click", function() {

        $("#archive-info-form").hide();
    });

    // ARCHIVE1 SHOW AND HIDE
    $("#exit-icon-archive1").on("click", function() {

        $("#archive1-form").hide();
    });

    // ARCHIVE TABLE EVENT LISTENER
    $("#archive_table").on("click", function(e) {

        e.preventDefault();

        if (e.target.className == "delete_target") {
            
            var delete_employee = $(e.target).data("id");

            if (confirm("Delete employee ID " + delete_employee + "?")) {

                $.ajax({

                    url: "include/archive_sql.php",
                    type: "POST",
                    data: {delete_employee:delete_employee},
                    dataType: "text",
                    success: function() {
                        loadArchiveTable();
                        alert("Archived Employee Deleted Successfully");
    
                    }
                });

            }   else {
                alert("Archived Employee Deletion Unsuccessful");
            }
            // ARCHIEVE 1 FORM VIEW ALL
        }   else if (e.target.className == "view-more-target") {
            var archive1_id = $(e.target).data("id");
            var archive1_first_name = $(e.target).data("first");
            var archive1_middle_name = $(e.target).data("middle");
            var archive1_last_name = $(e.target).data("last");
            var archive1_birthday = $(e.target).data("birthday");
            var archive1_email = $(e.target).data("email");
            var archive1_home_address = $(e.target).data("home");
            var archive1_job_title = $(e.target).data("job");
            var archive1_department = $(e.target).data("department");
            var archive1_employment_status = $(e.target).data("status");
            var archive1_salary = $(e.target).data("salary");
            var archive1_date_hired = $(e.target).data("hired");
            var archive1_sss = $(e.target).data("sss");
            var archive1_pagibig = $(e.target).data("pagibig");
            var archive1_philhealth = $(e.target).data("philhealth");
            var archive1_tin = $(e.target).data("tin");
            var archive1_employee_role = $(e.target).data("role");

            $("#archive1-form").show();

            var archive1_id = $("#archive1_id").val(archive1_id);
            var archive1_first_name = $("#archive1_first_name").val(archive1_first_name);
            var archive1_middle_name = $("#archive1_middle_name").val(archive1_middle_name);
            var archive1_last_name = $("#archive1_last_name").val(archive1_last_name);
            var archive1_birthday = $("#archive1_birthday").val(archive1_birthday);
            var archive1_email = $("#archive1_email").val(archive1_email);
            var archive1_home_address = $("#archive1_home_address").val(archive1_home_address);
            var archive1_job_title = $("#archive1_job_title").val(archive1_job_title);
            var archive1_department = $("#archive1_department").val(archive1_department);
            var archive1_employment_status = $("#archive1_employment_status").val(archive1_employment_status);
            var archive1_salary = $("#archive1_salary").val(archive1_salary);
            var archive1_date_hired = $("#archive1_date_hired").val(archive1_date_hired);
            var archive1_sss = $("#archive1_sss").val(archive1_sss);
            var archive1_pagibig = $("#archive1_pagibig").val(archive1_pagibig);
            var archive1_philhealth = $("#archive1_philhealth").val(archive1_philhealth);
            var archive1_tin = $("#archive1_tin").val(archive1_tin);
            var archive1_employee_role = $("#archive1_employee_role").val(archive1_employee_role);
        }

    });

    // SEARCH
    $("#search").on("keyup", function(e) {
        
        var search = $(this).val();

        if (search == "") {

            $.ajax({

                url: "./include/read_employees.php",
                type: "POST",
                dataType: "text",
                success: function(datas) {
                    $("#employees_table").html(datas);
                }
            });

        }   else {

            $.ajax({

                url: "./include/search.php",
                type: "POST",
                data: {search:search},
                dataType: "text",
                success: function(content) {
                    $("#employees_table").html(content);
                }
            });
            
        }

    });

    // SORT BY DATE
    $("#sort-now").on("click", function(e) {

        e.preventDefault();

        var sort_select = $("#sort-select").val();

        if (sort_select == "date_hired") {
        
            var sort_date = "date_hired";

            $.ajax({

                url: "./include/sort_by_date_hired.php",
                type: "POST",
                data: {sort_date:sort_date},
                dataType: "text",
                success: function(date_hired) {
                    $("#employees_table").html(date_hired);
                }

            });
            // SORT BY DEPARTMENT
        }   else if (sort_select == "department") {

            var sort_department = "department";

            $.ajax({

                url: "./include/sort_by_department.php",
                type: "POST",
                data: {sort_department:sort_department},
                dataType: "text",
                success: function(department) {
                    $("#employees_table").html(department);
                }

            });
            // SORT BY EMPLOYEE ID
        }   else if (sort_select == "employee_id") {

            var sort_id = "employee_id";

            $.ajax({

                url: "./include/sort_by_id.php",
                type: "POST",
                data: {sort_id:sort_id},
                dataType: "text",
                success: function(id1) {
                    $("#employees_table").html(id1);
                }

            });
            // SORT BY EMPLOYEE FIRST NAME
        }   else if (sort_select == "employee_name") {

            var sort_employee_name = "employee_name";

            $.ajax({

                url: "./include/sort_by_employee_name.php",
                type: "POST",
                data: {sort_employee_name:sort_employee_name},
                dataType: "text",
                success: function(sort_employee) {
                    $("#employees_table").html(sort_employee);
                }

            });
            // SORT BY JOB TITLE
        }   else if (sort_select == "job_title") {

            var sort_job_title = "job_title";

            $.ajax({

                url: "./include/sort_by_job_title.php",
                type: "POST",
                data: {sort_job_title:sort_job_title},
                dataType: "text",
                success: function(sort_job) {
                    $("#employees_table").html(sort_job);
                }

            });
            // SORT BY SALARY
        }   else if (sort_select == "salary") {

            var sort_salary = "salary";

            $.ajax({

                url: "./include/sort_by_salary.php",
                type: "POST",
                data: {sort_salary:sort_salary},
                dataType: "text",
                success: function(sort_salary1) {
                    $("#employees_table").html(sort_salary1);
                }

            });

        }

    });

});