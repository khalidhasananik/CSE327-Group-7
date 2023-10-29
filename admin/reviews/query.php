
<?php
    include '../../config/db_connection.php';
    include '../../config/constants.php';

    // =========== Fetch review List ==========
    // $select = "SELECT reviews.*, plans.* FROM `reviews` LEFT JOIN plans ON reviews.pid = plans.pid";
    // $s_query = mysqli_query($conn, $select);

    /**
     * Search review
     * if search is set then search review by name
     */
    if (isset($_POST['review-search-btn'])) {
        $search = $_POST['search'];
        // $_SESSION['search'] = $search;
        header("location:$baseURL/admin/reviews/index.php?search=$search");
    }

    /**
     * If search is set then search review by name
     * else fetch all reviews
     */

    if ($_GET['search']) {
        $search = $_GET['search'];
        $select = "SELECT * FROM `reviews` WHERE c_name LIKE '$search%'";
        $s_query = mysqli_query($conn, $select);
    } else {
        $select = "SELECT * FROM `reviews`";
        $s_query = mysqli_query($conn, $select);
    }

    /**
     * If del-review is set then delete review
     * else fetch all reviews
     */

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