<?php
    include '../../config/db_connection.php';// Include the database connection file
    include '../../config/constants.php';// Include the constants file for configuration

    // =========== Fetch Employee List ==========
    // $select = "SELECT * FROM `employee`";
    // $s_query = mysqli_query($conn, $select);

    // Check if the employee-search-btn form is submitted
    if (isset($_POST['employee-search-btn'])) {
        $search = $_POST['search'];
        header("location:$baseURL/admin/employees/index.php?search=$search");
    }

    if ($_GET['search']) {
        $search = $_GET['search'];
        // Build a SQL query to search for employees based on the provided search criteria
        $select = "SELECT * FROM `employee` WHERE phone_no LIKE '$search%' OR email LIKE '$search%' OR name LIKE '$search%'";
        $s_query = mysqli_query($conn, $select);
    } else {
        // Fetch all employees if no search parameter is provided
        $select = "SELECT * FROM `employee`";
        $s_query = mysqli_query($conn, $select);
    }

    // =========== Add Employee ===========
    // Retrieve input fields from the add employee form
    $employeeName = $_POST['employeeName'];
    $employeeEmail = $_POST['employeeEmail'];
    $employeePhone = $_POST['employeePhone'];
    $employeeAddress = $_POST['employeeAddress'];
    $employeeSalary = $_POST['employeeSalary'];
    $employeePassword = $_POST['employeePassword'];
    $employeeConfirmPassword = $_POST['employeeConfirmPassword'];

    // ============== Select employee On the basis of email id ===============
    $selectEmployee = "SELECT * FROM `employee` WHERE email = '$employeeEmail'";
    $se_query = mysqli_query($conn, $selectEmployee);
    $is_employee = mysqli_num_rows($se_query);

    if (isset($_POST['add-employee-btn'])) {     
        // check if passwords match
        if ($employeePassword === $employeeConfirmPassword) {
            // check if employee already exists
            if (!$is_employee) {
                // insert new employee into database
                $insert = "INSERT INTO `employee`(`name`, `email`, `phone_no`, `address`, `salary`, `password`) VALUES ('$employeeName', '$employeeEmail', '$employeePhone', '$employeeAddress', '$employeeSalary', '$employeePassword')";
                $i_query = mysqli_query($conn, $insert);
                
                // check if insertion was successful
                if ($i_query) {
                    // redirect to list page
                    header("location:$baseURL/admin/employees/index.php");
                } else {
                    // echo mysqli_error($conn);
                    // display error message and redirect back to add employee page
                    echo "<script>alert('Something went wrong. Please try again!!'); window.location.href='$baseURL/admin/employees/addEmployee.php';</script>";
                }
            } else {
                // Display error message and redirect back to add employee page
                echo "<script>alert('Employee already exists with this email!!'); window.location.href='$baseURL/admin/employees/addEmployee.php';</script>";
            }   
        } else {
            // display error message and redirect back to add employee page
            echo "<script>alert('Password and Confirm Password does not match!!'); window.location.href='$baseURL/admin/employees/addEmployee.php';</script>";
        }
    }
    
    
    // ========= Fetch Employee Detail According to id===========
    $employee_id = $_GET['employee_id'];
    $select_eid = "SELECT * FROM `employee` WHERE id = '$employee_id'";
    $sid_query = mysqli_query($conn, $select);
    $sid_row = mysqli_fetch_assoc($sid_query);

    // ============ Update Employee ==================
    // Retrieve input fields from the update employee form
    $editEmployeeName = $_POST['editEmployeeName'];
    $editEmployeeEmail = $_POST['editEmployeeEmail'];
    $editEmployeePhone = $_POST['editEmployeePhone'];
    $editEmployeeAddress = $_POST['editEmployeeAddress'];
    $editEmployeeSalary = $_POST['editEmployeeSalary'];
    $editEmployeePassword = $_POST['editEmployeePassword'];
    $editEmployeeConfirmPassword = $_POST['editEmployeeConfirmPassword'];
    
    if (isset($_POST['update-employee-btn'])) {
        // check if passwords match
        if ($editEmployeePassword === $editEmployeeConfirmPassword) {
            // update employee information in the database
            $update = "UPDATE `employee` SET `name`='$editEmployeeName', `phone_no`='$editEmployeePhone', `address`='$editEmployeeAddress', `salary`='$editEmployeeSalary', `password`='$editEmployeePassword' WHERE id = '$employee_id'";
            
            // check if update was successful
            if (mysqli_query($conn, $update)) {
                // redirect to home page
                echo "<script>alert('Employee updated!!'); window.location.href='$baseURL/admin/employees/index.php';</script>";
            } else {
                // display error message and redirect back to update employee page
                echo "<script>alert('Something went wrong. Please try again!!'); window.location.href='$baseURL/admin/employees/updateEmployee.php?employee_id=$employee_id'';</script>";
            } 
        } else {
            // display error message and redirect back to update employee page
            echo "<script>alert('Password and Confirm Password does not match!!'); window.location.href='$baseURL/admin/employees/updateEmployee.php?employee_id=$employee_id'';</script>";
        }
    }
     
    // ============= Delete Employee ==============
    if (isset($_POST['del-employee'])) {
        $employee_id = $_GET['employee_id'];
        $delete = "DELETE FROM `employees` WHERE id='$employee_id'";
        $d_query = mysqli_query($conn, $delete);
        if ($d_query) {
            // header("location:$baseURL/admin/employees/index.php");
            // Display a success message and redirect to the employee list page
            echo "<script>alert('Employee deleted!!'); window.location.href='$baseURL/admin/employees/index.php';</script>";
        } else {
            // Display an error message and redirect to the employee list page
            echo "<script>alert('Something went wrong. Please try again!!'); window.location.href='$baseURL/admin/employees/index.php';</script>";
        }
    }
?>