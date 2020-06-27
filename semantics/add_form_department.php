<section id="add-form-department">
    <form action="./include/read_employees.php" method="POST" autocomplete="off" id="department_form">
        <div class="form-container" id="add-form-department-container">
            <div class="title">
                <p>Add New Department</p>
                <p><i class="far fa-times-circle" id="exit-icon-department"></i></p>
            </div>
            <div class="form-div">
                <div class="form-input">
                    <label for="">Department Name</label>
                    <input type="text" name="department_name" id="new_department_name">
                </div>
                <div class="form-input">
                    <input type="submit" id="add_department" value="Add">
                </div>
            </div>
        </div>
    </form>
</section>