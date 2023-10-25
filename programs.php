<!-- Programs Page of the Website -->

<!-- Including the PHP Files -->
<?php
include './config/db_connection.php';
include './config/constants.php';
?>

<!-- Code Begins -->
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Page Description -->
    <title>Programs - Starbase</title>
    <meta charset="UTF-8">
    <meta name="description" content="Restaurant">
    <meta name="keywords" content="restaurant, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Site Logo -->
    <link href="./Starbase/Program/img/logo.jpeg" rel="shortcut icon" />

    <!-- Including the CSS Files -->
    <link rel="stylesheet" href="./Starbase/Program/css/bootstrap.min.css" />
    <link rel="stylesheet" href="./Starbase/Program/css/font-awesome.min.css" />
    <link rel="stylesheet" href="./Starbase/Program/css/flaticon.css" />
    <link rel="stylesheet" href="./Starbase/Program/css/owl.carousel.css" />
    <link rel="stylesheet" href="./Starbase/Program/css/style.css" />
    <link rel="stylesheet" href="./Starbase/Program/css/animate.css" />
    <link rel="stylesheet" href="./Starbase/Program/css/icomoon.css" />
    <link rel="stylesheet" href="./Starbase/Program/css/ionicons.min.css" />
    <link rel="stylesheet" href="./Starbase/common.css" />


    <script nonce="b3451030-54b2-447a-9bcf-c29babb905d2">
        (function (w, d) {
            ! function (dk, dl, dm, dn) {
                dk[dm] = dk[dm] || {};
                dk[dm].executed = [];
                dk.zaraz = {
                    deferred: [],
                    listeners: []
                };
                dk.zaraz.q = [];
                dk.zaraz._f = function (dp) {
                    return function () {
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
    <!-- Preloader for when the site loads -->
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
            <!-- Navigation Bar Links -->
            <ul class="main-menu">
                <li><a href="./index.php">HOME</a></li>
                <li><a href="./programs.php" class="active">PROGRAMS</a></li>
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
                <!-- <li><a href="./admin/index.php">ADMIN</a></li> -->
            </ul>
            <!-- Navigation Bar Links Ends -->
            <!-- Header Right Side Icons -->
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

    <!-- Body of the website -->
    <section class="spad">
        <div class="container">
            <div class="about-us">
                <h1>STARBASE PROGRAMS</h1>
            </div>
            <!-- First Card -->
            <div class="wrap animate pop">
                <div class="overlay">
                    <div class="overlay-content animate slide-left delay-2">
                        <h1 class="animate slide-left pop delay-4"></h1>
                        <p class="animate slide-left pop delay-5" style="color: white; margin-bottom: 2.5rem;">

                        </p>
                    </div>
                    <div class="image-content animate slide delay-5"></div>
                    <div class="dots animate">
                        <div class="dot animate slide-up delay-6"></div>
                        <div class="dot animate slide-up delay-7"></div>
                        <div class="dot animate slide-up delay-8"></div>
                    </div>
                </div>
                <div class="text-reactive" style="background-image: url(./Starbase/Program/img/inner-phoenix.jpeg);">

                </div>
            </div>
            <!-- First Card Ends -->
            <!-- Second Card -->
            <div class="wrap animate pop">
                <div class="overlay">
                    <div class="overlay-content animate slide-left delay-2">
                        <h1 class="animate slide-left pop delay-4"></h1>
                        <p class="animate slide-left pop delay-5" style="color: white; margin-bottom: 2.5rem;">

                        </p>
                    </div>
                    <div class="image-content2 animate slide delay-5"></div>
                    <div class="dots animate">
                        <div class="dot animate slide-up delay-6"></div>
                        <div class="dot animate slide-up delay-7"></div>
                        <div class="dot animate slide-up delay-8"></div>
                    </div>
                </div>
                <div class="text-reactive" style="background-image: url(./Starbase/Program/img/inner-gemini.jpeg);">

                </div>
            </div>
            <!-- Second Card Ends -->
        </div>
    </section>

    <!-- Footer Section -->
    <footer class="footer-section">
        <div class="upper">
            <h1>GET IN TOUCH TODAY</h1>
            <p>Get your membership with Bangladesh's biggest lifestyle lounge and enjoy exclusive perks,access to
                premium amenities and unforgettable experiences.</p>
        </div>
        <div class="lower">
            <div class="boxes">
                <h2>
                    LOCATION
                </h2>
                <p>
                    Road-9, Avenue-2, Mirpur DOHS Cultural Center, Mirpur DOHS, Dhaka.
                </p>
            </div>
            <div class="boxes">
                <h2>
                    EMAIL ADDRESS
                </h2>
                <p>
                    starbase1@gmail.com
                </p>
            </div>
            <div class="boxes">
                <h2>
                    CONTACT NUMBER
                </h2>
                <p>
                    +880 17 7611 7766
                </p>
            </div>
        </div>

    </footer>
    <!-- Footer Section Ends -->

    <!-- Including the JS Files -->
    <script src="./Starbase/Program/js/jquery-3.2.1.min.js"></script>
    <script src="./Starbase/Program/js/bootstrap.min.js"></script>
    <script src="./Starbase/Program/js/owl.carousel.min.js"></script>
    <script src="./Starbase/Program/js/circle-progress.min.js"></script>
    <script src="./Starbase/Program/js/main.js"></script>
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