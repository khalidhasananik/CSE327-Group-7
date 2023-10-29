<!-- Including the PHP files for Backend connection -->
<?php
include './config/db_connection.php';
include './config/constants.php';
include 'frontend_query.php';
?>

<!-- HTML Begins -->
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Page Details -->
    <title>Starbase - Gym, Lifestyle Lounge and Cafe</title>
    <meta charset="UTF-8">
    <meta name="description" content="Restaurant">
    <meta name="keywords" content="restaurant, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Site Logo -->
    <link href="./Starbase/Home/img/logo.jpeg" rel="shortcut icon" />
    <link
        href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900,900i&amp;display=swap"
        rel="stylesheet" />

    <!-- Connecting the CSS Files -->
    <link rel="stylesheet" href="./Starbase/Home/css/bootstrap.min.css" />
    <link rel="stylesheet" href="./Starbase/Home/css/font-awesome.min.css" />
    <link rel="stylesheet" href="./Starbase/Home/css/flaticon.css" />
    <link rel="stylesheet" href="./Starbase/Home/css/owl.carousel.css" />
    <link rel="stylesheet" href="./Starbase/Home/css/style.css" />
    <link rel="stylesheet" href="./Starbase/Home/css/animate.css" />
    <link rel="stylesheet" href="./Starbase/Home/css/icomoon.css" />
    <link rel="stylesheet" href="./Starbase/Home/css/ionicons.min.css" />
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
    <!-- Preloader for when the site boots up -->
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

            <ul class="main-menu">
                <li><a href="./index.php" class="active">HOME</a></li>
                <li><a href="./programs.php">PROGRAMS</a></li>
                <li><a href="./gym.php">GYM</a></li>
                <li><a href="./cafe.php">CAFE</a></li>
                <li><a href="./salon.php">SALON</a></li>
                <li><a href="./parlor.php">PARLOR</a></li>
                <li>
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
                        <a href="./login.php">LOGIN</a>
                    <?php } ?>
                </li>

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


    <section class="hero-section">
        <div class="hero-slider owl-carousel">
            <div class="hs-item set-bg" data-setbg="./Starbase/Home/img/slider/bg_2.jpg">
                <div class="hs-content">
                    <div class="hsc-warp">
                        <h2>Starbase is for</h2>
                        <h3>Everyone</h3>
                        <h2 class="subheading">Shape your body</h2>
                    </div>
                </div>
            </div>
            <div class="hs-item set-bg" data-setbg="./Starbase/Home/img/slider/ridy-sheikh.jpeg">
                <div class="hs-content">
                    <div class="hsc-warp">
                        <h2>Starbase</h2>
                        <h3>Gym</h3>
                        <h2 class="subheading">No Excuses</h2>
                    </div>
                </div>
            </div>
            <div class="hs-item set-bg" data-setbg="./Starbase/Home/img/slider/rest.jpg">
                <div class="hs-content">
                    <div class="hsc-warp">
                        <h2>Starbase</h2>
                        <h3>Restaurant</h3>
                        <h2 class="subheading">Eat Fresh</h2>
                    </div>
                </div>
            </div>
            <div class="hs-item set-bg" data-setbg="./Starbase/Home/img/slider/saloon.jpg">
                <div class="hs-content">
                    <div class="hsc-warp">
                        <h2>Starbase</h2>
                        <h3>Parlor</h3>
                        <h2 class="subheading">A Whole New You</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="services-section spad">
        <div class="container">
            <div class="about-us">
                <h1>Who we are</h1>
            </div>
            <div class="about-us">
                <h2>STARBASE is a lifestyle lounge
                    which includes Gym (Steam - Sauna), Yoga, Zumba, Cafe, Saloon,
                    Parlor, VIP Lounge, Shop etc. The largest lifestyle lounge in town, with over 18,500 sqft
                    footprint, is equipped with
                    cutting edge technology and
                    magnificent ambience.</h2>
            </div>
            <div class="about-us">
                <h1>What we offer</h1>
            </div>
            <div class="container3">
                <div class="box">
                    <a href="./gym.php">
                        <div class="imgBx">
                            <img src="./Starbase/Home/img/reactive gym.jpeg" alt="">
                        </div>
                        <div class="content">
                            <div>
                                <h2>GYM</h2>
                                <p>Click to expand
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="box">
                    <a href="./cafe.php">
                        <div class="imgBx">
                            <img src="./Starbase/Home/img/reactive cafe.jpeg" alt="">
                        </div>
                        <div class="content">
                            <div>
                                <h2>CAFE</h2>
                                <p>Click to expand
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="box">
                    <a href="./salon.php">
                        <div class="imgBx">
                            <img src="./Starbase/Home/img/reactive salon.jpeg" alt="">
                        </div>
                        <div class="content">
                            <div>
                                <h2>SALON</h2>
                                <p>Click to expand
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="box">
                    <a href="./parlor.php">
                        <div class="imgBx">
                            <img src="./Starbase/Home/img/reactive parlor.jpeg" alt="">
                        </div>
                        <div class="content">
                            <div>
                                <h2>PARLOR</h2>
                                <p>Click to expand
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section testimony-section pad-bottom">
        <div class="container">
            <div class="about-us">
                <h1>Testimonials</h1>
            </div>
            <div class="row ftco-animate">
                <div class="col-md-12">
                    <div class="carousel-testimony owl-carousel">
                        <?php while ($row = mysqli_fetch_assoc($review_query)) { ?>
                            <div class="item f-height">
                                <div class="testimony-wrap p-4 pb-5">
                                    <div class="text">
                                        <p class="mb-4 pb-1 pl-4 line">
                                            <?= $row['review']; ?>
                                        </p>
                                        <div class="d-flex align-items-center mb-auto">
                                            <div class="ml-4">
                                                <p class="name">
                                                    <?= $row['c_name']; ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>

        <?php if ($_SESSION['member_logged_in'] == true) { ?>
            <div class="container2">
                <div class="about-us">
                    <h2>WRITE A REVIEW FOR US</h2>
                </div>
                <div class="main">
                    <div class="signup">
                        <form action="frontend_query.php" method="post">
                            <textarea placeholder="Your Review" rows="3" required name="review" class=r-textarea></textarea>
                            <button type="submit" name="saveReview" class="r-button">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        <?php } ?>
    </section>

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

    <script src="./Starbase/Home/js/jquery-3.2.1.min.js"></script>
    <script src="./Starbase/Home/js/bootstrap.min.js"></script>
    <script src="./Starbase/Home/js/owl.carousel.min.js"></script>
    <script src="./Starbase/Home/js/circle-progress.min.js"></script>
    <script src="./Starbase/Home/js/main.js"></script>
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