<section id="add-form">
            <form action="./include/add_employee_sql.php" method="POST" autocomplete="off" id="to_add_form">
                <div class="form-container" id="add-form-container">
                   <div class="title">
                        <p>Add New Employee</p>
                        <p><i class="far fa-times-circle" id="exit-icon"></i></p>
                   </div>
                   <div class="form-div">
                       <div class="form-input">
                           <label for="">Employee ID</label>
                           <input type="text" name="id" id="id" disabled>
                           <label for="" class="note">Note: This ID is auto-generated.</label>
                       </div>
                       <div class="form-input">
                           <label for="">First Name</label>
                           <input type="text" name="first_name" id="first_name">
                       </div>
                       <div class="form-input">
                           <label for="">Middle Name</label>
                           <input type="text" name="middle_name" id="middle_name">
                       </div>
                       <div class="form-input">
                           <label for="">Last Name</label>
                           <input type="text" name="last_name" id="last_name">
                       </div>
                       <div class="form-input">
                           <label for="">Birthday</label>
                           <input type="date" name="birthday" id="birthday">
                       </div>
                       <div class="form-input">
                           <label for="">Email Address</label>
                           <input type="text" name="email" id="email">
                       </div>
                       <div class="form-input">
                           <label for="">Home Address</label>
                           <input type="text" name="home_address" id="home_address">
                       </div>
                       <div class="form-input">
                           <label for="">Job Title</label>
                           <input type="text" name="job_title" id="job_title">
                       </div>
                       <div class="form-input">
                           <select name="department" id="department">
                           </select>
                       </div>
                       <div class="form-input">
                           <select name="employment_status" id="employment_status">
                               <option value="">Employment Status</option>
                               <option value="project_based">Project Based</option>
                               <option value="probationary">Probationary</option>
                               <option value="regular">Regular</option>
                           </select>
                       </div>
                       <div class="form-input">
                           <label for="">Monthly Salary</label>
                           <input type="text" name="salary" id="salary">
                       </div>
                       <div class="form-input">
                           <label for="">Date Hired</label>
                           <input type="date" name="date_hired" id="date_hired">
                       </div>
                       <div class="form-input">
                           <label for="">SSS No.</label>
                           <input type="text" name="sss" id="sss">
                       </div>
                       <div class="form-input">
                           <label for="">Pag-Ibig No.</label>
                           <input type="text" name="pagibig" id="pagibig">
                       </div>
                       <div class="form-input">
                           <label for="">Philhealth No.</label>
                           <input type="text" name="philhealth" id="philhealth">
                       </div>
                       <div class="form-input">
                           <label for="">TIN No.</label>
                           <input type="text" name="tin" id="tin">
                       </div>
                       <div class="form-input">
                           <select name="employee_role" id="employee_role">
                               <option value="">Employee Role</option>
                               <option value="Regular Employee">Regular Employee</option>
                               <option value="Administrator">Administrator</option>
                           </select>
                       </div>
                       <div class="form-input">
                           <label for="">Password</label>
                           <input type="password" value="12345" disabled name="password" id="password">
                           <label for="" class="note">Note: This pasword is auto-generated. Inform the employee to change password as soon as possible.</label>
                       </div>
                       <div class="form-input">
                           <input type="submit" id="add_new_employee">
                       </div>
                   </div>
                </div>
            </form>
        </section>