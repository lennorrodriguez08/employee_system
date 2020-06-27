<section id="update-form">
            <form action="./include/read_employees.php" method="POST" autocomplete="off">
                <div class="form-container" id="update-form-container">
                   <div class="title">
                        <p>Update Employee</p>
                        <p><i class="far fa-times-circle" id="exit-icon-update"></i></p>
                   </div>
                   <div class="form-div">
                       <div class="form-input">
                           <label for="">Employee ID</label>
                           <input type="text" name="update_id" id="update_id" disabled>
                       </div>
                       <div class="form-input">
                           <label for="">First Name</label>
                           <input type="text" name="update_first_name" id="update_first_name">
                       </div>
                       <div class="form-input">
                           <label for="">Middle Name</label>
                           <input type="text" name="update_middle_name" id="update_middle_name">
                       </div>
                       <div class="form-input">
                           <label for="">Last Name</label>
                           <input type="text" name="update_last_name" id="update_last_name">
                       </div>
                       <div class="form-input">
                           <label for="">Birthday</label>
                           <input type="date" name="update_birthday" id="update_birthday">
                       </div>
                       <div class="form-input">
                           <label for="">Email Address</label>
                           <input type="text" name="update_email" id="update_email">
                       </div>
                       <div class="form-input">
                           <label for="">Home Address</label>
                           <input type="text" name="update_home_address" id="update_home_address">
                       </div>
                       <div class="form-input">
                           <label for="">Job Title</label>
                           <input type="text" name="update_job_title" id="update_job_title">
                       </div>
                       <div class="form-input">
                           <select name="update_department" id="update_department">
                               <!-- <option value="">Department</option>
                               <option value="Human Resource">Human Resource</option>
                               <option value="Development">Development</option> -->
                           </select>
                       </div>
                       <div class="form-input">
                           <select name="update_employment_status" id="update_employment_status">
                               <option value="">Employment Status</option>
                               <option value="project_based">Project Based</option>
                               <option value="probationary">Probationary</option>
                               <option value="regular">Regular</option>
                           </select>
                       </div>
                       <div class="form-input">
                           <label for="">Monthly Salary</label>
                           <input type="text" name="update_salary" id="update_salary">
                       </div>
                       <div class="form-input">
                           <label for="">Date Hired</label>
                           <input type="date" name="update_date_hired" id="update_date_hired">
                       </div>
                       <div class="form-input">
                           <label for="">SSS No.</label>
                           <input type="text" name="update_sss" id="update_sss">
                       </div>
                       <div class="form-input">
                           <label for="">Pag-Ibig No.</label>
                           <input type="text" name="update_pagibig" id="update_pagibig">
                       </div>
                       <div class="form-input">
                           <label for="">Philhealth No.</label>
                           <input type="text" name="update_philhealth" id="update_philhealth">
                       </div>
                       <div class="form-input">
                           <label for="">TIN No.</label>
                           <input type="text" name="update_tin" id="update_tin">
                       </div>
                       <div class="form-input">
                           <select name="update_employee_role" id="update_employee_role">
                               <option value="Regular Employee">Regular Employee</option>
                               <option value="Administrator">Administrator</option>
                           </select>
                       </div>
                       <div class="form-input">
                           <input type="submit" name="update_employee" id="update_employee" value="Update">
                       </div>
                   </div>
                </div>
            </form>
        </section>