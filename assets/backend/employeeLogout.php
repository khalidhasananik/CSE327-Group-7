<?php
// start the session
session_start();

// unset the session variable for employee_logged_in
unset($_SESSION['employee_logged_in']);

// redirect the user back to the login page
header("location:/index.php?msg=logout");
?>
