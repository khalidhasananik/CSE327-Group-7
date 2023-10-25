<?php
    include '../config/db_connection.php';
    include '../config/constants.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Starbase Admin - Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/style.css">
    <style>
      .navbar-collapse a.admin {
        color: #fff !important;
      }
    </style>
  </head>
  <body>
    <!-- Navbar -->
    <!-- <nav class="navbar bg-light">
        <div class="container">
            <span class="navbar-brand mb-0 h1"><?php echo $_SESSION['adminName'];?></span>
            <div class="d-flex justify-content-end logout-btn"><a href="../assets/backend/logout.php">Logout</a></div>
        </div>
    </nav> -->

    <?php
        include 'nav.php';
    ?>

    <div class="card bg-light text-dark mt-5">
      <div class="card-body text-center">My Dashboard</div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/js/all.min.js" integrity="sha512-rpLlll167T5LJHwp0waJCh3ZRf7pO6IT1+LZOhAyP6phAirwchClbTZV3iqL3BMrVxIYRbzGTpli4rfxsCK6Vw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  </body>
</html>
