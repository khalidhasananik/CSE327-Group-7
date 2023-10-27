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
    <title>Starbase Admin - Create Member</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
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

    <!-- Add member Form -->
    <div class="container">
        <div class="row mt-5">
            <div class="add-btn d-flex justify-content-center">
                <a class="btn btn-primary" href="index.php"><i class="fa-solid fa-list"></i> Members List</a>
            </div>
            <h3 class="col-md-6 mt-2 offset-md-3 text-center">Add Member</h3>
            <div class="col-md-6 offset-md-3 mt-2 mb-4 border rounded p-4">
                <form method="post" action="query.php">
                    <div class="mb-3">
                        <label for="memberName" class="form-label">Name</label>
                        <input type="text" class="form-control" id="memberName" name="memberName"
                            placeholder="Member Name" required>
                    </div>
                    <div class="mb-3">
                        <label for="memberEmail" class="form-label">Email</label>
                        <input type="email" class="form-control" id="memberEmail" name="memberEmail"
                            placeholder="Member Email" required>
                    </div>
                    <div class="mb-3">
                        <label for="memberPhone" class="form-label">Phone</label>
                        <input type="tel" class="form-control" id="memberPhone" name="memberPhone"
                            placeholder="Member Phone number" required>
                        <small>Phone number will be used for member login</small>
                    </div>
                    <div class="mb-3">
                        <label for="memberJoinDate" class="form-label">Join Date</label>
                        <input type="date" class="form-control" id="memberJoinDate" name="memberJoinDate" placeholder=""
                            required>
                    </div>
                    <div class="mb-3">
                        <label for="memberPlan" class="form-label">Plan Subscribed</label>
                        <select class="form-control" name="memberPlan" id="memberPlan" required>
                            <?php while ($row = mysqli_fetch_assoc($plan_query)) {?>
                            <option value="<?=$row['pid']?>">
                                <?= $row['pname'] . ' (' . intval($row['month_duration']) . ' month @ TAKA ' . $row['price'] . ')' ?>
                            </option>
                            <?php }?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="memberPassword" class="form-label">Password</label>
                        <input type="password" class="form-control" id="memberPassword" name="memberPassword"
                            placeholder="Password" required>
                    </div>
                    <div class="mb-3">
                        <label for="memberConfirmPassword" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" id="memberConfirmPassword"
                            name="memberConfirmPassword" placeholder="Confirm Password" required>
                    </div>
                    <button type="submit" id="add-member-btn" name="add-member-btn" class="btn btn-primary">Add
                        Member</button>
                </form>
            </div>
        </div>
    </div>
    <!-- ./Add member Form -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/js/all.min.js"
        integrity="sha512-rpLlll167T5LJHwp0waJCh3ZRf7pO6IT1+LZOhAyP6phAirwchClbTZV3iqL3BMrVxIYRbzGTpli4rfxsCK6Vw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</body>

</html>

<?php
    } else {
        header("location:$baseURL/admin/index.php?msg=login_first");
    }
?>