<?php
    // ini_set('display_errors', 1);
    include '../../config/db_connection.php';
    include '../../config/constants.php';

    if ($_SESSION['admin_logged_in'] == true) {
        include 'query.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Starbase Admin - Update Plan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="<?=$baseURL?>/assets/css/style.css">
    <style>
      .navbar-collapse a.admin {
        color: #fff !important;
      }
      .middle-td td {
        vertical-align: middle;
      }
      .no-margin-bottom {
        margin-bottom: 0;
      }
    </style>
  </head>
  <body>
    <?php
        include '../nav.php';
    ?>

    <!-- Edit plan Form -->
    <div class="container">
      <div class="row mt-5">
        <div class="add-btn d-flex justify-content-center">
          <a class="btn btn-primary" href="index.php"><i class="fa-solid fa-list"></i> Plan List</a>
        </div>
        <h3 class="col-md-6 mt-2 offset-md-3 text-center">Update Plan</h3>
        <!-- Start form container -->
        <div class="col-md-6 offset-md-3 mt-2 mb-4 border rounded p-4">
          <!-- Start form -->
          <form method="post" action=<?php echo 'query.php?pid='.$sid_row['pid']?>>
            <!-- Name input -->
            <div class="mb-3">
              <label for="editPlanName" class="form-label">Name</label>
              <input type="text" class="form-control" id="editPlanName" name="editPlanName" value="<?php echo $sid_row['pname'];?>" placeholder="Plan Name" required>
            </div>
            <div class="mb-3">
              <label for="editPlanPrice" class="form-label">Price</label>
              <input type="number" class="form-control" id="editPlanPrice" name="editPlanPrice" value="<?php echo $sid_row['price'];?>" placeholder="Plan Price" required>
            </div>
            <div class="mb-3">
              <label for="editPlanDuration" class="form-label">Duration</label>
              <input type="number" class="form-control" id="editPlanDuration" name="editPlanDuration" value="<?php echo intval($sid_row['month_duration']);?>" placeholder="Duration (Month)" required>
            </div>
            <!-- Submit button -->
            <button type="submit" id="update-plan-btn" name="update-plan-btn" class="btn btn-primary">Update Plan</button>
            <!-- End form -->
          </form>
        <!-- End form container -->
        </div>
      </div>
    </div>

                    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/js/all.min.js" integrity="sha512-rpLlll167T5LJHwp0waJCh3ZRf7pO6IT1+LZOhAyP6phAirwchClbTZV3iqL3BMrVxIYRbzGTpli4rfxsCK6Vw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  </body>
</html>

<?php
    } else {
        header("location:$baseURL/admin/index.php?msg=login_first");
    }
?>