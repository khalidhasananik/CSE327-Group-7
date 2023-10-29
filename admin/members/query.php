<?php
    include '../../config/db_connection.php';// Include the database connection file
    include '../../config/constants.php';// Include the constants file for configuration

    // =========== Fetch Member List ==========
    // $select = "SELECT members.*, plans.* FROM `members` LEFT JOIN plans ON members.pid = plans.pid";
    // $s_query = mysqli_query($conn, $select);

    // Check if the member-search-btn form is submitted
    if (isset($_POST['member-search-btn'])) {
        $search = $_POST['search'];
        // $_SESSION['search'] = $search;
        header("location:$baseURL/admin/members/index.php?search=$search");
    }

    if ($_GET['search']) {
        $search = $_GET['search'];
        // Build a SQL query to search for members based on the provided search criteria
        $select = "SELECT members.*, plans.* FROM `members` LEFT JOIN plans ON members.pid = plans.pid WHERE phone LIKE '$search%' OR email LIKE '$search%' OR mname LIKE '$search%' OR joindate LIKE '$search%'";
        $s_query = mysqli_query($conn, $select);
    } else {
        $select = "SELECT members.*, plans.* FROM `members` LEFT JOIN plans ON members.pid = plans.pid";
        $s_query = mysqli_query($conn, $select);
    }

    // =========== Fetch Plan List ==========
    $selectPlan = "SELECT * FROM `plans`";
    $plan_query = mysqli_query($conn, $selectPlan);

    // =========== Add member ===========
    $memberName = $_POST['memberName'];
    $memberEmail = $_POST['memberEmail'];
    $memberPhone = $_POST['memberPhone'];
    $memberJoinDate = $_POST['memberJoinDate'].date(" H:i:s");
    $memberPlan = $_POST['memberPlan'];
    $memberDiscount = $_POST['memberDiscount'];
    $memberPassword = $_POST['memberPassword'];
    $memberConfirmPassword = $_POST['memberConfirmPassword'];

    // ============== Select member On the basis of email id ===============
    $selectMember = "SELECT * FROM `members` WHERE phone = '$memberPhone'";
    $se_query = mysqli_query($conn, $selectMember);
    $is_member = mysqli_num_rows($se_query);

    if (isset($_POST['add-member-btn'])) {     
        // check if passwords match
        if ($memberPassword === $memberConfirmPassword) {
            // check if member already exists
            if (!$is_member) {
                // insert new member into database
                $insert = "INSERT INTO `members`(`mname`, `email`, `phone`, `joindate`, `pid`, `discount`, `password`) VALUES ('$memberName', '$memberEmail', '$memberPhone', '$memberJoinDate', '$memberPlan', '$memberDiscount', '$memberPassword')";
                $i_query = mysqli_query($conn, $insert);
                
                // check if insertion was successful
                if ($i_query) {
                    // redirect to list page
                    header("location:$baseURL/admin/members/index.php");
                } else {
                    
                    // display error message and redirect back to add member page
                    echo "<script>alert('Something went wrong. Please try again!!'); window.location.href='$baseURL/admin/members/addMember.php';</script>";
                }
            } else {
                // Display error message and redirect back to add member page
                echo "<script>alert('Member already exists with this email!!'); window.location.href='$baseURL/admin/members/addMember.php';</script>";
            }   
        } else {
            // display error message and redirect back to add member page
            echo "<script>alert('Password and Confirm Password does not match!!'); window.location.href='$baseURL/admin/members/addMember.php';</script>";
        }
    }
    
    
    // ========= Fetch member Detail According to id===========
    $member_id = $_GET['member_id'];
    $select_eid = "SELECT * FROM `members` WHERE mid = '$member_id'";
    $sid_query = mysqli_query($conn, $select);
    $sid_row = mysqli_fetch_assoc($sid_query);

    // ============ Update member ==================
    $editMemberName = $_POST['editMemberName'];
    $editMemberEmail = $_POST['editMemberEmail'];
    $editMemberPhone = $_POST['editMemberPhone'];
    $editMemberJoinDate = $_POST['editMemberJoinDate'].date(" H:i:s");
    $editMemberPlan = $_POST['editMemberPlan'];
    $editMemberDiscount = $_POST['editMemberDiscount'];
    
    if (isset($_POST['update-member-btn'])) {
        // update member information in the database
        $update = "UPDATE `members` SET `mname`='$editMemberName', `email`='$editMemberEmail', `joindate`='$editMemberJoinDate', `pid`='$editMemberPlan', `discount`='$editMemberDiscount' WHERE mid = '$member_id'";
            
        // check if update was successful
        if (mysqli_query($conn, $update)) {
            // redirect to home page
            echo "<script>alert('member updated!!'); window.location.href='$baseURL/admin/members/index.php';</script>";
        } else {
            // display error message and redirect back to update member page
            echo "<script>alert('Something went wrong. Please try again!!'); window.location.href='$baseURL/admin/members/updatemember.php?member_id=$member_id'';</script>";
        }
    }
     
    // ============= Delete member ==============
    if (isset($_POST['del-member'])) {
        $member_id = $_GET['member_id'];
        $delete = "DELETE FROM `members` WHERE mid='$member_id'";
        $d_query = mysqli_query($conn, $delete);
        if ($d_query) {
            // header("location:$baseURL/admin/members/index.php");
            echo "<script>alert('member deleted!!'); window.location.href='$baseURL/admin/members/index.php';</script>";
        } else {
            echo "<script>alert('Something went wrong. Please try again!!'); window.location.href='$baseURL/admin/members/index.php';</script>";
        }
    }
?>