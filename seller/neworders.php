<!DOCTYPE html>
<html lang="en">
<head>    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.9.1/dist/chart.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script> 
    <title>VM store.</title>
    <style>
        /* Add your custom styles for the product listing here */
        .table-responsive {
            overflow-x: auto;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
        }

        .table th,
        .table td {
            padding: 8px;
            text-align: left;
            vertical-align: top;
            border-top: 1px solid #dee2e6;
        }

        .table th {
            background-color: #f8f9fa;
            font-weight: bold;
        }

        .table td {
            border-bottom: 1px solid #dee2e6;
        }

        .text-end {
            text-align: right;
        }

        .text-center {
            text-align: center;
        }

        .product-detail {
            display: flex;
            align-items: center;
        }

        .product-detail img {
            width: 40px;
            height: auto;
            margin-right: 10px;
            border-radius: 3px;
        }
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
                    <a href="products.php"  class="active">
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
                    <a href="analytics.php">
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
            
            <div class="table">
                <div class="section--title">
                    <h3 class="title">Orders</h3>
                    <div></div>
                </div>
                <table>
                    <thead>
                        <tr>
                            <th>Order ID</th>
                            <th>Product Name</th>
                            <th>Price</th>
                            <th>Sold</th>
                            <th>Returned</th>
                            <th>Sales</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>MacBook Air AAPL</td>
                            <td>#231234</td>
                            <td>$1846</td>
                            <td>331</td>
                            <td>12</td>
                            <td>$337,218.54</td>
                            <td>$337,218.54</td>

                        </tr>
                        <tr>
                            <td>MacBook Air AAPL</td>
                            <td>#231234</td>
                            <td>$1846</td>
                            <td>331</td>
                            <td>12</td>
                            <td>$337,218.54</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <script src="../js/sales.js"></script>
    <script src="../js/orders.js"></script>
    <script src="../js/products.js"></script>
    <script src="../js/customers.js"></script>
    <script src="../js/tarsale.js"></script>
</body>
</html>