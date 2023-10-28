<?php
include './config/db_connection.php';
include './config/constants.php';
include 'frontend_cafe.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Cafe - Starbase</title>
    <meta charset="UTF-8">
    <meta name="description" content="Restaurant">
    <meta name="keywords" content="restaurant, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon -->
    <link href="./Starbase/Cafe/img/logo.jpeg" rel="shortcut icon" />

    <!-- External CSS Styles -->
    <link
        href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900,900i&amp;display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="./Starbase/Cafe/css/bootstrap.min.css" />
    <link rel="stylesheet" href="./Starbase/Cafe/css/font-awesome.min.css" />
    <link rel="stylesheet" href="./Starbase/Cafe/css/flaticon.css" />
    <link rel="stylesheet" href="./Starbase/Cafe/css/owl.carousel.css" />
    <link rel="stylesheet" href="./Starbase/Cafe/css/style.css" />
    <link rel="stylesheet" href="./Starbase/Cafe/css/animate.css" />
    <link rel="stylesheet" href="./Starbase/Cafe/css/icomoon.css" />
    <link rel="stylesheet" href="./Starbase/Cafe/css/ionicons.min.css" />
    <link rel="stylesheet" href="./Starbase/common.css" />

    <!-- Zaraz Tracking Script -->
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
    <!-- Preloader -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section -->
    <header class="header-section">
        <div class="header-warp">
            <div class="site-logo">
                <h2>STARBASE</h2>
            </div>

            <div class="nav-switch">
                <i class="fa fa-bars"></i>
            </div>

            <!-- Main Menu -->
            <ul class="main-menu">
                <li><a href="./index.php">HOME</a></li>
                <li><a href="./programs.php">PROGRAMS</a></li>
                <li><a href="./gym.php">GYM</a></li>
                <li><a href="./cafe.php" class="active">CAFE</a></li>
                <li><a href="./salon.php">SALON</a></li>
                <li><a href="./parlor.php">PARLOR</a></li>
                <li>
                    <!-- Conditional Dropdown Menu for Member -->
                    <?php if ($_SESSION['member_logged_in'] == true) { ?>
                    <div class="dropdown">
                        <a style="color: #fff;" class="active">
                            <?php echo strtoupper($_SESSION['memberName']); ?>
                        </a>
                        <div class="dropdown-content">
                            <a class="dropdown-item" href="<?= $baseURL ?>/dashboard.php">Dashboard</a>
                            <a class="dropdown-item" href="<?= $baseURL ?>/frontend_logout.php">Logout</a>
                        </div>
                    </div>
                    <?php } else { ?>
                    <!-- Login Option for Non-Members -->
                    <a href="./login.php">LOGIN</a>
                    <?php } ?>
                </li>
                <!-- <li><a href="./admin/index.php">ADMIN</a></li> -->
            </ul>

            <!-- Social Media Icons -->
            <div class="header-right">
                <div class="icon d-block pr-4 mr-2 d-flex topper justify-content-center align-items-center">
                    <a href="https://www.facebook.com/StarbaseClub/" target="_blank"><span
                            class="icon-facebook"></span></a>
                    <a href="https://www.instagram.com/starbaseclub/" target="_blank"><span
                            class="icon-instagram"></span></a>
                    <a href="https://twitter.com/StarbaseClub" target="_blank"><span class="icon-twitter"></span></a>
                </div>
                <!-- Contact Information -->
                <div class="topp pr-4">
                    <p class="mb-0">
                        <span class="icon-map"></span> Location
                    </p>
                </div>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero-section">
        <!-- Owl Carousel -->
        <div class="hero-slider owl-carousel">
            <div class="hs-item set-bg" data-setbg="img/hero/1.jpg"></div>
            <div class="hs-item set-bg" data-setbg="img/hero/2.jpg"></div>
            <div class="hs-item set-bg" data-setbg="img/hero/3.jpg"></div>
        </div>
    </section>

    <!-- Our Services -->
    <div class="section-title">
        <span>Our Services</span>
        <h2>DISCOVER OUR MENU</h2>
    </div>

    <!-- Our Menu -->
    <div class="menu-section spad">
        <div class="container">
            <div class="row">
                <!-- Categories -->
                <div class="col-lg-12 col-md-12">
                    <ul class="menu-tab">
                        <li class="active" data-type="*">All</li>
                        <li data-type=".appetizers">Appetizers</li>
                        <li data-type=".starters">Starters</li>
                        <li data-type=".main-course">Main Course</li>
                        <li data-type=".desserts">Desserts</li>
                    </ul>
                </div>
            </div>

            <div class="row menu-filter">
                <div class="col-lg-12 col-md-12">
                    <div class="row">
                        <!-- Menu Items -->
                        <div class="mix col-lg-6 col-md-6 appetizers">
                            <div class="menu-item">
                                <img src="img/menu/1.jpg" alt="">
                                <div class="mi-title">
                                    <h5>Spinach</h5>
                                    <h6>$24.90</h6>
                                </div>
                            </div>
                        </div>
                        <!-- ... (more menu items) ... -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Make a Reservation -->
    <div class="reservation-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="rs-info">
                        <div class="section-title">
                            <span>Make a Reservation</span>
                            <h2>BOOK A TABLE</h2>
                        </div>
                        <p>Starbase Cafe is the perfect place to enjoy your favorite dishes. Reserve a table online
                            and save your spot!</p>
                        <div class="rs-form set-bg" data-setbg="img/reservation-bg.jpg">
                            <div class="rs-inner">
                                <form action="#">
                                    <div class="rs-date">
                                        <input type="text" placeholder="Date" class="datepicker">
                                        <i class="icon_calendar"></i>
                                    </div>
                                    <div class="rs-number">
                                        <input type="text" placeholder="Number of seats">
                                        <i class="icon_profile"></i>
                                    </div>
                                    <div class="rs-submit">
                                        <button class="site-btn">BOOK NOW</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Section -->
    <footer class="footer-section">
        <div class="container">
            <div class="footer-logo">
                <a href="./index.php">
                    <h2>STARBASE</h2>
                </a>
            </div>
            <div class="row">
                <!-- Contact Information -->
                <div class="col-lg-6">
                    <div class="contact-info">
                        <div class="ci-title">
                            <h5>Contact Information</h5>
                        </div>
                        <p>Location: [Your Cafe's Address]</p>
                        <p>Phone: [Your Contact Number]</p>
                        <p>Email: [Your Email Address]</p>
                    </div>
                </div>
                <!-- Social Media Links -->
                <div class="col-lg-6">
                    <div class="footer-social">
                        <a href="https://www.facebook.com/StarbaseClub/" target="_blank">Facebook</a>
                        <a href="https://www.instagram.com/starbaseclub/" target="_blank">Instagram</a>
                        <a href="https://twitter.com/StarbaseClub" target="_blank">Twitter</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- External JS Scripts -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="./Starbase/Cafe/js/bootstrap.min.js"></script>
    <script src="./Starbase/Cafe/js/owl.carousel.min.js"></script>
    <script src="./Starbase/Cafe/js/parallax.min.js"></script>
    <script src="./Starbase/Cafe/js/main.js"></script>
    <script src="https://ajax.cloudflare.com/cdn-cgi/scripts/5937645e/cloudflare-static/rocket-loader.min.js"
        data-cf-settings="b3451030-54b2-447a-9bcf-c29babb905d2"></script>
</body>

</html>
