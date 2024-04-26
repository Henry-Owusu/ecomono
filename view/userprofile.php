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

/* body {
    font-family: Arial, sans-serif;
    padding: 20px;
    background: #fff;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
  } */
  
  /* html, body {
  height: 100%;
} */

.card {
  display: flex;
  flex-direction: row;
  justify-content: space-between;
  align-items: center;
  border-radius: 30px;
  padding: 20px;
  box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);
  width: 70%;
  height: 480px;
  background: #4CAF50;  /* Green */
}

.left-container {
  background: #2E7D32; /* Dark Green */
  flex: 1;
  max-width: 30%;
  display: flex;
  flex-direction: column;
  align-items: center;
  height: 430px;
  padding: 10px;
  margin: 30px;
  border-radius: 20px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}

.right-container {
  background: #388E3C; /* Light Green */
  flex: 1;
  max-width: 70%;
  height: 430px;
  padding: 10px;
  margin: 20px;
  border-radius: 30px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}

@media only screen and (max-width: 860px) {
  .card {
    flex-direction: column;
    margin: 10px;
    height: auto;
    width: 90%;
  }
  .left-container {
    flex: 1;
    max-width: 100%;
  }
}

@media only screen and (max-width: 600px) {
  .card {
    flex-direction: column;
    margin: 10px;
  }
  .left-container {
    flex: 1;
    max-width: 100%;
  }
}

img {
  width: 200px;
  height: 200px;
  max-width: 200px;
  border-radius: 50%;
  margin: 10px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}

h2 {
  font-size: 24px;
  margin-bottom: 5px;
}

h3 {
  text-align: center;
  font-size: 24px;
  margin-bottom: 5px;
}

.gradienttext {
  background-image: linear-gradient(to right, #4CAF50 0%, #FFC107 100%); /* Green to Yellow */
  color: transparent;
  -webkit-background-clip: text;
}

p {
  font-size: 18px;
  margin-bottom: 20px;
  color: white;
}

table {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  width: 100%;
  height: 280px;
  border-collapse: collapse;
}

td {
  padding: 10px;
  border: none;
  border-radius: 20px;
  color: white;
}

td:first-child {
  font-weight: bold;
}

.credit a {
  text-decoration: none;
  color: #fff;
  font-weight: 800;
}

.credit {
  color: #fff;
  text-align: center;
  margin-top: 10px;
  font-family: Verdana, Geneva, Tahoma, sans-serif;
}



.order-history-container {
  background-color: #ffffff;
  padding: 20px;
  border-radius: 10px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); /* Shadow around the order container */
  margin-top: -100px; /* Raise the order container */
  position: relative; /* Add position relative */
  z-index: 2; /* Ensure order card is above profile card */
  height: 300px; /* Adjusted height */
  width: 85%;
  margin: 0 auto; 

}

.order-history-container h3 {
  font-size: 24px;
  margin-bottom: 10px;
  color: #333333;
}

.order-history-container ul {
  list-style-type: none;
  padding: 0;
}

.order-history-container ul li {
  margin-bottom: 10px;
}

.edit-profile-link {
  text-align: center;
  margin-top: 20px;
}

.edit-profile-link a {
  text-decoration: none;
  background-color: #4CAF50;
  color: #ffffff;
  padding: 10px 20px;
  border-radius: 5px;
  transition: background-color 0.3s ease;
}

.edit-profile-link a:hover {
  background-color: #388E3C;
}

.profile-container {
    display: flex;
  justify-content: center;
  align-items: center;
  position: relative; /* Add position relative */
  z-index: 1; /* Ensure profile card is below order card */
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
            <span class="badge bg-primary rounded-pill">3</span>
            </h4>
            <ul class="list-group mb-3">
            <li class="list-group-item d-flex justify-content-between lh-sm">
                <div>
                <h6 class="my-0">22 Inch Monitor</h6>
                <small class="text-body-secondary">Brief description</small>
                </div>
                <span class="text-body-secondary">$12</span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-sm">
                <div>
                <h6 class="my-0">Mobile phone</h6>
                <small class="text-body-secondary">Brief description</small>
                </div>
                <span class="text-body-secondary">$8</span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-sm">
                <div>
                <h6 class="my-0">Drone</h6>
                <small class="text-body-secondary">Brief description</small>
                </div>
                <span class="text-body-secondary">$5</span>
            </li>
            <li class="list-group-item d-flex justify-content-between">
                <span>Total (USD)</span>
                <strong>$20</strong>
            </li>
            </ul>

            <button class="w-100 btn btn-primary btn-lg" type="submit">Continue to Checkout</button>
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
                                <a class="nav-link" href="index.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="products.php">Shop</a>
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

<main>
<!-- Main Content and Fixed Sidebar Filter -->
<div class="profile-container">    
    <div class="card">
        <div class="left-container">
            <img src="https://cdn.pixabay.com/photo/2015/01/08/18/29/entrepreneur-593358__480.jpg" alt="Profile Image">
            <h2 class="gradienttext">John Doe</h2>
            <p>Web Developer</p>
            <!-- Edit Profile Link -->
            <div class="edit-profile-link">
            <a href="#">Edit Profile</a>
            </div>
        </div>
        <div class="right-container">
            <h3 class="gradienttext">Profile Details</h3>
            <table>
                <tr>
                    <td>Name :</td>
                    <td>John Doe</td>
                </tr>
            <tr>
                <td>Age :</td>
                <td>35</td>
            </tr>
            <tr>
                <td>Mobile :</td>
                <td>+91 XXXXXXXXXX</td>
            </tr>
            <tr>
                <td>Email :</td>
                <td>john@example.com</td>
            </tr>
            <tr>
                <td>Address :</td>
                <td>123 Main St, Anytown, USA</td>
            </tr>
            </table>
        </div>
    </div>
</div>

<!-- Order History Container -->
<div class="order-history-container">
  <h3 class="gradienttext">Order History</h3>
  <table class="order-table">
    <thead>
      <tr>
        <th>Order ID</th>
        <th>Date</th>
        <th>Total Amount</th>
        <th>Status</th>
        <th>Details</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>001</td>
        <td>2024-04-04</td>
        <td>$50</td>
        <td>Delivered</td>
        <td><a href="#" class="details-link">View</a></td>
      </tr>
      <tr>
        <td>002</td>
        <td>2024-04-03</td>
        <td>$70</td>
        <td>Pending</td>
        <td><a href="#" class="details-link">View</a></td>
      </tr>
      <tr>
        <td>003</td>
        <td>2024-04-02</td>
        <td>$30</td>
        <td>Delivered</td>
        <td><a href="#" class="details-link">View</a></td>
      </tr>
    </tbody>
  </table>
</div>








</main>

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

  

</body>
</html>
