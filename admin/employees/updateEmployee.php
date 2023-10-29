<?php
    // ini_set('display_errors', 1);
    include '../../config/db_connection.php';// Include the database connection file.
    include '../../config/constants.php';// Include the constants file.
 
    // Check if an admin is logged in
    if ($_SESSION['admin_logged_in'] == true) {
        include 'query.php';// Include the file for handling database queries related to employees
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Starbase Admin - Update Employee</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="<?=$baseURL?>/assets/css/style.css">
    <style>
      .navbar-collapse a.admin {
        color: #fff !important;
      }
      .middle-td td {
        vertical-align: middle;
      }
      .no-margin-bottom {
        margin-bottom: 0;
      }
    </style>
  </head>
  <body>
    <?php
        include '../nav.php'; // Include the navigation bar.
    ?>

    <!-- Edit Employee Form -->
    <div class="container">
      <div class="row mt-5">
        <div class="add-btn d-flex justify-content-center">
          <a class="btn btn-primary" href="index.php"><i class="fa-solid fa-list"></i> Employee List</a>
        </div>
        <h3 class="col-md-6 mt-2 offset-md-3 text-center">Update Employee</h3>
        <!-- Start form container -->
        <div class="col-md-6 offset-md-3 mt-2 mb-4 border rounded p-4">
          <!-- Start form -->
          <form method="post" action=<?php echo 'query.php?employee_id='.$sid_row['id']?>>
            <!-- Name input -->
            <div class="mb-3">
              <label for="editEmployeeName" class="form-label">Name</label>
              <input type="text" class="form-control" id="editEmployeeName" name="editEmployeeName" value="<?php echo $sid_row['name'];?>" placeholder="Employee Name" required>
            </div>
            <!-- Email input -->
            <div class="mb-3">
              <label for="editEmployeeEmail" class="form-label">Email</label>
              <input type="email" disabled class="form-control" id="editEmployeeEmail" name="editEmployeeEmail" value="<?php echo $sid_row['email'];?>" placeholder="Employee Email" required>
            </div>
            <!-- Phone input -->
            <div class="mb-3">
              <label for="editEmployeePhone" class="form-label">Phone</label>
              <input type="tel" class="form-control" id="editEmployeePhone" name="editEmployeePhone" value="<?php echo $sid_row['phone_no'];?>" placeholder="Employee Phone number" required>
            </div>
            <!-- Address input -->
            <div class="mb-3">
              <label for="editEmployeeAddress" class="form-label">Address</label>
              <input type="text" class="form-control" id="editEmployeeAddress" name="editEmployeeAddress" value="<?php echo $sid_row['address'];?>" placeholder="Employee Address" required>
            </div>
            <div class="mb-3">
              <label for="editEmployeeSalary" class="form-label">Salary</label>
              <input type="number" class="form-control" id="editEmployeeSalary" name="editEmployeeSalary" value="<?php echo $sid_row['salary'];?>" placeholder="Employee Salary" required>
            </div>
            <!-- Password input -->
            <div class="mb-3">
              <label for="editEmployeePassword" class="form-label">Password</label>
              <input type="password" class="form-control" id="editEmployeePassword" name="editEmployeePassword" value="<?php echo $sid_row['password'];?>" placeholder="Password" required>
            </div>
            <!-- Confirm password input -->
            <div class="mb-3">
              <label for="editEmployeeConfirmPassword" class="form-label">Confirm Password</label>
              <input type="password" class="form-control" id="editEmployeeConfirmPassword" name="editEmployeeConfirmPassword" value="<?php echo $sid_row['password'];?>" placeholder="Confirm Password" required>
            </div>
            <!-- Submit button -->
            <button type="submit" id="update-employee-btn" name="update-employee-btn" class="btn btn-primary">Update Employee</button>
            <!-- End form -->
          </form>
        <!-- End form container -->
        </div>
      </div>
    </div>

                    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/js/all.min.js" integrity="sha512-rpLlll167T5LJHwp0waJCh3ZRf7pO6IT1+LZOhAyP6phAirwchClbTZV3iqL3BMrVxIYRbzGTpli4rfxsCK6Vw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  </body>
</html>

<?php
    } else {
       // If an admin is not logged in, redirect to the login page.
        header("location:$baseURL/admin/index.php?msg=login_first");
    }
?>