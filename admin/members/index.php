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
    <title>Starbase Admin - Members List</title>
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
            <a class="btn btn-primary" href="addMember.php"><i class="fa-solid fa-plus"></i> Add Member</a>
          </div>

          <form method="post" action="query.php" class="add-btn d-flex justify-content-end mb-3">
            <div class="">
              <input type="text" class="form-control" id="search" name="search" placeholder="Name, Email or Phone" value="<?php echo htmlspecialchars($_GET["search"]);?>">
            </div>
            <button type="submit" id="member-search-btn" name="member-search-btn" class="btn btn-primary">Search</button>
          </form>
          <!-- Member Details Table -->
          <div class="employee_table d-flex justify-content-center border rounded mt-5">
            <table class="table table-striped text-center no-margin-bottom">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Name</th>
                  <th scope="col">Email</th>
                  <th scope="col">Phone</th>
                  <th scope="col">Join Date</th>
                  <th scope="col">Plan</th>
                  <th scope="col">Discount</th>
                  <th scope="col">Actions</th>
                </tr>
              </thead>
              <tbody>
                <?php $id = 1; while ($row = mysqli_fetch_assoc($s_query)) {?>            
                <tr class="middle-td">
                  <td scope="row"><?= $id++;?></td>
                  <td><?= $row['mname']; ?></td>
                  <td><?= $row['email']; ?></td>
                  <td><?= $row['phone']; ?></td>
                  <td><?= date('d-m-Y', strtotime($row['joindate'])); ?></td>
                  <td><?= $row['pname'] . ' (' . intval($row['month_duration']) . ' month @ TAKA ' . $row['price'] . ')' ?></td>
                  <td><?= $row['discount']; ?></td>
                  <td>
                    <div class="d-flex">
                      <a href=<?= "updateMember.php?member_id=$row[mid]" ?>  class="btn btn-success m-1">Edit</a>
                      <form action="<?= "query.php?member_id=$row[mid]" ?>" method="post" onsubmit="return confirm('Do you really want to delete the member?');">
                        <button type="submit" class="btn btn-danger m-1" name="del-member" id="del-member">Delete</button>
                      </form>
                    </div>
                  </td>
                </tr>        
                <?php }?>
              </tbody>                            
            </table>
          </div>
          <!-- ./Member Details Table -->
        </div>
      </div>
    </div>
    <!-- ./Member Details Section -->

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