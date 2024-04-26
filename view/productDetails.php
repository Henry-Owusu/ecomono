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



    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
      
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" href="../admin/assets/fonts/tabler-icons.min.css">

  <style>
  .pd-wrap {
    padding: 40px 0;
    font-family: 'Poppins', sans-serif;
  }
  .heading-section {
    text-align: center;
    margin-bottom: 20px;
  }
  .sub-heading {
    font-family: 'Poppins', sans-serif;
      font-size: 12px;
      display: block;
      font-weight: 600;
      color: #2e9ca1;
      text-transform: uppercase;
      letter-spacing: 2px;
  }
  .heading-section h2 {
    font-size: 32px;
      font-weight: 500;
      padding-top: 10px;
      padding-bottom: 15px;
    font-family: 'Poppins', sans-serif;
  }
  .user-img {
      width: 80px;
      height: 80px;
      border-radius: 50%;
      position: relative;
    min-width: 80px;
    background-size: 100%;
  }
  .carousel-testimonial .item {
    padding: 30px 10px;
  }
  .quote {
    position: absolute;
      top: -23px;
      color: #2e9da1;
      font-size: 27px;
  }
  .name {
    margin-bottom: 0;
      line-height: 14px;
      font-size: 17px;
      font-weight: 500;
  }
  .position {
    color: #adadad;
    font-size: 14px;
  }
  .owl-nav button {
    position: absolute;
    top: 50%;
    transform: translate(0, -50%);
    outline: none;
    height: 25px;
  }


 
  .product-name {
    font-size: 22px;
    font-weight: 500;
    line-height: 22px;
    margin-bottom: 4px;
  }
  .product-price-discount {
    font-size: 22px;
      font-weight: 400;
      padding: 10px 0;
      clear: both;
  }
  .product-price-discount span.line-through {
    text-decoration: line-through;
      margin-left: 10px;
      font-size: 14px;
      vertical-align: middle;
      color: #a5a5a5;
  }
  .display-flex {
    display: flex;
  }
  .align-center {
    align-items: center;
  }
  .product-info {
    width: 100%;
  }
  .reviews-counter {
      font-size: 13px;
  }
  .reviews-counter span {
    vertical-align: -2px;
  }
  .rate {
      float: left;
      padding: 0 10px 0 0;
  }
  .rate:not(:checked) > input {
      position:absolute;
      top:-9999px;
  }
  .rate:not(:checked) > label {
      float: right;
      width: 15px;
      overflow: hidden;
      white-space: nowrap;
      cursor: pointer;
      font-size: 21px;
      color:#ccc;
    margin-bottom: 0;
    line-height: 21px;
  }
  .rate:not(:checked) > label:before {
      content: '\2605';
  }
  .rate > input:checked ~ label {
      color: #ffc700;    
  }
  .rate:not(:checked) > label:hover,
  .rate:not(:checked) > label:hover ~ label {
      color: #deb217;  
  }
  .rate > input:checked + label:hover,
  .rate > input:checked + label:hover ~ label,
  .rate > input:checked ~ label:hover,
  .rate > input:checked ~ label:hover ~ label,
  .rate > label:hover ~ input:checked ~ label {
      color: #c59b08;
  }
  .product-dtl p {
    font-size: 14px;
    line-height: 24px;
    color: #7a7a7a;
  }
  .product-dtl .form-control {
    font-size: 15px;
  }
  .product-dtl label {
    line-height: 16px;
    font-size: 15px;
  }
  .form-control:focus {
    outline: none;
    box-shadow: none;
  }
  .product-count {
    margin-top: 15px; 
  }
  .product-count .qtyminus,
  .product-count .qtyplus {
    width: 34px;
      height: 34px;
      background: #212529;
      text-align: center;
      font-size: 19px;
      line-height: 36px;
      color: #fff;
      cursor: pointer;
  }
  .product-count .qtyminus {
    border-radius: 3px 0 0 3px; 
  }
  .product-count .qtyplus {
    border-radius: 0 3px 3px 0; 
  }
  .product-count .qty {
    width: 60px;
    text-align: center;
  }
  .round-black-btn {
    border-radius: 4px;
      background: #212529;
      color: #fff;
      padding: 7px 45px;
      display: inline-block;
      margin-top: 20px;
      border: solid 2px #212529; 
      transition: all 0.5s ease-in-out 0s;
  }
  .round-black-btn:hover,
  .round-black-btn:focus {
    background: transparent;
    color: #212529;
    text-decoration: none;
  }

  .product-info-tabs {
    margin-top: 25px; 
  }
  .product-info-tabs .nav-tabs {
    border-bottom: 2px solid #d8d8d8;
  }
  .product-info-tabs .nav-tabs .nav-item {
    margin-bottom: 0;
  }
  .product-info-tabs .nav-tabs .nav-link {
    border: none; 
    border-bottom: 2px solid transparent;
    color: #323232;
  }
  .product-info-tabs .nav-tabs .nav-item .nav-link:hover {
    border: none; 
  }
  .product-info-tabs .nav-tabs .nav-item.show .nav-link, 
  .product-info-tabs .nav-tabs .nav-link.active, 
  .product-info-tabs .nav-tabs .nav-link.active:hover {
    border: none; 
    border-bottom: 2px solid #d8d8d8;
    font-weight: bold;
  }
  .product-info-tabs .tab-content .tab-pane {
    padding: 30px 20px;
    font-size: 15px;
    line-height: 24px;
    color: #7a7a7a;
  }
  .review-form .form-group {
    clear: both;
  }
  .mb-20 {
    margin-bottom: 20px;
  }

  .review-form .rate {
    float: none;
    display: inline-block;
  }
  .review-heading {
    font-size: 24px;
      font-weight: 600;
      line-height: 24px;
      margin-bottom: 6px;
      text-transform: uppercase;
      color: #000;
  }
  .review-form .form-control {
    font-size: 14px;
  }
  .review-form input.form-control {
    height: 40px;
  }
  .review-form textarea.form-control {
    resize: none;
  }
  .review-form .round-black-btn {
    text-transform: uppercase;
    cursor: pointer;
  }


  @import url('https://fonts.googleapis.com/css?family=Rubik:400,700');
body { }
a:focus,
a:hover {color: #000;}


.none {transition: all 1.7s ease;opacity: 0; display: none; z-index: -9999;}

/* Products
************************** */


.related-products-container {
    background-color: #fff; /* White background */
    padding: 2rem; /* Adjust padding as needed */
    border-radius: 10px; /* Add border radius for container */
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1); /* Add shadow for container */
    margin-bottom: 2rem; /* Add margin bottom */
}

.related-products-title {
    text-align: center;
    margin-bottom: 1.5rem; /* Adjust margin bottom as needed */
}

.grid-x.grid-margin-x.small-up-1.medium-up-2.large-up-4.grid-x-wrapper {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between; /* Adjust the spacing between products */
}

.product-box {
    width: calc(25% - 2rem); /* Adjust the width of each product box */
    /* You can adjust the width based on your preference */
    /* For example, if you want to display 3 products side by side, change the width to calc(33.33% - 2rem) */
    margin-bottom: 2rem; /* Add margin between product boxes */
}

.grid-x-wrapper {max-width: 85%; margin: 0 auto;}
.product-item .product-item-content { display: block; position: relative; transition: all .3s cubic-bezier(.785,.135,.15,.86); }
.product-item {display: block;text-align: center;color: #000;padding:0.5rem;overflow: hidden;margin-bottom: 0.5rem;font-family: 'Rubik', sans-serif;background: #fff;box-shadow: 0 10px 40px -3px rgba(0,0,0,0.1);border-radius: 7px;transform:scale(0.97,0.97);transition: all .17s cubic-bezier(0.24, 0.71, 0.58, 0.57);}
.product-item:hover {box-shadow: 0 0px 50px -10px rgba(0,0,0,0.3); transform:scale(1,1);}
.product-item:hover .product-item-image { transition-delay: .2s; -ms-transform: scale(.8) translateY(-15%); transform: scale(.8) translateY(-15%);}
.product-item .product-item-image { display: block; position: relative; margin-bottom: 2rem; transform: translate3d(0,0,0); transition: all .5s cubic-bezier(.68,-.55,.265,1.55); }
.product-item .product-item-image img { border-radius: 100%; position: relative; z-index: 3; }
.product-item:hover .product-item-image-hover { transition-delay: .1s; -ms-transform: translate(-50%,-42%) scale(.85); transform: translate(-50%,-42%) scale(.85); }
.product-item .product-item-image-hover { position: relative; z-index: 2; width: 100%; height: 100%; background: #97e7a2; background: -moz-linear-gradient(135deg,  #97e7a2 0%,#d8ff7e    100%); background: -webkit-linear-gradient(135deg,  #97e7a2 0%,#d8ff7e    100%); background: linear-gradient(135deg,  #97e7a2 0%,#d8ff7e    100%); border-radius: 100%; -ms-transform: translate(-50%,-120%) scale(0); transform: translate(-50%,-120%) scale(0); position: absolute; top: 50%; left: 50%; transition: all .6s cubic-bezier(.68,-.55,.265,1.55); opacity: 0; visibility: hidden;}
.product-item:hover .product-item-image-hover { opacity: 1; visibility: visible;}
.product-item:hover .product-item-category { transition-delay: .3s; }
.product-item:hover .product-item-category,
.product-item:hover .product-item-price,
.product-item:hover .product-item-title { -ms-transform: translateY(-50px); transform: translateY(-50px); }
.product-item .product-item-category,
.product-item .product-item-price,
.product-item .product-item-title { transition: all .3s cubic-bezier(.785,.135,.15,.86); }
.product-item .product-item-category { font-size: .875rem; }
.product-item:hover .product-item-title { transition-delay: .4s; }
.product-item:hover .product-item-category,
.product-item:hover .product-item-price,
.product-item:hover .product-item-title { -ms-transform: translateY(-50px); transform: translateY(-50px); }
.product-item .product-item-category,
.product-item .product-item-price,
.product-item .product-item-title { transition: all .3s cubic-bezier(.785,.135,.15,.86); }
.product-item .product-item-title { font-size: 1.125rem; font-weight: 600; }
.product-item:hover .product-item-price { transition-delay: .5s; }
.product-item:hover .product-item-category,
.product-item:hover .product-item-price,
.product-item:hover .product-item-title { -ms-transform: translateY(-50px); transform: translateY(-50px); }
.product-item .product-item-category,
.product-item .product-item-price,
.product-item .product-item-title { transition: all .3s cubic-bezier(.785,.135,.15,.86); }
.product-item .product-item-price { font-size: 1.0625rem; }
.product-item:hover .button-pill { transition-delay: .6s;}
.product-item:hover .button-pill {opacity: 1;-ms-transform: translateY(5px) translateX(-50%);transform: translateY(5px) translateX(-50%);}
.product-item .button-pill { position: absolute; bottom: 0; left: 50%; -ms-transform: translateY(30px) translateX(-50%); transform: translateY(30px) translateX(-50%); opacity: 0; transition: all .3s cubic-bezier(.785,.135,.15,.86); }
.button-pill span {display: inline-block;position: relative;font-size: .75rem;font-weight: 600;letter-spacing: .09em;text-transform: uppercase;  background: #97e7a2; background: -moz-linear-gradient(135deg,  #97e7a2 0%,#d8ff7e    100%); background: -webkit-linear-gradient(135deg,  #97e7a2 0%,#d8ff7e    100%); background: linear-gradient(135deg,  #97e7a2 0%,#d8ff7e    100%); color: #000;border-radius: 1.5rem;padding-top: .6rem;padding-bottom: .6rem;padding-left: 2.1rem;padding-right: 2.1rem;box-shadow: 0 14px 25px 0px rgba(75,204,140,0.1); transition: all .37s ease;}
.button-pill:hover span {display: inline-block;position: relative;font-size: .75rem;font-weight: 600;letter-spacing: .09em;text-transform: uppercase;  background: #5f5f5f; background: -moz-linear-gradient(135deg,  #5f5f5f 0%,#000    100%); background: -webkit-linear-gradient(135deg,  #5f5f5f 0%,#000    100%); background: linear-gradient(135deg,  #5f5f5f 0%,#000    100%); color: #fff;border-radius: 1.5rem;padding-top: .6rem;padding-bottom: .6rem;padding-left: 2.1rem;padding-right: 2.1rem; box-shadow: 0 14px 25px 0px rgba(0,0,0,0.1);}
@media(min-width:1200px) and (max-width:1366px) {
    .button-pill {width: 100%;}
    .product-box {padding: 0 10px;}
}
@media(min-width:1024px) and (max-width:1200px) {
    .product-item .product-item-title {font-size: 0.888rem;}
    .product-item .product-item-price {font-size: 0.788rem; padding: 7px 0 0;}
    .product-box {padding: 0 7px;}
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
                <a class="nav-link" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link  active" href="products.php">Shop</a>
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


<div class="pd-wrap">
		<div class="container">
	        <div class="heading-section">
	            <h2>Product Details</h2>
	        </div>
	        <div class="row">
	        	<div class="col-md-6">
              <img src="../images/products/product3.jpeg" alt = "product Name">	        	
            </div>
	        	<div class="col-md-6">
	        		<div class="product-dtl">
        				<div class="product-info">
		        			<div class="product-name">Product Name</div>
		        			<div class="reviews-counter">
								<div class="rate">
								    <input type="radio" id="star5" name="rate" value="5" checked />
								    <label for="star5" title="text">5 stars</label>
								    <input type="radio" id="star4" name="rate" value="4" checked />
								    <label for="star4" title="text">4 stars</label>
								    <input type="radio" id="star3" name="rate" value="3" checked />
								    <label for="star3" title="text">3 stars</label>
								    <input type="radio" id="star2" name="rate" value="2" />
								    <label for="star2" title="text">2 stars</label>
								    <input type="radio" id="star1" name="rate" value="1" />
								    <label for="star1" title="text">1 star</label>
								  </div>
								<span>3 Reviews</span>
							</div>
              
		        			<div class="product-price-discount"><span>$39.00</span><span class="line-through">$29.00</span></div>
		        		</div>
	        			<p>This product is crafted with sustainability in mind, using eco-friendly materials and production methods.</p>
                <p><strong>Brand: </strong> Eco Cups</p>
                <p>Category: Recycle</p>
                <p>Material: Eco Cups</p>
	        			<div class="row">
	        				<div class="col-md-6">
	        					<label for="size">Seller: </label>
									</div>
	        			</div>
	        			<div class="product-count">
	        				<label for="size">Quantity</label>
	        				<form action="#" class="display-flex">
							    <div class="qtyminus">-</div>
							    <input type="text" name="quantity" value="1" class="qty">
							    <div class="qtyplus">+</div>
							</form>
							<a href="#" class="round-black-btn">Add to Cart</a>
              <a href="checkout" class="round-black-btn">Buy Now</a>
	        			</div>
	        		</div>
	        	</div>
	        </div>
	        <div class="product-info-tabs">
		        <ul class="nav nav-tabs" id="myTab" role="tablist">
				  	<li class="nav-item">
				    	<a class="nav-link active" id="description-tab" data-toggle="tab" href="#description" role="tab" aria-controls="description" aria-selected="true">Description</a>
				  	</li>
				  	<li class="nav-item">
				    	<a class="nav-link" id="review-tab" data-toggle="tab" href="#review" role="tab" aria-controls="review" aria-selected="false">Reviews (0)</a>
				  	</li>
				</ul>
				<div class="tab-content" id="myTabContent">
				  	<div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
				  		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.
				  	</div>
				  	<div class="tab-pane fade" id="review" role="tabpanel" aria-labelledby="review-tab">
				  		<div class="review-heading">REVIEWS</div>
				  		<p class="mb-20">There are no reviews yet.</p>
				  		<form class="review-form">
		        			<div class="form-group">
			        			<label>Your rating</label>
			        			<div class="reviews-counter">
									<div class="rate">
									    <input type="radio" id="star5" name="rate" value="5" />
									    <label for="star5" title="text">5 stars</label>
									    <input type="radio" id="star4" name="rate" value="4" />
									    <label for="star4" title="text">4 stars</label>
									    <input type="radio" id="star3" name="rate" value="3" />
									    <label for="star3" title="text">3 stars</label>
									    <input type="radio" id="star2" name="rate" value="2" />
									    <label for="star2" title="text">2 stars</label>
									    <input type="radio" id="star1" name="rate" value="1" />
									    <label for="star1" title="text">1 star</label>
									</div>
								</div>
							</div>
		        			<div class="form-group">
			        			<label>Your message</label>
			        			<textarea class="form-control" rows="10"></textarea>
			        		</div>
			        		<div class="row">
				        		<div class="col-md-6">
				        			<div class="form-group">
					        			<input type="text" name="" class="form-control" placeholder="Name*">
					        		</div>
					        	</div>
				        		<div class="col-md-6">
				        			<div class="form-group">
					        			<input type="text" name="" class="form-control" placeholder="Email Id*">
					        		</div>
					        	</div>
					        </div>
					        <button class="round-black-btn">Submit Review</button>
			        	</form>
				  	</div>
				</div>
			</div>
		</div>
	</div>
  
<section>
<div class="related-products-container"> 
<h2 class="related-products-title">Related Products</h2>
<div class="grid-container">
      <div class="grid-x grid-margin-x small-up-1 medium-up-2 large-up-4 grid-x-wrapper">
          <div class="product-box column">
              <a href="#" class="product-item">
                  <div class="product-item-image">
                      <img src="../images/products/plates.jpeg" alt="Stadium Full Exterior">
                      <div class="product-item-image-hover">
                      </div>
                  </div>
                  <div class="product-item-content">
                      <div class="product-item-category">
                          Base Item
                      </div>
                      <div class="product-item-title">
                          Name of Product 1
                      </div>
                      <div class="product-item-price">
                          $57.00
                      </div>
                      <div class="button-pill">
                          <span>Shop Now</span>
                      </div>
                  </div>
              </a>
          </div>
          <div class="product-box column">
              <a href="#" class="product-item">
                  <div class="product-item-image">
                      <img src="../images/products/plates.jpeg" alt="Stadium Full Exterior">
                      <div class="product-item-image-hover">
                      </div>
                  </div>
                  <div class="product-item-content">
                      <div class="product-item-category">
                          Base Item
                      </div>
                      <div class="product-item-title">
                          Name of Product 2
                      </div>
                      <div class="product-item-price">
                          $89.00
                      </div>
                      <div class="button-pill">
                          <span>Shop Now</span>
                      </div>
                  </div>
              </a>
          </div>
          <div class="product-box column">
              <a href="#" class="product-item">
                  <div class="product-item-image">
                      <img src="../images/products/plates.jpeg" alt="Stadium Full Exterior">
                      <div class="product-item-image-hover">
                      </div>
                  </div>
                  <div class="product-item-content">
                      <div class="product-item-category">
                          Base Item
                      </div>
                      <div class="product-item-title">
                          Name of Product 3
                      </div>
                      <div class="product-item-price">
                          $89.00
                      </div>
                      <div class="button-pill">
                          <span>Shop Now</span>
                      </div>
                  </div>
              </a>
          </div>
          <div class="product-box column">
              <a href="#" class="product-item">
                  <div class="product-item-image">
                      <img src="../images/products/plates.jpeg" alt="Stadium Full Exterior">
                      <div class="product-item-image-hover">
                      </div>
                  </div>
                  <div class="product-item-content">
                      <div class="product-item-category">
                          Base Item
                      </div>
                      <div class="product-item-title">
                          Name of Product 4
                      </div>
                      <div class="product-item-price">
                          $89.00
                      </div>
                      <div class="button-pill">
                          <span>Shop Now</span>
                      </div>
                  </div>
              </a>
          </div>
      </div>
  </div>
</div>
   <section> 
  
  
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
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script> 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="	sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</body>
</html>

<!-- governance structure 
List two strategies we got from our literature review
what strategies would you suggest for the firm 
Add a literature review
How are they taking part and working in retail that is illegalized   -->
