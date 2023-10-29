<?php

// ini_set('display_errors', 1);

// including PHP files
include './config/db_connection.php';
include './config/constants.php';

// SQL queries
$selectService = "SELECT * FROM `services` WHERE s_site = 'Parlor' AND availability = 1";
$service_query = mysqli_query($conn, $selectService);

//The data from the web page is sent to the database
if (isset($_POST['save'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $service = $_POST['service'];
    $note = $_POST['note'];
    $date = $_POST['bdate'];
    $time = $_POST['btime'];

    $sql_query = "INSERT INTO reservation(Name, Email, Phone, Additional_Notes, Site, sid, Reservation_Date, Reservation_Time)
            VALUES ('$name','$email','$phone','$note','Parlor','$service','$date','$time')";

    //message to be displayed after the query is executed
    if (mysqli_query($conn, $sql_query)) {
        echo "<script>alert('Reservation created successfully'); window.location.href='$baseURL/parlor.php';</script>";
    } else {
        echo "<script>alert('Something went wrong... Please try again!!'); window.location.href='$baseURL/parlor.php';</script>";
    }
}
?>