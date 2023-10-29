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
                    <!-- Conditional Dropdown Menu for Logged-In Member -->
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
                        <!-- Login Option for Online Non Logged-In Members -->
                        <a href="./login.php">LOGIN</a>
                    <?php } ?>
                </li>
                <!-- <li><a href="./admin/index.php">ADMIN</a></li> -->
            </ul>

            <!-- Social Media Clickable Icons -->
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
        <!-- Owl Carousel -->
        <div class="hero-slider owl-carousel">
            <div class="hs-item set-bg" data-setbg="./Starbase/Cafe/img/slider/slider-1.jpg">
                <div class="hs-content">
                    <div class="hsc-warp">
                        <h2>STARBASE CAFE<span>.</span></h2>

                    </div>
                </div>
            </div>
            <div class="hs-item set-bg" data-setbg="./Starbase/Cafe/img/slider/slider-2.jpg">
                <div class="hs-content">
                    <div class="hsc-warp">
                        <h2>SPECIAL DISHES<span>.</span></h2>

                    </div>
                </div>
            </div>
            <div class="hs-item set-bg" data-setbg="./Starbase/Cafe/img/slider/slider-3.jpg">
                <div class="hs-content">
                    <div class="hsc-warp">
                        <h2>DELICIOUS FOOD<span>.</span></h2>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Our Services -->
    <section class="services-section spad">
        <div class="container">
            <div class="section-title">
                <i class="flaticon-022-tray"></i>
                <h2>Our Services</h2>
            </div>

            <div class="row services">
                <div class="col-lg-3 col-md-6 service-item">
                    <i class="flaticon-005-coffee-1"></i>
                    <h3>Breakfast</h3>
                </div>
                <div class="col-lg-3 col-md-6 service-item">
                    <i class="flaticon-016-pancake"></i>
                    <h3>Brunch</h3>
                </div>
                <div class="col-lg-3 col-md-6 service-item">
                    <i class="flaticon-008-soup"></i>
                    <h3>Lunch</h3>
                </div>
                <div class="col-lg-3 col-md-6 service-item">
                    <i class="flaticon-032-hamburger"></i>
                    <h3>Dinner</h3>
                </div>
            </div>
        </div>
    </section>


    <section class="menu-section spad set-bg" data-setbg="./Starbase/Cafe/img/menu-bg.jpg">
        <div class="container">
            <!-- Our Menu -->
            <div class="section-title text-white">
                <i class="flaticon-022-tray"></i>
                <h2>Our Menu</h2>
            </div>
            
            <!-- Categories -->
            <ul class="menu-tab-nav nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1"
                        aria-selected="true">Appetizers</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2"
                        aria-selected="false">Starters</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#tab-3" role="tab" aria-controls="tab-3"
                        aria-selected="false">Main Course</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#tab-4" role="tab" aria-controls="tab-4"
                        aria-selected="false">Desserts</a>
                </li>
            </ul>
            <div class="tab-content menu-tab-content">

                <div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="tab-1">
                    <div class="row">

                        <!-- Menu Items with Brief Description -->
                        <div class="col-lg-6">

                            <div class="menu-item">
                                <h5>Spicy Grilled Mushroom</h5>
                                <div class="mi-meta">
                                    <p>Tossed with Chopped Garlic, Red Chilli, Black Pepper and Chilli flakes</p>
                                    <div class="menu-price">&#2547;260</div>
                                </div>
                            </div>

                            <div class="menu-item">
                                <h5>Smokey BBQ Wings</h5>
                                <div class="mi-meta">
                                    <p>These BBQ wings are juicy with a spicy outside that's smothered in thick barbecue
                                        sauce and served topped with sesame seed</p>
                                    <div class="menu-price">&#2547;360</div>
                                </div>
                            </div>

                            <div class="menu-item">
                                <h5>Fried Calamari</h5>
                                <div class="mi-meta">
                                    <p>Squid rings, dipping it in a mixture of Flour, Semolina and Eggs, deep fried and
                                        served with sweet and sour sauce</p>
                                    <div class="menu-price">&#2547;370</div>
                                </div>
                            </div>

                            <div class="menu-item">
                                <h5>Shrimp Tempura</h5>
                                <div class="mi-meta">
                                    <p>Fresh shrimp dipped into tempura batter and deep-fried in hot oil.</p>
                                    <div class="menu-price">&#2547;390</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">

                            <div class="menu-item">
                                <h5>Classic Caesar Salad</h5>
                                <div class="mi-meta">
                                    <p>Contains lettuce, cherry tomato cheese, and
                                        small pieces of fried bread, served with a dressing of oil, vinegar and herbs
                                    </p>
                                    <div class="menu-price">&#2547;360</div>
                                </div>
                            </div>

                            <div class="menu-item">
                                <h5>Tuna Fish Salad</h5>
                                <div class="mi-meta">
                                    <p>Crisp vegetables tossed with beans and tuna cucumber, carrot capsicum and a
                                        citrusy dressing</p>
                                    <div class="menu-price">&#2547;390</div>
                                </div>
                            </div>

                            <div class="menu-item">
                                <h5>Avocado With Shrimp Salad</h5>
                                <div class="mi-meta">
                                    <p>Loaded with avocado, apple, mango, 2 types of capsicum, cherry tomatoes, red
                                        cabbage a bit of honey and lemon with shrimp</p>
                                    <div class="menu-price">&#2547;440</div>
                                </div>
                            </div>

                            <div class="menu-item">
                                <h5>Apple Chicken Cashew Nut Salad</h5>
                                <div class="mi-meta">
                                    <p>Julian chicken, cashew nut, cucumber, 3 types of capsicum, apple, tomato, lemon
                                        juice and our special dressing</p>
                                    <div class="menu-price">&#2547;490</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="tab-2">
                    <div class="row">
                        <div class="col-lg-6">

                            <div class="menu-item">
                                <h5>Peri Peri Chicken</h5>
                                <div class="mi-meta">
                                    <p>Chicken in an a well flavoured Peri Peri marinade.</p>
                                    <div class="menu-price">&#2547;450</div>
                                </div>
                            </div>

                            <div class="menu-item">
                                <h5>Stuffed Chicken</h5>
                                <div class="mi-meta">
                                    <p>This stuffed chicken breast recipe features the creamiest and most
                                        delicious cheese and spinach filling</p>
                                    <div class="menu-price">&#2547;570</div>
                                </div>
                            </div>

                            <div class="menu-item">
                                <h5>Eggs Benedict</h5>
                                <div class="mi-meta">
                                    <p>with wild mushrooms and asparagus</p>
                                    <div class="menu-price">&#2547;390</div>
                                </div>
                            </div>

                            <div class="menu-item">
                                <h5>Soft-Boiled Organic Egg</h5>
                                <div class="mi-meta">
                                    <p>with wild mushrooms and asparagus</p>
                                    <div class="menu-price">&#2547;220</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">

                            <div class="menu-item">
                                <h5>Scrambled Eggs with ham</h5>
                                <div class="mi-meta">
                                    <p>with wild mushrooms and asparagus</p>
                                    <div class="menu-price">&#2547;250</div>
                                </div>
                            </div>

                            <div class="menu-item">
                                <h5>Scrambled Eggs in Puff Pastry</h5>
                                <div class="mi-meta">
                                    <p>with wild mushrooms and asparagus</p>
                                    <div class="menu-price">&#2547;360</div>
                                </div>
                            </div>

                            <div class="menu-item">
                                <h5>Eggs Benedict</h5>
                                <div class="mi-meta">
                                    <p>with wild mushrooms and asparagus</p>
                                    <div class="menu-price">&#2547;500</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="tab-3" role="tabpanel" aria-labelledby="tab-3">
                    <div class="row">
                        <div class="col-lg-6">

                            <div class="menu-item">
                                <h5>Scrambled Eggs with ham</h5>
                                <div class="mi-meta">
                                    <p>with wild mushrooms and asparagus</p>
                                    <div class="menu-price">&#2547;190</div>
                                </div>
                            </div>

                            <div class="menu-item">
                                <h5>Scrambled Eggs in Puff Pastry</h5>
                                <div class="mi-meta">
                                    <p>with wild mushrooms and asparagus</p>
                                    <div class="menu-price">&#2547;200</div>
                                </div>
                            </div>

                            <div class="menu-item">
                                <h5>Eggs Benedict</h5>
                                <div class="mi-meta">
                                    <p>with wild mushrooms and asparagus</p>
                                    <div class="menu-price">&#2547;220</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">

                            <div class="menu-item">
                                <h5>Scrambled Eggs with ham</h5>
                                <div class="mi-meta">
                                    <p>with wild mushrooms and asparagus</p>
                                    <div class="menu-price">&#2547;540</div>
                                </div>
                            </div>

                            <div class="menu-item">
                                <h5>Scrambled Eggs in Puff Pastry</h5>
                                <div class="mi-meta">
                                    <p>with wild mushrooms and asparagus</p>
                                    <div class="menu-price">&#2547;690</div>
                                </div>
                            </div>

                            <div class="menu-item">
                                <h5>Eggs Benedict</h5>
                                <div class="mi-meta">
                                    <p>with wild mushrooms and asparagus</p>
                                    <div class="menu-price">&#2547;250</div>
                                </div>
                            </div>

                            <div class="menu-item">
                                <h5>Soft-Boiled Organic Egg</h5>
                                <div class="mi-meta">
                                    <p>with wild mushrooms and asparagus</p>
                                    <div class="menu-price">&#2547;500</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="tab-4" role="tabpanel" aria-labelledby="tab-4">
                    <div class="row">
                        <div class="col-lg-6">

                            <div class="menu-item">
                                <h5>Scrambled Eggs with ham</h5>
                                <div class="mi-meta">
                                    <p>with wild mushrooms and asparagus</p>
                                    <div class="menu-price">&#2547;460</div>
                                </div>
                            </div>

                            <div class="menu-item">
                                <h5>Scrambled Eggs in Puff Pastry</h5>
                                <div class="mi-meta">
                                    <p>with wild mushrooms and asparagus</p>
                                    <div class="menu-price">&#2547;540</div>
                                </div>
                            </div>

                            <div class="menu-item">
                                <h5>Eggs Benedict</h5>
                                <div class="mi-meta">
                                    <p>with wild mushrooms and asparagus</p>
                                    <div class="menu-price">&#2547;320</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">

                            <div class="menu-item">
                                <h5>Scrambled Eggs with ham</h5>
                                <div class="mi-meta">
                                    <p>with wild mushrooms and asparagus</p>
                                    <div class="menu-price">&#2547;390</div>
                                </div>
                            </div>

                            <div class="menu-item">
                                <h5>Scrambled Eggs in Puff Pastry</h5>
                                <div class="mi-meta">
                                    <p>with wild mushrooms and asparagus</p>
                                    <div class="menu-price">&#2547;520</div>
                                </div>
                            </div>

                            <div class="menu-item">
                                <h5>Eggs Benedict</h5>
                                <div class="mi-meta">
                                    <p>with wild mushrooms and asparagus</p>
                                    <div class="menu-price">&#2547;190</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Make a Reservation -->
    <section class="services-section spad">
        <div class="container4">
            <div class="about-us">
                <h2>MAKE A RESERVATION AT</h2>
                <h1>Starbase Cafe</h1>
            </div>
            <div class="main">
                <input type="checkbox" id="chk" aria-hidden="true">
                <div class="signup">
                    <form action="frontend_cafe.php" method="post">
                        <label for="chk" aria-hidden="true">Booking</label>
                        <input type="text" name="name" placeholder="Name" required="">
                        <input type="email" name="email" placeholder="Email" required="">
                        <input type="text" name="phone" placeholder="Phone" required="">
                        <input type="date" name="bdate" required />
                        <input type="time" name="btime" required />
                        <select type="text" name="service" required="">
                            <option value="" disabled selected>Number of Seats</option>
                            <option value="1">ONE</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                            <option value="4">Four</option>
                            <option value="5">Five</option>
                            <option value="6">Six</option>
                            <option value="7">Seven</option>
                            <option value="8">Eight</option>
                            <option value="9">Nine</option>
                        </select>
                        <textarea placeholder="Additional Notes" name="note"></textarea>
                        <button type="submit" name="save">Reserve</button>
                    </form>
                </div>
            </div>
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
             <!-- Contact Information -->
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

    <!-- External JS-Scripts -->
    <script src="./Starbase/Cafe/js/jquery-3.2.1.min.js"></script>
    <script src="./Starbase/Cafe/js/bootstrap.min.js"></script>
    <script src="./Starbase/Cafe/js/owl.carousel.min.js"></script>
    <script src="./Starbase/Cafe/js/circle-progress.min.js"></script>
    <script src="./Starbase/Cafe/js/main.js"></script>
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