<?php
include './config/db_connection.php';
include './config/constants.php';
include 'frontend_query.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Salon - Starbase</title>
    <meta charset="UTF-8">
    <meta name="description" content="Restaurant">
    <meta name="keywords" content="restaurant, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Website's favicon -->
    <link href="./Starbase/Salon/img/logo.jpeg" rel="shortcut icon" />
    
    <!-- Link to external fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900,900i&amp;display=swap"
        rel="stylesheet" />

    <!-- External CSS stylesheets for styling the page -->
    <link rel="stylesheet" href="./Starbase/Salon/css/bootstrap.min.css" />
    <link rel="stylesheet" href="./Starbase/Salon/css/font-awesome.min.css" />
    <link rel="stylesheet" href="./Starbase/Salon/css/flaticon.css" />
    <link rel="stylesheet" href="./Starbase/Salon/css/owl.carousel.css" />
    <link rel="stylesheet" href="./Starbase/Salon/css/style.css" />
    <link rel="stylesheet" href="./Starbase/Salon/css/animate.css" />
    <link rel="stylesheet" href="./Starbase/Salon/css/icomoon.css" />
    <link rel="stylesheet" href="./Starbase/Salon/css/ionicons.min.css" />
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
    <!-- Preloader -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header section -->
    <header class="header-section">
        <div class="header-warp">
            <div class="site-logo">
                <h2>STARBASE</h2>
            </div>

            <!-- Navigation menu switch icon -->
            <div class="nav-switch">
                <i class="fa fa-bars"></i>
            </div>

            <!-- Main navigation menu -->
            <ul class="main-menu">
                <li><a href="./index.php">HOME</a></li>
                <li><a href="./programs.php">PROGRAMS</a></li>
                <li><a href="./gym.php">GYM</a></li>
                <li><a href="./cafe.php">CAFE</a></li>
                <li><a href="./salon.php" class="active">SALON</a></li>
                <li><a href="./parlor.php">PARLOR</a></li>
                <li>
                    <?php if ($_SESSION['member_logged_in'] == true) { ?>
                        
                        <!-- User dropdown menu for logged-in users -->
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
                        <!-- Link to login page for non-logged-in users -->
                        <a href="./login.php">LOGIN</a>
                    <?php } ?>
                </li>
            </ul>

            <!-- Social media icons -->
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

    <!-- Carousel-->
    <section class="hero-section">
        <div class="hero-slider owl-carousel">
            <!-- Slide 1 -->
            <div class="hs-item set-bg" data-setbg="./Starbase/Salon/img/slider/1.jpeg">
                <div class="hs-content">
                    <div class="hsc-warp">
                        <h2>STARBASE SALON<span>.</span></h2>

                    </div>
                </div>
            </div>
            <!-- Slide 2 -->
            <div class="hs-item set-bg" data-setbg="./Starbase/Salon/img/slider/2.jpeg">
                <div class="hs-content">
                    <div class="hsc-warp">
                        <h2>BOLD<span>.</span> GROOMED<span>.</span> CONFIDENT<span>.</span></h2>

                    </div>
                </div>
            </div>
            <!-- Slide 3 -->
            <div class="hs-item set-bg" data-setbg="./Starbase/Salon/img/slider/3.jpeg">
                <div class="hs-content">
                    <div class="hsc-warp">
                        <h2>UNLEASH YOUR BEAUTY<span>.</span></h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services-section spad">
        <div class="container">
            <!-- Section title and icons -->
            <div class="section-title">
                <img src="Starbase/Salon/img/icons/salon.png">
                <h2>Our Services</h2>
            </div>
            <!-- Service items -->
            <div class="row services">
                <div class="col-lg-3 col-md-6 service-item">
                    <img src="Starbase/Salon/img/icons/hair.png">
                    <h3>HAIR CUT</h3>
                </div>
                <div class="col-lg-3 col-md-6 service-item">
                    <img src="Starbase/Salon/img/icons/hairdryer.png">
                    <h3>HAIR COLOR</h3>
                </div>
                <div class="col-lg-3 col-md-6 service-item">
                    <img src="Starbase/Salon/img/icons/sauna.png">
                    <h3>FACIAL</h3>
                </div>
                <div class="col-lg-3 col-md-6 service-item">
                    <img src="Starbase/Salon/img/icons/massage (1).png">
                    <h3>MASSAGE</h3>
                </div>
            </div>
        </div>
    </section>

    <!-- Image Gallery Sections -->
    <div class="gallery">
        <div class="container5">
            <div class="box">
                <div class="imgBox">
                    <img src="./Starbase/Salon/img/hair.jpeg">
                </div>
                <div class="content">
                    <h2>Hair Cut</br>
                        <span></span>
                    </h2>
                </div>
            </div>
           
            <div class="box">
                <div class="imgBox">
                    <img src="./Starbase/Salon/img/hcolor.jpeg">
                </div>
                <div class="content">
                    <h2>Hair Color</br>
                        <span></span>
                    </h2>
                </div>
            </div>
        </div>
    </div>
    <div class="gallery">
        <div class="container5">
            <div class="box">
                <div class="imgBox">
                    <img src="./Starbase/Salon/img/facial.jpeg">
                </div>
                <div class="content">
                    <h2>Facials</br>
                        <span></span>
                    </h2>
                </div>

            </div>
            <div class="box">
                <div class="imgBox">
                    <img src="./Starbase/Salon/img/massage.jpeg">
                </div>
                <div class="content">
                    <h2>Massage</br>
                        <span></span>
                    </h2>
                </div>
            </div>
        </div>
    </div>

    <!-- Booking section -->
    <section class="services-section spad">
        <div class="container2">
            <div class="about-us">
                <h2>BOOK AN APPOINTMENT AT</h2>
                <h1>Starbase Salon</h1>
            </div>
            <div class="main">
                <input type="checkbox" id="chk" aria-hidden="true">

                <div class="signup">
                    <form action="frontend_query.php" method="post">
                        <label for="chk" aria-hidden="true">Booking</label>
                        <input type="text" name="name" placeholder="Name" required="">
                        <input type="email" name="email" placeholder="Email" required="">
                        <input type="text" name="phone" placeholder="Phone" required="">
                        <input type="date" name="bdate" required />
                        <input type="time" name="btime" required />
                        <select type="text" name="service" required>
                            <option value="" disabled selected>Service Type</option>
                            <?php while ($row = mysqli_fetch_assoc($service_query)) { ?>
                               
                                <!-- Dropdown options for service types -->
                                <option value="<?= $row['sid'] ?>"><?= $row['s_name']; ?></option>
                            <?php } ?>
                        </select>
                        <textarea placeholder="Additional Notes" name="note"></textarea>
                        <button type="submit" name="save">Reserve</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer section -->
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

    <script src="./Starbase/Salon/js/jquery-3.2.1.min.js"></script>
    <script src="./Starbase/Salon/js/bootstrap.min.js"></script>
    <script src="./Starbase/Salon/js/owl.carousel.min.js"></script>
    <script src="./Starbase/Salon/js/circle-progress.min.js"></script>
    <script src="./Starbase/Salon/js/main.js"></script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB0YyDTa0qqOjIerob2VTIwo_XVMhrruxo"></script>
    <script src="./Starbase/Salon/js/map.js"></script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
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