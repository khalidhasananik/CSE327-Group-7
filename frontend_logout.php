<?php
include './config/constants.php';
// start a new session
session_start();

// unset the session variables
unset($_SESSION['member_logged_in'], $_SESSION['memberName']);

// destroy the session
// session_destroy();

// redirect the user to the login page
header("location:$baseURL");
?>