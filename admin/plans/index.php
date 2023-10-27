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
    <title>Starbase Admin - Plan List</title>
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

    <div class="container">
      <div class="row">
        <div class="col-md-12 mt-5 ">
          <div class="add-btn d-flex justify-content-center">
            <a class="btn btn-primary" href="addPlan.php"><i class="fa-solid fa-plus"></i> Add Plan</a>
          </div>
          <!-- Employee Details Table -->
          <div class="employee_table d-flex justify-content-center border rounded mt-5">
            <table class="table table-striped text-center no-margin-bottom">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Name</th>
                  <th scope="col">Price</th>
                  <th scope="col">Duration</th>
                  <th scope="col">No. of Subscribed Member</th>
                  <th scope="col">Actions</th>
                </tr>
              </thead>
              <tbody>
                <?php $id = 1; while ($row = mysqli_fetch_assoc($s_query)) {?>            
                <tr class="middle-td">
                  <td scope="row"><?= $id++;?></td>
                  <td><?= $row['pname']; ?></td>
                  <td><?= $row['price']; ?></td>
                  <td><?= intval($row['month_duration']); ?></td>
                  <td><?= $row['memberCount']; ?></td>
                  <td>
                    <div class="d-flex justify-content-center">
                      <a href=<?= "updatePlan.php?pid=$row[pid]" ?>  class="btn btn-success m-1">Edit</a>
                      <form action="<?= "query.php?plan_id=$row[pid]" ?>" method="post" onsubmit="return confirm('Do you really want to delete the plan?');">
                        <button type="submit" class="btn btn-danger m-1" name="del-plan" id="del-plan">Delete</button>
                      </form>
                    </div>
                  </td>
                </tr>        
                <?php }?>
              </tbody>                            
            </table>
          </div>
          <!-- ./Employee Details Table -->
        </div>
      </div>
    </div>
    <!-- ./Employee Details Section -->

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