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
    <title>Starbase Admin - Update Member</title>
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

    <!-- Edit Member Form -->
    <div class="container">
      <div class="row mt-5">
        <div class="add-btn d-flex justify-content-center">
          <a class="btn btn-primary" href="index.php"><i class="fa-solid fa-list"></i> Member List</a>
        </div>
        <h3 class="col-md-6 mt-2 offset-md-3 text-center">Update Member</h3>
        <!-- Start form container -->
        <div class="col-md-6 offset-md-3 mt-2 mb-4 border rounded p-4">
          <!-- Start form -->
          <form method="post" action=<?php echo 'query.php?member_id='.$sid_row['mid']?>>
            <!-- Name input -->
            <div class="mb-3">
              <label for="editMemberName" class="form-label">Name</label>
              <input type="text" class="form-control" id="editMemberName" name="editMemberName" value="<?php echo $sid_row['mname'];?>" placeholder="member Name" required>
            </div>
            <!-- Email input -->
            <div class="mb-3">
              <label for="editMemberEmail" class="form-label">Email</label>
              <input type="email" class="form-control" id="editMemberEmail" name="editMemberEmail" value="<?php echo $sid_row['email'];?>" placeholder="member Email" required>
            </div>
            <!-- Phone input -->
            <div class="mb-3">
              <label for="editMemberPhone" class="form-label">Phone</label>
              <input type="tel" disabled class="form-control" id="editMemberPhone" name="editMemberPhone" value="<?php echo $sid_row['phone'];?>" placeholder="member Phone number" required>
            </div>
            <!-- Address input -->
            <div class="mb-3">
              <label for="editMemberJoinDate" class="form-label">Join Date</label>
              <input type="date" class="form-control" id="editMemberJoinDate" name="editMemberJoinDate" placeholder="" value="<?php echo date('Y-m-d', strtotime($sid_row['joindate']));?>" required>
            </div>
            <div class="mb-3">
              <label for="editMemberPlan" class="form-label">Plan Subscribed</label>
              <select class="form-control" name="editMemberPlan" id="editMemberPlan" value="<?php echo $sid_row['pid'];?>" required>
                <?php while ($row = mysqli_fetch_assoc($plan_query)) {?>
                <option value="<?=$row['pid']?>" <?=  $sid_row['pid'] == $row['pid'] ? 'selected' : '' ?>><?= $row['pname'] . ' (' . intval($row['month_duration']) . ' month @ TAKA ' . $row['price'] . ')' ?></option>
                <?php }?>
              </select>
            </div>
            <div class="mb-3">
              <label for="editMemberDiscount" class="form-label">Discount</label>
              <input type="number" class="form-control" id="editMemberDiscount" name="editMemberDiscount" placeholder="Member Discount (%)" value="<?php echo $sid_row['discount'];?>" required>
            </div>
            <!-- Submit button -->
            <button type="submit" id="update-member-btn" name="update-member-btn" class="btn btn-primary">Update Member</button>
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