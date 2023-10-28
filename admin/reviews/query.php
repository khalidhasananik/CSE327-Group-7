<?php
    include '../../config/db_connection.php';
    include '../../config/constants.php';

    // =========== Fetch review List ==========
    // $select = "SELECT reviews.*, plans.* FROM `reviews` LEFT JOIN plans ON reviews.pid = plans.pid";
    // $s_query = mysqli_query($conn, $select);

    if (isset($_POST['review-search-btn'])) {
        $search = $_POST['search'];
        // $_SESSION['search'] = $search;
        header("location:$baseURL/admin/reviews/index.php?search=$search");
    }

    if ($_GET['search']) {
        $search = $_GET['search'];
        $select = "SELECT * FROM `reviews` WHERE c_name LIKE '$search%'";
        $s_query = mysqli_query($conn, $select);
    } else {
        $select = "SELECT * FROM `reviews`";
        $s_query = mysqli_query($conn, $select);
    }

    // ============= Delete review ==============
    if (isset($_POST['del-review'])) {
        $review_id = $_GET['review_id'];
        $delete = "DELETE FROM `reviews` WHERE id='$review_id'";
        $d_query = mysqli_query($conn, $delete);
        if ($d_query) {
            // header("location:$baseURL/admin/reviews/index.php");
            echo "<script>alert('Review deleted!!'); window.location.href='$baseURL/admin/reviews/index.php';</script>";
        } else {
            echo "<script>alert('Something went wrong. Please try again!!'); window.location.href='$baseURL/admin/reviews/index.php';</script>";
        }
    }
?>