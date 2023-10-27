<?php
include '../config/constants.php';
// start a new session
session_start();

// unset the session variables
unset($_SESSION['admin_logged_in'], $_SESSION['adminName']);

// destroy the session
// session_destroy();

// redirect the user to the login page
header("location:$baseURL/admin/index.php?msg=logout");
?>