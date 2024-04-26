<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.9.1/dist/chart.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script> 
    <title>VM store.</title>
    <style>
        .container {
            max-width: 100%;
            max-height: 100%;
            margin: 0 auto;
            text-align: center;
            padding: 20px;
            background-image: url("../../images/homepage/heroimage.jpg");
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 50px;
        }

        /* Countdown Timer Styles */
        .countdown {
            display: flex;
            justify-content: center;
            margin-top: 20px;
            font-size: 24px;
            color: #333;
        }

        .countdown div {
            text-align: center;
            margin: 0 10px;
        }

        .countdown h3 {
            margin: 5px 0;
            font-size: 36px;
            color: green; /* Timer numbers color */
        }

        .countdown h4 {
            margin: 0;
            font-size: 18px;
            color: green; /* Timer label color */
        }

        /* Subscribe Form Styles */
        .subscribe-form input[type="email"] {
            padding: 10px;
            border: 2px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            margin-right: 10px;
        }

        .subscribe-form input[type="submit"] {
            padding: 10px 20px;
            background-color: green;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .subscribe-form input[type="submit"]:hover {
            background-color: green;
        }

        /* End Countdown Timer Styles */
    </style>
</head>
<body class="body">
    <section class="header">
        <div class="logo">
            <i class="ri-menu-line menu"></i>
            <h2><span class="eco">ECO</span><ion-icon name="leaf-outline" class="leaf"></ion-icon><span class="mono">MONO</span></h2>
        </div>
        <div class="header--items">
            <i class="ri-search-2-line"></i>
            <div class="dark--theme--btn">
                <i class="ri-moon-line moon"></i>
                <i class="ri-sun-line sun"></i>
            </div>
            <i class="ri-notification-2-line"></i>
            <i class="ri-wechat-2-line chat"></i>
            <div class="profile">
                <img src="assets/images/profile.jpg" alt="">
            </div>
        </div>
    </section>
    <section class="main">
    <div class="sidebar">
            <ul class="sidebar--items">
                <li>
                    <a href="../index.php">
                        <span class="icon"><i class="ri-bar-chart-line"></i></span>
                        <div class="sidebar--item">Overview</div>
                    </a>
                </li>
                <li>
                    <a href="products.php">
                        <span class="icon"><i class="ri-handbag-line"></i></span>
                        <div class="sidebar--item">Products</div>
                    </a>
                </li>

                <li>
                    <a href="orders.php">
                        <span class="icon"><i class="ri-booklet-line"></i></span>
                        <div class="sidebar--item">Orders</div>
                    </a>
                </li>
                <li>
                    <a href="inventory.php">
                        <span class="icon"><i class="ri-shopping-cart-2-line"></i></span>
                        <div class="sidebar--item">Inventory</div>
                    </a>
                </li>
                <li>
                    <a href="customers.php">
                        <span class="icon"><i class="ri-user-line"></i></span>
                        <div class="sidebar--item">Customers</div>
                    </a>
                </li>
                <li>
                    <a href="analytics.php"  class="active">
                        <span class="icon"><i class="ri-booklet-line"></i></span>
                        <div class="sidebar--item">Analytics</div>
                    </a>
                </li>
                <li>
                    <a href="marketing.php">
                        <span class="icon"><i class="ri-booklet-line"></i></span>
                        <div class="sidebar--item">Marketing</div>
                    </a>
                </li>
                <li>
                    <a href="settings.php">
                        <span class="icon"><i class="ri-settings-3-line"></i></span>
                        <div class="sidebar--item">Settings</div>
                    </a>
                </li>
            </ul>
            <ul class="sidebar--bottom--items">
                <li>
                    <a href="help.php">
                        <span class="icon"><i class="ri-question-line"></i></span>
                        <div class="sidebar--item">Help</div>
                    </a>
                </li>
                <li>
                    <a href="logout.php">
                        <span class="icon"><i class="ri-logout-box-r-line"></i></span>
                        <div class="sidebar--item">Logout</div>
                    </a>
                </li>
            </ul>
        </div>
        <div class="main--container">
            <!-- <div class="section--title"> -->
                <!-- <div class="container d-flex flex-column align-items-center"> -->

                <div class="container">
                    
                    <h2><span class="eco">ECO</span><ion-icon name="leaf-outline" class="leaf"></ion-icon><span class="mono">MONO</span></h2>
                    <p>We're working on this feature. We'll be ready to launch after:</p>
                    <div class="countdown" data-count="2023/12/3">
                        <div>
                            <h3 id="days">117</h3>
                            <h4>Days</h4>
                        </div>
                        <div>
                            <h3 id="hours">12</h3>
                            <h4>Hours</h4>
                        </div>
                        <div>
                            <h3 id="minutes">59</h3>
                            <h4>Minutes</h4>
                        </div>
                        <div>
                            <h3 id="seconds">0</h3>
                            <h4>Seconds</h4>
                        </div>
                    </div>

                    <div class="subscribe">
                        <h4>Subscribe now to get the latest updates!</h4>
                        <form action="forms/notify.php" method="post" role="form" class="php-email-form subscribe-form">
                            <input type="email" name="email" required placeholder="Enter your email">
                            <input type="submit" value="Subscribe">
                            <div class="mt-2">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your notification request was sent. Thank you!</div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>       
        </div>
    </section>
    <script>
        // Countdown Timer Script
        (function() {
            let countdown = document.querySelector('.countdown');
            
            const countDownDate = function() {
                let endDate = new Date(countdown.getAttribute('data-count')).getTime();
                let now = new Date().getTime();
                let timeLeft = endDate - now;

                if (timeLeft <= 0) {
                    countdown.innerHTML = "<p>Countdown expired!</p>";
                    return;
                }

                let days = Math.floor(timeLeft / (1000 * 60 * 60 * 24));
                let hours = Math.floor((timeLeft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                let minutes = Math.floor((timeLeft % (1000 * 60 * 60)) / (1000 * 60));
                let seconds = Math.floor((timeLeft % (1000 * 60)) / 1000);

                document.getElementById('days').innerText = days;
                document.getElementById('hours').innerText = hours;
                document.getElementById('minutes').innerText = minutes;
                document.getElementById('seconds').innerText = seconds;
            }
            countDownDate();
            setInterval(countDownDate, 1000);

        })();
    </script>
    <script src="pages/js/main.js"></script>
    <script src="pages/js/sales.js"></script>
    <script src="pages/js/orders.js"></script>
    <script src="pages/js/products.js"></script>
    <script src="pages/js/customers.js"></script>
    <script src="pages/js/tarsale.js"></script>
</body>
</html>