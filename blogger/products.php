<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="../../css/admin.css"> -->
    <link rel="stylesheet" href="../../css/sellerproducts.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.9.1/dist/chart.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <title>VM store.</title>
</head>
<body class="body">
    <section class="header">
        <div class="logo">
            <i class="ri-menu-line menu"></i>
            <div class="logo">
                <span class="eco">ECO</span><ion-icon name="leaf-outline" class="leaf"></ion-icon><span class="mono">MONO</span>
            </div>
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
                    <a href="#" class="active">
                        <span class="icon"><i class="ri-bar-chart-line"></i></span>
                        <div class="sidebar--item">Overview</div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="ri-handbag-line"></i></span>
                        <div class="sidebar--item">Product</div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="ri-user-line"></i></span>
                        <div class="sidebar--item">Customers</div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="ri-booklet-line"></i></span>
                        <div class="sidebar--item">Orders</div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="ri-shopping-cart-2-line"></i></span>
                        <div class="sidebar--item">Checkout</div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="ri-settings-3-line"></i></span>
                        <div class="sidebar--item">Settings</div>
                    </a>
                </li>
            </ul>
            <ul class="sidebar--bottom--items">
                <li>
                    <a href="#">
                        <span class="icon"><i class="ri-question-line"></i></span>
                        <div class="sidebar--item">Help</div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="ri-logout-box-r-line"></i></span>
                        <div class="sidebar--item">Logout</div>
                    </a>
                </li>
            </ul>
        </div>
        <div class="main--container">
            <div class="container">
                <h2>Product Page</h2>
                <input type="text" name="search" class="search-input" placeholder="Search...">
                <button class="add-product-btn">Add Product</button>
                <div class="table-container">
                    <table>
                        <thead>
                            <tr>
                                <th>Product Name</th>
                                <th>Product Image</th>
                                <th>Brand</th>
                                <th>Category</th>
                                <th>Price</th>
                                <th>Stock</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>                        
                                <td><a href="#">Product 1</a></td>
                                <td><img src="../../images/signup.jpg" alt="Product 1" class="product-image"></td>
                                <td>Brand A</td>
                                <td>Category X</td>
                                <td>$100.00</td>
                                <td>50</td>
                                <td><span class="status pending">Pending</span></td>
                                <td><a href="#">Edit</a> | <a href="#">Delete</a></td>
                            </tr>
                            <tr>
                                <td><a href="#">Product 2</a></td>
                                <td><img src="product2.jpg" alt="Product 2" class="product-image"></td>
                                <td>Brand B</td>
                                <td>Category Y</td>
                                <td>$150.00</td>
                                <td>30</td>
                                <td><span class="status shipped">Shipped</span></td>
                                <td><a href="#">Edit</a> | <a href="#">Delete</a></td>
                            </tr>
                            <!-- More product rows can be added here -->
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="pagination">
            <button class="page-btn">&laquo; Prev</button>
            <button class="page-btn">1</button>
            <button class="page-btn">2</button>
            <button class="page-btn">3</button>
            <button class="page-btn">Next &raquo;</button>
        </div>
        </div>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script> 
    <script src="../../js/main.js"></script>
    <script src="../../js/sales.js"></script>
    <script src="../../js/orders.js"></script>
    <script src="../../js/products.js"></script>
    <script src="../../js/customers.js"></script>
    <script src="../../js/tarsale.js"></script>
</body>
</html>