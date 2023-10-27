<?php

    // ini_set('display_errors', 1);
    include './config/db_connection.php';
    include './config/constants.php';

    $selectPlan = "SELECT * FROM `plans`";
    $plan_query = mysqli_query($conn, $selectPlan);

    $member_email = $_POST['email'];
    $member_password = $_POST['password'];

    if (isset($_POST['login_btn'])) {
        $select = "SELECT * FROM `members` WHERE email = '$member_email'";
        $query = mysqli_query($conn, $select);
        $row = mysqli_fetch_assoc($query);
        if ($row) {
            if ($row['password'] === $member_password) {
                // echo $row['name'];
                $pid = $row['pid'];
                $selectPlan = "SELECT * FROM `plans` WHERE pid = '$pid'";
                $queryPlan = mysqli_query($conn, $selectPlan);
                $planRow = mysqli_fetch_assoc($queryPlan);
                $_SESSION['memberName'] = $row['mname'];
                $_SESSION['memberEmail'] = $row['email'];
                $_SESSION['memberPassword'] = $row['password'];
                $_SESSION['memberPhone'] = $row['phone'];
                $_SESSION['memberMembership'] = $planRow['pname'] . ' - ' . intval($planRow['month_duration']) . ' Months';
                $_SESSION['pid'] = $pid;
                $_SESSION['member_logged_in'] = true;

                header("location:$baseURL/dashboard.php");
            } else {
                echo "<script>alert('Password does not match...try again!!'); window.location.href='$baseURL/login.php';</script>";
            }           
        } else {
            echo "<script>alert('Member does not exist...try again!!'); window.location.href='$baseURL/login.php';</script>";
        }
    }

    if (isset($_POST['save'])) {	
	    $name= $_POST['name'];
	    $email= $_POST['email'];
	    $password= $_POST['password'];
	    $phone= $_POST['phone'];
	    $membership= $_POST['membership'];

        $selectMember = "SELECT * FROM `members` WHERE phone = '$phone'";
        $se_query = mysqli_query($conn, $selectMember);
        $is_member = mysqli_num_rows($se_query);
        if (!$is_member) {
            $sql_query = "INSERT INTO members(mname, email, phone, password, pid, active)
                VALUES ('$name','$email','$phone','$password','$membership', 1)";

            if (mysqli_query($conn, $sql_query)) {
                $selectPlan = "SELECT * FROM `plans` WHERE pid = '$membership'";
                $queryPlan = mysqli_query($conn, $selectPlan);
                $planRow = mysqli_fetch_assoc($queryPlan);
                $_SESSION['memberName'] = $name;
                $_SESSION['memberEmail'] = $email;
                $_SESSION['memberPassword'] = $password;
                $_SESSION['memberPhone'] = $phone;
                $_SESSION['memberMembership'] = $planRow['pname'] . ' - ' . intval($planRow['month_duration']) . ' Months';
                $_SESSION['pid'] = $membership;
                $_SESSION['member_logged_in'] = true;
                echo "<script>alert('Member created successfully'); window.location.href='$baseURL/dashboard.php';</script>";
            } else {
                echo "<script>alert('Something went wrong... Please try again!!'); window.location.href='$baseURL/login.php';</script>";
            }
        } else {
            echo "<script>alert('Member already exists... Please try again!!'); window.location.href='$baseURL/login.php';</script>";
        }
    }
    
    if (isset($_POST['saveEdit'])) {	
	    $editMemberName= $_POST['name'];
	    $editMemberEmail= $_POST['email'];
	    $editPassword= $_POST['password'];
        $newPassword= $_POST['newPassword'];
	    $editPhone= $_POST['phone'];
	    $editMemberPlan= $_POST['membership'];

        $selectMember = "SELECT * FROM `members` WHERE phone = '$editPhone'";
        $se_query = mysqli_query($conn, $selectMember);
        $is_member = mysqli_fetch_assoc($se_query);
        if ($is_member) {
            if ($is_member['password'] == $editPassword) {
                $member_id = $is_member['mid'];
                if ($newPassword) {
                    $update = "UPDATE `members` SET `mname`='$editMemberName', `email`='$editMemberEmail', `pid`='$editMemberPlan', `password`='$newPassword' WHERE mid = '$member_id'";
                } else {
                    $update = "UPDATE `members` SET `mname`='$editMemberName', `email`='$editMemberEmail', `pid`='$editMemberPlan' WHERE mid = '$member_id'";
                }
                // check if update was successful
                if (mysqli_query($conn, $update)) {
                    $selectPlan = "SELECT * FROM `plans` WHERE pid = '$editMemberPlan'";
                    $queryPlan = mysqli_query($conn, $selectPlan);
                    $planRow = mysqli_fetch_assoc($queryPlan);
                    $_SESSION['memberName'] = $editMemberName;
                    $_SESSION['memberEmail'] = $editMemberEmail;
                    $_SESSION['memberPassword'] = $newPassword ? $newPassword : $editPassword;
                    $_SESSION['memberPhone'] = $editPhone;
                    $_SESSION['memberMembership'] = $planRow['pname'] . ' - ' . intval($planRow['month_duration']) . ' Months';
                    $_SESSION['pid'] = $editMemberPlan;
                    $_SESSION['member_logged_in'] = true;
                    // redirect to home page
                    echo "<script>alert('Info updated!!'); window.location.href='$baseURL/dashboard.php';</script>";
                } else {
                    // display error message and redirect back to update member page
                    echo "<script>alert('Something went wrong. Please try again!!'); window.location.href='$baseURL/dashboard.php';</script>";
                }
            } else {
                // $password1 = $is_member['password'];
                // $password2 = $editPassword;
                echo "<script>alert('Password does not match...try again!!'); window.location.href='$baseURL/dashboard.php';</script>";
            }
        } else {
            echo "<script>alert('Member does not exists!!'); window.location.href='$baseURL';</script>";
        }
    }
?>