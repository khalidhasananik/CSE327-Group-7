<?php
include './config/db_connection.php';
include './config/constants.php';
if ($_SESSION['member_logged_in'] == true) {
    header("location:$baseURL");
}
include 'frontend_auth.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login - Starbase</title>
    <meta charset="UTF-8">
    <meta name="description" content="Restaurant">
    <meta name="keywords" content="restaurant, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="./Starbase/Login/img/logo.jpeg" rel="shortcut icon" />
    <link
        href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900,900i&amp;display=swap"
        rel="stylesheet" />

    <link rel="stylesheet" href="./Starbase/Login/css/bootstrap.min.css" />
    <link rel="stylesheet" href="./Starbase/Login/css/font-awesome.min.css" />
    <link rel="stylesheet" href="./Starbase/Login/css/flaticon.css" />
    <link rel="stylesheet" href="./Starbase/Login/css/owl.carousel.css" />
    <link rel="stylesheet" href="./Starbase/Login/css/style.css" />
    <link rel="stylesheet" href="./Starbase/Login/css/animate.css" />
    <link rel="stylesheet" href="./Starbase/Login/css/icomoon.css" />
    <link rel="stylesheet" href="./Starbase/Login/css/ionicons.min.css" />
    <link rel="stylesheet" href="./Starbase/common.css" />

    <script nonce="b3451030-54b2-447a-9bcf-c29babb905d2">
    (function(w, d) {
        ! function(dk, dl, dm, dn) {
            dk[dm] = dk[dm] || {};
            dk[dm].executed = [];
            dk.zaraz = {
                deferred: [],
                listeners: []
            };
            dk.zaraz.q = [];
            dk.zaraz._f = function(dp) {
                return function() {
                    var dq = Array.prototype.slice.call(arguments);
                    dk.zaraz.q.push({
                        m: dp,
                        a: dq
                    })
                }
            };
            for (const dr of ["track", "set", "debug"]) dk.zaraz[dr] = dk.zaraz._f(dr);
            dk.zaraz.init = () => {
                var ds = dl.getElementsByTagName(dn)[0],
                    dt = dl.createElement(dn),
                    du = dl.getElementsByTagName("title")[0];
                du && (dk[dm].t = dl.getElementsByTagName("title")[0].text);
                dk[dm].x = Math.random();
                dk[dm].w = dk.screen.width;
                dk[dm].h = dk.screen.height;
                dk[dm].j = dk.innerHeight;
                dk[dm].e = dk.innerWidth;
                dk[dm].l = dk.location.href;
                dk[dm].r = dl.referrer;
                dk[dm].k = dk.screen.colorDepth;
                dk[dm].n = dl.characterSet;
                dk[dm].o = (new Date).getTimezoneOffset();
                if (dk.dataLayer)
                    for (const dy of Object.entries(Object.entries(dataLayer).reduce(((dz, dA) => ({
                            ...dz[1],
                            ...dA[1]
                        }))))) zaraz.set(dy[0], dy[1], {
                        scope: "page"
                    });
                dk[dm].q = [];
                for (; dk.zaraz.q.length;) {
                    const dB = dk.zaraz.q.shift();
                    dk[dm].q.push(dB)
                }
                dt.defer = !0;
                for (const dC of [localStorage, sessionStorage]) Object.keys(dC || {}).filter((dE => dE
                    .startsWith("_zaraz_"))).forEach((dD => {
                    try {
                        dk[dm]["z_" + dD.slice(7)] = JSON.parse(dC.getItem(dD))
                    } catch {
                        dk[dm]["z_" + dD.slice(7)] = dC.getItem(dD)
                    }
                }));
                dt.referrerPolicy = "origin";
                dt.src = "../../cdn-cgi/zaraz/sd0d9.js?z=" + btoa(encodeURIComponent(JSON.stringify(dk[dm])));
                ds.parentNode.insertBefore(dt, ds)
            };
            ["complete", "interactive"].includes(dl.readyState) ? zaraz.init() : dk.addEventListener(
                "DOMContentLoaded", zaraz.init)
        }(w, d, "zarazData", "script");
    })(window, document);
    </script>
</head>

<body>

    <div id="preloder">
        <div class="loader"></div>
    </div>

    <header class="header-section">
        <div class="header-warp">
            <div class="site-logo">
                <h2>STARBASE</h2>
            </div>

            <div class="nav-switch">
                <i class="fa fa-bars"></i>
            </div>

            <ul class="main-menu">
                <li><a href="./index.php">HOME</a></li>
                <li><a href="./programs.php">PROGRAMS</a></li>
                <li><a href="./gym.php">GYM</a></li>
                <li><a href="./cafe.php">CAFE</a></li>
                <li><a href="./salon.php">SALON</a></li>
                <li><a href="./parlor.php">PARLOR</a></li>
                <li>
                    <?php if ($_SESSION['member_logged_in'] == true) { ?>
                    <div class="dropdown">
                        <a style="color: #fff;">
                            <?php echo $_SESSION['memberName']; ?>
                        </a>
                        <div class="dropdown-content">
                            <a class="dropdown-item" href="<?= $baseURL ?>/dashboard.php">Dashboard</a>
                            <a class="dropdown-item" href="<?= $baseURL ?>/frontend_logout.php">Logout</a>
                        </div>
                    </div>
                    <?php } else { ?>
                    <a href="./login.php">LOGIN</a>
                    <?php } ?>
                </li>
                <li><a href="./admin/index.php">ADMIN</a></li>
            </ul>
            <div class="header-right">
                <div class="icon d-block pr-4 mr-2 d-flex topper justify-content-center align-items-center">
                    <a href="https://www.facebook.com/StarbaseClub/" target="_blank"><span
                            class="icon-facebook"></span></a>
                    <a href="https://www.instagram.com/starbaseclub/" target="_blank"><span
                            class="icon-instagram"></span></a>
                    <a href="https://goo.gl/maps/bnKHbYoj7XL6Vkbf7?coh=178573&entry=tt" target="_blank"><span
                            class="icon-map-marker"></span></a>
                </div>
            </div>
        </div>
    </header>

    <section class="services-section spad">
        <div class="container">
            <div class="main">
                <input type="checkbox" id="chk" aria-hidden="true">

                <div class="signup">
                    <form action="frontend_auth.php" method="post">
                        <label for="chk" aria-hidden="true">Login</label>
                        <input type="email" name="email" placeholder="Email" required="">
                        <input type="password" name="password" placeholder="Password" required="">
                        <button type="submit" name="login_btn">Login</button>
                    </form>
                </div>

                <div class="login">
                    <form action="frontend_auth.php" method="post">
                        <label for="chk" aria-hidden="true">Sign Up</label>

                        <input type="text" name="name" placeholder="Name" required="">
                        <input type="email" name="email" placeholder="Email" required="">
                        <input type="password" name="password" placeholder="Password" required="">
                        <input type="text" name="phone" placeholder="Phone" required="">
                        <select type="text" name="membership" required="">
                            <option value="" disabled selected>Membership Plan</option>
                            <?php while ($row = mysqli_fetch_assoc($plan_query)) { ?>
                            <option value="<?= $row['pid'] ?>">
                                <?= $row['pname'] . ' (' . intval($row['month_duration']) . ' month @ TAKA ' . $row['price'] . ')' ?>
                            </option>
                            <?php } ?>
                        </select>
                        <button type="submit" name="save">Sign Up</button>
                    </form>
                </div>
            </div>
        </div>
    </section>


    <!-- <footer class="footer-section" style="background-image: url(img/footer.jpeg);">
		<div class=" footer-bg-area set-bg">
			<div class="copyright">
				Copyright &copy;
				<script>document.write(new Date().getFullYear());</script> All rights reserved by Team Alpha
			</div>
		</div>
	</footer> -->

    <script src="./Starbase/Login/js/jquery-3.2.1.min.js"></script>
    <script src="./Starbase/Login/js/bootstrap.min.js"></script>
    <script src="./Starbase/Login/js/owl.carousel.min.js"></script>
    <script src="./Starbase/Login/js/circle-progress.min.js"></script>
    <script src="./Starbase/Login/js/main.js"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
    </script>
    <script defer
        src="https://static.cloudflareinsights.com/beacon.min.js/v52afc6f149f6479b8c77fa569edb01181681764108816"
        integrity="sha512-jGCTpDpBAYDGNYR5ztKt4BQPGef1P0giN6ZGVUi835kFF88FOmmn8jBQWNgrNd8g/Yu421NdgWhwQoaOPFflDw=="
        data-cf-beacon='{"rayId":"7c117abcafc291ab","version":"2023.4.0","b":1,"token":"cd0b4b3a733644fc843ef0b185f98241","si":100}'
        crossorigin="anonymous"></script>
</body>

</html>