<?php 
include_once "../controllers/cart_controller.php";
include_once "../controllers/order_controller.php";

session_start();

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
$user_email = $_SESSION['user_email'];
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
  <meta name="keywords" content="eco-friendly, biodegradable, e-commerce, store">
  <meta name="description" content="Ecommerce Platform for Eco-friendly Products">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <style>
        @import url(https://fonts.googleapis.com/css?family=Lato:400,300,700);
    body,html {
    height:100%;
    margin:0;
    
    font-family:lato;
    }

    /* Default styles */
  .page-block {
    padding: 20px;
  }

  ..breadcrumb {
      font-size: 16px;
      /* background-color: #f8f9fa; */
      border-radius: 5px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      padding: 10px 20px;
      display: inline-block;
    }

    .breadcrumb-item {
      padding: 0;
    }

    .breadcrumb-item + .breadcrumb-item::before {
      content: "›";
      margin: 0 10px;
      color: #6c757d;
    }

    .breadcrumb-item a {
      color: #6c757d;
      text-decoration: none;
      transition: color 0.3s ease;
    }

    .breadcrumb-item a:hover {
      color: #343a40;
    }

    .breadcrumb-item.active {
      color: #343a40;
      font-weight: bold;
    }

      
      h2 {
      margin-bottom:0px;
      margin-top:25px;
      text-align:center;
      font-weight:200;
      font-size:19px;
      font-size:1.2rem;
      
      }
      .container {
      height:100%;
      min-height: 100vh
      -webkit-box-pack:center;
      -webkit-justify-content:center;
          -ms-flex-pack:center;
              justify-content:center;
      -webkit-box-align:center;
      -webkit-align-items:center;
          -ms-flex-align:center;
              align-items:center;
      display:-webkit-box;
      display:-webkit-flex;
      display:-ms-flexbox;
      display:flex;
      flex-direction: column;
      background:-webkit-linear-gradient(#c5e5e5, #ccddf9);
      background:linear-gradient(#c9e5e9,#ccddf9);
      }
      .dropdown-select.visible {
      display:block;
      }
      .dropdown {
      position:relative;
      }
      ul {
      margin:0;
      padding:0;
      }
      ul li {
      list-style:none;
      padding-left:10px;
      cursor:pointer;
      }
      ul li:hover {
      background:rgba(255,255,255,0.1);
      }
      .dropdown-select {
      position:absolute;
      background:#77aaee;
      text-align:left;
      box-shadow:0px 3px 5px 0px rgba(0,0,0,0.1);
      border-bottom-right-radius:5px;
      border-bottom-left-radius:5px;
      width:90%;
      left:2px;
      line-height:2em;
      margin-top:2px;
      box-sizing:border-box;
      }
      .thin {
      font-weight:400;
      }
      .small {
      font-size:12px;
      font-size:.8rem;
      }
      .half-input-table {
      border-collapse:collapse;
      width:100%;
      }
      .half-input-table td:first-of-type {
      border-right:10px solid #4488dd;
      width:50%;
      }
      .window {
      width:800px;
      background:#fff;
      display:-webkit-box;
      display:-webkit-flex;
      display:-ms-flexbox;
      display:flex;
      flex-grow: 1;
      box-shadow: 0px 15px 50px 10px rgba(0, 0, 0, 0.2);
      border-radius:30px;
      z-index:10;
      }
      .order-info {
      height:100%;
      width:50%;
      padding-left:25px;
      padding-right:25px;
      box-sizing:border-box;
      display:-webkit-box;
      display:-webkit-flex;
      display:-ms-flexbox;
      display:flex;
      -webkit-box-pack:center;
      -webkit-justify-content:center;
          -ms-flex-pack:center;
              justify-content:center;
      position:relative;
      }
      .price {
      bottom:0px;
      position:absolute;
      right:0px;
      color:#4488dd;
      }
      .order-table td:first-of-type {
      width:25%;
      }
      .order-table {
          position:relative;
      }
      .line {
      height:1px;
      width:100%;
      margin-top:10px;
      margin-bottom:10px;
      background:#ddd;
      }
      .order-table td:last-of-type {
      vertical-align:top;
      padding-left:25px;
      }
      .order-info-content {
      table-layout:fixed;

      }

      .full-width {
      width:100%;
      }
      .pay-btn {
      border:none;
      background:#22b877;
      line-height:2em;
      border-radius:10px;
      font-size:19px;
      font-size:1.2rem;
      color:#fff;
      cursor:pointer;
      position:absolute;
      bottom:25px;
      width:calc(100% - 50px);
      -webkit-transition:all .2s ease;
              transition:all .2s ease;
      }
      .pay-btn:hover {
      background:#22a877;
          color:#eee;
      -webkit-transition:all .2s ease;
              transition:all .2s ease;
      }

      .total {
      margin-top: auto; 
      margin-bottom: 25px;
      margin-left: 35px; 
      margin-right: 27px; 

      }
      .dense {
      line-height:1.2em;
      font-size:16px;
      font-size:1rem;
      }
      .input-field {
      background:rgba(255,255,255,0.1);
      margin-bottom:10px;
      margin-top:3px;
      line-height:1.5em;
      font-size:20px;
      font-size:1.3rem;
      border:none;
      padding:5px 10px 5px 10px;
      color:#fff;
      box-sizing:border-box;
      width:100%;
      margin-left:auto;
      margin-right:auto;
      }
      .credit-info {
      background:#4488dd;
      height:100%;
      width:50%;
      color:#eee;
      -webkit-box-pack:center;
      -webkit-justify-content:center;
          -ms-flex-pack:center;
              justify-content:center;
      font-size:14px;
      font-size:.9rem;
      display:-webkit-box;
      display:-webkit-flex;
      display:-ms-flexbox;
      display:flex;
      box-sizing:border-box;
      padding-left:25px;
      padding-right:25px;
      border-top-right-radius:30px;
      border-bottom-right-radius:30px;
      position:relative;
      }
      .dropdown-btn {
      background:rgba(255,255,255,0.1);
      width:100%;
      border-radius:5px;
      text-align:center;
      line-height:1.5em;
      cursor:pointer;
      position:relative;
      -webkit-transition:background .2s ease;
              transition:background .2s ease;
      }
      .dropdown-btn:after {
      content: '\25BE';
      right:8px;
      position:absolute;
      }
      .dropdown-btn:hover {
      background:rgba(255,255,255,0.2);
      -webkit-transition:background .2s ease;
              transition:background .2s ease;
      }
      .dropdown-select {
      display:none;
      }
      .credit-card-image {
      display:block;
      max-height:80px;
      margin-left:auto;
      margin-right:auto;
      margin-top:35px;
      margin-bottom:15px;
      }
      .credit-info-content {
      margin-top:25px;
      -webkit-flex-flow:column;
          -ms-flex-flow:column;
              flex-flow:column;
      display:-webkit-box;
      display:-webkit-flex;
      display:-ms-flexbox;
      display:flex;
      width:100%;
      }
      @media (max-width: 600px) {
      .window {
          width: 100%;
          height: 100%;
          display:block;
          border-radius:0px;
      }
      .order-info {
          width:100%;
          height:auto;
          padding-bottom:100px;
          border-radius:0px;
          margin-bottom: 100px;
      }
      .credit-info {
          width:100%;
          height:auto;
          padding-bottom:100px;
          border-radius:0px;
      }
      .pay-btn {
          border-radius:0px;
      }
      }

      .footer {
          flex-shrink: 0;
      }
    </style>    


</head>
<body>
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
<!--Top Nav bar -->
<nav class="navbar navbar-expand-lg text-white text-uppercase fs-7 ls-1 py-5 align-items-center">
  <div class="container-fluid">
    <div class="row align-items-center w-100">
      <div class="col-8 col-md-3">
        <div class="logo">
          <span class="eco">ECO</span><ion-icon name="leaf-outline" class="leaf"></ion-icon><span class="mono">MONO</span>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
          aria-controls="offcanvasNavbar">
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
                <a class="nav-link" href="../index.html">Home</a>
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


<!-- <div class="container">
  <div aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="../index.html">Home</a></li>
      <li class="breadcrumb-item"><a href="products.php">Shop</a></li>
      <li class="breadcrumb-item active" aria-current="page">Checkout</li>
    </ol>
  </nav>
</div> -->

<div class="page-header">
  <div class="page-block">
    <div class="row align-items-center">
      <div class="col-md-12">
        <ul class="breadcrumb">
          <li class="breadcrumb-item"><a href="https://ableproadmin.com/dashboard/index.html">Home</a></li>
          <li class="breadcrumb-item"><a href="javascript: void(0)">E-commerce</a></li>
          <li class="breadcrumb-item" aria-current="page">Products</li>
        </ul>
      </div>
    </div>
  </div>
</div>
<div class='container'>
  <div class='window' id="orderWindow">
    <div class='order-info'>
      <div class='order-info-content'>
        <h2>Order Summary</h2>
        <?php 
        $subtotal = 0;
        $vatPercentage = 0.19;
        foreach ($cartItems as $cartItem): 
          $subtotal += $cartItem['Price'];
        ?>
                <div class='line'></div>
                <table class='order-table'>
                  <tbody>
                      
                          <tr>
                              <td><img src='<?php echo $cartItem['productImage']; ?>' class='full-width'></td> <!-- Use $cartItem['productImage'] instead of $carts['cartItem'] -->
                              <td>
                                  <br>
                                  <span class='thin'><?php echo $cartItem['BrandName']; ?></span> <!-- Use $cartItem['BrandName'] instead of $carts['BrandName'] -->
                                  <br> Free Run 3.0 Women<br>
                                  <span class='thin small'> Color: Grey/Orange, Size: 10.5<br><br></span>
                              </td>
                          </tr>
                          <tr>
                              <td>
                                  <div class='price'>GHc<?php echo $cartItem['Price']; ?></div> 
                              </td>
                          </tr>
                   
                  </tbody>
              </table>
              <?php endforeach; ?>
               
 
        <div class='line'></div>
        <div class='total'>
          <span style='float:left;'>
            <div class='thin dense'>VAT 19%</div>
            <div class='thin dense'>Delivery</div>
            TOTAL
          </span>
          <span style='float:right; text-align:right;'>
            <div class='thin dense'>$<?php echo number_format($subtotal * $vatPercentage, 2); ?></div>
            <div class='thin dense'>Free</div>
            <?php $total = $subtotal + ($subtotal * $vatPercentage)?>
            <p id="amount">$<?php echo number_format($total, 2); ?></p>
          </span>
        </div>
    </div>
  </div>
  <div class='credit-info'>
    <form id="paymentForm">
        <div class='credit-info-content'>
            <table class='half-input-table'>
                <tr>
                    <td>Please select your card: </td>
                    <td>
                        <div class='dropdown' id='card-dropdown'>
                            <div class='dropdown-btn' id='current-card'>Paystack</div>
                        </div>
                    </td>
                </tr>
            </table>
            <img src='../images/paystack.png' height='80' class='credit-card-image' id='credit-card-image'>
            Card Holder
            <input class='input-field' id="name" value="<?php echo $user_name?>" type="text" name="name" required>
            Email
            <input class='input-field' id="email-address" value="<?php echo $user_email?>" type="email" name="email-address" required>
            <input type="submit" class='pay-btn btn-sm' value="Proceed to Payment" onclick="payWithPaystack(e)">
        </div>
    </form>
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

<!-- Bootstrap Bundle with Popper -->

<script src="https://js.paystack.co/v1/inline.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
var paymentForm = document.getElementById('paymentForm');
paymentForm.addEventListener('submit', payWithPaystack, false);
function payWithPaystack(e) {
  e.preventDefault();
  var amountTd = document.getElementById('amount');
  var amountToBeConverted = parseFloat(amountTd.innerText.replace(/\$/g, '')); 
  var amount = amountToBeConverted * 100;
  var handler = PaystackPop.setup({
    key: 'pk_test_6e1ea5c069fc80f3af7e5aee0197c4ca4395cb68', // Replace with your public key
    email: document.getElementById('email-address').value,
    amount: amount,
    currency: 'GHS', // Use GHS for Ghana Cedis or USD for US Dollars
    ref: "" + Math.floor(Math.random() * 1000000000 + 1), // Replace with a reference you generated
    callback: function(response) {
      $.ajax
      ({
        url: "../actions/payment_action.php?reference=" + response.reference,
        method: "GET",
        success: function(){
          // create a form that takes all the data you will need to be in orders
          // write sql query to save to database
          <?php
          // $invoice_no = rand(1000, 9999);
          // $totalAmount = number_format($total, 2);
          // $userID = $userId;
          // $orders = addToOrders_ctr($userID, $invoice_no, $totalAmount);
          // echo $orders;
          // echo "<script>alert('here')</script>";
          ?>
          window.location.href = '../actions/addOrders_action.php?invoice_no=<?=rand(1000, 9999)?>&totalAmount=<?=number_format($total, 2)?>&userID = <?= $userId ?>';
          // paymentForm.onsubmit()
        }
      });
      var reference = response.reference;
      alert('Payment complete Reference: ' + reference);
      
    },
    onClose: function() {
      alert('Transaction was not completed, window closed.');
    },
    
  });
  handler.openIframe();
}

</script> 


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

<script>
window.onload = function() {
  adjustHeight(); // Call the function on page load
};

function adjustHeight() {
  var orderWindow = document.getElementById("orderWindow");
  var windowHeight = orderWindow.scrollHeight;
  orderWindow.style.height = windowHeight + "px"; // Set window height to match content height
}
</script>    
<script>
  document.querySelector('.checkout').addEventListener('click', function() {
    window.location.href = 'checkout.php';
  });
  function updateQuantity(productId) {
    var newQuantity = document.getElementById('qty_' + productId).value;
    // Send an AJAX request to update the quantity
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "../actions/updateCart.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function() {
      if (xhr.readyState == 4 && xhr.status == 200) {
        // Handle the response, if needed
        console.log(xhr.responseText); // For debugging purposes
        // Reload the page after successful update
        window.location.reload();
      }
    };
    xhr.send("productId=" + productId + "&quantity=" + newQuantity);
  }
  function deleteCart(productId) {
    var confirmation = confirm("Are you sure you want to delete this Cart Item?");
    if (confirmation) {
      // Send an AJAX request to delete the brand
      var xhr = new XMLHttpRequest();
      xhr.open("POST", "../actions/deleteCart.php", true);
      xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
      xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
          // Reload the page or update the brand list after successful deletion
          location.reload();
        }
      };
      xhr.send("p_id=" + productId);
    }
  };
</script>
</body>
</html>
