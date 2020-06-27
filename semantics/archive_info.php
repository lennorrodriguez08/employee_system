<section id="archive-info-form">
            <form action="./include/archive_sql.php" method="POST" autocomplete="off">
                <div class="form-container" id="archive-info-container">
                <div class="title">
                        <p>Archived Employee Information</p>
                        <p><i class="far fa-times-circle" id="exit-icon-archive"></i></p>
                   </div>
                <table border="1" cellspacing="0" cellpadding="0" role="presentation" class="archive-table">
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
                            <th>Email</th>
                            <th colspan="2" class="text-center">Action Status</th>
                        </tr>
                    </thead>
                    <tbody id="archive_table">
                    </tbody>
                </table>
                </div>
            </form>
        </section>