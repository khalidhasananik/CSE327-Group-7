<?php

// include the database connection file
include 'db_connection.php';

// get the employee email and password from the form submission
$employee_email = $_POST['employeeEmail'];
$employee_password = $_POST['employeePassword'];

// check if the employee login button has been clicked
if(isset($_POST['employee_login_btn'])){
        // select the employee with the matching email from the database
        $select = "SELECT * FROM `employee` WHERE email = '$employee_email'";
        $query = mysqli_query($conn, $select);
        $row = mysqli_fetch_assoc($query);
        
        // if the employee exists in the database
        if($row){
            // check if the password matches the one in the database
            if($row['password']===$employee_password){
                // set the session variables and redirect to the home page
                echo $row['name'];
                $_SESSION['employeeName'] = $row['name'];
                $_SESSION['employee_id'] = $row['id'];
                $_SESSION['employeeEmail'] = $row['email'];
                $_SESSION['employee_logged_in'] = true;

                header("location:/home.php?employee_id=$row[id]&username=$row[name]");
            }else{
                // if the password does not match, show an alert and redirect to the login page
                echo "<script>alert('Password does not match...try again!!'); window.location='../../index.php';</script>";

            }
                  
        }else{
            // if the employee does not exist in the database, show an alert and redirect to the login page
            echo "<script>alert('Employee does not exist...try again!!'); window.location='../../index.php';</script>";
        }
}

?>