<?php 
    include_once("../controllers/product_controller.php");
    include_once("../controllers/category_controller.php");
    include_once("../controllers/cart_controller.php");
    session_start();
    $categories = viewAllCategories_ctr();
    $products = viewAllProducts_ctr();

   

    // Check if the session variables are set
    if (isset($_SESSION['user_id'])) {
        $user_id = $_SESSION['user_id'];
    } else {
        // Handle the case when 'user_id' session variable is not set
        // You might want to set a default value or perform some other action
        $user_id = null; // Or any other default value
    }

    if (isset($_SESSION['user_name'])) {
        $user_name = $_SESSION['user_name'];
    } else {
        // Handle the case when 'user_name' session variable is not set
        // You might want to set a default value or perform some other action
        $user_name = null; // Or any other default value
    }

    $userId = $_SESSION['user_id'];
    $cartItems = viewCart_ctr($userId);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>ECOMONO</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="author" content="Henry-Owusu">
  <meta name="keywords" content="eco-friendly,biodegradable,e-commerce,store">
  <meta name="description" content="Ecommerce Platform for Eco-friendly Products">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

  <link rel="stylesheet" type="text/css" href="css/vendor.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  <link rel="stylesheet" href="../admin/assets/fonts/tabler-icons.min.css">


  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

  <link
    href="https://fonts.googleapis.com/css2?family=Inter:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
    rel="stylesheet">

      <!-- [Favicon] icon -->
      <link rel="icon" href="https://ableproadmin.com/assets/images/favicon.svg" type="image/x-icon"> <!-- [Font] Family -->
    <link rel="stylesheet" href="../assets/fonts/inter/inter.css" id="main-font-link" />
    <!-- [Tabler Icons] https://tablericons.com -->
    <link rel="stylesheet" href="../assets/fonts/tabler-icons.min.css" >
    <!-- [Feather Icons] https://feathericons.com -->
    <link rel="stylesheet" href="../assets/fonts/feather.css" >
    <!-- [Font Awesome Icons] https://fontawesome.com/icons -->
    <link rel="stylesheet" href="../assets/fonts/fontawesome.css" >
    <!-- [Material Icons] https://fonts.google.com/icons -->
    <link rel="stylesheet" href="../assets/fonts/material.css" >
<!-- [Template CSS Files] -->

<style> 
.product-container {
    display: flex;
    flex-wrap: wrap;
    /* justify-content: center;  */
    gap: 10px; /* Add some space between product cards */
}

.product-card {
    border: none;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: box-shadow 0.3s ease;
    position: relative;
    width: calc(25% - 10px); /* 25% width for each card with 20px gap between them */
    margin-bottom: 20px; /* Adjust the bottom margin */

}

.product-card:hover {
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
}

.product-image {
    position: relative;
    overflow: hidden;
}

.product-image img {
    width: 100%;
    height: auto;
    transition: transform 0.3s ease;
}

.product-actions {
    position: absolute;
    bottom: 0;
    right: 0;
    transform: translateY(100%);
    transition: transform 0.3s ease;
    display: flex;
    align-items: center;
    /* padding: 8px; */
    background-color: rgba(255, 255, 255, 0.9);
}

.product-card:hover .btn-cart {
    display: block;
}

.btn-wishlist,
.btn-cart {
    font-size: 14px; /* Adjust the font size */
    padding: 4px 8px; /* Adjust the padding */
}



.btn-wishlist {
    margin-right: 8px;
}

.btn-wishlist.clicked {
    animation: wishListClick 0.5s forwards;
}

@keyframes wishListClick {
    0% {
        color: black;
    }
    100% {
        color: red;
    }
}

.btn-cart {
    display: none;
}

.product-card:hover .btn-cart {
    display: block;
    position: absolute;
    bottom: 45px;
    right: 8px;
}

.product-price,
.product-rating {
    font-size: px; /* Adjust the font size as needed */
    margin-bottom: -30px; /* Adjust the bottom margin as needed */
}


.product-details {
    padding: 16px;
}

.product-name {
    margin-bottom: 8px;
    font-weight: bold;
}

.product-price {
    color: #007bff;
    font-weight: bold;

}

.product-rating {
    color: #f39c12;
}

.star {
    font-size: 20px;
}


</style>
</head>

<body>

    <!-- svg symbols -->
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <defs>
            <symbol xmlns="http://www.w3.org/2000/svg" id="arrow-left" viewBox="0 0 24 24">
                <path fill="black"
                  d="M17 11H9.41l3.3-3.29a1 1 0 1 0-1.42-1.42l-5 5a1 1 0 0 0-.21.33a1 1 0 0 0 0 .76a1 1 0 0 0 .21.33l5 5a1 1 0 0 0 1.42 0a1 1 0 0 0 0-1.42L9.41 13H17a1 1 0 0 0 0-2Z" />
            </symbol>
            <symbol xmlns="http://www.w3.org/2000/svg" id="arrow-right" viewBox="0 0 24 24">
                <path fill="black"
                  d="M17.92 11.62a1 1 0 0 0-.21-.33l-5-5a1 1 0 0 0-1.42 1.42l3.3 3.29H7a1 1 0 0 0 0 2h7.59l-3.3 3.29a1 1 0 0 0 0 1.42a1 1 0 0 0 1.42 0l5-5a1 1 0 0 0 .21-.33a1 1 0 0 0 0-.76Z" />
            </symbol>
            <symbol xmlns="http://www.w3.org/2000/svg" id="cart" viewBox="0 0 24 24">
                <path fill="currentColor"
                d="M8.5 19a1.5 1.5 0 1 0 1.5 1.5A1.5 1.5 0 0 0 8.5 19ZM19 16H7a1 1 0 0 1 0-2h8.491a3.013 3.013 0 0 0 2.885-2.176l1.585-5.55A1 1 0 0 0 19 5H6.74a3.007 3.007 0 0 0-2.82-2H3a1 1 0 0 0 0 2h.921a1.005 1.005 0 0 1 .962.725l.155.545v.005l1.641 5.742A3 3 0 0 0 7 18h12a1 1 0 0 0 0-2Zm-1.326-9l-1.22 4.274a1.005 1.005 0 0 1-.963.726H8.754l-.255-.892L7.326 7ZM16.5 19a1.5 1.5 0 1 0 1.5 1.5a1.5 1.5 0 0 0-1.5-1.5Z" />
            </symbol>
            <symbol xmlns="http://www.w3.org/2000/svg" id="search" viewBox="0 0 24 24">
                <path fill="currentColor"
                d="M21.71 20.29L18 16.61A9 9 0 1 0 16.61 18l3.68 3.68a1 1 0 0 0 1.42 0a1 1 0 0 0 0-1.39ZM11 18a7 7 0 1 1 7-7a7 7 0 0 1-7 7Z" />
            </symbol>
            <symbol xmlns="http://www.w3.org/2000/svg" id="user" viewBox="0 0 24 24">
                <path fill="currentColor"
                d="M15.71 12.71a6 6 0 1 0-7.42 0a10 10 0 0 0-6.22 8.18a1 1 0 0 0 2 .22a8 8 0 0 1 15.9 0a1 1 0 0 0 1 .89h.11a1 1 0 0 0 .88-1.1a10 10 0 0 0-6.25-8.19ZM12 12a4 4 0 1 1 4-4a4 4 0 0 1-4 4Z" />
            </symbol>
            <symbol xmlns="http://www.w3.org/2000/svg" id="close" viewBox="0 0 15 15">
                <path fill="currentColor"
                d="M7.953 3.788a.5.5 0 0 0-.906 0L6.08 5.85l-2.154.33a.5.5 0 0 0-.283.843l1.574 1.613l-.373 2.284a.5.5 0 0 0 .736.518l1.92-1.063l1.921 1.063a.5.5 0 0 0 .736-.519l-.373-2.283l1.574-1.613a.5.5 0 0 0-.283-.844L8.921 5.85l-.968-2.062Z" />
            </symbol>
        </defs>
    </svg>


    <div class="preloader text-white fs-6 text-uppercase overflow-hidden"></div>

  
    <div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="offcanvasCart" aria-labelledby="My Cart">
        <div class="offcanvas-header justify-content-center">
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
        <div class="order-md-last">
            <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-primary">Your cart</span>
            <span class="badge bg-primary rounded-pill"><?php echo count($cartItems); ?></span>
            </h4>
            <ul class="list-group mb-3">
            <?php foreach ($cartItems as $item) : ?>
            <li class="list-group-item d-flex justify-content-between lh-sm">
                <div>
                <h6 class="my-0"><?php echo $item['ProductName']; ?></h6>
                <small class="text-body-secondary"><?php echo $item['Description']; ?></small>
                </div>
                <span class="text-body-secondary">$<?php echo $item['Price']; ?></span>
            </li>
            <?php endforeach; ?>
            <li class="list-group-item d-flex justify-content-between">
                <span>Total (USD)</span>
                <strong><?php 
                        $total = array_reduce($cartItems, function($acc, $item) {
                            return $acc + $item['Price'];
                        }, 0);
                        echo '$' . $total; 
                    ?></strong>
            </li>
            </ul>
            <div class="row">
                <div class="col">
                    <a href="checkout.php"><button class="w-100 btn btn-primary btn-sm" type="submit">Continue to Checkout</button></a>
                </div>
                <div class="col">
                <a href="cart.php"><button class="w-100 btn btn-success btn-sm" type="submit">Proceed to Cart</button></a>
                </div>
            </div>
        </div>
        </div>
    </div>

    <!--Top Nav bar -->
    <nav class="navbar navbar-expand-lg text-white text-uppercase fs-7 ls-1 py-5 align-items-center">
    <div class="container-fluid">
        <div class="row align-items-center w-100">
            <div class="col-8 col-md-3">
                <div class="logo">
                    <span class="eco">ECO</span><ion-icon name="leaf-outline" class="leaf"></ion-icon><span class="mono">MONO</span>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="col-1 col-md-6 d-md-flex justify-content-center">
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>

                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-end flex-grow-1 gap-1 gap-md-5 pe-3">
                            <li class="nav-item">
                                <a class="nav-link active" href="index.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="products.php">Shop</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="sell.php">Sell</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="blog.php">Blog</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="aboutus.php">About Us</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-3 col-md-3 text-md-end">
                <ul class="list-unstyled d-flex justify-content-end m-0">
                    <li class="search-box" class="mx-2">
                        <a href="view/signup.php" class="search-button" id="nextnav">
                            <svg width="24" height="24" viewBox="0 0 24 24"><use xlink:href="#user"></use></svg>
                        </a>
                    </li>
                    <li>
                        <a href="cart.html" class="mx-2" data-bs-toggle="offcanvas" data-bs-target="#offcanvasCart" aria-controls="offcanvasCart" id="nextnav">
                            <svg width="24" height="24" viewBox="0 0 24 24"><use xlink:href="#cart"></use></svg>
                            <span class="badge bg-danger position-absolute top-0 start-90 translate-middle"><?php echo count($cartItems); ?></span>
                        </a>
                    </li>
                    <li class="search-box" class="mx-2">
                        <a href="#search" class="search-button" id="nextnav">
                            <svg width="24" height="24" viewBox="0 0 24 24"><use xlink:href="#search"></use></svg>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>


<!-- Main Content and Fixed Sidebar Filter -->
<div class="row">
    <!-- Sidebar Filter -->
    <div class="ecom-wrapper col-md-3 d-none d-lg-block">
        <div class="sidebarFilter" id="offcanvas_mail_filter" style="position: sticky; top: 100px;">
        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5>Filter</h5>
                <a
                href="#"
                class="avtar avtar-s btn-link-danger btn-pc-default"
                data-bs-dismiss="offcanvas"
                data-bs-target="#offcanvas_mail_filter"
                >
                <i class="ti ti-x f-20"></i>
                </a>
            </div>
            <div class="scroll-block">
                <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item px-0 py-2">
                    <a class="btn border-0 px-0 text-start w-100" data-bs-toggle="collapse" href="#filtercollapse2">
                        <div class="float-end"><i class="ti ti-chevron-down"></i></div>
                        Categories
                    </a>
                    <div class="collapse show" id="filtercollapse2">
                        <div class="py-3">
                        <?php foreach($categories as $category): ?>
                            <div class="form-check my-2">                                
                                <input class="form-check-input" type="checkbox" id="categoryfilter2" value="<?php echo $category['CategoryID']; ?>" onclick="filterProductsByCategory()" />
                                <label class="form-check-label" for="categoryfilter2"><?php echo $category['CategoryName'] ?></label>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    </li>
                    
                    <li class="list-group-item px-0 py-2">
                    <a class="btn border-0 px-0 text-start w-100" data-bs-toggle="collapse" href="#filtercollapse4">
                        <div class="float-end"><i class="ti ti-chevron-down"></i></div>
                        Price
                    </a>
                    <div class="collapse show" id="filtercollapse4">
                        <div class="row py-3">
                        <div class="col-6">
                            <div class="form-check my-2">
                            <input class="form-check-input" type="radio" name="price" id="pricefilter1" value="option1" />
                            <label class="form-check-label" for="pricefilter1">Below $10</label>
                            </div>
                            <div class="form-check my-2">
                            <input class="form-check-input" type="radio" name="price" id="pricefilter2" value="option2" />
                            <label class="form-check-label" for="pricefilter2">$50 - $100</label>
                            </div>
                            <div class="form-check my-2">
                            <input class="form-check-input" type="radio" name="price" id="pricefilter3" value="option3" />
                            <label class="form-check-label" for="pricefilter3">$150 - $200</label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-check my-2">
                            <input class="form-check-input" type="radio" name="price" id="pricefilter4" value="option1" />
                            <label class="form-check-label" for="pricefilter4">$10 - $50</label>
                            </div>
                            <div class="form-check my-2">
                            <input class="form-check-input" type="radio" name="price" id="pricefilter5" value="option2" />
                            <label class="form-check-label" for="pricefilter5">$100 - $150</label>
                            </div>
                            <div class="form-check my-2">
                            <input class="form-check-input" type="radio" name="price" id="pricefilter6" value="option3" />
                            <label class="form-check-label" for="pricefilter6">Over $200</label>
                            </div>
                        </div>
                        </div>
                    </div>
                    </li>
                    <li class="list-group-item px-0 py-2">
                    <a class="btn border-0 px-0 text-start w-100" data-bs-toggle="collapse" href="#filtercollapse5">
                        <div class="float-end"><i class="ti ti-chevron-down"></i></div>
                        Rating
                    </a>
                    <div class="collapse show" id="filtercollapse5">
                        <div class="py-3">
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" value="" id="chkratt1" />
                            <label class="form-check-label" for="chkratt1">4★ &amp; above</label>
                        </div>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" value="" id="chkratt2" />
                            <label class="form-check-label" for="chkratt2">3★ &amp; above</label>
                        </div>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" value="" id="chkratt3" />
                            <label class="form-check-label" for="chkratt3">2★ &amp; above</label>
                        </div>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" value="" id="chkratt4" />
                            <label class="form-check-label" for="chkratt4">1★ &amp; above</label>
                        </div>
                        </div>
                    </div>
                    </li>
                    <li class="list-group-item px-0 py-2">
                    <a href="#" class="btn btn-light-danger w-100">Clear All</a>
                    </li>
                </ul>
                </div>
            </div>
            </div>
        </div>
        </div>


        <div class="col-md-9">
        <div class="ecom-content">
            <div class="card h-100 w-100">
            <div class="card-body p-3">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="form-search input-group"> 
                        <span class="input-group-text"><i class="ti ti-search"></i></span> 
                        <input id="searchInput" type="search" class="form-control" placeholder="Search Products" oninput="searchProducts(this.value)"/> 
                    </div>

                    <div>
                    <select id="sortSelect" class="form-select" onchange="sortProducts(this.value)">
                        <option value="priceLowToHigh">Price: Low To High</option>
                        <option value="priceHighToLow">Price: High To Low</option>
                        <option value="freshArrivals">Fresh Arrivals</option>
                    </select>
                        </div>
                    <div class="d-flex align-items-center">
                        <a href="#" class="btn btn-link-secondary align-items-center" data-bs-toggle="offcanvas" data-bs-target="#offcanvas_mail_filter">
                            <i class="ti ti-filter f-16"></i> Filter
                        </a>
                        <a href="#" class="d-none d-xxl-inline-flex btn btn-link-secondary align-items-center" data-bs-toggle="collapse" data-bs-target="#ecom-filter">
                            <i class="ti ti-filter f-16"></i> Filter
                        </a>
                    </div>
                </div>
            </div>

            </div>
            <!-- Product Card -->
            <div class="product-container">
    <?php foreach($products as $product): ?>
        <div class="card product-card mt-4">
            <form action="../actions/addToCart.php" method="post"> <!-- Form for each product -->
                <div class="card-body">
                    <div class="product-image position-relative">
                        <img src="<?php echo $product['productImage']; ?>" alt="<?php echo $product['ProductName']; ?>" class="img-fluid">
                        <div class="product-actions">
                            <button type="button" class="btn btn-light btn-wishlist" aria-label="Add to Wishlist"><i class="ti ti-heart"></i></button>
                            <button type="submit" class="btn btn-primary btn-cart" aria-label="Add to Cart"><i class="ti ti-shopping-cart"></i></button>
                        </div>
                    </div>
                    <div class="product-details">
                        <h5 class="product-name"><?php echo $product['ProductName']; ?></h5>
                        <p class="product-price">GHc<?php echo $product['Price']; ?></p>
                        <div class="product-rating">
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                            <span class="star">&#9734;</span>
                        </div>
                    </div>
                </div>
                <input type="hidden" class="date-created" value="<?php echo $product['date_created']; ?>">
                <input type="hidden" class="category-input" value="<?php echo $product['Category']; ?>">
                <input type="hidden" name="product_id" value="<?php echo $product['ProductID']; ?>">
            </form>
        </div>
    <?php endforeach; ?>
</div>

</div>
</div>








 
  <!-- Foot section -->
  <footer id="footer" class="bg-black">
    <div class="container-fluid">
      <div class="row d-flex flex-wrap justify-content-between my-5 py-5">
        <div class="col-md-3 col-sm-6">
          <div class="footer-menu footer-menu-001">
            <div class="footer-intro mb-4">
              <a href="index.html">
                <img src="images/logo.png" alt="logo">
              </a>
            </div>
            <p>Join us in our mission for a greener future! Explore eco-friendly products, stay informed with insightful blogs, and contribute to a sustainable world. Together, let's make a positive impact on the environment. 🌱 #GoGreen</p>
          </div>
        </div>
        <div class="col-md-2 col-sm-6">
          <div class="footer-menu footer-menu-002">
            <h5 class="widget-title mb-4">Quick Links</h5>
            <ul class="menu-list list-unstyled fs-6">
              <li class="menu-item">
                <a href="index.html" class="item-anchor">Home</a>
              </li>
              <li class="menu-item">
                <a href="shop-four-column-wide.html" class="item-anchor">Shop</a>
              </li>
              <li class="menu-item">
                <a href="blog.html" class="item-anchor">Sell</a>
              </li>
              <li class="menu-item">
                <a href="styles.html" class="item-anchor">Blog</a>
              </li>
              <li class="menu-item">
                <a href="#" class="item-anchor">About</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-2 col-sm-6">
          <div class="footer-menu footer-menu-002">
            <h5 class="widget-title mb-4">About</h5>
            <ul class="menu-list list-unstyled fs-6">
              <li class="menu-item">
                <a href="index.html" class="item-anchor">How it works</a>
              </li>
              <li class="menu-item">
                <a href="shop-four-column-wide.html" class="item-anchor">About</a>
              </li>
              <li class="menu-item">
                <a href="blog.html" class="item-anchor">Our packages</a>
              </li>
              <li class="menu-item">
                <a href="styles.html" class="item-anchor">Promotions</a>
              </li>
              <li class="menu-item">
                <a href="#" class="item-anchor">Refer a friend</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-2 col-sm-6">
          <div class="footer-menu footer-menu-003">
            <h5 class="widget-title mb-4">Help & Info</h5>
            <ul class="menu-list list-unstyled fs-6">
              <li class="menu-item">
                <a href="#" class="item-anchor">Track Your Order</a>
              </li>
              <li class="menu-item">
                <a href="#" class="item-anchor">Returns + Exchanges</a>
              </li>
              <li class="menu-item">
                <a href="#" class="item-anchor">Shipping + Delivery</a>
              </li>
              <li class="menu-item">
                <a href="#" class="item-anchor">Contact Us</a>
              </li>
              <li class="menu-item">
                <a href="#" class="item-anchor">Find us easy</a>
              </li>
              <li class="menu-item">
                <a href="faqs.html" class="item-anchor">FAQs</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="footer-menu footer-menu-004 border-animation-left">
            <h5 class="widget-title mb-4">Contact Us</h5>
            <p>Do you have any questions or suggestions? <a href="mailto:henryowusu023@gmail.com" class="item-anchor">henryowusu023@gmail.com</a></p>
            <p>Do you need support? Give us a call. <a href="tel:+233 20 027 1674" class="item-anchor">+233 20 027 1674</a>
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="border-top py-4">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6 d-flex flex-wrap">
            <div class="shipping">
              <span>We ship with:</span>
              <img src="images/arct-icon.png" alt="icon">
              <img src="images/dhl-logo.png" alt="icon">
            </div>
            <div class="payment-option">
              <span>Payment Option:</span>
              <img src="images/visa-card.png" alt="card">
              <img src="images/paypal-card.png" alt="card">
              <img src="images/master-card.png" alt="card">
            </div>
          </div>
          <div class="col-md-6 text-start text-md-end">
            <p>© Copyright 2024 Ecomono. All rights reserved.</a></p>
          </div>
        </div>
      </div>
    </div>
  </footer>
    



  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script> 
  <script src="js/jquery.min.js"></script>
  <script src="js/plugins.js"></script>
  <script src="js/SmoothScroll.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  <script src="js/script.js"></script>
  <script src="../assets/js/plugins/popper.min.js"></script>
<script src="../admin/assets/js/plugins/simplebar.min.js"></script>
<script src="../admin/assets/js/plugins/bootstrap.min.js"></script>
<script src="../admin/assets/js/fonts/custom-font.js"></script>
<script src="../admin/assets/js/pcoded.js"></script>
<script src="../admin/assets/js/plugins/feather.min.js"></script>
<script>
 function searchProducts(query) {
        // Convert the query to lowercase for case-insensitive search
        query = query.toLowerCase();
        
        // Get all product cards
        var productCards = document.querySelectorAll('.product-card');

        // Loop through each product card
        productCards.forEach(function(card) {
            // Get the product name from the card
            var productName = card.querySelector('.product-name').innerText.toLowerCase();
            
            // Check if the product name contains the search query
            if (productName.includes(query)) {
                // Show the product card if it matches the search query
                card.style.display = 'block';
            } else {
                // Hide the product card if it doesn't match the search query
                card.style.display = 'none';
            }
        });
    }





    function filterProductsByCategory() {
    // Get the category value from the hidden input field
        var categoryValue = document.querySelector('input[type="hidden"]').value;

        // Get all checkboxes for categories
        var categoryCheckboxes = document.querySelectorAll('.form-check-input');

        // Loop through each checkbox
        categoryCheckboxes.forEach(function(checkbox) {
            // Check if the checkbox is checked and its value matches the category value
            if (checkbox.checked && checkbox.value === categoryValue) {
                // Show the product corresponding to the selected category
                checkbox.closest('.product-card').style.display = 'block';
            } else {
                // Hide the product if it doesn't match the selected category
                checkbox.closest('.product-card').style.display = 'none';
            }
        });
    }






    function sortProducts(sortBy) {
        // Get all product cards
        var productCards = document.querySelectorAll('.product-card');

        // Convert nodelist to array for ease of sorting
        var productArray = Array.from(productCards);

        // Sort products based on price or date created
        productArray.sort(function(a, b) {
            if (sortBy === 'priceLowToHigh' || sortBy === 'priceHighToLow') {
                var priceA = parseFloat(a.querySelector('.product-price').innerText.replace('GHc', ''));
                var priceB = parseFloat(b.querySelector('.product-price').innerText.replace('GHc', ''));
                
                if (sortBy === 'priceLowToHigh') {
                    return priceA - priceB;
                } else {
                    return priceB - priceA;
                }
            } else if (sortBy === 'freshArrivals') {
                // Assuming date_created is the timestamp in milliseconds
                var dateCreatedA = parseInt(a.querySelector('.date-created').value);
                var dateCreatedB = parseInt(b.querySelector('.date-created').value);
                return dateCreatedB - dateCreatedA; // Sort from newest to oldest
            }
        });

        // Append sorted products back to the container
        var productContainer = document.querySelector('.product-container');
        productContainer.innerHTML = '';
        productArray.forEach(function(card) {
            productContainer.appendChild(card);
        });
    }

//  function sortProducts(sortBy) {
//         // Get all product cards
//         var productCards = document.querySelectorAll('.product-card');

//         // Convert nodelist to array for ease of sorting
//         var productArray = Array.from(productCards);

//         // Sort products based on price
//         productArray.sort(function(a, b) {
//             var priceA = parseFloat(a.querySelector('.product-price').innerText.replace('GHc', ''));
//             var priceB = parseFloat(b.querySelector('.product-price').innerText.replace('GHc', ''));
            
//             if (sortBy === 'priceLowToHigh') {
//                 return priceA - priceB;
//             } else {
//                 return priceB - priceA;
//             }
//         });

//         // Append sorted products back to the container
//         var productContainer = document.querySelector('.product-container');
//         productContainer.innerHTML = '';
//         productArray.forEach(function(card) {
//             productContainer.appendChild(card);
//         });
//     }   
</script>    
  

</body>
</html>
