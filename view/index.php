<!DOCTYPE html>
<html lang="en">

<head>
  <title>ECOMONO</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="author" content="HenryOwusu">
  <meta name="keywords" content="eco-friendly,biodegradable,e-commerce,store">
  <meta name="description" content="Ecommerce Platform for Eco-friendly Products">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

  <link rel="stylesheet" type="text/css" href="css/vendor.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
  <link rel="stylesheet" type="text/css" href="../css/style.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

  <link
    href="https://fonts.googleapis.com/css2?family=Inter:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
    rel="stylesheet">

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

    <!-- Nav bar -->
    <nav class="navbar navbar-expand-lg text-white text-uppercase fs-7 ls-1 py-5 align-items-center">
        <div class="container-fluid">
          <div class="row align-items-center w-100">
            <div class="col-8 col-md-3">
              <!-- <a class="navbar-brand" href="index.html"><img src="images/logo.png" width="204" height="46" alt="logo"></a> -->
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
                      <a class="nav-link active" href="index.html">Home</a>
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


    <!-- Hero Section -->
    <section>
        <div class="container-fluid">
            <div class="slideshow-container">
            <div class="slideshow swiper-container" style="height: 80vh;">
                <div class="swiper-wrapper">
                    <div class="swiper-slide jarallax">
                        <img src="../images/homepage/heroimage.jpg" alt="slideshow">
                        <div class="banner-content w-100">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-10 pt-5">
                                        <h2 class="display-1 ls-0 mt-5 pt-5 txt-fx slide-up">Discover Eco-Friendly Treasures at Ecomono</h2>
                                        <p class="caption">Where every purchase brings you closer to a greener tomorrow</p>
                                        <a href="#" class="btn btn-outline-light text-uppercase rounded-3 px-4 py-3 mt-3">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide jarallax">
                        <img src="../images/homepage/heroimage4.webp" class="jarallax-img" alt="slideshow">
                        <div class="banner-content w-100">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-10 pt-5">
                                        <h2 class="display-1 ls-0 mt-5 pt-5 txt-fx slide-up">Discover Sustainable Solutions for Every Need</h2>
                                        <p class="caption">Embrace eco-friendly alternatives that prioritize our planet</p>
                                        <a href="#" class="btn btn-outline-light text-uppercase rounded-3 px-4 py-3 mt-3">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide jarallax">
                        <img src="../images/homepage/heroimage3.jpg" class="jarallax-img" alt="slideshow">
                        <div class="banner-content w-100">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-10 pt-5">
                                        <h2 class="display-1 ls-0 mt-5 pt-5 txt-fx slide-up">Reduce Your Carbon Footprint with Every Purchase</h2>
                                        <p class="caption">Choose biodegradable products for a greener future</p>
                                        <a href="#" class="btn btn-outline-light text-uppercase rounded-3 px-4 py-3 mt-3">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
            </div>        
        </div>
    </section>
    


    <!-- <section>
        <div class="container-fluid">
          <div class="slideshow slide-in arrow-absolute text-white" style="height: 80vh;">
            <div class="swiper-wrapper">
              <div class="swiper-slide jarallax">
                <img src="images/homepage/heroimage.jpg"  alt="slideshow">
                <div class="banner-content w-100">
                  <div class="container">
                    <div class="row">
                      <div class="col-md-10 pt-5">
                        <h2 class="display-1 ls-0 mt-5 pt-5 txt-fx slide-up">Discover Eco-Friendly Treasures at Ecomono</h2>
                        <p class="caption">Where every purchase brings you closer to a greener tomorrow</p>
                        <a href="#" class="btn btn-outline-light text-uppercase rounded-3 px-4 py-3 mt-3">Shop Now</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide jarallax">
                <img src="images/homepage/heroimage4.webp" width="200px" class="jarallax-img" alt="slideshow">
                <div class="banner-content w-100">
                  <div class="container">
                    <div class="row">
                      <div class="col-md-10 pt-5">
                        <h2 class="display-1 ls-0 mt-5 pt-5 txt-fx slide-up">Discover Sustainable Solutions for Every Need</h2>
                        <p class="caption">Embrace eco-friendly alternatives that prioritize our planet</p>
                        <a href="#" class="btn btn-outline-light text-uppercase rounded-3 px-4 py-3 mt-3">Shop Now</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide jarallax">
                <img src="images/homepage/heroimage3.jpg" width="200px" class="jarallax-img" alt="slideshow">
                <div class="banner-content w-100">
                  <div class="container">
                    <div class="row">
                      <div class="col-md-10 pt-5">
                        <h2 class="display-1 ls-0 mt-5 pt-5 txt-fx slide-up">Reduce Your Carbon Footprint with Every Purchase</h2>
                        <p class="caption">Choose biodegradable products for a greener future</p>
                        <a href="#" class="btn btn-outline-light text-uppercase rounded-3 px-4 py-3 mt-3">Shop Now</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            <div class="swiper-pagination"></div>
            </div>
            <div class="pagination-wrapper position-absolute">
              <div class="container">
                <div class="slideshow-swiper-pagination"></div>
              </div>
            </div>
            <div class="icon-arrow icon-arrow-left text-white"><svg width="50" height="50" viewBox="0 0 24 24">
                <use xlink:href="#arrow-left"></use>
              </svg></div>
            <div class="icon-arrow icon-arrow-right text-white"><svg width="50" height="50" viewBox="0 0 24 24">
                <use xlink:href="#arrow-right"></use>
              </svg></div>
          </div>
        </div>
    </section>  -->


      <!-- Features section -->
      <section class="features" style="position:relative; margin-top: -10px; z-index: 2;">
        <div class="container-lg">
          <div class="p-5" id="Features">
            <div class="row">
              <div class="col-md-3">
                <h4 class="element-title text-capitalize my-3">Product Transparency</h4>
                <p>Explore detailed product descriptions and eco-certifications to make informed decisions about your purchases, ensuring they align with your values.</p>
              </div>
              <div class="col-md-3">
                <h4 class="element-title text-capitalize my-3">Recycling Rewards</h4>
                <p>Participate in our recycling program and earn rewards for returning packaging materials, contributing to a circular economy and reducing waste.</p>
              </div>
              <div class="col-md-3">
                <h4 class="element-title text-capitalize my-3">Sustainable Shipping</h4>
                <p>Enjoy carbon-neutral shipping options that minimize environmental impact without compromising on delivery speed.</p>
              </div>
              <div class="col-md-3">
                <h4 class="element-title text-capitalize my-3">Community Initiatives</h4>
                <p>Engage with like-minded individuals through our community forums and events focused on sustainability, sharing tips, and advocating for positive environmental change.</p>
              </div>
            </div>
          </div>
        </div>
    </section>


    <!-- Welcome Section -->
    <section class="py-5 my-5">
        <div class="container">
          <div class="row justify-content-center text-center">
            <div class="col-md-10">
              <span class="text-primary text-uppercase">Welcome to Economo</span>
              <h2 class="fs-2 text-center">Discover eco-friendly essentials for a greener lifestyle. Shop consciously, sustainably, and effortlessly with us.</h2>
            </div>
          </div>
        </div>
    </section>



    <!-- Categories Section -->
    <section>
        <div class="categories-section">
            <h2>Shop by Category</h2>
            <div class="categories-container" id="categoriesContainer">
                <div class="category">
                    <img src="../images/products/totebag.jpg" alt="Category 1">
                    <h3>Category 1</h3>
                    <a href="#" class="shop-now">Shop it Now</a>
                </div>
                <div class="category">
                    <img src="../images/products/product1.jpg" alt="Category 2">
                    <h3>Category 2</h3>
                    <a href="#" class="shop-now">Shop it Now</a>
                </div>
                <div class="category">
                    <img src="../images/products/totebag.jpg" alt="Category 3">
                    <h3>Category 3</h3>
                    <a href="#" class="shop-now">Shop it Now</a>
                </div>
            </div>
            <button class="viewAllBtn">View All Categories</button>
        </div>
    </section>



    <!-- New Arrivals Section -->
    <section id="new-arrival" class="new-arrival py-5">
        <div class="container-fluid">
        <div class="d-flex flex-wrap justify-content-between align-items-center mt-5 mb-3">
            <h4 class="text-uppercase">Our New Arrivals</h4>
            <a href="shop.html" class="btn-link">View All Products</a>
        </div>

        <div data-aos="fade-in">
            <div class="row row-cols-2 row-cols-md-3 row-cols-lg-5">
            <div class="col">
                <div class="product-item hover-effect-slide">
                <div class="image-holder position-relative">
                    <a href="single-product.html">
                    <img src="../images/products/coffeeCup.jpg" alt="categories" class="product-image img-fluid">
                    </a>
                    <a href="#" class="btn btn-primary w-100 mt-2 rounded-1">Add to cart</a>
                </div>
                <div class="product-content d-flex flex-column flex-md-row justify-content-between align-items-md-center">
                    <h5 class="fs-5 mt-3">
                    <a href="single-product.html">Fresh green dill on wooden board</a>
                    </h5>
                    <span>$95.00</span>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="product-item hover-effect-slide">
                <div class="image-holder position-relative">
                    <a href="single-product.html">
                    <img src="../images/products/coffeeCup1.jpg" alt="categories" class="product-image img-fluid">
                    </a>
                    <a href="#" class="btn btn-primary w-100 mt-2 rounded-1">Add to cart</a>
                </div>
                <div class="product-content d-flex flex-column flex-md-row justify-content-between align-items-md-center">
                    <h5 class="fs-5 mt-3">
                    <a href="single-product.html">Fresh green dill on wooden board</a>
                    </h5>
                    <a href="#" class="text-decoration-none" data-after="Add to cart"><span>$55.00</span></a>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="product-item hover-effect-slide">
                <div class="image-holder position-relative">
                    <a href="single-product.html">
                    <img src="../images/products/coffeeCup.jpg" alt="categories" class="product-image img-fluid">
                    </a>
                    <a href="#" class="btn btn-primary w-100 mt-2 rounded-1">Add to cart</a>
                </div>
                <div class="product-content d-flex flex-column flex-md-row justify-content-between align-items-md-center">
                    <h5 class="fs-5 mt-3">
                    <a href="single-product.html">Fresh green dill on wooden board</a>
                    </h5>
                    <a href="#" class="text-decoration-none" data-after="Add to cart"><span>$55.00</span></a>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="product-item hover-effect-slide">
                <div class="image-holder position-relative">
                    <a href="single-product.html">
                    <img src="../images/products/totebag.jpg" alt="categories" class="product-image img-fluid">
                    </a>
                    <a href="#" class="btn btn-primary w-100 mt-2 rounded-1">Add to cart</a>
                </div>
                <div class="product-content d-flex flex-column flex-md-row justify-content-between align-items-md-center">
                    <h5 class="fs-5 mt-3">
                    <a href="single-product.html">Fresh green dill on wooden board</a>
                    </h5>
                    <a href="#" class="text-decoration-none" data-after="Add to cart"><span>$55.00</span></a>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="product-item hover-effect-slide">
                <div class="image-holder position-relative">
                    <a href="single-product.html">
                    <img src="../images/products/bag.jpg" alt="categories" class="product-image img-fluid">
                    </a>
                    <a href="#" class="btn btn-primary w-100 mt-2 rounded-1">Add to cart</a>
                </div>
                <div class="product-content d-flex flex-column flex-md-row justify-content-between align-items-md-center">
                    <h5 class="fs-5 mt-3">
                    <a href="single-product.html">22 Inch LED LED Display </a>
                    </h5>
                    <a href="#" class="text-decoration-none" data-after="Add to cart"><span>$65.00</span></a>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </section>



    <!-- Best sellers section -->
    <section id="best-sellers" class="best-sellers py-5 mb-5">
        <div class="container-fluid">
            <div class="d-flex flex-wrap justify-content-between align-items-center mt-5 mb-3">
                <h4 class="text-uppercase">Best Sellers</h4>
                <a href="products.html" class="btn-link">View All Products</a>
            </div>

        <div data-aos="fade-in">
            <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4">
            <div class="col">
                <div class="product-item hover-effect-slide">
                <div class="image-holder position-relative">
                    <a href="single-product.html">
                    <img src="../images/products/product1.jpg" alt="categories" class="product-image img-fluid">
                    </a>
                </div>
                <div class="btn-add-to-cart">
                      <a href="#" class="btn btn-success w-100 mt-2 rounded-0">Add to cart</a>
                </div>

                <div class="product-content d-flex flex-column flex-md-row justify-content-between align-items-md-center mt-2">
                    <h5 class="fs-5 mt-3">
                    <a href="single-product.html">Fresh green dill on wooden board</a>
                    </h5>
                    <a href="#" class="text-decoration-none" data-after="Add to cart"><span>$95.00</span></a>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="product-item hover-effect-slide">
                <div class="image-holder position-relative">
                    <a href="single-product.html">
                    <img src="../images/products/product1.jpg" alt="categories" class="product-image img-fluid">
                    </a>
                </div>
                <div class="btn-add-to-cart">
                      <a href="#" class="btn btn-success w-100 mt-2 rounded-0">Add to cart</a>
                </div>

                <div class="product-content d-flex flex-column flex-md-row justify-content-between align-items-md-center mt-2">
                    <h5 class="fs-5 mt-3">
                    <a href="single-product.html">Fresh green dill on wooden board</a>
                    </h5>
                    <a href="#" class="text-decoration-none" data-after="Add to cart"><span>$95.00</span></a>
                </div>
                </div>
            </div>

            <div class="col">
                <div class="product-item hover-effect-slide">
                <div class="image-holder position-relative">
                    <a href="single-product.html">
                    <img src="../images/products/product1.jpg" alt="categories" class="product-image img-fluid">
                    </a>
                </div>
                <div class="btn-add-to-cart">
                      <a href="#" class="btn btn-success w-100 mt-2 rounded-0">Add to cart</a>
                </div>

                <div class="product-content d-flex flex-column flex-md-row justify-content-between align-items-md-center mt-2">
                    <h5 class="fs-5 mt-3">
                    <a href="single-product.html">Fresh green dill on wooden board</a>
                    </h5>
                    <a href="#" class="text-decoration-none" data-after="Add to cart"><span>$95.00</span></a>
                </div>
                </div>
            </div>

            <div class="col">
                <div class="product-item hover-effect-slide">
                <div class="image-holder position-relative">
                    <a href="single-product.html">
                    <img src="../images/products/product1.jpg" alt="categories" class="product-image img-fluid">
                    </a>
                </div>
                <div class="btn-add-to-cart">
                      <a href="#" class="btn btn-success w-100 mt-2 rounded-0">Add to cart</a>
                </div>

                <div class="product-content d-flex flex-column flex-md-row justify-content-between align-items-md-center mt-2">
                    <h5 class="fs-5 mt-3">
                    <a href="single-product.html">Fresh green dill on wooden board</a>
                    </h5>
                    <a href="#" class="text-decoration-none" data-after="Add to cart"><span>$95.00</span></a>
                </div>
                </div>
            </div>

            <div class="col">
                <div class="product-item hover-effect-slide">
                <div class="image-holder position-relative">
                    <a href="single-product.html">
                    <img src="../images/products/product1.jpg" alt="categories" class="product-image img-fluid">
                    </a>
                </div>
                <div class="btn-add-to-cart">
                      <a href="#" class="btn btn-success w-100 mt-2 rounded-0">Add to cart</a>
                </div>

                <div class="product-content d-flex flex-column flex-md-row justify-content-between align-items-md-center mt-2">
                    <h5 class="fs-5 mt-3">
                    <a href="single-product.html">Fresh green dill on wooden board</a>
                    </h5>
                    <a href="#" class="text-decoration-none" data-after="Add to cart"><span>$95.00</span></a>
                </div>
                </div>
            </div>

            <div class="col">
                <div class="product-item hover-effect-slide">
                <div class="image-holder position-relative">
                    <a href="single-product.html">
                    <img src="../images/products/product1.jpg" alt="categories" class="product-image img-fluid">
                    </a>
                </div>
                <div class="btn-add-to-cart">
                      <a href="#" class="btn btn-success w-100 mt-2 rounded-0">Add to cart</a>
                </div>

                <div class="product-content d-flex flex-column flex-md-row justify-content-between align-items-md-center mt-2">
                    <h5 class="fs-5 mt-3">
                    <a href="single-product.html">Fresh green dill on wooden board</a>
                    </h5>
                    <a href="#" class="text-decoration-none" data-after="Add to cart"><span>$95.00</span></a>
                </div>
                </div>
            </div>

            <div class="col">
                <div class="product-item hover-effect-slide">
                <div class="image-holder position-relative">
                    <a href="single-product.html">
                    <img src="../images/products/product1.jpg" alt="categories" class="product-image img-fluid">
                    </a>
                </div>
                <div class="btn-add-to-cart">
                      <a href="#" class="btn btn-success w-100 mt-2 rounded-0">Add to cart</a>
                </div>

                <div class="product-content d-flex flex-column flex-md-row justify-content-between align-items-md-center mt-2">
                    <h5 class="fs-5 mt-3">
                    <a href="single-product.html">Fresh green dill on wooden board</a>
                    </h5>
                    <a href="#" class="text-decoration-none" data-after="Add to cart"><span>$95.00</span></a>
                </div>
                </div>
            </div>

            <div class="col">
                <div class="product-item hover-effect-slide">
                <div class="image-holder position-relative">
                    <a href="single-product.html">
                    <img src="../images/products/product1.jpg" alt="categories" class="product-image img-fluid">
                    </a>
                </div>
                <div class="btn-add-to-cart">
                      <a href="#" class="btn btn-success w-100 mt-2 rounded-0">Add to cart</a>
                </div>

                <div class="product-content d-flex flex-column flex-md-row justify-content-between align-items-md-center mt-2">
                    <h5 class="fs-5 mt-3">
                    <a href="single-product.html">Fresh green dill on wooden board</a>
                    </h5>
                    <a href="#" class="text-decoration-none" data-after="Add to cart"><span>$95.00</span></a>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </section>



    <!-- Sell with us Section -->
    <section>
        <div class="sell-with-us-section">
            <h2>Sell With Us</h2>
            <p>Join our platform and start selling your eco-friendly products today!</p>
            <a href="sell-with-us.html" class="sell-with-us-button">Sell With Us</a>
        </div>        
    </section>

    
<!-- Blogs section -->
    <section class="blog-section">
      <h2 class="section-title">Eco-Friendly Articles</h2>
      <div class="container">
      <div class="card">
        <a href="#">
        <div class="card-header">
          <img src="../images/homepage/blog3.jpg" alt="rover" />
        </div>
        <div class="card-body">
          <span class="tag tag-green">Technology</span>
          <h4>
            Why is the Tesla Cybertruck designed the way it
            is?
          </h4>
          <p>
            An exploration into the truck's polarising design
          </p>
          <div class="user">
            <img src="https://yt3.ggpht.com/a/AGF-l7-0J1G0Ue0mcZMw-99kMeVuBmRxiPjyvIYONg=s900-c-k-c0xffffffff-no-rj-mo" alt="user" />
            <div class="user-info">
              <h5>July Dec</h5>
              <small>2h ago</small>
            </div>
          </div>
        </div>
        </a>
      </div>
      <div class="card">
        <a href="#">
        <div class="card-header">
          <img src="../images/homepage/blog2.jpg" alt="ballons" />
        </div>
        <div class="card-body">
          <span class="tag tag-purple">Popular</span>
          <h4>
            How to Keep Going When You Don’t Know What’s Next
          </h4>
          <p>
            The future can be scary, but there are ways to
            deal with that fear.
          </p>
          <div class="user">
            <img src="https://lh3.googleusercontent.com/ogw/ADGmqu8sn9zF15pW59JIYiLgx3PQ3EyZLFp5Zqao906l=s32-c-mo" alt="user" />
            <div class="user-info">
              <h5>Eyup Ucmaz</h5>
              <small>Yesterday</small>
            </div>
          </div>
        </div>
        </a>
      </div>
      <div class="card">
        <a href="#">
        <div class="card-header">
          <img src="../images/homepage/blog.jpg" alt="city" />
        </div>
        <div class="card-body">
          <span class="tag tag-pink">Design</span>
          <h4>
            10 Rules of Dashboard Design
          </h4>
          <p>
            Dashboard Design Guidelines
          </p>
          <div class="user">
            <img src="https://lh3.googleusercontent.com/ogw/ADGmqu8sn9zF15pW59JIYiLgx3PQ3EyZLFp5Zqao906l=s32-c-mo" alt="user" />
            <div class="user-info">
              <h5>Carrie Brewer</h5>
              <small>1w ago</small>
            </div>
          </div>
        </div>
        </a>
      </div>
    </div>
    </section>



    <!-- Newsletter section -->
    <section class="newsletter ">
    <div class="container-fluid">
      <div class="newsletter jarallax">     
        <div class="row py-5 justify-content-center">
          <div class="col-md-6">
            <div class="row g-5 my-4 align-items-baseline">
              <div class="col-md-7">
                <h3 class="display-4 m-0 text-md-end">Join Our Newsletter</h3>
              </div>
              <div class="col-md-5">
                <p class="fs-6 text-gray">Sign Up for our newsletter and never miss any offers</p>
              </div>
            </div>
            <div class="row mb-5">
              <div class="col-md-12">
                <form id="form" class="d-flex flex-row gap-0">
                  <input type="text" name="email" placeholder="Your Email Addresss" class="form-control rounded-0 rounded-start">
                  <button class="btn btn-primary text-uppercase rounded-0 rounded-end px-5">Sign Up</button>
                </form>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>


 
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
              <img src="../images/arct-icon.png" alt="icon">
              <img src="../images/dhl-logo.png" alt="icon">
            </div>
            <div class="payment-option">
              <span>Payment Option:</span>
              <img src="../images/visa-card.png" alt="card">
              <img src="../images/paypal-card.png" alt="card">
              <img src="../images/master-card.png" alt="card">
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
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script src="../js/jquery.min.js"></script>
  <script src="../js/plugins.js"></script>
  <script src="../js/SmoothScroll.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
  <script src="../js/script.js"></script>
  <script>
      var swiper = new Swiper('.slideshow', {
          loop: true,
          slidesPerView: 1, // Show only one slide at a time
          centeredSlides: true, // Center the active slide
          navigation: {
              nextEl: '.swiper-button-next',
              prevEl: '.swiper-button-prev',
          },
          pagination: {
              el: '.swiper-pagination',
              clickable: true,
          },
      });
  </script>
  

</body>
</html>
