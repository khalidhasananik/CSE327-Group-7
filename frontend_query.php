<?php

    // ini_set('display_errors', 1);
    include './config/db_connection.php';
    include './config/constants.php';

    $selectService = "SELECT * FROM `services` WHERE s_site = 'Salon' AND availability = 1";
    $service_query = mysqli_query($conn, $selectService);

    if (isset($_POST['save'])) {	
	    $name= $_POST['name'];
	    $email= $_POST['email'];
	    $phone= $_POST['phone'];
	    $service= $_POST['service'];
        $note= $_POST['note'];
        $date= $_POST['bdate'];
        $time= $_POST['btime'];

        $sql_query = "INSERT INTO reservation(Name, Email, Phone, Additional_Notes, Site, sid, Reservation_Date, Reservation_Time)
            VALUES ('$name','$email','$phone','$note','Salon','$service','$date','$time')";

        if (mysqli_query($conn, $sql_query)) {
            echo "<script>alert('Reservation created successfully'); window.location.href='$baseURL/salon.php';</script>";
        } else {
            echo "<script>alert('Something went wrong... Please try again!!'); window.location.href='$baseURL/salon.php';</script>";
        }
    }
?>