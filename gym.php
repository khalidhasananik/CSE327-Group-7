<!-- Connection Status -->
<?php
include './config/db_connection.php';
include './config/constants.php';
?>

<!-- HTML Begins -->
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Page Details -->
    <title>Gym - Starbase</title>
    <meta charset="UTF-8">
    <meta name="description" content="Restaurant">
    <meta name="keywords" content="restaurant, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="./Starbase/Gym/img/logo.jpeg" rel="shortcut icon" />
    <link
        href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900,900i&amp;display=swap"
        rel="stylesheet" />

    <!-- Connecting CSS files -->
    <link rel="stylesheet" href="./Starbase/Gym/css/bootstrap.min.css" />
    <link rel="stylesheet" href="./Starbase/Gym/css/font-awesome.min.css" />
    <link rel="stylesheet" href="./Starbase/Gym/css/flaticon.css" />
    <link rel="stylesheet" href="./Starbase/Gym/css/owl.carousel.css" />
    <link rel="stylesheet" href="./Starbase/Gym/css/style.css" />
    <link rel="stylesheet" href="./Starbase/Gym/css/animate.css" />
    <link rel="stylesheet" href="./Starbase/Gym/css/icomoon.css" />
    <link rel="stylesheet" href="./Starbase/Gym/css/ionicons.min.css" />
    <link rel="stylesheet" href="./Starbase/common.css" />
    <style>
    .btn-info {
        color: #fff;
        background-color: #06599b;
        border-color: #06599b;
        cursor: default;
    }
    </style>

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
    <!-- Preloader for when the site boots up -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Navigation Bar Begins -->
    <header class="header-section">
        <div class="header-warp">
            <div class="site-logo">
                <h2>STARBASE</h2>
            </div>

            <!-- Nav Switch for when the site shrinks -->
            <div class="nav-switch">
                <i class="fa fa-bars"></i>
            </div>

            <!-- Navigation Bar Buttons -->
            <ul class="main-menu">
                <li><a href="./index.php">HOME</a></li>
                <li><a href="./programs.php">PROGRAMS</a></li>
                <li><a href="./gym.php" class="active">GYM</a></li>
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
                <!-- <li><a href="./admin/index.php">ADMIN</a></li> -->
            </ul>
            <!-- Navigation Bar Buttons Ends -->
            <!-- Social Media Links/ Location -->
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
    <!-- Navigation Bar Ends -->

    <!-- Hero Section/ Owl carousel -->
    <section class="hero-section">
        <div class="hero-slider owl-carousel">
            <div class="hs-item set-bg" data-setbg="./Starbase/Gym/img/slider/1.jpeg">
                <div class="hs-content">
                    <div class="hsc-warp">
                        <!-- <h2>Starbase is for</h2>
                        <h3>Everyone</h3>
                        <h2 class="subheading">Shape your body</h2> -->
                    </div>
                </div>
            </div>
            <div class="hs-item set-bg" data-setbg="./Starbase/Gym/img/slider/2.jpeg">
                <div class="hs-content">
                    <div class="hsc-warp">
                        <!-- <h2>Starbase</h2>
                        <h3>Gym</h3>
                        <h2 class="subheading">No Excuses</h2> -->
                    </div>
                </div>
            </div>
            <div class="hs-item set-bg" data-setbg="./Starbase/Gym/img/slider/3.jpeg">
                <div class="hs-content">
                    <div class="hsc-warp">
                        <!-- <h2>Starbase</h2>
                        <h3>Restaurant</h3>
                        <h2 class="subheading">Eat Fresh</h2> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section Ends -->

    <!-- About Us Section -->
    <section class="services-section spad">
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-4">
                    <div class="services d-flex ftco-animate">
                        <div class="icon-2 d-flex justify-content-center align-items-center">
                            <span class="flaticon-gym"></span>
                        </div>
                        <div class="text px-md-2 pl-4">
                            <h3>1K+ Equipments</h3>
                            <p style="font-size: 1.2rem;">
                                Top tier, high quality
                                equipments that will meet all your exercise needs.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="services d-flex ftco-animate">
                        <div class="icon-2 d-flex justify-content-center align-items-center">
                            <span class="flaticon-ruler"></span>
                        </div>
                        <div class="text px-md-2 pl-4">
                            <h3>Personal Trainers</h3>
                            <p style="font-size: 1.2rem;">
                                Get personal workout routines from professsionals at Starbase Gym.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="services d-flex ftco-animate">
                        <div class="icon-2 d-flex justify-content-center align-items-center">
                            <span class="flaticon-tools-and-utensils"></span>
                        </div>
                        <div class="text px-md-2 pl-4">
                            <h3>Open 24/7</h3>
                            <p style="font-size: 1.2rem;">
                                Services at Starbase are available at all times for your
                                utmost convinience.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Us Section Ends -->


    <section class="services-section spad">
        <div class="container2">
            <div class="main">
                <input type="checkbox" id="chk" aria-hidden="true" />
                <div class="signup">
                    <form>
                        <label for="chk" aria-hidden="true">WORKOUT ADVISOR</label>
                        <input type="text" id="name" placeholder="Name" required="" />
                        <input type="number" id="age" placeholder="Age" required="" />
                        <select type="text" id="gender" required="">
                            <option value="" disabled selected>Gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <!-- <option value="Other">Other</option> -->
                        </select>
                    </form>
                    <p id="warning">PLEASE ENTER ALL THE DETAILS</p>
                </div>

                <div class="login">
                    <!-- <form onsubmit="myFunction(); return false;"> -->
                    <form>
                        <label class="label-next" for="chk" aria-hidden="true">Next</label>
                        <input type="number" id="height" placeholder="Height (in cm)" required="" />

                        <input type="number" id="weight" placeholder="Weight (in kg)" required="" />

                        <select type="text" id="activity">
                            <option value="" disabled selected>How active are you?</option>
                            <option value="1">Not very active</option>
                            <option value="2">Light (1-2 workouts/week)</option>
                            <option value="3">Moderate (3-5 workouts/week)</option>
                            <option value="4">Heavy (5+ workouts/week)</option>
                        </select>

                        <select type="text" id="workout">
                            <option value="" disabled selected>
                                Which workout interests you?
                            </option>
                            <option value="1">Bodyweight Workouts</option>
                            <option value="2">Cardio / Endurance Training</option>
                            <option value="3">Outdoor Workout</option>
                            <option value="4">
                                Fun & Alternative workouts (Dance & Zumba)
                            </option>
                            <option value="5">Weight Lifting</option>
                            <option value="6">
                                Not sure, I'd prefer a trainer to help me
                            </option>
                        </select>

                        <select type="text" id="motivation" ">
                <option value="" disabled selected>
                  How motivated are you to reach your fitness goals?
                </option>
                <option value=" 1">I'M READY, LETS DO THIS</option>
                            <option value="2">HOPEFUL, BUT COULD USE SOME GUIDANCE</option>
                            <option value="3">I'M STRUGGLING TO FIND MOTIVATION</option>
                        </select>
                        <!-- <button id="check">Check</button> -->
                        <p id="warning">PLEASE ENTER ALL THE DETAILS</p>
                        <label id="check" for="chk" aria-hidden="true">CHECK</label>
                        <label id="check-done" for="chk" aria-hidden="true">FIND YOUR RESULT BELOW</label>
                    </form>
                </div>
            </div>
        </div>

        <div class="workout sg1">
            <div class="about-us" style="width: 50%;">
                <h1>WORKOUT PLAN</h1>
                <h3>Here is a weeklong workout plan for an underweight teenage boy </h3>

                <h4>Day 1: Upper Body</h4>
                <ul>
                    <li>Warm-up: 5 minutes of stretching</li>
                    <li>Bench Press: 3 sets of 10 reps</li>
                    <li>Dumbbell Rows: 3 sets of 10 reps</li>
                    <li>Shoulder Press: 3 sets of 10 reps</li>
                    <li>Bicep Curls: 3 sets of 10 reps</li>
                    <li>Tricep Extensions: 3 sets of 10 reps</li>
                    <li>Cool-down: 5 minutes of stretching</li>
                </ul>

                <h4>Day 2: Lower Body</h4>
                <ul>
                    <li>Warm-up: 5 minutes of stretching</li>
                    <li>Squats: 3 sets of 10 reps</li>
                    <li>Lunges: 3 sets of 10 reps</li>
                    <li>Leg Press: 3 sets of 10 reps</li>
                    <li>Calf Raises: 3 sets of 10 reps</li>
                    <li>Cool-down: 5 minutes of stretching</li>
                </ul>

                <h4>Day 3: Rest Day</h4>

                <h4>Day 4: Chest and Back</h4>
                <ul>
                    <li>Warm-up: 5 minutes of stretching</li>
                    <li>Push-ups: 3 sets of 10 reps</li>
                    <li>Lat Pulldowns: 3 sets of 10 reps</li>
                    <li>Incline Bench Press: 3 sets of 10 reps</li>
                    <li>Dumbbell Flys: 3 sets of 10 reps</li>
                    <li>Cool-down: 5 minutes of stretching</li>
                </ul>

                <h4>Day 5: Arms and Shoulders</h4>
                <ul>
                    <li>Warm-up: 5 minutes of stretching</li>
                    <li>Hammer Curls: 3 sets of 10 reps</li>
                    <li>Lateral Raises: 3 sets of 10 reps</li>
                    <li>Skull Crushers: 3 sets of 10 reps</li>
                    <li>Front Raises: 3 sets of 10 reps</li>
                    <li>Cool-down: 5 minutes of stretching</li>
                </ul>

                <h4>Day 6: Legs</h4>
                <ul>
                    <li>Warm-up: 5 minutes of stretching</li>
                    <li>Deadlifts: 3 sets of 10 reps</li>
                    <li>Leg Extensions: 3 sets of 10 reps</li>
                    <li>Leg Curls: 3 sets of 10 reps</li>
                    <li>Seated Calf Raises: 3 sets of 10 reps</li>
                    <li>Cool-down: 5 minutes of stretching</li>
                </ul>

                <h4>Day 7: Rest Day</h4>
            </div>
        </div>

        <div class="workout sg2">
            <div class="about-us" style="width: 50%;">
                <h1>WORKOUT PLAN</h1>
                <h3>Since you are underweight, it's important to focus on building muscle mass and strength.
                    Here's a week-long workout routine that can help achieve that goal:</h3>
                <h4>Day 1: Chest and Triceps</h4>
                <ul>
                    <li>Barbell Bench Press - 3 sets of 8-10 reps</li>
                    <li>Incline Dumbbell Flyes - 3 sets of 10-12 reps</li>
                    <li>Triceps Pushdown - 3 sets of 12-15 reps</li>
                    <li>Close Grip Bench Press - 3 sets of 8-10 reps</li>
                    <li>Dumbbell Overhead Extension - 3 sets of 12-15 reps</li>
                </ul>
                <h4>Day 2: Back and Biceps</h4>
                <ul>
                    <li>Deadlifts - 3 sets of 8-10 reps</li>
                    <li>Wide Grip Pullups - 3 sets of 10-12 reps</li>
                    <li>Seated Cable Rows - 3 sets of 12-15 reps</li>
                    <li>Barbell Bicep Curls - 3 sets of 8-10 reps</li>
                    <li>Hammer Curls - 3 sets of 12-15 reps</li>
                </ul>
                <h4>Day 3: Rest Day</h4>
                <h4>Day 4: Legs</h4>
                <ul>
                    <li>Barbell Squats - 3 sets of 8-10 reps</li>
                    <li>Leg Press - 3 sets of 10-12 reps</li>
                    <li>Leg Extensions - 3 sets of 12-15 reps</li>
                    <li>Romanian Deadlifts - 3 sets of 8-10 reps</li>
                    <li>Standing Calf Raises - 3 sets of 12-15 reps</li>
                </ul>
                <h4>Day 5: Shoulders and Abs</h4>
                <ul>
                    <li>Seated Barbell Shoulder Press - 3 sets of 8-10 reps
                    </li>
                    <li>Side Lateral Raises - 3 sets of 10-12 reps</li>
                    <li>Face Pulls - 3 sets of 12-15 reps</li>
                    <li>Cable Crunches - 3 sets of 12-15 reps</li>
                    <li>Plank - 3 sets of 30-60 seconds</li>
                </ul>
                <h4>Day 6: Rest Day</h4>
                <h4>Day 7: Full Body Workout</h4>
                <ul>
                    <li>Barbell Deadlifts - 3 sets of 8-10 reps
                    </li>
                    <li>Barbell Rows - 3 sets of 10-12 reps</li>
                    <li>Barbell Bench Press - 3 sets of 12-15 reps</li>
                </ul>
            </div>
        </div>
        <div class="workout sg3">
            <div class="about-us" style="width: 50%;">
                <h1>WORKOUT PLAN</h1>
                <h3>Here is a week-long workout routine for an underweight guy in their 30s:</h3>

                <h4>Monday:</h4>
                <ul>
                    <li>Warm up with 5-10 minutes of cardio (jumping jacks, jogging in place, etc.)</li>
                    <li>Bench press: 3 sets of 8 reps</li>
                    <li>Incline dumbbell press: 3 sets of 8 reps</li>
                    <li>Dumbbell flyes: 3 sets of 10 reps</li>
                    <li>Barbell bicep curls: 3 sets of 8 reps</li>
                    <li>Tricep pushdowns: 3 sets of 10 reps</li>
                    <li>Cool down with stretching</li>
                </ul>

                <h4>Tuesday:</h4>
                <ul>
                    <li>Warm up with 5-10 minutes of cardio</li>
                    <li>Squats: 3 sets of 8 reps</li>
                    <li>Leg press: 3 sets of 10 reps</li>
                    <li>Lunges: 3 sets of 10 reps</li>
                    <li>Calf raises: 3 sets of 10 reps</li>
                    <li>Cool down with stretching</li>
                </ul>

                <h4>Wednesday:</h4>
                <p>Rest day</p>

                <h4>Thursday:</h4>
                <ul>
                    <li>Warm up with 5-10 minutes of cardio</li>
                    <li>Deadlifts: 3 sets of 8 reps</li>
                    <li>Pull-ups: 3 sets of 10 reps</li>
                    <li>Seated cable rows: 3 sets of 10 reps</li>
                    <li>Dumbbell shrugs: 3 sets of 10 reps</li>
                    <li>Cool down with stretching</li>
                </ul>

                <h4>Friday:</h4>
                <ul>
                    <li>Warm up with 5-10 minutes of cardio</li>
                    <li>Shoulder press: 3 sets of 8 reps</li>
                    <li>Lateral raises: 3 sets of 10 reps</li>
                    <li>Front raises: 3 sets of 10 reps</li>
                    <li>Rear delt flyes: 3 sets of 10 reps</li>
                    <li>Cool down with stretching</li>
                </ul>

                <h4>Saturday:</h4>
                <ul>
                    <li>Warm up with 5-10 minutes of cardio</li>
                    <li>Cable crunches: 3 sets of 15 reps</li>
                    <li>Planks: 3 sets of 30 seconds</li>
                    <li>Russian twists: 3 sets of 15 reps</li>
                    <li>Leg raises: 3 sets of 15 reps</li>
                    <li>Cool down with stretching</li>
                </ul>

                <h4>Sunday:</h4>
                <p>Rest day</p>

            </div>
        </div>
        <div class="workout sg4">
            <div class="about-us" style="width: 50%;">
                <h1>WORKOUT PLAN</h1>
                <h3>Here is a week-long workout routine for an underweight guy in their 40s:</h3>

                <h4>Day 1: Chest and Triceps</h4>
                <ul>
                    <li>Barbell bench press: 3 sets of 8-10 reps</li>
                    <li>Incline dumbbell press: 3 sets of 8-10 reps</li>
                    <li>Cable flyes: 3 sets of 10-12 reps</li>
                    <li>Tricep pushdowns: 3 sets of 10-12 reps</li>
                    <li>Overhead dumbbell extensions: 3 sets of 10-12 reps</li>
                </ul>

                <h4>Day 2: Back and Biceps</h4>
                <ul>
                    <li>Deadlifts: 3 sets of 8-10 reps</li>
                    <li>Pull-ups: 3 sets of 8-10 reps</li>
                    <li>Seated cable rows: 3 sets of 10-12 reps</li>
                    <li>Barbell curls: 3 sets of 10-12 reps</li>
                    <li>Hammer curls: 3 sets of 10-12 reps</li>
                </ul>

                <h4>Day 3: Rest day</h4>

                <h4>Day 4: Legs and Shoulders</h4>
                <ul>
                    <li>Squats: 3 sets of 8-10 reps</li>
                    <li>Leg press: 3 sets of 10-12 reps</li>
                    <li>Leg curls: 3 sets of 10-12 reps</li>
                    <li>Military press: 3 sets of 8-10 reps</li>
                    <li>Lateral raises: 3 sets of 10-12 reps</li>
                    <li>Front raises: 3 sets of 10-12 reps</li>
                </ul>

                <h4>Day 5: Rest day</h4>

                <h4>Day 6: Full Body Workout</h4>
                <ul>
                    <li>Barbell squats: 3 sets of 8-10 reps</li>
                    <li>Bench press: 3 sets of 8-10 reps</li>
                    <li>Pull-ups: 3 sets of 8-10 reps</li>
                    <li>Military press: 3 sets of 8-10 reps</li>
                    <li>Barbell curls: 3 sets of 10-12 reps</li>
                    <li>Tricep pushdowns: 3 sets of 10-12 reps</li>
                </ul>

                <h4>Day 7: Rest day</h4>

            </div>
        </div>
        <div class="workout sg5">
            <div class="about-us" style="width: 50%;">
                <h1>WORKOUT PLAN</h1>
                <h3>Week-Long Workout Routine for an Underweight Guy in their 50s</h3>

                <h4>Monday:</h4>
                <ul>
                    <li>Warm-up: 5 minutes of light cardio (jogging in place, jumping jacks)</li>
                    <li>Resistance training: 3 sets of 10 reps of dumbbell chest press, dumbbell rows, and dumbbell
                        shoulder press</li>
                    <li>Core workout: 3 sets of 10 reps of crunches and planks</li>
                    <li>Cool-down: 5 minutes of stretching</li>
                </ul>

                <h4>Tuesday:</h4>
                <ul>
                    <li>Warm-up: 5 minutes of light cardio (jumping jacks, high knees)</li>
                    <li>Resistance training: 3 sets of 10 reps of dumbbell squats, dumbbell lunges, and dumbbell calf
                        raises</li>
                    <li>Core workout: 3 sets of 10 reps of leg raises and bicycle crunches</li>
                    <li>Cool-down: 5 minutes of stretching</li>
                </ul>

                <h4>Wednesday:</h4>
                <p>Rest day</p>

                <h4>Thursday:</h4>
                <ul>
                    <li>Warm-up: 5 minutes of light cardio (jogging in place, jumping jacks)</li>
                    <li>Resistance training: 3 sets of 10 reps of dumbbell chest fly, dumbbell pullover, and dumbbell
                        lateral raise</li>
                    <li>Core workout: 3 sets of 10 reps of Russian twists and side planks</li>
                    <li>Cool-down: 5 minutes of stretching</li>
                </ul>

                <h4>Friday:</h4>
                <ul>
                    <li>Warm-up: 5 minutes of light cardio (jumping jacks, high knees)</li>
                    <li>Resistance training: 3 sets of 10 reps of dumbbell deadlifts, dumbbell hamstring curls, and
                        dumbbell calf raises</li>
                    <li>Core workout: 3 sets of 10 reps of reverse crunches and mountain climbers</li>
                    <li>Cool-down: 5 minutes of stretching</li>
                </ul>

                <h4>Saturday:</h4>
                <ul>
                    <li>Warm-up: 5 minutes of light cardio (jogging in place, jumping jacks)</li>
                    <li>Resistance training: 3 sets of 10 reps of dumbbell bench press, dumbbell pulldown, and dumbbell
                        bicep curl</li>
                    <li>Core workout: 3 sets of 10 reps of sit-ups and plank jacks</li>
                    <li>Cool-down: 5 minutes of stretching</li>
                </ul>

                <h4>Sunday:</h4>
                <p>Rest day</p>

            </div>
        </div>
        <div class="workout sg6">
            <div class="about-us" style="width: 50%;">
                <h1>WORKOUT PLAN</h1>
                <h3>Week-Long Workout Routine for an Underweight Guy in their 60s</h3>

                <h4>Day 1: Full-Body Strength Training</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of walking or light cardio</li>
                    <li>Resistance training exercises: Bodyweight squats, push-ups, seated rows, bicep curls, tricep
                        extensions, lunges, and planks</li>
                    <li>Aim for 3 sets of 12-15 reps for each exercise</li>
                </ul>

                <h4>Day 2: Cardiovascular Training</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of walking or light cardio</li>
                    <li>Cardiovascular exercises: Brisk walking, light jogging, swimming, or cycling</li>
                    <li>Aim for 30-45 minutes of moderate-intensity cardio</li>
                </ul>

                <h4>Day 3: Rest Day</h4>

                <h4>Day 4: Upper Body Strength Training</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of walking or light cardio</li>
                    <li>Resistance training exercises: Bench press, shoulder press, lat pulldowns, dumbbell flys, and
                        dips</li>
                    <li>Aim for 3 sets of 12-15 reps for each exercise</li>
                </ul>

                <h4>Day 5: Cardiovascular Training</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of walking or light cardio</li>
                    <li>Cardiovascular exercises: Brisk walking, light jogging, swimming, or cycling</li>
                    <li>Aim for 30-45 minutes of moderate-intensity cardio</li>
                </ul>

                <h4>Day 6: Lower Body Strength Training</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of walking or light cardio</li>
                    <li>Resistance training exercises: Leg press, leg curls, calf raises, and glute bridges</li>
                    <li>Aim for 3 sets of 12-15 reps for each exercise</li>
                </ul>

                <h4>Day 7: Rest Day</h4>

            </div>
        </div>
        <div class="workout sg7">
            <div class="about-us" style="width: 50%;">
                <h1>WORKOUT PLAN</h1>
                <h3>Week-Long Workout Routine for an Underweight Teenage Girl</h3>

                <h4>Day 1: Full-Body Workout</h4>
                <ul>
                    <li>Warm-up: 5 minutes of light cardio (e.g. jogging in place)</li>
                    <li>Squats: 3 sets of 10 reps</li>
                    <li>Lunges: 3 sets of 10 reps (each leg)</li>
                    <li>Push-ups: 3 sets of 8-10 reps</li>
                    <li>Dumbbell shoulder press: 3 sets of 10 reps</li>
                    <li>Lat pulldowns: 3 sets of 10 reps</li>
                    <li>Plank: hold for 30 seconds</li>
                </ul>

                <h4>Day 2: Rest Day</h4>

                <h4>Day 3: Lower Body Workout</h4>
                <ul>
                    <li>Warm-up: 5 minutes of light cardio (e.g. jumping jacks)</li>
                    <li>Deadlifts: 3 sets of 10 reps</li>
                    <li>Leg press: 3 sets of 10 reps</li>
                    <li>Leg curls: 3 sets of 10 reps</li>
                    <li>Calf raises: 3 sets of 15 reps</li>
                    <li>Glute bridges: 3 sets of 10 reps</li>
                    <li>Plank: hold for 30 seconds</li>
                </ul>

                <h4>Day 4: Rest Day</h4>

                <h4>Day 5: Upper Body Workout</h4>
                <ul>
                    <li>Warm-up: 5 minutes of light cardio (e.g. jumping jacks)</li>
                    <li>Bench press: 3 sets of 8-10 reps</li>
                    <li>Dumbbell flyes: 3 sets of 10 reps</li>
                    <li>Dumbbell bicep curls: 3 sets of 10 reps</li>
                    <li>Tricep dips: 3 sets of 10 reps</li>
                    <li>Seated rows: 3 sets of 10 reps</li>
                    <li>Plank: hold for 30 seconds</li>
                </ul>

                <h4>Day 6: Rest Day</h4>

                <h4>Day 7: Cardio and Core Workout</h4>
                <ul>
                    <li>Warm-up: 5 minutes of light cardio (e.g. jumping jacks)</li>
                    <li>Running: 30 minutes at a moderate pace</li>
                    <li>Bicycle crunches: 3 sets of 15 reps</li>
                    <li>Russian twists: 3 sets of 15 reps</li>
                    <li>Leg raises: 3 sets of 15 reps</li>
                    <li>Plank: hold for 30 seconds</li>
                </ul>

            </div>
        </div>
        <div class="workout sg8">
            <div class="about-us" style="width: 50%;">
                <h1>WORKOUT PLAN</h1>
                <h3>Week-Long Workout Routine for Underweight Women in Their 20s</h3>

                <h4>Day 1: Upper Body</h4>
                <ul>
                    <li>Warm-up for 5-10 minutes with light cardio or stretching</li>
                    <li>Bench press: 3 sets of 8 reps</li>
                    <li>Bent-over rows: 3 sets of 8 reps</li>
                    <li>Shoulder press: 3 sets of 8 reps</li>
                    <li>Bicep curls: 3 sets of 10 reps</li>
                    <li>Tricep dips: 3 sets of 10 reps</li>
                    <li>Cool down with stretching</li>
                </ul>

                <h4>Day 2: Lower Body</h4>
                <ul>
                    <li>Warm-up for 5-10 minutes with light cardio or stretching</li>
                    <li>Squats: 3 sets of 8 reps</li>
                    <li>Lunges: 3 sets of 8 reps (each leg)</li>
                    <li>Deadlifts: 3 sets of 8 reps</li>
                    <li>Calf raises: 3 sets of 10 reps</li>
                    <li>Cool down with stretching</li>
                </ul>

                <h4>Day 3: Rest Day</h4>

                <h4>Day 4: Upper Body</h4>
                <ul>
                    <li>Warm-up for 5-10 minutes with light cardio or stretching</li>
                    <li>Pull-ups or lat pull-downs: 3 sets of 8 reps</li>
                    <li>Seated cable rows: 3 sets of 8 reps</li>
                    <li>Chest flys: 3 sets of 8 reps</li>
                    <li>Hammer curls: 3 sets of 10 reps</li>
                    <li>Tricep push-downs: 3 sets of 10 reps</li>
                    <li>Cool down with stretching</li>
                </ul>

                <h4>Day 5: Lower Body</h4>
                <ul>
                    <li>Warm-up for 5-10 minutes with light cardio or stretching</li>
                    <li>Leg press: 3 sets of 8 reps</li>
                    <li>Step-ups: 3 sets of 8 reps (each leg)</li>
                    <li>Romanian deadlifts: 3 sets of 8 reps</li>
                    <li>Leg curls: 3 sets of 10 reps</li>
                    <li>Cool down with stretching</li>
                </ul>

                <h4>Day 6: Full Body</h4>
                <ul>
                    <li>Warm-up for 5-10 minutes with light cardio or stretching</li>
                    <li>Squat jumps: 3 sets of 8 reps</li>
                    <li>Push-ups: 3 sets of 8 reps</li>
                    <li>Lunges with dumbbells: 3 sets of 8 reps (each leg)</li>
                    <li>Lat pull-downs: 3 sets of 8 reps</li>
                    <li>Planks: Hold for 30 seconds, rest for 30 seconds</li>
                </ul>

                <h4>Day 7: Rest Day</h4>


            </div>
        </div>
        <div class="workout sg9">
            <div class="about-us" style="width: 50%;">
                <h1>WORKOUT PLAN</h1>
                <h3>Week-Long Workout Routine for Underweight Women in Their 30s</h3>

                <h4>Day 1: Upper Body</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of cardio</li>
                    <li>Bench press: 3 sets of 10 reps</li>
                    <li>Seated dumbbell press: 3 sets of 10 reps</li>
                    <li>Bent-over row: 3 sets of 10 reps</li>
                    <li>Tricep pushdown: 3 sets of 10 reps</li>
                    <li>Bicep curls: 3 sets of 10 reps</li>
                    <li>Cool-down: 5-10 minutes of stretching</li>
                </ul>

                <h4>Day 2: Lower Body</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of cardio</li>
                    <li>Squats: 3 sets of 10 reps</li>
                    <li>Deadlifts: 3 sets of 10 reps</li>
                    <li>Lunges: 3 sets of 10 reps (each leg)</li>
                    <li>Leg press: 3 sets of 10 reps</li>
                    <li>Calf raises: 3 sets of 10 reps</li>
                    <li>Cool-down: 5-10 minutes of stretching</li>
                </ul>

                <h4>Day 3: Rest day</h4>

                <h4>Day 4: Full Body</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of cardio</li>
                    <li>Pull-ups: 3 sets of 10 reps</li>
                    <li>Push-ups: 3 sets of 10 reps</li>
                    <li>Dumbbell step-ups: 3 sets of 10 reps (each leg)</li>
                    <li>Leg curls: 3 sets of 10 reps</li>
                    <li>Standing military press: 3 sets of 10 reps</li>
                    <li>Cool-down: 5-10 minutes of stretching</li>
                </ul>

                <h4>Day 5: Cardio</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of cardio</li>
                    <li>Running or jogging: 30 minutes</li>
                    <li>Cycling: 30 minutes</li>
                    <li>Cool-down: 5-10 minutes of stretching</li>
                </ul>

                <h4>Day 6: Rest day</h4>

                <h4>Day 7: Yoga and Stretching</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of cardio</li>
                    <li>Sun salutations: 10 reps</li>
                    <li>Warrior I: 3 sets of 10 reps (each leg)</li>
                    <li>Tree pose: 3 sets of 10 reps (each leg)</li>
                    <li>Downward-facing dog: 3 sets of 10 reps</li>
                    <li>Child's pose: 3 sets of 10 reps</li>
                    <li>Cool-down: 5-10 minutes of stretching</li>
                </ul>

            </div>
        </div>
        <div class="workout sg10">
            <div class="about-us" style="width: 50%;">
                <h1>WORKOUT PLAN</h1>
                <h3>Workout Plan for an Underweight Woman in Her 40s</h3>

                <h4>Day 1: Full Body Workout</h4>
                <ul>
                    <li>Warm up with 5-10 minutes of light cardio</li>
                    <li>3 sets of 10-12 reps of bodyweight squats</li>
                    <li>3 sets of 10-12 reps of push-ups (on knees if necessary)</li>
                    <li>3 sets of 10-12 reps of dumbbell rows (use light weights)</li>
                    <li>3 sets of 10-12 reps of bicep curls (use light weights)</li>
                    <li>Cool down with 5-10 minutes of stretching</li>
                </ul>

                <h4>Day 2: Rest Day</h4>

                <h4>Day 3: Lower Body Workout</h4>
                <ul>
                    <li>Warm up with 5-10 minutes of light cardio</li>
                    <li>3 sets of 10-12 reps of lunges (use bodyweight or light dumbbells)</li>
                    <li>3 sets of 10-12 reps of deadlifts (use light weights)</li>
                    <li>3 sets of 10-12 reps of calf raises (use bodyweight or light weights)</li>
                    <li>Cool down with 5-10 minutes of stretching</li>
                </ul>

                <h4>Day 4: Rest Day</h4>

                <h4>Day 5: Upper Body Workout</h4>
                <ul>
                    <li>Warm up with 5-10 minutes of light cardio</li>
                    <li>3 sets of 10-12 reps of dumbbell chest press (use light weights)</li>
                    <li>3 sets of 10-12 reps of dumbbell shoulder press (use light weights)</li>
                    <li>3 sets of 10-12 reps of tricep extensions (use light weights)</li>
                    <li>3 sets of 10-12 reps of lateral raises (use light weights)</li>
                    <li>Cool down with 5-10 minutes of stretching</li>
                </ul>

                <h4>Day 6: Rest Day</h4>

                <h4>Day 7: Full Body Workout</h4>
                <ul>
                    <li>Warm up with 5-10 minutes of light cardio</li>
                    <li>3 sets of 10-12 reps of bodyweight squats</li>
                    <li>3 sets of 10-12 reps of push-ups (on knees if necessary)</li>
                    <li>3 sets of 10-12 reps of dumbbell rows (use light weights)</li>
                    <li>3 sets of 10-12 reps of bicep curls (use light weights)</li>
                    <li>3 sets of 10-12 reps of lunges (use bodyweight or light dumbbells)</li>
                    <li>3 sets of 10-12 reps of deadlifts (use light weights)</li>
                    <li>Cool down with 5-10 minutes of stretching</li>
                </ul>

            </div>
        </div>
        <div class="workout sg11">
            <div class="about-us" style="width: 50%;">
                <h1>WORKOUT PLAN</h1>
                <h3>Workout Plan for Underweight Women in Their 50s</h3>

                <h4>Day 1:</h4>
                <ul>
                    <li>Warm-up with light cardio for 10-15 minutes</li>
                    <li>Bodyweight squats - 3 sets of 10 reps</li>
                    <li>Push-ups (modified or on knees) - 3 sets of 10 reps</li>
                    <li>Plank - 3 sets of 30 seconds</li>
                    <li>Seated dumbbell shoulder press - 3 sets of 10 reps</li>
                    <li>Cool down with stretching</li>
                </ul>

                <h4>Day 2:</h4>
                <ul>
                    <li>Warm-up with light cardio for 10-15 minutes</li>
                    <li>Walking lunges - 3 sets of 10 reps per leg</li>
                    <li>Dumbbell rows - 3 sets of 10 reps per arm</li>
                    <li>Bicep curls - 3 sets of 10 reps</li>
                    <li>Tricep dips (using a chair or bench) - 3 sets of 10 reps</li>
                    <li>Cool down with stretching</li>
                </ul>

                <h4>Wednesday:</h4>
                <ul>
                    <li>Rest day or low-intensity activity like yoga or stretching</li>
                </ul>

                <h4>Day 3: Rest day</h4>

                <h4>Day 4:</h4>
                <ul>
                    <li>Warm-up with light cardio for 10-15 minutes</li>
                    <li>Dumbbell squats - 3 sets of 10 reps</li>
                    <li>Seated dumbbell overhead press - 3 sets of 10 reps</li>
                    <li>Seated dumbbell bicep curls - 3 sets of 10 reps</li>
                    <li>Seated dumbbell tricep extensions - 3 sets of 10 reps</li>
                    <li>Cool down with stretching</li>
                </ul>

                <h4>Day 5:</h4>
                <ul>
                    <li>Rest day or low-intensity activity like yoga or stretching</li>
                </ul>

                <h4>Day 7:</h4>
                <ul>
                    <li>Warm-up with light cardio for 10-15 minutes</li>
                    <li>Bodyweight glute bridges - 3 sets of 10 reps</li>
                    <li>Seated dumbbell lateral raises - 3 sets of 10 reps</li>
                    <li>Seated dumbbell hammer curls - 3 sets of 10 reps</li>
                    <li>Resistance band pull-aparts - 3 sets of 10 reps</li>
                </ul>

            </div>
        </div>
        <div class="workout sg12">
            <div class="about-us" style="width: 50%;">
                <h1>WORKOUT PLAN</h1>
                <h3>Weekly Workout Plan for Underweight Woman in Her 60s</h3>

                <h4>Day 1: Cardio</h4>
                <ul>
                    <li>Warm up: 10 minutes of walking</li>
                    <li>30 minutes of low-impact cardio (such as cycling, swimming, or using the elliptical machine)
                    </li>
                    <li>Cool down: 10 minutes of stretching</li>
                </ul>

                <h4>Day 2: Strength Training</h4>
                <ul>
                    <li>Warm up: 5 minutes of walking</li>
                    <li>Bodyweight squats: 3 sets of 10 reps</li>
                    <li>Wall push-ups: 3 sets of 10 reps</li>
                    <li>Seated row: 3 sets of 10 reps (using resistance bands or light weights)</li>
                    <li>Bicep curls: 3 sets of 10 reps (using resistance bands or light weights)</li>
                    <li>Cool down: 5 minutes of stretching</li>
                </ul>

                <h4>Day 3: Rest</h4>

                <h4>Day 4: Cardio and Balance</h4>
                <ul>
                    <li>Warm up: 10 minutes of walking</li>
                    <li>20 minutes of low-impact cardio (such as cycling, swimming, or using the elliptical machine)
                    </li>
                    <li>Balance exercises (such as standing on one leg for 30 seconds, heel-to-toe walk, or tree pose):
                        3 sets of 10 reps each</li>
                    <li>Cool down: 10 minutes of stretching</li>
                </ul>

                <h4>Day 5: Strength Training</h4>
                <ul>
                    <li>Warm up: 5 minutes of walking</li>
                    <li>Chair squats: 3 sets of 10 reps</li>
                    <li>Wall push-ups: 3 sets of 10 reps</li>
                    <li>Seated row: 3 sets of 10 reps (using resistance bands or light weights)</li>
                    <li>Bicep curls: 3 sets of 10 reps (using resistance bands or light weights)</li>
                    <li>Cool down: 5 minutes of stretching</li>
                </ul>

                <h4>Day 6: Yoga and Stretching</h4>
                <ul>
                    <li>Warm up: 5 minutes of walking</li>
                    <li>Yoga poses for seniors (such as warrior II, tree pose, and cat-cow): 30 minutes</li>
                    <li>Cool down: 10 minutes of stretching</li>
                </ul>

                <h4>Day 7: Rest</h4>

            </div>
        </div>
        <div class="workout sg13">
            <div class="about-us" style="width: 50%;">
                <h1>WORKOUT PLAN</h1>
                <h3>Weekly Workout Plan for a Teenage Boy</h3>

                <h4>Day 1:</h4>
                <ul>
                    <li>Warm-up: 5 minutes of jogging or jumping jacks</li>
                    <li>Strength training: 3 sets of 10 reps of push-ups, squats, and lunges</li>
                    <li>Cardio: 20 minutes of running or cycling</li>
                    <li>Cool-down: 5 minutes of stretching</li>
                </ul>

                <h4>Day 2:</h4>
                <ul>
                    <li>Warm-up: 5 minutes of jumping jacks or high knees</li>
                    <li>Strength training: 3 sets of 10 reps of bench press, bicep curls, and tricep extensions</li>
                    <li>Cardio: 20 minutes of jumping rope or stair climbing</li>
                    <li>Cool-down: 5 minutes of stretching</li>
                </ul>

                <h4>Day 3:</h4>
                <ul>
                    <li>Rest day</li>
                </ul>

                <h4>Day 4:</h4>
                <ul>
                    <li>Warm-up: 5 minutes of jogging or jumping jacks</li>
                    <li>Strength training: 3 sets of 10 reps of pull-ups, dips, and deadlifts</li>
                    <li>Cardio: 20 minutes of running or cycling</li>
                    <li>Cool-down: 5 minutes of stretching</li>
                </ul>

                <h4>Day 5:</h4>
                <ul>
                    <li>Warm-up: 5 minutes of jumping jacks or high knees</li>
                    <li>Strength training: 3 sets of 10 reps of shoulder press, lateral raises, and front raises</li>
                    <li>Cardio: 20 minutes of jumping rope or stair climbing</li>
                    <li>Cool-down: 5 minutes of stretching</li>
                </ul>

                <h4>Day 6:</h4>
                <ul>
                    <li>Warm-up: 5 minutes of jogging or jumping jacks</li>
                    <li>Strength training: 3 sets of 10 reps of chin-ups, leg curls, and leg extensions</li>
                    <li>Cardio: 20 minutes of running or cycling</li>
                    <li>Cool-down: 5 minutes of stretching</li>
                </ul>

                <h4>Day 7:</h4>
                <ul>
                    <li>Rest day</li>
                </ul>

            </div>
        </div>
        <div class="workout sg14">
            <div class="about-us" style="width: 50%;">
                <h1>WORKOUT PLAN</h1>
                <h3>Weekly Workout Routine for Men in Their 20s</h3>

                <h4>Day 1:</h4>
                <ul>
                    <li>Warm-up: 5 minutes of light cardio (jogging, jumping jacks, etc.)</li>
                    <li>Barbell squats: 4 sets of 8 reps</li>
                    <li>Dumbbell lunges: 3 sets of 10 reps (each leg)</li>
                    <li>Leg press: 3 sets of 12 reps</li>
                    <li>Calf raises: 3 sets of 15 reps</li>
                </ul>

                <h4>Day 2:</h4>
                <ul>
                    <li>Warm-up: 5 minutes of light cardio</li>
                    <li>Bench press: 4 sets of 8 reps</li>
                    <li>Incline dumbbell press: 3 sets of 10 reps</li>
                    <li>Cable flyes: 3 sets of 12 reps</li>
                    <li>Tricep pushdowns: 3 sets of 15 reps</li>
                </ul>

                <h4>Day 3:</h4>
                <ul>
                    <li>Rest day</li>
                </ul>

                <h4>Day 4:</h4>
                <ul>
                    <li>Warm-up: 5 minutes of light cardio</li>
                    <li>Deadlifts: 4 sets of 8 reps</li>
                    <li>Bent-over rows: 3 sets of 10 reps</li>
                    <li>Lat pulldowns: 3 sets of 12 reps</li>
                    <li>Bicep curls: 3 sets of 15 reps</li>
                </ul>

                <h4>Day 5:</h4>
                <ul>
                    <li>Warm-up: 5 minutes of light cardio</li>
                    <li>Overhead press: 4 sets of 8 reps</li>
                    <li>Lateral raises: 3 sets of 10 reps</li>
                    <li>Upright rows: 3 sets of 12 reps</li>
                    <li>Shrugs: 3 sets of 15 reps</li>
                </ul>

                <h4>Day 6:</h4>
                <ul>
                    <li>Warm-up: 5 minutes of light cardio</li>
                    <li>Pull-ups: 3 sets of as many reps as possible</li>
                    <li>Push-ups: 3 sets of as many reps as possible</li>
                    <li>Squat jumps: 3 sets of 10 reps</li>
                    <li>Plank: 3 sets of 30 seconds</li>
                </ul>

                <h4>Day 7:</h4>
                <ul>
                    <li>Rest day</li>
                </ul>

            </div>
        </div>
        <div class="workout sg15">
            <div class="about-us" style="width: 50%;">
                <h1>WORKOUT PLAN</h1>
                <h3>Weekly Workout Routine for Men in Their 30s</h3>

                <h4>Monday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of light cardio (jogging, cycling, etc.)</li>
                    <li>Bench press: 3 sets of 8-12 reps</li>
                    <li>Bent-over rows: 3 sets of 8-12 reps</li>
                    <li>Shoulder press: 3 sets of 8-12 reps</li>
                    <li>Bicep curls: 3 sets of 8-12 reps</li>
                    <li>Tricep dips: 3 sets of 8-12 reps</li>
                    <li>Cool-down: 5-10 minutes of stretching</li>
                </ul>

                <h4>Tuesday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of light cardio</li>
                    <li>Squats: 3 sets of 8-12 reps</li>
                    <li>Lunges: 3 sets of 8-12 reps</li>
                    <li>Deadlifts: 3 sets of 8-12 reps</li>
                    <li>Calf raises: 3 sets of 8-12 reps</li>
                    <li>Cool-down: 5-10 minutes of stretching</li>
                </ul>

                <h4>Wednesday:</h4>
                <ul>
                    <li>Rest day</li>
                </ul>

                <h4>Thursday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of light cardio</li>
                    <li>Pull-ups: 3 sets of 8-12 reps</li>
                    <li>Chin-ups: 3 sets of 8-12 reps</li>
                    <li>Dumbbell flys: 3 sets of 8-12 reps</li>
                    <li>Cable crossovers: 3 sets of 8-12 reps</li>
                    <li>Cool-down: 5-10 minutes of stretching</li>
                </ul>

                <h4>Friday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of light cardio</li>
                    <li>Barbell curls: 3 sets of 8-12 reps</li>
                    <li>Hammer curls: 3 sets of 8-12 reps</li>
                    <li>Skull crushers: 3 sets of 8-12 reps</li>
                    <li>Cable pushdowns: 3 sets of 8-12 reps</li>
                    <li>Cool-down: 5-10 minutes of stretching</li>
                </ul>

                <h4>Saturday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of light cardio</li>
                    <li>Planks: 3 sets of 30 seconds to 1 minute</li>
                    <li>Leg raises: 3 sets of 8-12 reps</li>
                    <li>Russian twists: 3 sets of 8-12 reps</li>
                    <li>Cool-down: 5-10 minutes of stretching</li>
                </ul>

                <h4>Sunday:</h4>
                <ul>
                    <li>Rest day</li>
                </ul>

            </div>
        </div>
        <div class="workout sg16">
            <div class="about-us" style="width: 50%;">
                <h1>WORKOUT PLAN</h1>

                <h3>Weekly Workout Routine for Men in Their 40s</h3>

                <h4>Monday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of light cardio (jogging, jumping jacks, or cycling)</li>
                    <li>Strength training: 3 sets of 8-10 reps of bench press, rows, squats, deadlifts, and lunges</li>
                    <li>Cardio: 20-30 minutes of moderate-intensity cardio (running, cycling, or rowing)</li>
                </ul>

                <h4>Tuesday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of light cardio (jogging, jumping jacks, or cycling)</li>
                    <li>HIIT training: 3 sets of 30-second sprints with 30 seconds rest in between</li>
                    <li>Core training: 3 sets of 20 reps of planks, crunches, and leg raises</li>
                </ul>

                <h4>Wednesday:</h4>
                <ul>
                    <li>Rest day</li>
                </ul>

                <h4>Thursday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of light cardio (jogging, jumping jacks, or cycling)</li>
                    <li>Strength training: 3 sets of 8-10 reps of overhead press, pull-ups, dips, and bicep curls</li>
                    <li>Cardio: 20-30 minutes of moderate-intensity cardio (running, cycling, or rowing)</li>
                </ul>

                <h4>Friday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of light cardio (jogging, jumping jacks, or cycling)</li>
                    <li>HIIT training: 3 sets of 30-second sprints with 30 seconds rest in between</li>
                    <li>Core training: 3 sets of 20 reps of planks, crunches, and leg raises</li>
                </ul>

                <h4>Saturday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of light cardio (jogging, jumping jacks, or cycling)</li>
                    <li>Strength training: 3 sets of 8-10 reps of bench press, rows, squats, deadlifts, and lunges</li>
                    <li>Cardio: 20-30 minutes of moderate-intensity cardio (running, cycling, or rowing)</li>
                </ul>

                <h4>Sunday:</h4>
                <ul>
                    <li>Rest day</li>
                </ul>

            </div>
        </div>
        <div class="workout sg17">
            <div class="about-us" style="width: 50%;">
                <h1>WORKOUT PLAN</h1>
                <h3>Weekly Workout Routine for Men in Their 50s</h3>

                <h4>Day 1: Upper Body Strength Training</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of light cardio</li>
                    <li>Bench Press: 3 sets of 8-12 reps</li>
                    <li>Seated Rows: 3 sets of 8-12 reps</li>
                    <li>Overhead Press: 3 sets of 8-12 reps</li>
                    <li>Bicep Curls: 3 sets of 8-12 reps</li>
                    <li>Tricep Extensions: 3 sets of 8-12 reps</li>
                    <li>Cool-down: 5-10 minutes of stretching</li>
                </ul>

                <h4>Day 2: Cardio and Core</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of light cardio</li>
                    <li>Treadmill or elliptical: 30-45 minutes at moderate intensity</li>
                    <li>Plank: 3 sets, holding for 30-60 seconds each</li>
                    <li>Bicycle Crunches: 3 sets of 15-20 reps</li>
                    <li>Russian Twists: 3 sets of 15-20 reps</li>
                    <li>Cool-down: 5-10 minutes of stretching</li>
                </ul>

                <h4>Day 3: Lower Body Strength Training</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of light cardio</li>
                    <li>Squats: 3 sets of 8-12 reps</li>
                    <li>Deadlifts: 3 sets of 8-12 reps</li>
                    <li>Leg Press: 3 sets of 8-12 reps</li>
                    <li>Calf Raises: 3 sets of 15-20 reps</li>
                    <li>Cool-down: 5-10 minutes of stretching</li>
                </ul>

                <h4>Day 4: Yoga or Pilates</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of light cardio</li>
                    <li>Sun Salutations or Pilates Mat Work: 30-45 minutes</li>
                    <li>Cool-down: 5-10 minutes of stretching</li>
                </ul>

                <h4>Day 5: Cardio and Core</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of light cardio</li>
                    <li>Stair Climber or Stationary Bike: 30-45 minutes at moderate intensity</li>
                    <li>Plank: 3 sets, holding for 30-60 seconds each</li>
                    <li>Bicycle Crunches: 3 sets of 15-20 reps</li>
                    <li>Russian Twists: 3 sets of 15-20 reps</li>
                    <li>Cool-down: 5-10 minutes of stretching</li>
                </ul>

                <h4>Day 6: Total Body Strength Training</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of light cardio</li>
                    <li>Lunges: 3 sets of 8-12 reps</li>
                </ul>
                <h4>Day 7:</h4>
                <ul>
                    <li>Rest day</li>
                </ul>

            </div>
        </div>
        <div class="workout sg18">
            <div class="about-us" style="width: 50%;">
                <h1>WORKOUT PLAN</h1>
                <h3>Weekly Workout Routine for Men in Their 60s</h3>

                <h4>Monday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of light cardio (walking, cycling, or rowing)</li>
                    <li>Resistance training: 3 sets of 10 reps each of bodyweight squats, push-ups, and lunges</li>
                    <li>Cardio: 20 minutes of steady-state walking or cycling</li>
                    <li>Cool-down and stretch: 5-10 minutes of stretching</li>
                </ul>

                <h4>Tuesday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of light cardio</li>
                    <li>Resistance training: 3 sets of 10 reps each of dumbbell chest press, dumbbell rows, and dumbbell
                        bicep curls</li>
                    <li>Cardio: 20 minutes of steady-state walking or cycling</li>
                    <li>Cool-down and stretch: 5-10 minutes of stretching</li>
                </ul>

                <h4>Wednesday:</h4>
                <p>Rest day</p>

                <h4>Thursday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of light cardio</li>
                    <li>Resistance training: 3 sets of 10 reps each of bodyweight squats, push-ups, and lunges</li>
                    <li>Cardio: 20 minutes of interval training (alternating between 30 seconds of high intensity and 1
                        minute of low intensity)</li>
                    <li>Cool-down and stretch: 5-10 minutes of stretching</li>
                </ul>

                <h4>Friday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of light cardio</li>
                    <li>Resistance training: 3 sets of 10 reps each of dumbbell chest press, dumbbell rows, and dumbbell
                        bicep curls</li>
                    <li>Cardio: 20 minutes of interval training (alternating between 30 seconds of high intensity and 1
                        minute of low intensity)</li>
                    <li>Cool-down and stretch: 5-10 minutes of stretching</li>
                </ul>

                <h4>Saturday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of light cardio</li>
                    <li>Resistance training: 3 sets of 10 reps each of bodyweight squats, push-ups, and lunges</li>
                    <li>Cardio: 20 minutes of steady-state walking or cycling</li>
                    <li>Cool-down and stretch: 5-10 minutes of stretching</li>
                </ul>

                <h4>Sunday:</h4>
                <p>Rest day</p>
            </div>
        </div>
        <div class="workout sg19">
            <div class="about-us" style="width: 50%;">
                <h1>WORKOUT PLAN</h1>
                <h3>Teenage Girl Workout Plan</h3>

                <h4>Monday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of light cardio (jumping jacks, jogging in place, or skipping)</li>
                    <li>Strength training: 3 sets of 10 reps each of bodyweight squats, push-ups, and lunges</li>
                    <li>Cardio: 20 minutes of dancing or aerobic exercise</li>
                    <li>Cool-down and stretch: 5-10 minutes of stretching</li>
                </ul>

                <h4>Tuesday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of light cardio</li>
                    <li>Yoga or Pilates: 30 minutes of yoga or Pilates routine</li>
                    <li>Core training: 3 sets of 15 reps each of crunches, bicycle crunches, and plank</li>
                    <li>Cool-down and stretch: 5-10 minutes of stretching</li>
                </ul>

                <h4>Wednesday:</h4>
                <p>Rest day</p>

                <h4>Thursday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of light cardio</li>
                    <li>Strength training: 3 sets of 10 reps each of dumbbell curls, shoulder press, and tricep dips
                    </li>
                    <li>Cardio: 20 minutes of swimming or cycling</li>
                    <li>Cool-down and stretch: 5-10 minutes of stretching</li>
                </ul>

                <h4>Friday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of light cardio</li>
                    <li>HIIT workout: 3 sets of 30 seconds of high-intensity exercises (such as burpees, jumping lunges,
                        or mountain climbers) with 30 seconds of rest in between</li>
                    <li>Cardio: 20 minutes of running or brisk walking</li>
                    <li>Cool-down and stretch: 5-10 minutes of stretching</li>
                </ul>

                <h4>Saturday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of light cardio</li>
                    <li>Full-body workout: 3 sets of 10 reps each of bodyweight squats, push-ups, dumbbell rows, and
                        walking lunges</li>
                    <li>Cardio: 20 minutes of jump rope or dancing</li>
                    <li>Cool-down and stretch: 5-10 minutes of stretching</li>
                </ul>

                <h4>Sunday:</h4>
                <p>Rest day</p>

            </div>
        </div>
        <div class="workout sg20">
            <div class="about-us" style="width: 50%;">
                <h1>WORKOUT PLAN</h1>
                <h3>Workout plan for a healthy woman in their 20s</h3>

                <h4>Monday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of light cardio (jogging, jumping jacks, or cycling)</li>
                    <li>Strength training: 4 sets of 8 reps each of barbell squats, dumbbell lunges, and hip thrusts
                    </li>
                    <li>Upper body: 3 sets of 10 reps each of dumbbell bench press, bent-over rows, and shoulder press
                    </li>
                    <li>Cool-down and stretch: 5-10 minutes of stretching</li>
                </ul>

                <h4>Tuesday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of light cardio</li>
                    <li>HIIT workout: 4 sets of 30 seconds of high-intensity exercises (such as burpees, jump squats, or
                        mountain climbers) with 30 seconds of rest in between</li>
                    <li>Core training: 3 sets of 15 reps each of plank, Russian twists, and leg raises</li>
                    <li>Cool-down and stretch: 5-10 minutes of stretching</li>
                </ul>

                <h4>Wednesday:</h4>
                <p>Rest day</p>

                <h4>Thursday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of light cardio</li>
                    <li>Strength training: 4 sets of 8 reps each of dumbbell deadlifts, glute bridges, and calf raises
                    </li>
                    <li>Upper body: 3 sets of 10 reps each of dumbbell chest flyes, lat pulldowns, and tricep pushdowns
                    </li>
                    <li>Cool-down and stretch: 5-10 minutes of stretching</li>
                </ul>

                <h4>Friday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of light cardio</li>
                    <li>Cardio: 30-45 minutes of steady-state cardio (running, cycling, or swimming)</li>
                    <li>Core training: 3 sets of 15 reps each of crunches, bicycle crunches, and plank</li>
                    <li>Cool-down and stretch: 5-10 minutes of stretching</li>
                </ul>

                <h4>Saturday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of light cardio</li>
                    <li>Strength training: 4 sets of 8 reps each of barbell squats, dumbbell lunges, and hip thrusts
                    </li>
                    <li>Upper body: 3 sets of 10 reps each of dumbbell bench press, bent-over rows, and shoulder press
                    </li>
                    <li>Cool-down and stretch: 5-10 minutes of stretching</li>
                </ul>

                <h4>Sunday:</h4>
                <p>Rest day</p>


            </div>
        </div>
        <div class="workout sg21">
            <div class="about-us" style="width: 50%;">
                <h1>WORKOUT PLAN</h1>
                <h3>Workout plan for a healthy woman in their 30s
                </h3>

                <h4>Monday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of light cardio (jogging, jumping jacks, or cycling)</li>
                    <li>Strength training: 4 sets of 8-10 reps each of barbell squats, dumbbell lunges, and deadlifts
                    </li>
                    <li>Upper body: 3 sets of 10 reps each of dumbbell bench press, bent-over rows, and shoulder press
                    </li>
                    <li>Cool-down and stretch: 5-10 minutes of stretching</li>
                </ul>

                <h4>Tuesday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of light cardio</li>
                    <li>HIIT workout: 4 sets of 30 seconds of high-intensity exercises (such as burpees, jump squats, or
                        mountain climbers) with 30 seconds of rest in between</li>
                    <li>Core training: 3 sets of 12-15 reps each of plank, Russian twists, and leg raises</li>
                    <li>Cool-down and stretch: 5-10 minutes of stretching</li>
                </ul>

                <h4>Wednesday:</h4>
                <p>Rest day</p>

                <h4>Thursday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of light cardio</li>
                    <li>Strength training: 4 sets of 8-10 reps each of dumbbell squats, dumbbell lunges, and glute
                        bridges</li>
                    <li>Upper body: 3 sets of 10 reps each of dumbbell chest flyes, lat pulldowns, and tricep pushdowns
                    </li>
                    <li>Cool-down and stretch: 5-10 minutes of stretching</li>
                </ul>

                <h4>Friday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of light cardio</li>
                    <li>Cardio: 30-45 minutes of moderate-intensity cardio (running, cycling, or swimming)</li>
                    <li>Core training: 3 sets of 12-15 reps each of crunches, bicycle crunches, and plank</li>
                    <li>Cool-down and stretch: 5-10 minutes of stretching</li>
                </ul>

                <h4>Saturday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of light cardio</li>
                    <li>Strength training: 4 sets of 8-10 reps each of barbell squats, dumbbell lunges, and deadlifts
                    </li>
                    <li>Upper body: 3 sets of 10 reps each of dumbbell bench press, bent-over rows, and shoulder press
                    </li>
                    <li>Cool-down and stretch: 5-10 minutes of stretching</li>
                </ul>

                <h4>Sunday:</h4>
                <p>Rest day</p>


            </div>
        </div>
        <div class="workout sg22">
            <div class="about-us" style="width: 50%;">
                <h1>WORKOUT PLAN</h1>
                <h3> Workout plan for a healthy woman in their 40s
                </h3>

                <h4>Monday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of light cardio (jogging, brisk walking, or cycling)</li>
                    <li>Strength training: 4 sets of 8-10 reps each of squats, lunges, and hip thrusts</li>
                    <li>Upper body: 3 sets of 10 reps each of push-ups, dumbbell rows, and shoulder presses</li>
                    <li>Cool-down and stretch: 5-10 minutes of stretching</li>
                </ul>

                <h4>Tuesday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of light cardio</li>
                    <li>Cardio: 30-45 minutes of low-impact cardio (cycling, swimming, or elliptical)</li>
                    <li>Core training: 3 sets of 12-15 reps each of planks, Russian twists, and standing side crunches
                    </li>
                    <li>Cool-down and stretch: 5-10 minutes of stretching</li>
                </ul>

                <h4>Wednesday:</h4>
                <p>Rest day</p>

                <h4>Thursday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of light cardio</li>
                    <li>Strength training: 4 sets of 8-10 reps each of deadlifts, step-ups, and glute bridges</li>
                    <li>Upper body: 3 sets of 10 reps each of chest presses, lat pulldowns, and tricep dips</li>
                    <li>Cool-down and stretch: 5-10 minutes of stretching</li>
                </ul>

                <h4>Friday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of light cardio</li>
                    <li>HIIT workout: 4 sets of 30 seconds of high-intensity exercises (such as jumping jacks, mountain
                        climbers, or burpees) with 30 seconds of rest in between</li>
                    <li>Core training: 3 sets of 12-15 reps each of reverse crunches, seated twists, and bird dogs</li>
                    <li>Cool-down and stretch: 5-10 minutes of stretching</li>
                </ul>

                <h4>Saturday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of light cardio</li>
                    <li>Strength training: 4 sets of 8-10 reps each of squats, lunges, and hip thrusts</li>
                    <li>Upper body: 3 sets of 10 reps each of push-ups, dumbbell rows, and shoulder presses</li>
                    <li>Cool-down and stretch: 5-10 minutes of stretching</li>
                </ul>

                <h4>Sunday:</h4>
                <p>Rest day</p>

            </div>
        </div>
        <div class="workout sg23">
            <div class="about-us" style="width: 50%;">
                <h1>WORKOUT PLAN</h1>
                <h3>Women's Workout Plan</h3>

                <h4>Monday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of light cardio (brisk walking, stationary cycling, or low-impact
                        aerobics)</li>
                    <li>Strength training: 3 sets of 10-12 reps each of bodyweight squats, step-ups, and seated leg
                        curls</li>
                    <li>Upper body: 3 sets of 10-12 reps each of resistance band chest press, dumbbell rows, and lateral
                        raises</li>
                    <li>Cool-down and stretch: 5-10 minutes of stretching</li>
                </ul>

                <h4>Tuesday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of light cardio</li>
                    <li>Cardio: 30 minutes of moderate-intensity cardio (brisk walking, swimming, or cycling)</li>
                    <li>Core training: 3 sets of 12-15 reps each of planks, seated twists, and stability ball crunches
                    </li>
                    <li>Cool-down and stretch: 5-10 minutes of stretching</li>
                </ul>

                <h4>Wednesday:</h4>
                <p>Rest day</p>

                <h4>Thursday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of light cardio</li>
                    <li>Strength training: 3 sets of 10-12 reps each of dumbbell squats, step-ups, and seated leg curls
                    </li>
                    <li>Upper body: 3 sets of 10-12 reps each of resistance band chest press, dumbbell rows, and lateral
                        raises</li>
                    <li>Cool-down and stretch: 5-10 minutes of stretching</li>
                </ul>

                <h4>Friday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of light cardio</li>
                    <li>HIIT workout: 4 sets of 30 seconds of high-intensity exercises (such as jumping jacks, mountain
                        climbers, or burpees) with 30 seconds of rest in between</li>
                    <li>Core training: 3 sets of 12-15 reps each of reverse crunches, seated twists, and stability ball
                        back extensions</li>
                    <li>Cool-down and stretch: 5-10 minutes of stretching</li>
                </ul>

                <h4>Saturday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of light cardio</li>
                    <li>Strength training: 3 sets of 10-12 reps each of bodyweight squats, step-ups, and seated leg
                        curls</li>
                    <li>Upper body: 3 sets of 10-12 reps each of resistance band chest press, dumbbell rows, and lateral
                        raises</li>
                    <li>Cool-down and stretch: 5-10 minutes of stretching</li>
                </ul>

                <h4>Sunday:</h4>
                <p>Rest day</p>

            </div>
        </div>
        <div class="workout sg24">
            <div class="about-us" style="width: 50%;">
                <h1>WORKOUT PLAN</h1>
                <h3> Workout plan for a healthy woman in their 60s</h3>

                <h4>Monday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of light cardio (brisk walking, stationary cycling, or low-impact
                        aerobics)</li>
                    <li>Strength training: 3 sets of 10-12 reps each of bodyweight squats, standing leg curls, and
                        seated chest press</li>
                    <li>Balance exercises: 3 sets of 10-12 reps each of single-leg stands, heel-to-toe walk, and
                        standing leg abduction</li>
                    <li>Cool-down and stretch: 5-10 minutes of stretching</li>
                </ul>

                <h4>Tuesday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of light cardio</li>
                    <li>Cardio: 30 minutes of low-impact cardio (brisk walking, swimming, or cycling)</li>
                    <li>Core training: 3 sets of 12-15 reps each of seated twists, seated leg lifts, and pelvic tilts
                    </li>
                    <li>Cool-down and stretch: 5-10 minutes of stretching</li>
                </ul>

                <h4>Wednesday:</h4>
                <p>Rest day</p>

                <h4>Thursday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of light cardio</li>
                    <li>Strength training: 3 sets of 10-12 reps each of bodyweight squats, standing leg curls, and
                        seated chest press</li>
                    <li>Balance exercises: 3 sets of 10-12 reps each of single-leg stands, heel-to-toe walk, and
                        standing leg abduction</li>
                    <li>Cool-down and stretch: 5-10 minutes of stretching</li>
                </ul>

                <h4>Friday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of light cardio</li>
                    <li>Low-impact aerobics: 30 minutes of low-impact dance or aerobic exercise</li>
                    <li>Core training: 3 sets of 12-15 reps each of seated twists, seated leg lifts, and pelvic tilts
                    </li>
                    <li>Cool-down and stretch: 5-10 minutes of stretching</li>
                </ul>

                <h4>Saturday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of light cardio</li>
                    <li>Strength training: 3 sets of 10-12 reps each of bodyweight squats, standing leg curls, and
                        seated chest press</li>
                    <li>Balance exercises: 3 sets of 10-12 reps each of single-leg stands, heel-to-toe walk, and
                        standing leg abduction</li>
                    <li>Cool-down and stretch: 5-10 minutes of stretching</li>
                </ul>

                <h4>Sunday:</h4>
                <p>Rest day</p>


            </div>
        </div>
        <div class="workout sg25">
            <div class="about-us" style="width: 50%;">
                <h1>WORKOUT PLAN</h1>
                <h3>Overweight Teenage Boy Workout Plan</h3>

                <h4>Monday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of light cardio (brisk walking or jogging)</li>
                    <li>Strength training: 3 sets of 10-12 reps each of bodyweight squats, push-ups, and standing lunges
                    </li>
                    <li>Cardio: 20 minutes of low-impact cardio (brisk walking, cycling, or swimming)</li>
                    <li>Cool-down and stretch: 5-10 minutes of stretching</li>
                </ul>

                <h4>Tuesday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of light cardio</li>
                    <li>Cardio: 30 minutes of moderate-intensity cardio (brisk walking, jogging, or cycling)</li>
                    <li>Core training: 3 sets of 12-15 reps each of planks, crunches, and reverse crunches</li>
                    <li>Cool-down and stretch: 5-10 minutes of stretching</li>
                </ul>

                <h4>Wednesday:</h4>
                <p>Rest day</p>

                <h4>Thursday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of light cardio</li>
                    <li>Strength training: 3 sets of 10-12 reps each of bodyweight squats, push-ups, and standing lunges
                    </li>
                    <li>Cardio: 20 minutes of low-impact cardio (brisk walking, cycling, or swimming)</li>
                    <li>Cool-down and stretch: 5-10 minutes of stretching</li>
                </ul>

                <h4>Friday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of light cardio</li>
                    <li>Cardio: 30 minutes of moderate-intensity cardio (brisk walking, jogging, or cycling)</li>
                    <li>Core training: 3 sets of 12-15 reps each of planks, crunches, and reverse crunches</li>
                    <li>Cool-down and stretch: 5-10 minutes of stretching</li>
                </ul>

                <h4>Saturday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of light cardio</li>
                    <li>Strength training: 3 sets of 10-12 reps each of bodyweight squats, push-ups, and standing lunges
                    </li>
                    <li>Cardio: 20 minutes of low-impact cardio (brisk walking, cycling, or swimming)</li>
                    <li>Cool-down and stretch: 5-10 minutes of stretching</li>
                </ul>

                <h4>Sunday:</h4>
                <p>Rest day</p>

            </div>
        </div>
        <div class="workout sg26">
            <div class="about-us" style="width: 50%;">
                <h1>WORKOUT PLAN</h1>
                <h3>Overweight Men in their 20s Workout Plan</h3>

                <h4>Monday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of light cardio (brisk walking or cycling)</li>
                    <li>Strength training: 3 sets of 10-12 reps each of bodyweight squats, push-ups, and bent-over rows
                    </li>
                    <li>Cardio: 20 minutes of moderate-intensity cardio (brisk walking, cycling, or elliptical)</li>
                    <li>Cool-down and stretch: 5-10 minutes of stretching</li>
                </ul>

                <h4>Tuesday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of light cardio</li>
                    <li>Cardio: 30 minutes of moderate-intensity cardio (brisk walking, jogging, or cycling)</li>
                    <li>Core training: 3 sets of 12-15 reps each of planks, crunches, and mountain climbers</li>
                    <li>Cool-down and stretch: 5-10 minutes of stretching</li>
                </ul>

                <h4>Wednesday:</h4>
                <p>Rest day</p>

                <h4>Thursday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of light cardio</li>
                    <li>Strength training: 3 sets of 10-12 reps each of bodyweight squats, push-ups, and bent-over rows
                    </li>
                    <li>Cardio: 20 minutes of moderate-intensity cardio (brisk walking, cycling, or elliptical)</li>
                    <li>Cool-down and stretch: 5-10 minutes of stretching</li>
                </ul>

                <h4>Friday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of light cardio</li>
                    <li>Cardio: 30 minutes of moderate-intensity cardio (brisk walking, jogging, or cycling)</li>
                    <li>Core training: 3 sets of 12-15 reps each of planks, crunches, and mountain climbers</li>
                    <li>Cool-down and stretch: 5-10 minutes of stretching</li>
                </ul>

                <h4>Saturday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of light cardio</li>
                    <li>Strength training: 3 sets of 10-12 reps each of bodyweight squats, push-ups, and bent-over rows
                    </li>
                    <li>Cardio: 20 minutes of moderate-intensity cardio (brisk walking, cycling, or elliptical)</li>
                    <li>Cool-down and stretch: 5-10 minutes of stretching</li>
                </ul>

                <h4>Sunday:</h4>
                <p>Rest day</p>

            </div>
        </div>
        <div class="workout sg27">
            <div class="about-us" style="width: 50%;">
                <h1>WORKOUT PLAN</h1>
                <h3>Overweight Men in their 30s Workout Plan</h3>

                <h4>Monday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of light cardio (brisk walking or cycling)</li>
                    <li>Strength training: 3 sets of 10-12 reps each of bodyweight squats, push-ups, and dumbbell rows
                    </li>
                    <li>Cardio: 20 minutes of moderate-intensity cardio (brisk walking, cycling, or elliptical)</li>
                    <li>Cool-down and stretch: 5-10 minutes of stretching</li>
                </ul>

                <h4>Tuesday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of light cardio</li>
                    <li>Cardio: 30 minutes of moderate-intensity cardio (brisk walking, jogging, or cycling)</li>
                    <li>Core training: 3 sets of 12-15 reps each of planks, crunches, and Russian twists</li>
                    <li>Cool-down and stretch: 5-10 minutes of stretching</li>
                </ul>

                <h4>Wednesday:</h4>
                <p>Rest day</p>

                <h4>Thursday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of light cardio</li>
                    <li>Strength training: 3 sets of 10-12 reps each of bodyweight squats, push-ups, and dumbbell rows
                    </li>
                    <li>Cardio: 20 minutes of moderate-intensity cardio (brisk walking, cycling, or elliptical)</li>
                    <li>Cool-down and stretch: 5-10 minutes of stretching</li>
                </ul>

                <h4>Friday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of light cardio</li>
                    <li>Cardio: 30 minutes of moderate-intensity cardio (brisk walking, jogging, or cycling)</li>
                    <li>Core training: 3 sets of 12-15 reps each of planks, crunches, and Russian twists</li>
                    <li>Cool-down and stretch: 5-10 minutes of stretching</li>
                </ul>

                <h4>Saturday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of light cardio</li>
                    <li>Strength training: 3 sets of 10-12 reps each of bodyweight squats, push-ups, and dumbbell rows
                    </li>
                    <li>Cardio: 20 minutes of moderate-intensity cardio (brisk walking, cycling, or elliptical)</li>
                    <li>Cool-down and stretch: 5-10 minutes of stretching</li>
                </ul>

                <h4>Sunday:</h4>
                <p>Rest day</p>

            </div>
        </div>

        <div class="workout sg28">
            <div class="about-us" style="width: 50%;">
                <h1>WORKOUT PLAN</h1>
                <h3>Workout Plan for Overweight Men in their 40s</h3>

                <h4>Monday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of light cardio (brisk walking or stationary bike)</li>
                    <li>Strength training: 3 sets of 10-12 reps each of squats, dumbbell chest press, seated rows, and
                        bicep curls</li>
                    <li>Cardio: 20 minutes of moderate-intensity cardio (brisk walking, cycling, or elliptical)</li>
                    <li>Cool-down and stretch: 5-10 minutes of stretching</li>
                </ul>

                <h4>Tuesday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of light cardio</li>
                    <li>Cardio: 30 minutes of moderate-intensity cardio (brisk walking, jogging, or cycling)</li>
                    <li>Core training: 3 sets of 12-15 reps each of planks, crunches, and stability ball exercises</li>
                    <li>Cool-down and stretch: 5-10 minutes of stretching</li>
                </ul>

                <h4>Wednesday:</h4>
                <p>Rest day</p>

                <h4>Thursday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of light cardio</li>
                    <li>Strength training: 3 sets of 10-12 reps each of lunges, dumbbell shoulder press, lat pulldowns,
                        and tricep dips</li>
                    <li>Cardio: 20 minutes of moderate-intensity cardio (brisk walking, cycling, or elliptical)</li>
                    <li>Cool-down and stretch: 5-10 minutes of stretching</li>
                </ul>

                <h4>Friday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of light cardio</li>
                    <li>Cardio: 30 minutes of moderate-intensity cardio (brisk walking, jogging, or cycling)</li>
                    <li>Core training: 3 sets of 12-15 reps each of planks, Russian twists, and stability ball exercises
                    </li>
                    <li>Cool-down and stretch: 5-10 minutes of stretching</li>
                </ul>

                <h4>Saturday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of light cardio</li>
                    <li>Strength training: 3 sets of 10-12 reps each of squats, dumbbell chest press, seated rows, and
                        bicep curls</li>
                    <li>Cardio: 20 minutes of moderate-intensity cardio (brisk walking, cycling, or elliptical)</li>
                    <li>Cool-down and stretch: 5-10 minutes of stretching</li>
                </ul>

                <h4>Sunday:</h4>
                <p>Rest day</p>

            </div>
        </div>
        <div class="workout sg29">
            <div class="about-us" style="width: 50%;">
                <h1>WORKOUT PLAN</h1>
                <h3>Workout Plan for Overweight Men in their 50s</h3>

                <h4>Monday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of light cardio (brisk walking or stationary bike)</li>
                    <li>Strength training: 3 sets of 10-12 reps each of bodyweight squats, push-ups, seated rows, and
                        bicep curls</li>
                    <li>Cardio: 20 minutes of moderate-intensity cardio (brisk walking, cycling, or elliptical)</li>
                    <li>Cool-down and stretch: 5-10 minutes of stretching</li>
                </ul>

                <h4>Tuesday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of light cardio</li>
                    <li>Cardio: 30 minutes of moderate-intensity cardio (brisk walking, jogging, or cycling)</li>
                    <li>Core training: 3 sets of 12-15 reps each of planks, crunches, and stability ball exercises</li>
                    <li>Cool-down and stretch: 5-10 minutes of stretching</li>
                </ul>

                <h4>Wednesday:</h4>
                <p>Rest day</p>

                <h4>Thursday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of light cardio</li>
                    <li>Strength training: 3 sets of 10-12 reps each of bodyweight squats, push-ups, seated rows, and
                        bicep curls</li>
                    <li>Cardio: 20 minutes of moderate-intensity cardio (brisk walking, cycling, or elliptical)</li>
                    <li>Cool-down and stretch: 5-10 minutes of stretching</li>
                </ul>

                <h4>Friday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of light cardio</li>
                    <li>Cardio: 30 minutes of moderate-intensity cardio (brisk walking, jogging, or cycling)</li>
                    <li>Core training: 3 sets of 12-15 reps each of planks, Russian twists, and stability ball exercises
                    </li>
                    <li>Cool-down and stretch: 5-10 minutes of stretching</li>
                </ul>

                <h4>Saturday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of light cardio</li>
                    <li>Strength training: 3 sets of 10-12 reps each of bodyweight squats, push-ups, seated rows, and
                        bicep curls</li>
                    <li>Cardio: 20 minutes of moderate-intensity cardio (brisk walking, cycling, or elliptical)</li>
                    <li>Cool-down and stretch: 5-10 minutes of stretching</li>
                </ul>

                <h4>Sunday:</h4>
                <p>Rest day</p>


            </div>
        </div>


        <div class="workout sg30">
            <div class="about-us" style="width: 50%;">
                <h1>WORKOUT PLAN</h1>
                <h3>Workout Plan for Overweight Men in their 60s</h3>

                <h4>Monday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of light cardio (brisk walking or stationary bike)</li>
                    <li>Strength training: 2 sets of 10-12 reps each of bodyweight squats, modified push-ups, seated
                        rows, and bicep curls (using light dumbbells or resistance bands)</li>
                    <li>Cardio: 15 minutes of low-impact cardio (brisk walking, cycling, or elliptical)</li>
                    <li>Cool-down and stretch: 5-10 minutes of stretching</li>
                </ul>

                <h4>Tuesday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of light cardio</li>
                    <li>Cardio: 20 minutes of low-impact cardio (brisk walking, cycling, or swimming)</li>
                    <li>Core training: 2 sets of 10-12 reps each of standing side crunches, seated leg raises, and
                        seated twists</li>
                    <li>Cool-down and stretch: 5-10 minutes of stretching</li>
                </ul>

                <h4>Wednesday:</h4>
                <p>Rest day</p>

                <h4>Thursday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of light cardio</li>
                    <li>Strength training: 2 sets of 10-12 reps each of bodyweight squats, modified push-ups, seated
                        rows, and bicep curls (using light dumbbells or resistance bands)</li>
                    <li>Cardio: 15 minutes of low-impact cardio (brisk walking, cycling, or elliptical)</li>
                    <li>Cool-down and stretch: 5-10 minutes of stretching</li>
                </ul>

                <h4>Friday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of light cardio</li>
                    <li>Cardio: 20 minutes of low-impact cardio (brisk walking, cycling, or swimming)</li>
                    <li>Core training: 2 sets of 10-12 reps each of standing side crunches, seated leg raises, and
                        seated twists</li>
                    <li>Cool-down and stretch: 5-10 minutes of stretching</li>
                </ul>

                <h4>Saturday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of light cardio</li>
                    <li>Strength training: 2 sets of 10-12 reps each of bodyweight squats, modified push-ups, seated
                        rows, and bicep curls (using light dumbbells or resistance bands)</li>
                    <li>Cardio: 15 minutes of low-impact cardio (brisk walking, cycling, or elliptical)</li>
                    <li>Cool-down and stretch: 5-10 minutes of stretching</li>
                </ul>

                <h4>Sunday:</h4>
                <p>Rest day</p>

            </div>
        </div>
        <div class="workout sg31">
            <div class="about-us" style="width: 50%;">
                <h1>WORKOUT PLAN</h1>
                <h3>Workout Plan for Overweight Teenage Girl</h3>

                <h4>Monday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of light cardio (brisk walking or jogging)</li>
                    <li>Strength training: 2 sets of 10-12 reps each of bodyweight squats, modified push-ups, dumbbell
                        rows (using light dumbbells or resistance bands), and lunges</li>
                    <li>Cardio: 15 minutes of moderate-intensity cardio (brisk walking, cycling, or dancing)</li>
                    <li>Cool-down and stretch: 5-10 minutes of stretching</li>
                </ul>

                <h4>Tuesday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of light cardio</li>
                    <li>Cardio: 20 minutes of moderate-intensity cardio (brisk walking, jogging, or dancing)</li>
                    <li>Core training: 2 sets of 10-12 reps each of crunches, plank exercises, and standing side leg
                        lifts</li>
                    <li>Cool-down and stretch: 5-10 minutes of stretching</li>
                </ul>

                <h4>Wednesday:</h4>
                <p>Rest day</p>

                <h4>Thursday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of light cardio</li>
                    <li>Strength training: 2 sets of 10-12 reps each of bodyweight squats, modified push-ups, dumbbell
                        rows (using light dumbbells or resistance bands), and lunges</li>
                    <li>Cardio: 15 minutes of moderate-intensity cardio (brisk walking, cycling, or dancing)</li>
                    <li>Cool-down and stretch: 5-10 minutes of stretching</li>
                </ul>

                <h4>Friday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of light cardio</li>
                    <li>Cardio: 20 minutes of moderate-intensity cardio (brisk walking, jogging, or dancing)</li>
                    <li>Core training: 2 sets of 10-12 reps each of crunches, plank exercises, and standing side leg
                        lifts</li>
                    <li>Cool-down and stretch: 5-10 minutes of stretching</li>
                </ul>

                <h4>Saturday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of light cardio</li>
                    <li>Strength training: 2 sets of 10-12 reps each of bodyweight squats, modified push-ups, dumbbell
                        rows (using light dumbbells or resistance bands), and lunges</li>
                    <li>Cardio: 15 minutes of moderate-intensity cardio (brisk walking, cycling, or dancing)</li>
                    <li>Cool-down and stretch: 5-10 minutes of stretching</li>
                </ul>

                <h4>Sunday:</h4>
                <p>Rest day</p>
            </div>
        </div>
        <div class="workout sg32">
            <div class="about-us" style="width: 50%;">
                <h1>WORKOUT PLAN</h1>
                <h3>Workout Plan for Overweight Woman in her 20s</h3>

                <h4>Monday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of light cardio (brisk walking or cycling)</li>
                    <li>Strength training: 3 sets of 10-12 reps each of bodyweight squats, dumbbell chest press,
                        dumbbell rows, and bicep curls</li>
                    <li>Cardio: 20 minutes of moderate-intensity cardio (brisk walking, jogging, or using an elliptical
                        machine)</li>
                    <li>Cool-down and stretch: 5-10 minutes of stretching</li>
                </ul>

                <h4>Tuesday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of light cardio</li>
                    <li>Cardio: 30 minutes of moderate-intensity cardio (brisk walking, jogging, or cycling)</li>
                    <li>Core training: 2 sets of 12-15 reps each of planks, crunches, Russian twists, and leg raises
                    </li>
                    <li>Cool-down and stretch: 5-10 minutes of stretching</li>
                </ul>

                <h4>Wednesday:</h4>
                <p>Rest day</p>

                <h4>Thursday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of light cardio</li>
                    <li>Strength training: 3 sets of 10-12 reps each of bodyweight squats, dumbbell chest press,
                        dumbbell rows, and bicep curls</li>
                    <li>Cardio: 20 minutes of moderate-intensity cardio (brisk walking, jogging, or using an elliptical
                        machine)</li>
                    <li>Cool-down and stretch: 5-10 minutes of stretching</li>
                </ul>

                <h4>Friday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of light cardio</li>
                    <li>Cardio: 30 minutes of moderate-intensity cardio (brisk walking, jogging, or cycling)</li>
                    <li>Core training: 2 sets of 12-15 reps each of planks, crunches, Russian twists, and leg raises
                    </li>
                    <li>Cool-down and stretch: 5-10 minutes of stretching</li>
                </ul>

                <h4>Saturday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of light cardio</li>
                    <li>Strength training: 3 sets of 10-12 reps each of bodyweight squats, dumbbell chest press,
                        dumbbell rows, and bicep curls</li>
                    <li>Cardio: 20 minutes of moderate-intensity cardio (brisk walking, jogging, or using an elliptical
                        machine)</li>
                    <li>Cool-down and stretch: 5-10 minutes of stretching</li>
                </ul>

                <h4>Sunday:</h4>
                <p>Rest day</p>

            </div>
        </div>

        <div class="workout sg33">
            <div class="about-us" style="width: 50%;">
                <h1>WORKOUT PLAN</h1>
                <h3>Workout Plan for Overweight Women in their 30s</h3>

                <h4>Monday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of light cardio (brisk walking or cycling)</li>
                    <li>Strength training: 3 sets of 10-12 reps each of bodyweight squats, dumbbell chest press,
                        dumbbell rows, and lunges</li>
                    <li>Cardio: 20 minutes of moderate-intensity cardio (brisk walking, jogging, or using an elliptical
                        machine)</li>
                    <li>Cool-down and stretch: 5-10 minutes of stretching</li>
                </ul>

                <h4>Tuesday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of light cardio</li>
                    <li>Cardio: 30 minutes of moderate-intensity cardio (brisk walking, jogging, or cycling)</li>
                    <li>Core training: 2 sets of 12-15 reps each of planks, crunches, Russian twists, and leg raises
                    </li>
                    <li>Cool-down and stretch: 5-10 minutes of stretching</li>
                </ul>

                <h4>Wednesday:</h4>
                <p>Rest day</p>

                <h4>Thursday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of light cardio</li>
                    <li>Strength training: 3 sets of 10-12 reps each of bodyweight squats, dumbbell chest press,
                        dumbbell rows, and lunges</li>
                    <li>Cardio: 20 minutes of moderate-intensity cardio (brisk walking, jogging, or using an elliptical
                        machine)</li>
                    <li>Cool-down and stretch: 5-10 minutes of stretching</li>
                </ul>

                <h4>Friday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of light cardio</li>
                    <li>Cardio: 30 minutes of moderate-intensity cardio (brisk walking, jogging, or cycling)</li>
                    <li>Core training: 2 sets of 12-15 reps each of planks, crunches, Russian twists, and leg raises
                    </li>
                    <li>Cool-down and stretch: 5-10 minutes of stretching</li>
                </ul>

                <h4>Saturday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of light cardio</li>
                    <li>Strength training: 3 sets of 10-12 reps each of bodyweight squats, dumbbell chest press,
                        dumbbell rows, and lunges</li>
                    <li>Cardio: 20 minutes of moderate-intensity cardio (brisk walking, jogging, or using an elliptical
                        machine)</li>
                    <li>Cool-down and stretch: 5-10 minutes of stretching</li>
                </ul>

                <h4>Sunday:</h4>
                <p>Rest day</p>

            </div>
        </div>
        <div class="workout sg34">
            <div class="about-us" style="width: 50%;">
                <h1>WORKOUT PLAN</h1>
                <h3>Workout Plan for Overweight Women in their 40s</h3>

                <h4>Monday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of light cardio (brisk walking or cycling)</li>
                    <li>Strength training: 3 sets of 10-12 reps each of bodyweight squats, dumbbell chest press,
                        dumbbell rows, and step-ups</li>
                    <li>Cardio: 20 minutes of moderate-intensity cardio (brisk walking, jogging, or using an elliptical
                        machine)</li>
                    <li>Cool-down and stretch: 5-10 minutes of stretching</li>
                </ul>

                <h4>Tuesday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of light cardio</li>
                    <li>Cardio: 30 minutes of moderate-intensity cardio (brisk walking, jogging, or cycling)</li>
                    <li>Core training: 2 sets of 12-15 reps each of planks, standing side bends, Russian twists, and
                        lying leg raises</li>
                    <li>Cool-down and stretch: 5-10 minutes of stretching</li>
                </ul>

                <h4>Wednesday:</h4>
                <p>Rest day</p>

                <h4>Thursday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of light cardio</li>
                    <li>Strength training: 3 sets of 10-12 reps each of bodyweight squats, dumbbell chest press,
                        dumbbell rows, and step-ups</li>
                    <li>Cardio: 20 minutes of moderate-intensity cardio (brisk walking, jogging, or using an elliptical
                        machine)</li>
                    <li>Cool-down and stretch: 5-10 minutes of stretching</li>
                </ul>

                <h4>Friday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of light cardio</li>
                    <li>Cardio: 30 minutes of moderate-intensity cardio (brisk walking, jogging, or cycling)</li>
                    <li>Core training: 2 sets of 12-15 reps each of planks, standing side bends, Russian twists, and
                        lying leg raises</li>
                    <li>Cool-down and stretch: 5-10 minutes of stretching</li>
                </ul>

                <h4>Saturday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of light cardio</li>
                    <li>Strength training: 3 sets of 10-12 reps each of bodyweight squats, dumbbell chest press,
                        dumbbell rows, and step-ups</li>
                    <li>Cardio: 20 minutes of moderate-intensity cardio (brisk walking, jogging, or using an elliptical
                        machine)</li>
                    <li>Cool-down and stretch: 5-10 minutes of stretching</li>
                </ul>

                <h4>Sunday:</h4>
                <p>Rest day</p>

            </div>
        </div>
        <div class="workout sg35">
            <div class="about-us" style="width: 50%;">
                <h1>WORKOUT PLAN</h1>
                <h3>Workout Plan for Overweight Women in their 50s</h3>

                <h4>Monday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of light cardio (brisk walking or cycling)</li>
                    <li>Strength training: 2 sets of 10-12 reps each of bodyweight squats, dumbbell chest press,
                        dumbbell rows, and seated leg curls</li>
                    <li>Cardio: 20 minutes of low-impact cardio (brisk walking, swimming, or using an elliptical
                        machine)</li>
                    <li>Flexibility exercises: 10 minutes of gentle stretching</li>
                </ul>

                <h4>Tuesday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of light cardio</li>
                    <li>Cardio: 30 minutes of low-impact cardio (brisk walking, swimming, or using an elliptical
                        machine)</li>
                    <li>Core training: 2 sets of 10-12 reps each of standing side bends, seated Russian twists, pelvic
                        tilts, and modified planks</li>
                    <li>Flexibility exercises: 10 minutes of gentle stretching</li>
                </ul>

                <h4>Wednesday:</h4>
                <p>Rest day</p>

                <h4>Thursday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of light cardio</li>
                    <li>Strength training: 2 sets of 10-12 reps each of bodyweight squats, dumbbell chest press,
                        dumbbell rows, and seated leg curls</li>
                    <li>Cardio: 20 minutes of low-impact cardio (brisk walking, swimming, or using an elliptical
                        machine)</li>
                    <li>Flexibility exercises: 10 minutes of gentle stretching</li>
                </ul>

                <h4>Friday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of light cardio</li>
                    <li>Cardio: 30 minutes of low-impact cardio (brisk walking, swimming, or using an elliptical
                        machine)</li>
                    <li>Core training: 2 sets of 10-12 reps each of standing side bends, seated Russian twists, pelvic
                        tilts, and modified planks</li>
                    <li>Flexibility exercises: 10 minutes of gentle stretching</li>
                </ul>

                <h4>Saturday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of light cardio</li>
                    <li>Strength training: 2 sets of 10-12 reps each of bodyweight squats, dumbbell chest press,
                        dumbbell rows, and seated leg curls</li>
                    <li>Cardio: 20 minutes of low-impact cardio (brisk walking, swimming, or using an elliptical
                        machine)</li>
                    <li>Flexibility exercises: 10 minutes of gentle stretching</li>
                </ul>

                <h4>Sunday:</h4>
                <p>Rest day</p>

            </div>
        </div>
        <div class="workout sg36">
            <div class="about-us" style="width: 50%;">
                <h1>WORKOUT PLAN</h1>
                <h3>Workout Plan for Overweight Women in their 60s</h3>

                <h4>Monday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of light cardio (brisk walking or cycling)</li>
                    <li>Strength training: 2 sets of 10-12 reps each of bodyweight squats, seated leg press, chest
                        press, and seated rows using resistance bands or light dumbbells</li>
                    <li>Cardio: 15-20 minutes of low-impact cardio (brisk walking, swimming, or using an elliptical
                        machine)</li>
                    <li>Flexibility exercises: 10 minutes of gentle stretching and range-of-motion exercises</li>
                </ul>

                <h4>Tuesday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of light cardio</li>
                    <li>Balance and stability exercises: 2 sets of 10-12 reps each of single-leg stands, heel-to-toe
                        walk, and standing leg lifts</li>
                    <li>Core training: 2 sets of 10-12 reps each of seated twists, pelvic tilts, and modified planks
                    </li>
                    <li>Cardio: 15-20 minutes of low-impact cardio (brisk walking, swimming, or using an elliptical
                        machine)</li>
                    <li>Flexibility exercises: 10 minutes of gentle stretching and range-of-motion exercises</li>
                </ul>

                <h4>Wednesday:</h4>
                <p>Rest day</p>

                <h4>Thursday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of light cardio</li>
                    <li>Strength training: 2 sets of 10-12 reps each of bodyweight squats, seated leg press, chest
                        press, and seated rows using resistance bands or light dumbbells</li>
                    <li>Cardio: 15-20 minutes of low-impact cardio (brisk walking, swimming, or using an elliptical
                        machine)</li>
                    <li>Flexibility exercises: 10 minutes of gentle stretching and range-of-motion exercises</li>
                </ul>

                <h4>Friday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of light cardio</li>
                    <li>Balance and stability exercises: 2 sets of 10-12 reps each of single-leg stands, heel-to-toe
                        walk, and standing leg lifts</li>
                    <li>Core training: 2 sets of 10-12 reps each of seated twists, pelvic tilts, and modified planks
                    </li>
                    <li>Cardio: 15-20 minutes of low-impact cardio (brisk walking, swimming, or using an elliptical
                        machine)</li>
                    <li>Flexibility exercises: 10 minutes of gentle stretching and range-of-motion exercises</li>
                </ul>

                <h4>Saturday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of light cardio</li>
                    <li>Strength training: 2 sets of 10-12 reps each of bodyweight squats, seated leg press, chest
                        press, and seated rows using resistance bands or light dumbbells</li>
                    <li>Cardio: 15-20 minutes of low-impact cardio (brisk walking, swimming, or using an elliptical
                        machine)</li>
                    <li>Flexibility exercises: 10 minutes of gentle stretching and range-of-motion exercises</li>
                </ul>

                <h4>Sunday:</h4>
                <p>Rest day</p>

            </div>
        </div>
        <div class="workout sg37">
            <div class="about-us" style="width: 50%;">
                <h1>WORKOUT PLAN</h1>
                <h3>Workout Plan for Obese Teenage Boy</h3>

                <h4>Monday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of light cardio (brisk walking or cycling)</li>
                    <li>Strength training: 2 sets of 8-10 reps each of bodyweight squats, push-ups, lunges, and dumbbell
                        rows (if available)</li>
                    <li>Cardio: 20 minutes of moderate-intensity cardio (brisk walking, cycling, or using an elliptical
                        machine)</li>
                    <li>Flexibility exercises: 5-10 minutes of stretching</li>
                </ul>

                <h4>Tuesday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of light cardio</li>
                    <li>Cardio: 30 minutes of low-impact cardio (brisk walking, swimming, or using an elliptical
                        machine)</li>
                    <li>Bodyweight exercises: 2 sets of 8-10 reps each of burpees, mountain climbers, and jumping jacks
                    </li>
                    <li>Flexibility exercises: 5-10 minutes of stretching</li>
                </ul>

                <h4>Wednesday:</h4>
                <p>Rest day</p>

                <h4>Thursday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of light cardio</li>
                    <li>Strength training: 2 sets of 8-10 reps each of bodyweight squats, push-ups, lunges, and dumbbell
                        rows (if available)</li>
                    <li>Cardio: 20 minutes of moderate-intensity cardio (brisk walking, cycling, or using an elliptical
                        machine)</li>
                    <li>Flexibility exercises: 5-10 minutes of stretching</li>
                </ul>

                <h4>Friday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of light cardio</li>
                    <li>Cardio: 30 minutes of low-impact cardio (brisk walking, swimming, or using an elliptical
                        machine)</li>
                    <li>Bodyweight exercises: 2 sets of 8-10 reps each of burpees, mountain climbers, and jumping jacks
                    </li>
                    <li>Flexibility exercises: 5-10 minutes of stretching</li>
                </ul>

                <h4>Saturday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of light cardio</li>
                    <li>Strength training: 2 sets of 8-10 reps each of bodyweight squats, push-ups, lunges, and dumbbell
                        rows (if available)</li>
                    <li>Cardio: 20 minutes of moderate-intensity cardio (brisk walking, cycling, or using an elliptical
                        machine)</li>
                    <li>Flexibility exercises: 5-10 minutes of stretching</li>
                </ul>

                <h4>Sunday:</h4>
                <p>Rest day</p>


            </div>
        </div>
        <div class="workout sg38">
            <div class="about-us" style="width: 50%;">
                <h1>WORKOUT PLAN</h1>
                <h3>Workout Plan for Obese Men in their 20s</h3>

                <h4>Monday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of light cardio (brisk walking or cycling)</li>
                    <li>Strength training: 3 sets of 10-12 reps each of bodyweight squats, push-ups, dumbbell rows, and
                        dumbbell chest press (if available)</li>
                    <li>Cardio: 20 minutes of moderate-intensity cardio (brisk walking, cycling, or using an elliptical
                        machine)</li>
                    <li>Flexibility exercises: 5-10 minutes of stretching</li>
                </ul>

                <h4>Tuesday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of light cardio</li>
                    <li>Cardio: 30 minutes of low-impact cardio (brisk walking, swimming, or using an elliptical
                        machine)</li>
                    <li>Bodyweight exercises: 3 sets of 10-12 reps each of burpees, mountain climbers, and jumping jacks
                    </li>
                    <li>Flexibility exercises: 5-10 minutes of stretching</li>
                </ul>

                <h4>Wednesday:</h4>
                <p>Rest day</p>

                <h4>Thursday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of light cardio</li>
                    <li>Strength training: 3 sets of 10-12 reps each of bodyweight squats, push-ups, dumbbell rows, and
                        dumbbell chest press (if available)</li>
                    <li>Cardio: 20 minutes of moderate-intensity cardio (brisk walking, cycling, or using an elliptical
                        machine)</li>
                    <li>Flexibility exercises: 5-10 minutes of stretching</li>
                </ul>

                <h4>Friday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of light cardio</li>
                    <li>Cardio: 30 minutes of low-impact cardio (brisk walking, swimming, or using an elliptical
                        machine)</li>
                    <li>Bodyweight exercises: 3 sets of 10-12 reps each of burpees, mountain climbers, and jumping jacks
                    </li>
                    <li>Flexibility exercises: 5-10 minutes of stretching</li>
                </ul>

                <h4>Saturday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of light cardio</li>
                    <li>Strength training: 3 sets of 10-12 reps each of bodyweight squats, push-ups, dumbbell rows, and
                        dumbbell chest press (if available)</li>
                    <li>Cardio: 20 minutes of moderate-intensity cardio (brisk walking, cycling, or using an elliptical
                        machine)</li>
                    <li>Flexibility exercises: 5-10 minutes of stretching</li>
                </ul>

                <h4>Sunday:</h4>
                <p>Rest day</p>

            </div>
        </div>
        <div class="workout sg39">
            <div class="about-us" style="width: 50%;">
                <h1>WORKOUT PLAN</h1>
                <h3>Workout Plan for Obese Men in their 30s</h3>

                <h4>Monday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of light cardio (brisk walking or cycling)</li>
                    <li>Strength training: 3 sets of 10-12 reps each of bodyweight squats, push-ups, dumbbell rows, and
                        dumbbell chest press (if available)</li>
                    <li>Cardio: 20 minutes of moderate-intensity cardio (brisk walking, cycling, or using an elliptical
                        machine)</li>
                    <li>Flexibility exercises: 5-10 minutes of stretching</li>
                </ul>

                <h4>Tuesday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of light cardio</li>
                    <li>Cardio: 30 minutes of low-impact cardio (brisk walking, swimming, or using an elliptical
                        machine)</li>
                    <li>Bodyweight exercises: 3 sets of 10-12 reps each of burpees, mountain climbers, and jumping jacks
                    </li>
                    <li>Flexibility exercises: 5-10 minutes of stretching</li>
                </ul>

                <h4>Wednesday:</h4>
                <p>Rest day</p>

                <h4>Thursday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of light cardio</li>
                    <li>Strength training: 3 sets of 10-12 reps each of bodyweight squats, push-ups, dumbbell rows, and
                        dumbbell chest press (if available)</li>
                    <li>Cardio: 20 minutes of moderate-intensity cardio (brisk walking, cycling, or using an elliptical
                        machine)</li>
                    <li>Flexibility exercises: 5-10 minutes of stretching</li>
                </ul>

                <h4>Friday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of light cardio</li>
                    <li>Cardio: 30 minutes of low-impact cardio (brisk walking, swimming, or using an elliptical
                        machine)</li>
                    <li>Bodyweight exercises: 3 sets of 10-12 reps each of burpees, mountain climbers, and jumping jacks
                    </li>
                    <li>Flexibility exercises: 5-10 minutes of stretching</li>
                </ul>

                <h4>Saturday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of light cardio</li>
                    <li>Strength training: 3 sets of 10-12 reps each of bodyweight squats, push-ups, dumbbell rows, and
                        dumbbell chest press (if available)</li>
                    <li>Cardio: 20 minutes of moderate-intensity cardio (brisk walking, cycling, or using an elliptical
                        machine)</li>
                    <li>Flexibility exercises: 5-10 minutes of stretching</li>
                </ul>

                <h4>Sunday:</h4>
                <p>Rest day</p>

            </div>
        </div>
        <div class="workout sg40">
            <div class="about-us" style="width: 50%;">
                <h1>WORKOUT PLAN</h1>
                <h3>Workout Plan for Obese Men in their 40s</h3>

                <h4>Monday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of light cardio (brisk walking or cycling)</li>
                    <li>Strength training: 3 sets of 10-12 reps each of bodyweight squats, push-ups, dumbbell rows, and
                        dumbbell chest press (if available)</li>
                    <li>Cardio: 20 minutes of moderate-intensity cardio (brisk walking, cycling, or using an elliptical
                        machine)</li>
                    <li>Flexibility exercises: 5-10 minutes of stretching</li>
                </ul>

                <h4>Tuesday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of light cardio</li>
                    <li>Cardio: 30 minutes of low-impact cardio (brisk walking, swimming, or using an elliptical
                        machine)</li>
                    <li>Bodyweight exercises: 3 sets of 10-12 reps each of burpees, mountain climbers, and jumping jacks
                    </li>
                    <li>Flexibility exercises: 5-10 minutes of stretching</li>
                </ul>

                <h4>Wednesday:</h4>
                <p>Rest day</p>

                <h4>Thursday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of light cardio</li>
                    <li>Strength training: 3 sets of 10-12 reps each of bodyweight squats, push-ups, dumbbell rows, and
                        dumbbell chest press (if available)</li>
                    <li>Cardio: 20 minutes of moderate-intensity cardio (brisk walking, cycling, or using an elliptical
                        machine)</li>
                    <li>Flexibility exercises: 5-10 minutes of stretching</li>
                </ul>

                <h4>Friday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of light cardio</li>
                    <li>Cardio: 30 minutes of low-impact cardio (brisk walking, swimming, or using an elliptical
                        machine)</li>
                    <li>Bodyweight exercises: 3 sets of 10-12 reps each of burpees, mountain climbers, and jumping jacks
                    </li>
                    <li>Flexibility exercises: 5-10 minutes of stretching</li>
                </ul>

                <h4>Saturday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of light cardio</li>
                    <li>Strength training: 3 sets of 10-12 reps each of bodyweight squats, push-ups, dumbbell rows, and
                        dumbbell chest press (if available)</li>
                    <li>Cardio: 20 minutes of moderate-intensity cardio (brisk walking, cycling, or using an elliptical
                        machine)</li>
                    <li>Flexibility exercises: 5-10 minutes of stretching</li>
                </ul>

                <h4>Sunday:</h4>
                <p>Rest day</p>


            </div>
        </div>
        <div class="workout sg41">
            <div class="about-us" style="width: 50%;">
                <h1>WORKOUT PLAN</h1>
                <h3>Workout Plan for Obese Men in their 50s</h3>

                <h4>Monday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of light cardio (brisk walking or cycling)</li>
                    <li>Strength training: 3 sets of 10-12 reps each of bodyweight squats, wall push-ups, dumbbell rows
                        (if available), and dumbbell shoulder press (if available)</li>
                    <li>Cardio: 20 minutes of low-impact cardio (stationary biking, swimming, or using an elliptical
                        machine)</li>
                    <li>Flexibility exercises: 5-10 minutes of stretching</li>
                </ul>

                <h4>Tuesday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of light cardio</li>
                    <li>Cardio: 30 minutes of low-impact cardio (brisk walking, swimming, or using an elliptical
                        machine)</li>
                    <li>Bodyweight exercises: 3 sets of 10-12 reps each of step-ups, modified push-ups (using an
                        elevated surface), and standing dumbbell curls (if available)</li>
                    <li>Flexibility exercises: 5-10 minutes of stretching</li>
                </ul>

                <h4>Wednesday:</h4>
                <p>Rest day</p>

                <h4>Thursday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of light cardio</li>
                    <li>Strength training: 3 sets of 10-12 reps each of bodyweight squats, wall push-ups, dumbbell rows
                        (if available), and dumbbell shoulder press (if available)</li>
                    <li>Cardio: 20 minutes of low-impact cardio (stationary biking, swimming, or using an elliptical
                        machine)</li>
                    <li>Flexibility exercises: 5-10 minutes of stretching</li>
                </ul>

                <h4>Friday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of light cardio</li>
                    <li>Cardio: 30 minutes of low-impact cardio (brisk walking, swimming, or using an elliptical
                        machine)</li>
                    <li>Bodyweight exercises: 3 sets of 10-12 reps each of step-ups, modified push-ups (using an
                        elevated surface), and standing dumbbell curls (if available)</li>
                    <li>Flexibility exercises: 5-10 minutes of stretching</li>
                </ul>

                <h4>Saturday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of light cardio</li>
                    <li>Strength training: 3 sets of 10-12 reps each of bodyweight squats, wall push-ups, dumbbell rows
                        (if available), and dumbbell shoulder press (if available)</li>
                    <li>Cardio: 20 minutes of low-impact cardio (stationary biking, swimming, or using an elliptical
                        machine)</li>
                    <li>Flexibility exercises: 5-10 minutes of stretching</li>
                </ul>

                <h4>Sunday:</h4>
                <p>Rest day</p>


            </div>
        </div>
        <div class="workout sg42">
            <div class="about-us" style="width: 50%;">
                <h1>WORKOUT PLAN</h1>
                <h3>Workout Plan for Obese Men in their 60s</h3>

                <h4>Monday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of light cardio (brisk walking or stationary biking)</li>
                    <li>Strength training: 3 sets of 8-12 reps each of seated leg press (if available), chest press (if
                        available), seated rows (if available), and bicep curls (if available)</li>
                    <li>Low-impact cardio: 20 minutes of low-impact cardio (stationary biking, swimming, or using an
                        elliptical machine)</li>
                    <li>Flexibility exercises: 5-10 minutes of stretching</li>
                </ul>

                <h4>Tuesday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of light cardio</li>
                    <li>Cardio: 30 minutes of low-impact cardio (brisk walking, swimming, or using an elliptical
                        machine)</li>
                    <li>Bodyweight exercises: 3 sets of 8-12 reps each of modified push-ups (using an elevated surface),
                        seated leg extensions (if available), and tricep dips (using a stable chair)</li>
                    <li>Flexibility exercises: 5-10 minutes of stretching</li>
                </ul>

                <h4>Wednesday:</h4>
                <p>Rest day</p>

                <h4>Thursday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of light cardio</li>
                    <li>Strength training: 3 sets of 8-12 reps each of seated leg press (if available), chest press (if
                        available), seated rows (if available), and bicep curls (if available)</li>
                    <li>Low-impact cardio: 20 minutes of low-impact cardio (stationary biking, swimming, or using an
                        elliptical machine)</li>
                    <li>Flexibility exercises: 5-10 minutes of stretching</li>
                </ul>

                <h4>Friday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of light cardio</li>
                    <li>Cardio: 30 minutes of low-impact cardio (brisk walking, swimming, or using an elliptical
                        machine)</li>
                    <li>Bodyweight exercises: 3 sets of 8-12 reps each of modified push-ups (using an elevated surface),
                        seated leg extensions (if available), and tricep dips (using a stable chair)</li>
                    <li>Flexibility exercises: 5-10 minutes of stretching</li>
                </ul>

                <h4>Saturday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of light cardio</li>
                    <li>Strength training: 3 sets of 8-12 reps each of seated leg press (if available), chest press (if
                        available), seated rows (if available), and bicep curls (if available)</li>
                    <li>Low-impact cardio: 20 minutes of low-impact cardio (stationary biking, swimming, or using an
                        elliptical machine)</li>
                    <li>Flexibility exercises: 5-10 minutes of stretching</li>
                </ul>

                <h4>Sunday:</h4>
                <p>Rest day</p>

            </div>
        </div>
        <div class="workout sg43">
            <div class="about-us" style="width: 50%;">
                <h1>WORKOUT PLAN</h1>
                <h3>Workout Plan for Obese Teenage Girl</h3>

                <h4>Monday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of light cardio (brisk walking or cycling)</li>
                    <li>Strength training: 3 sets of 8-12 reps each of bodyweight squats, modified push-ups (using an
                        elevated surface), and seated leg extensions (if available)</li>
                    <li>Cardio: 20 minutes of low-impact cardio (brisk walking or using an elliptical machine)</li>
                    <li>Flexibility exercises: 5-10 minutes of stretching</li>
                </ul>

                <h4>Tuesday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of light cardio</li>
                    <li>Cardio: 30 minutes of low-impact cardio (brisk walking, swimming, or using an elliptical
                        machine)</li>
                    <li>Bodyweight exercises: 3 sets of 8-12 reps each of modified push-ups (using an elevated surface),
                        step-ups (using a sturdy step or platform), and seated leg curls (if available)</li>
                    <li>Flexibility exercises: 5-10 minutes of stretching</li>
                </ul>

                <h4>Wednesday:</h4>
                <p>Rest day</p>

                <h4>Thursday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of light cardio</li>
                    <li>Strength training: 3 sets of 8-12 reps each of bodyweight squats, modified push-ups (using an
                        elevated surface), and seated leg extensions (if available)</li>
                    <li>Cardio: 20 minutes of low-impact cardio (brisk walking or using an elliptical machine)</li>
                    <li>Flexibility exercises: 5-10 minutes of stretching</li>
                </ul>

                <h4>Friday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of light cardio</li>
                    <li>Cardio: 30 minutes of low-impact cardio (brisk walking, swimming, or using an elliptical
                        machine)</li>
                    <li>Bodyweight exercises: 3 sets of 8-12 reps each of modified push-ups (using an elevated surface),
                        step-ups (using a sturdy step or platform), and seated leg curls (if available)</li>
                    <li>Flexibility exercises: 5-10 minutes of stretching</li>
                </ul>

                <h4>Saturday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of light cardio</li>
                    <li>Strength training: 3 sets of 8-12 reps each of bodyweight squats, modified push-ups (using an
                        elevated surface), and seated leg extensions (if available)</li>
                    <li>Cardio: 20 minutes of low-impact cardio (brisk walking or using an elliptical machine)</li>
                    <li>Flexibility exercises: 5-10 minutes of stretching</li>
                </ul>

                <h4>Sunday:</h4>
                <p>Rest day</p>

            </div>
        </div>
        <div class="workout sg44">
            <div class="about-us" style="width: 50%;">
                <h1>WORKOUT PLAN</h1>
                <h3>Workout Plan for Obese Women in their 20s</h3>

                <h4>Monday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of light cardio (brisk walking or cycling)</li>
                    <li>Strength training: 3 sets of 8-12 reps each of bodyweight squats, modified push-ups (using an
                        elevated surface), and dumbbell rows (if available)</li>
                    <li>Cardio: 20 minutes of low-impact cardio (brisk walking, swimming, or using an elliptical
                        machine)</li>
                    <li>Flexibility exercises: 5-10 minutes of stretching</li>
                </ul>

                <h4>Tuesday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of light cardio</li>
                    <li>Cardio: 30 minutes of low-impact cardio (brisk walking, swimming, or using an elliptical
                        machine)</li>
                    <li>Bodyweight exercises: 3 sets of 8-12 reps each of modified push-ups (using an elevated surface),
                        step-ups (using a sturdy step or platform), and seated leg curls (if available)</li>
                    <li>Flexibility exercises: 5-10 minutes of stretching</li>
                </ul>

                <h4>Wednesday:</h4>
                <p>Rest day</p>

                <h4>Thursday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of light cardio</li>
                    <li>Strength training: 3 sets of 8-12 reps each of bodyweight squats, modified push-ups (using an
                        elevated surface), and dumbbell rows (if available)</li>
                    <li>Cardio: 20 minutes of low-impact cardio (brisk walking, swimming, or using an elliptical
                        machine)</li>
                    <li>Flexibility exercises: 5-10 minutes of stretching</li>
                </ul>

                <h4>Friday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of light cardio</li>
                    <li>Cardio: 30 minutes of low-impact cardio (brisk walking, swimming, or using an elliptical
                        machine)</li>
                    <li>Bodyweight exercises: 3 sets of 8-12 reps each of modified push-ups (using an elevated surface),
                        step-ups (using a sturdy step or platform), and seated leg curls (if available)</li>
                    <li>Flexibility exercises: 5-10 minutes of stretching</li>
                </ul>

                <h4>Saturday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of light cardio</li>
                    <li>Strength training: 3 sets of 8-12 reps each of bodyweight squats, modified push-ups (using an
                        elevated surface), and dumbbell rows (if available)</li>
                    <li>Cardio: 20 minutes of low-impact cardio (brisk walking, swimming, or using an elliptical
                        machine)</li>
                    <li>Flexibility exercises: 5-10 minutes of stretching</li>
                </ul>

                <h4>Sunday:</h4>
                <p>Rest day</p>

            </div>
        </div>
        <div class="workout sg45">
            <div class="about-us" style="width: 50%;">
                <h1>WORKOUT PLAN</h1>
                <h3>Workout Plan for Obese Women in their 30s</h3>

                <h4>Monday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of light cardio (brisk walking or cycling)</li>
                    <li>Strength training: 3 sets of 8-12 reps each of bodyweight squats, modified push-ups (using an
                        elevated surface), and dumbbell rows (if available)</li>
                    <li>Cardio: 20 minutes of low-impact cardio (brisk walking, swimming, or using an elliptical
                        machine)</li>
                    <li>Flexibility exercises: 5-10 minutes of stretching</li>
                </ul>

                <h4>Tuesday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of light cardio</li>
                    <li>Cardio: 30 minutes of low-impact cardio (brisk walking, swimming, or using an elliptical
                        machine)</li>
                    <li>Bodyweight exercises: 3 sets of 8-12 reps each of modified push-ups (using an elevated surface),
                        step-ups (using a sturdy step or platform), and seated leg curls (if available)</li>
                    <li>Flexibility exercises: 5-10 minutes of stretching</li>
                </ul>

                <h4>Wednesday:</h4>
                <p>Rest day</p>

                <h4>Thursday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of light cardio</li>
                    <li>Strength training: 3 sets of 8-12 reps each of bodyweight squats, modified push-ups (using an
                        elevated surface), and dumbbell rows (if available)</li>
                    <li>Cardio: 20 minutes of low-impact cardio (brisk walking, swimming, or using an elliptical
                        machine)</li>
                    <li>Flexibility exercises: 5-10 minutes of stretching</li>
                </ul>

                <h4>Friday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of light cardio</li>
                    <li>Cardio: 30 minutes of low-impact cardio (brisk walking, swimming, or using an elliptical
                        machine)</li>
                    <li>Bodyweight exercises: 3 sets of 8-12 reps each of modified push-ups (using an elevated surface),
                        step-ups (using a sturdy step or platform), and seated leg curls (if available)</li>
                    <li>Flexibility exercises: 5-10 minutes of stretching</li>
                </ul>

                <h4>Saturday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of light cardio</li>
                    <li>Strength training: 3 sets of 8-12 reps each of bodyweight squats, modified push-ups (using an
                        elevated surface), and dumbbell rows (if available)</li>
                    <li>Cardio: 20 minutes of low-impact cardio (brisk walking, swimming, or using an elliptical
                        machine)</li>
                    <li>Flexibility exercises: 5-10 minutes of stretching</li>
                </ul>

                <h4>Sunday:</h4>
                <p>Rest day</p>


            </div>
        </div>
        <div class="workout sg46">
            <div class="about-us" style="width: 50%;">
                <h1>WORKOUT PLAN</h1>
                <h3>Workout Plan for Obese Women in their 40s</h3>

                <h4>Monday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of low-impact cardio (brisk walking or cycling)</li>
                    <li>Strength training: 3 sets of 8-12 reps each of bodyweight squats, modified push-ups (using an
                        elevated surface), and dumbbell rows (if available)</li>
                    <li>Cardio: 20 minutes of low-impact cardio (brisk walking, swimming, or using an elliptical
                        machine)</li>
                    <li>Flexibility exercises: 5-10 minutes of stretching</li>
                </ul>

                <h4>Tuesday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of low-impact cardio</li>
                    <li>Cardio: 30 minutes of low-impact cardio (brisk walking, swimming, or using an elliptical
                        machine)</li>
                    <li>Bodyweight exercises: 3 sets of 8-12 reps each of modified push-ups (using an elevated surface),
                        step-ups (using a sturdy step or platform), and seated leg curls (if available)</li>
                    <li>Flexibility exercises: 5-10 minutes of stretching</li>
                </ul>

                <h4>Wednesday:</h4>
                <p>Rest day</p>

                <h4>Thursday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of low-impact cardio</li>
                    <li>Strength training: 3 sets of 8-12 reps each of bodyweight squats, modified push-ups (using an
                        elevated surface), and dumbbell rows (if available)</li>
                    <li>Cardio: 20 minutes of low-impact cardio (brisk walking, swimming, or using an elliptical
                        machine)</li>
                    <li>Flexibility exercises: 5-10 minutes of stretching</li>
                </ul>

                <h4>Friday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of low-impact cardio</li>
                    <li>Cardio: 30 minutes of low-impact cardio (brisk walking, swimming, or using an elliptical
                        machine)</li>
                    <li>Bodyweight exercises: 3 sets of 8-12 reps each of modified push-ups (using an elevated surface),
                        step-ups (using a sturdy step or platform), and seated leg curls (if available)</li>
                    <li>Flexibility exercises: 5-10 minutes of stretching</li>
                </ul>

                <h4>Saturday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of low-impact cardio</li>
                    <li>Strength training: 3 sets of 8-12 reps each of bodyweight squats, modified push-ups (using an
                        elevated surface), and dumbbell rows (if available)</li>
                    <li>Cardio: 20 minutes of low-impact cardio (brisk walking, swimming, or using an elliptical
                        machine)</li>
                    <li>Flexibility exercises: 5-10 minutes of stretching</li>
                </ul>

                <h4>Sunday:</h4>
                <p>Rest day</p>

            </div>
        </div>
        <div class="workout sg47">
            <div class="about-us" style="width: 50%;">
                <h1>WORKOUT PLAN</h1>
                <h3>Workout Plan for Obese Women in their 50s</h3>

                <h4>Monday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of low-impact cardio (brisk walking or cycling)</li>
                    <li>Strength training: 3 sets of 8-12 reps each of bodyweight squats, modified push-ups (using an
                        elevated surface), and seated rows (using resistance bands or dumbbells)</li>
                    <li>Cardio: 20 minutes of low-impact cardio (brisk walking, swimming, or using an elliptical
                        machine)</li>
                    <li>Flexibility exercises: 5-10 minutes of stretching</li>
                </ul>

                <h4>Tuesday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of low-impact cardio</li>
                    <li>Cardio: 30 minutes of low-impact cardio (brisk walking, swimming, or using an elliptical
                        machine)</li>
                    <li>Bodyweight exercises: 3 sets of 8-12 reps each of modified push-ups (using an elevated surface),
                        step-ups (using a sturdy step or platform), and seated leg curls (if available)</li>
                    <li>Flexibility exercises: 5-10 minutes of stretching</li>
                </ul>

                <h4>Wednesday:</h4>
                <p>Rest day</p>

                <h4>Thursday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of low-impact cardio</li>
                    <li>Strength training: 3 sets of 8-12 reps each of bodyweight squats, modified push-ups (using an
                        elevated surface), and seated rows (using resistance bands or dumbbells)</li>
                    <li>Cardio: 20 minutes of low-impact cardio (brisk walking, swimming, or using an elliptical
                        machine)</li>
                    <li>Flexibility exercises: 5-10 minutes of stretching</li>
                </ul>

                <h4>Friday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of low-impact cardio</li>
                    <li>Cardio: 30 minutes of low-impact cardio (brisk walking, swimming, or using an elliptical
                        machine)</li>
                    <li>Bodyweight exercises: 3 sets of 8-12 reps each of modified push-ups (using an elevated surface),
                        step-ups (using a sturdy step or platform), and seated leg curls (if available)</li>
                    <li>Flexibility exercises: 5-10 minutes of stretching</li>
                </ul>

                <h4>Saturday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of low-impact cardio</li>
                    <li>Strength training: 3 sets of 8-12 reps each of bodyweight squats, modified push-ups (using an
                        elevated surface), and seated rows (using resistance bands or dumbbells)</li>
                    <li>Cardio: 20 minutes of low-impact cardio (brisk walking, swimming, or using an elliptical
                        machine)</li>
                    <li>Flexibility exercises: 5-10 minutes of stretching</li>
                </ul>

                <h4>Sunday:</h4>
                <p>Rest day</p>


            </div>
        </div>
        <div class="workout sg48">
            <div class="about-us" style="width: 50%;">
                <h1>WORKOUT PLAN</h1>
                <h3>Workout Plan for Obese Women in their 60s</h3>

                <h4>Monday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of low-impact cardio (gentle walking or stationary cycling)</li>
                    <li>Strength training: 2 sets of 10-12 reps each of chair squats, wall push-ups, and seated rows
                        (using resistance bands or light dumbbells)</li>
                    <li>Cardio: 15 minutes of low-impact cardio (gentle walking or stationary cycling)</li>
                    <li>Flexibility exercises: 5 minutes of stretching, focusing on major muscle groups</li>
                </ul>

                <h4>Tuesday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of low-impact cardio</li>
                    <li>Cardio: 20 minutes of low-impact cardio (gentle walking or stationary cycling)</li>
                    <li>Balance exercises: 2 sets of 10-12 reps each of heel-to-toe walk, single-leg stands (holding
                        onto a chair if needed), and standing leg lifts</li>
                    <li>Flexibility exercises: 5 minutes of stretching, focusing on major muscle groups</li>
                </ul>

                <h4>Wednesday:</h4>
                <p>Rest day</p>

                <h4>Thursday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of low-impact cardio</li>
                    <li>Strength training: 2 sets of 10-12 reps each of chair squats, wall push-ups, and seated rows
                        (using resistance bands or light dumbbells)</li>
                    <li>Cardio: 15 minutes of low-impact cardio (gentle walking or stationary cycling)</li>
                    <li>Flexibility exercises: 5 minutes of stretching, focusing on major muscle groups</li>
                </ul>

                <h4>Friday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of low-impact cardio</li>
                    <li>Cardio: 20 minutes of low-impact cardio (gentle walking or stationary cycling)</li>
                    <li>Balance exercises: 2 sets of 10-12 reps each of heel-to-toe walk, single-leg stands (holding
                        onto a chair if needed), and standing leg lifts</li>
                    <li>Flexibility exercises: 5 minutes of stretching, focusing on major muscle groups</li>
                </ul>

                <h4>Saturday:</h4>
                <ul>
                    <li>Warm-up: 5-10 minutes of low-impact cardio</li>
                    <li>Strength training: 2 sets of 10-12 reps each of chair squats, wall push-ups, and seated rows
                        (using resistance bands or light dumbbells)</li>
                    <li>Cardio: 15 minutes of low-impact cardio (gentle walking or stationary cycling)</li>
                    <li>Flexibility exercises: 5 minutes of stretching, focusing on major muscle groups</li>
                </ul>

                <h4>Sunday:</h4>
                <p>Rest day</p>
            </div>
        </div>
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

    <script src="./Starbase/Gym/js/jquery-3.2.1.min.js"></script>
    <script src="./Starbase/Gym/js/bootstrap.min.js"></script>
    <script src="./Starbase/Gym/js/owl.carousel.min.js"></script>
    <script src="./Starbase/Gym/js/circle-progress.min.js"></script>
    <script src="./Starbase/Gym/js/main.js"></script>
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