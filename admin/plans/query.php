<?php
    include '../../config/db_connection.php';
    include '../../config/constants.php';

    // =========== Fetch Plan List ==========
    $select = "SELECT plans.pid, plans.pname, plans.price, plans.month_duration, COUNT(DISTINCT members.mid) as memberCount FROM `plans` LEFT JOIN members ON plans.pid = members.pid GROUP BY plans.pid";
    $s_query = mysqli_query($conn, $select);

    // =========== Add Plan ===========
    $planName = $_POST['planName'];
    $planPrice = $_POST['planPrice'];
    $planDuration = $_POST['planDuration'];

    if (isset($_POST['add-plan-btn'])) {     
        // insert new plan into database
        $insert = "INSERT INTO `plans`(`pname`, `price`, `month_duration`) VALUES ('$planName', '$planPrice', '$planDuration')";
        $i_query = mysqli_query($conn, $insert);
        
        // check if insertion was successful
        if ($i_query) {
            // redirect to list page
            header("location:$baseURL/admin/plans/index.php");
        } else {
            // echo mysqli_error($conn);
            // display error message and redirect back to add plan page
            echo "<script>alert('Something went wrong. Please try again!!'); window.location.href='$baseURL/admin/plans/addPlan.php';</script>";
        }
    }
    
    
    // ========= Fetch Plan Detail According to id===========
    $plan_id = $_GET['pid'];
    $select_eid = "SELECT * FROM `plans` WHERE pid = '$plan_id'";
    $sid_query = mysqli_query($conn, $select_eid);
    $sid_row = mysqli_fetch_assoc($sid_query);

    // ============ Update plan ==================
    $editPlanName = $_POST['editPlanName'];
    $editPlanPrice = $_POST['editPlanPrice'];
    $editPlanDuration = $_POST['editPlanDuration'];
    
    if (isset($_POST['update-plan-btn'])) {
        $update = "UPDATE `plans` SET `pname`='$editPlanName', `price`='$editPlanPrice', `month_duration`='$editPlanDuration' WHERE pid = '$plan_id'";
            
        // check if update was successful
        if (mysqli_query($conn, $update)) {
            // redirect to home page
            echo "<script>alert('Plan updated!!'); window.location.href='$baseURL/admin/plans/index.php';</script>";
        } else {
            // display error message and redirect back to update employee page
            echo "<script>alert('Something went wrong. Please try again!!'); window.location.href='$baseURL/admin/plans/updatePlan.php?plan_id=$plan_id'';</script>";
        }
    }
     
    // ============= Delete Plan ==============
    // check if plan can be deleted or not.
    if (isset($_POST['del-plan'])) {
        $plan_id = $_GET['plan_id'];
        $member_query = "SELECT * FROM `members` WHERE pid = '$plan_id'";
        $dtq_query = mysqli_query($conn, $member_query);
        $dtq_row = mysqli_num_rows($dtq_query);
        print_r($member_query);

        if ($dtq_row <= 0) {
            $delete = "DELETE FROM `plans` WHERE pid='$plan_id'";
            $d_query = mysqli_query($conn, $delete);
            if ($d_query) {
                // header("location:$baseURL/admin/plans/index.php");
                echo "<script>alert('Plan deleted!!'); window.location.href='$baseURL/admin/plans/index.php';</script>";
            } else {
                echo "<script>alert('Something went wrong. Please try again!!'); window.location.href='$baseURL/admin/plans/index.php';</script>";
            }
        } else {
            echo "<script>alert('You can not delete this plan as members are currently subscribed to this plan!!'); window.location.href='$baseURL/admin/plans/index.php';</script>";
        }
    }
?>