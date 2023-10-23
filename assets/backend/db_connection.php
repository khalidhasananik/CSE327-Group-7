<?php
// database Connection
$hostname = "localhost";
$username = "root";
$password = "";
$db = "starbase";
$conn = new mysqli($hostname, $username, $password, $db);

// check for connection errors
if ($conn->connect_error) {
  die("connection error".$conn->connect_error);
}

// start a new session
session_start();

// turn on error reporting
error_reporting('1');
?>
