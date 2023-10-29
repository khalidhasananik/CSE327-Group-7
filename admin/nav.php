<?php
    include '../config/db_connection.php';
    include '../config/constants.php';

    function getClassesOfLink($requestUri) {
        $current_file_name = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        
        if (strpos($current_file_name, $requestUri))
            echo 'class="nav-link active"';
        else
            echo 'class="nav-link"';
    }
?>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <div class="container-fluid">
        <a class="navbar-brand me-5" href="<?=$baseURL?>/admin/home.php">
            <img src="<?=$baseURL?>/assets/images/logo.jpg" alt="Logo" style="width:250px;" class="rounded-pill">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="ms-5 collapse navbar-collapse justify-content-between" id="collapsibleNavbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a <?=getClassesOfLink("members")?> href="<?=$baseURL?>/admin/members/index.php">Members</a>
                </li>
                <li class="nav-item">
                    <a <?=getClassesOfLink("plans")?> href="<?=$baseURL?>/admin/plans/index.php">Plans</a>
                </li>
                <li class="nav-item">
                    <a <?=getClassesOfLink("employees")?> href="<?=$baseURL?>/admin/employees/index.php">Employees</a>
                </li>
                <li class="nav-item">
                    <a <?=getClassesOfLink("reservations")?>
                        href="<?=$baseURL?>/admin/reservations/index.php">Reservations</a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link admin dropdown-toggle" href="#" role="button"
                        data-bs-toggle="dropdown"><?php echo $_SESSION['adminName'];?></a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="<?=$baseURL?>/admin/logout.php">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- ./Navbar -->