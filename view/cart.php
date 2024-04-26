<?php 
include("../controllers/cart_controller.php");
   // Check if the session variables are set
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

$userId = $_SESSION['user_id'];
$carts = viewCart_ctr($userId);
$subtotal= 0;
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
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script> 

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />


  
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  <link rel="stylesheet" href="../admin/assets/fonts/tabler-icons.min.css">

  <style>
    /* Custom CSS */

.title{
    margin-bottom: 5vh;
}
.card{
    margin: auto;
    max-width: 950px;
    width: 90%;
    box-shadow: 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    border-radius: 1rem;
    border: transparent;
}

.cart{
    background-color: #fff;
    padding: 4vh 5vh;
    border-bottom-left-radius: 1rem;
    border-top-left-radius: 1rem;
}
@media(max-width:767px){
    .cart{
        padding: 4vh;
        border-bottom-left-radius: unset;
        border-top-right-radius: 1rem;
    }
}


.summary {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    /* align-items: center; */
    background-color: #f5f5f5;
    border-top-right-radius: 1rem;
    border-bottom-right-radius: 1rem;
    padding: 4vh;
    color: rgb(65, 65, 65);
}

/* Ensure items within the row do not wrap */



/* Adjust width of columns to fill available space */




/* Adjust spacing between elements */
.summary > * {
    margin-bottom:  0.5rem;;
}

.summary form {
    margin-top: 1rem;
}



@media(max-width:767px){
    .summary{
    border-top-right-radius: unset;
    border-bottom-left-radius: 1rem;
    }
}
.summary .col-2{
    padding: 0;
}
.summary .col-10
{
    padding: 0;
}.row{
    margin: 0;
}
.title b{
    font-size: 1.5rem;
}
.main{
    margin: 0;
    padding: 2vh 0;
    width: 100%;
}
.col-2, .col{
    padding: 0 1vh;
}
a{
    padding: 0 1vh;
}
.close{
    margin-left: auto;
    font-size: 0.7rem;
}
img{
    width: 3.5rem;
}
.back-to-shop{
    margin-top: 4.5rem;
}
h5{
    margin-top: 4vh;
}
hr{
    margin-top: 1.25rem;
}
form{
    padding: 2vh 0;
}
select{
    border: 1px solid rgba(0, 0, 0, 0.137);
    padding: 1.5vh 1vh;
    margin-bottom: 4vh;
    outline: none;
    width: 100%;
    background-color: rgb(247, 247, 247);
}
.input-field {
        background-color: #f8f9fa;
        border: 1px solid #ced4da;
        border-radius: 5px;
        padding: 8px 12px;
        /* width: 100%; */
        box-sizing: border-box;
        transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    }

    .input-field:focus {
        outline: none;
        border-color: #80bdff;
        box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
    }

#qty {
    width: 50%;
}    
.btn{
    background-color: green;
    border-color: #fff;
    color: white;
    width: 100%;
    font-size: 0.7rem;
    margin-top: 4vh;
    padding: 1vh;
    border-radius: 5;
}
.btn:focus{
    box-shadow: none;
    outline: none;
    box-shadow: none;
    color: white;
    -webkit-box-shadow: none;
    -webkit-user-select: none;
    transition: none; 
}
.btn:hover{
    background-color: blue;  
    color: white;
}
a{
    color: black; 
}
a:hover{
    color: black;
    text-decoration: none;
}
 #code{
    background-image: linear-gradient(to left, rgba(255, 255, 255, 0.253) , rgba(255, 255, 255, 0.185)), url("https://img.icons8.com/small/16/000000/long-arrow-right.png");
    background-repeat: no-repeat;
    background-position-x: 95%;
    background-position-y: center;
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
                <a class="nav-link active" href="../index.html">Home</a>
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

<div class="card">
    <div class="row">
        <div class="col-md-8 cart">
            <div class="title">
                <div class="row">
                    <div class="col"><h4><b>Shopping Cart</b></h4></div>
                    <div class="col align-self-center text-right text-muted"><?php echo count($carts) . ' items';   ?></div>
                </div>
            </div>
            <?php foreach($carts as $cart): ?>    
            <div class="row border-top border-bottom">
                <div class="row main align-items-center">
                    <div class="col-2"><img class="img-fluid" src="<?php echo $cart['productImage']?>" alt="<?php echo $cart['ProductName']?>"></div>
                    <div class="col">
                        <div class="row text-muted"><?php echo $cart['BrandName']?></div>
                        <div class="row"><?php echo $cart['ProductName']?></div>
                    </div>
                    <div class="col">
                        <input type="number" value="<?php echo $cart['Quantity']?>" min="1" class="border input-field" id="qty">
                    </div>
                    <div class="col">
  
                <button class="update" onclick="updateQuantity(<?php echo $cart['ProductID']; ?>)">Update</button>

            </div>
                    <div class="col">GHc<?php echo $cart['total']?>                 <button class="remove" onclick="deleteCart(<?php echo $cart['ProductID']; ?>)">Remove</button>
</div>
                </div>
            </div>
            <?php 
                $subtotal += $cart['total']; // Increment subtotal by the total of the current item
            ?>
            <?php endforeach; ?>
            
 
            <!-- Other items -->
            <a href="products.php"><div class="back-to-shop">&leftarrow;<span class="text-muted">Back to shop</span></div></a>
        </div>
        <div class="col-md-4 summary">
            <div><h5><b>Summary</b></h5></div>
            
            <div class="logo">
                <span class="eco">ECO</span><ion-icon name="leaf-outline" class="leaf"></ion-icon><span class="mono">MONO</span>
            </div>

            <div class="slogan">
                <span class="eco">Where</span><ion-icon name="leaf-outline" class="leaf"></ion-icon><span class="mono"> Green </span><span class="eco">Meets </span><span class="mono">Convenience </span>
            </div>
            
            <hr>
            <div class="row">
                <div class="col-6" style="padding-left:0;">ITEMS</div>
                <div class="col-6 text-right"><?php echo count($carts); ?></div>
            </div>
            <div class="row">
                <div class="col-6" style="padding-left:0;">TOTAL PRICE</div>
                <div class="col-6 text-right">GHc <?php echo number_format($subtotal, 2); ?> </div>
            </div>
            <div class="row" style="border-top: 1px solid rgba(0,0,0,.1); padding: 2vh 0; padding-left:0;">
                <div class="col-6"><strong>SHIPPING</strong></div>
                <div class="col-6 text-right"><strong>Free</strong></div>
            </div>
            <form>
                <p>GIVE CODE</p>
                <input id="code" placeholder="Enter your code" class="input-field">
            </form>
            <a href="checkout.php" class="btn">PROCEED TO CHECKOUT</a>
        </div>
    </div>
</div>





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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

<script>
  document.querySelector('.checkout').addEventListener('click', function() {
    window.location.href = 'checkout.php';
  });
  function updateQuantity(productId) {
    var newQuantity = document.getElementById('qty' + productId).value;
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
    xhr.send("productID=" + productId + "&quantity=" + newQuantity);
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
                xhr.send("ProductID=" + productId);
            }
        };
</script>
</body>
</html>
