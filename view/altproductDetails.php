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
<!-- [ Header ] end -->



    <!-- [ Main Content ] start -->
    
        <!-- [ Main Content ] end -->
 



    <!-- [ Main Content ] start -->
      <!-- [ Main Content ] start -->
      <div class="pc-container w-100">
      <div class="pc-content">
        <!-- [ breadcrumb ] start -->
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
        <!-- [ breadcrumb ] end -->

        <!-- [ Main Content ] start -->
        <div class="row">
          <!-- [ sample-page ] stasrt -->
          <div class="col-sm-12">
            <div class="card w-100">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-6">
                    <div class="sticky-md-top product-sticky">
                      <div id="carouselExampleCaptions" class="carousel slide ecomm-prod-slider" data-bs-ride="carousel">
                        <div class="carousel-inner bg-light rounded position-relative">
                          <div class="card-body position-absolute end-0 top-0">
                            <div class="form-check prod-likes">
                              <input type="checkbox" class="form-check-input" />
                              <i data-feather="heart" class="prod-likes-icon"></i>
                            </div>
                          </div>
                          <div class="card-body position-absolute bottom-0 end-0">
                            <ul class="list-inline ms-auto mb-0 prod-likes">
                              <li class="list-inline-item m-0">
                                <a href="#" class="avtar avtar-xs text-white text-hover-primary">
                                  <i class="ti ti-zoom-in f-18"></i>
                                </a>
                              </li>
                              <li class="list-inline-item m-0">
                                <a href="#" class="avtar avtar-xs text-white text-hover-primary">
                                  <i class="ti ti-zoom-out f-18"></i>
                                </a>
                              </li>
                              <li class="list-inline-item m-0">
                                <a href="#" class="avtar avtar-xs text-white text-hover-primary">
                                  <i class="ti ti-rotate-clockwise f-18"></i>
                                </a>
                              </li>
                            </ul>
                          </div>
                          <div class="carousel-item active">
                            <img src="../images/products/product3.jpeg" class="d-block w-100" alt="Product images" />
                          </div>
                          </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <span class="badge bg-success f-14">In stock</span>
                    <h5 class="my-3">Apple Watch SE Smartwatch (GPS, 40mm) (Heart Rate Monitoring)</h5>
                    <div class="star f-18 mb-3">
                      <i class="fas fa-star text-warning"></i>
                      <i class="fas fa-star text-warning"></i>
                      <i class="fas fa-star text-warning"></i>
                      <i class="fas fa-star-half-alt text-warning"></i>
                      <i class="far fa-star text-muted"></i>
                      <span class="text-sm text-muted">(4.0)</span>
                    </div>
                    
                    <h5 class="mt-4 mb-3 f-w-500">About this item</h5>
                    <ul>
                      <li class="mb-2">Care Instructions: Hand Wash Only</li>
                      <li class="mb-2">Fit Type: Regular</li>
                      <li class="mb-2">Dark Blue Regular Women Jeans</li>
                      <li class="mb-2">Fabric : 100% Cotton</li>
                    </ul>
                    
                    
                    </div>
                    <div class="form-group row">
                      <label class="col-form-label col-lg-3 col-sm-12">Quantity <span class="text-danger">*</span></label>
                      <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="btn-group btn-group-sm mb-2 border" role="group">
                          <button type="button" id="decrease" onclick="decreaseValue('number')" class="btn btn-link-secondary"
                            ><i class="ti ti-minus"></i
                          ></button>
                          <input
                            class="wid-35 text-center border-0 m-0 form-control rounded-0 shadow-none"
                            type="text"
                            id="number"
                            value="0"
                          />
                          <button type="button" id="increase" onclick="increaseValue('number')" class="btn btn-link-secondary"
                            ><i class="ti ti-plus"></i
                          ></button>
                        </div>
                      </div>
                    </div>
                    <h3 class="mb-4"
                      ><b>$299.00</b><span class="mx-2 f-16 text-muted f-w-400 text-decoration-line-through">$399.00</span></h3
                    >
                    <div class="row">
                      <div class="col-6">
                        <div class="d-grid">
                          <button type="button" class="btn btn-primary">Buy Now</button>
                        </div>
                      </div>
                      <div class="col-6">
                        <div class="d-grid">
                          <button type="button" class="btn btn-outline-secondary">Add to cart</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="card w-100">
              <div class="card-header pb-0">
                <ul class="nav nav-tabs profile-tabs mb-0" id="myTab" role="tablist">
                  <li class="nav-item">
                    <a
                      class="nav-link active"
                      id="ecomtab-tab-1"
                      data-bs-toggle="tab"
                      href="#ecomtab-1"
                      role="tab"
                      aria-controls="ecomtab-1"
                      aria-selected="true"
                      >Features
                    </a>
                  </li>
                  <li class="nav-item">
                    <a
                      class="nav-link"
                      id="ecomtab-tab-2"
                      data-bs-toggle="tab"
                      href="#ecomtab-2"
                      role="tab"
                      aria-controls="ecomtab-2"
                      aria-selected="true"
                      >Specifications
                    </a>
                  </li>
                  <li class="nav-item">
                    <a
                      class="nav-link"
                      id="ecomtab-tab-3"
                      data-bs-toggle="tab"
                      href="#ecomtab-3"
                      role="tab"
                      aria-controls="ecomtab-3"
                      aria-selected="true"
                      >Overview
                    </a>
                  </li>
                  <li class="nav-item">
                    <a
                      class="nav-link"
                      id="ecomtab-tab-4"
                      data-bs-toggle="tab"
                      href="#ecomtab-4"
                      role="tab"
                      aria-controls="ecomtab-4"
                      aria-selected="true"
                      >Reviews<span class="badge bg-light-primary rounded-pill px-2 ms-2">275</span>
                    </a>
                  </li>
                </ul>
              </div>
              <div class="card-body">
                <div class="tab-content">
                  <div class="tab-pane show active" id="ecomtab-1" role="tabpanel" aria-labelledby="ecomtab-tab-1">
                    <div class="table-responsive">
                      <table class="table table-borderless">
                        <tbody>
                          <tr>
                            <td class="text-muted py-1">Band :</td>
                            <td class="py-1">Smart Band</td>
                          </tr>
                          <tr>
                            <td class="text-muted py-1">Compatible Devices :</td>
                            <td class="py-1">Smartphones</td>
                          </tr>
                          <tr>
                            <td class="text-muted py-1">Ideal For :</td>
                            <td class="py-1">Unisex</td>
                          </tr>
                          <tr>
                            <td class="text-muted py-1">Lifestyle :</td>
                            <td class="py-1">Fitness | Indoor | Sports | Swimming | Outdoor</td>
                          </tr>
                          <tr>
                            <td class="text-muted py-1">Basic Features :</td>
                            <td class="py-1">Calendar | Date & Time | Timer/Stop Watch</td>
                          </tr>
                          <tr>
                            <td class="text-muted py-1">Health Tracker :</td>
                            <td class="py-1">Heart Rate | Exercise Tracker</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <div class="tab-pane" id="ecomtab-2" role="tabpanel" aria-labelledby="ecomtab-tab-2">
                    <div class="row">
                      <div class="col-md-6">
                        <h5>Product Category</h5>
                        <hr class="my-3" />
                        <div class="table-responsive">
                          <table class="table">
                            <tbody>
                              <tr>
                                <td class="text-muted py-1">Wearable Device Type:</td>
                                <td class="py-1">Smart Band</td>
                              </tr>
                              <tr>
                                <td class="text-muted py-1">Compatible Devices :</td>
                                <td class="py-1">Smartphones</td>
                              </tr>
                              <tr>
                                <td class="text-muted py-1">Ideal For :</td>
                                <td class="py-1">Unisex</td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <h5>Manufacturer Details</h5>
                        <hr class="my-3" />
                        <div class="table-responsive">
                          <table class="table">
                            <tbody>
                              <tr>
                                <td class="text-muted py-1">Brand :</td>
                                <td class="py-1">Apple</td>
                              </tr>
                              <tr>
                                <td class="text-muted py-1">Model Series :</td>
                                <td class="py-1">Watch SE</td>
                              </tr>
                              <tr>
                                <td class="text-muted py-1">Model Number :</td>
                                <td class="py-1">MYDT2HN/A</td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane" id="ecomtab-3" role="tabpanel" aria-labelledby="ecomtab-tab-3">
                    <div class="table-responsive">
                      <p class="text-muted"
                        >Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
                        standard dummy text ever since the 1500s,
                        <strong class="text-body"
                          >“When an unknown printer took a galley of type and scrambled it to make a type specimen book.”</strong
                        >
                        It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially
                        unchanged. It was popularized in the 1960s with the release of Lestrade sheets containing Lorem Ipsum passages, and
                        more recently with desktop publishing software like PageMaker including versions of Lorem Ipsum.
                      </p>
                      <p class="text-muted"
                        >It was popularized in the 1960s with the release of Learjet sheets containing Lorem Ipsum passages, and more
                        recently with desktop publishing software like PageMaker including versions of Lorem Ipsum.</p
                      >
                    </div>
                  </div>
                  <div class="tab-pane" id="ecomtab-4" role="tabpanel" aria-labelledby="ecomtab-tab-4">
                    <div class="card">
                      <div class="card-body">
                        <div class="row justify-content-between align-items-center">
                          <div class="col-xxl-4 col-xl-5">
                            <h2 class="mb-3"
                              ><b>3.5<small class="text-muted f-18">/5</small></b></h2
                            >
                            <p class="mb-2 text-muted">Based on 275 reviews</p>
                            <div class="star mb-3 f-20">
                              <i class="fas fa-star text-warning"></i>
                              <i class="fas fa-star text-warning"></i>
                              <i class="fas fa-star text-warning"></i>
                              <i class="fas fa-star-half-alt text-warning"></i>
                              <i class="far fa-star text-muted"></i>
                            </div>
                          </div>
                          <div class="col-xxl-4 col-xl-5">
                            <div class="d-flex align-items-center">
                              <div class="w-100">
                                <div class="row align-items-center my-2">
                                  <div class="col">
                                    <div class="progress" style="height: 4px">
                                      <div class="progress-bar bg-warning" style="width: 30%"></div>
                                    </div>
                                  </div>
                                  <div class="col-auto">
                                    <p class="mb-0 text-muted">5 Stars</p>
                                  </div>
                                </div>
                                <div class="row align-items-center my-2">
                                  <div class="col">
                                    <div class="progress" style="height: 4px">
                                      <div class="progress-bar bg-warning" style="width: 60%"></div>
                                    </div>
                                  </div>
                                  <div class="col-auto">
                                    <p class="mb-0 text-muted">4 Stars</p>
                                  </div>
                                </div>
                                <div class="row align-items-center my-2">
                                  <div class="col">
                                    <div class="progress" style="height: 4px">
                                      <div class="progress-bar bg-warning" style="width: 75%"></div>
                                    </div>
                                  </div>
                                  <div class="col-auto">
                                    <p class="mb-0 text-muted">3 Stars</p>
                                  </div>
                                </div>
                                <div class="row align-items-center my-2">
                                  <div class="col">
                                    <div class="progress" style="height: 4px">
                                      <div class="progress-bar bg-warning" style="width: 40%"></div>
                                    </div>
                                  </div>
                                  <div class="col-auto">
                                    <p class="mb-0 text-muted">2 Stars</p>
                                  </div>
                                </div>
                                <div class="row align-items-center">
                                  <div class="col">
                                    <div class="progress" style="height: 4px">
                                      <div class="progress-bar bg-warning" style="width: 55%"></div>
                                    </div>
                                  </div>
                                  <div class="col-auto">
                                    <p class="mb-0 text-muted">1 Stars</p>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-body">
                        <div class="media align-items-start">
                          <div class="chat-avtar">
                            <img class="img-radius img-fluid wid-40" src="../assets/images/user/avatar-1.jpg" alt="User image" />
                            <div class="bg-success chat-badge"></div>
                          </div>
                          <div class="media-body ms-3">
                            <h6 class="mb-1">Harriet Wilson</h6>
                            <p class="text-muted text-sm mb-1">2 hour ago</p>
                            <div class="star">
                              <i class="fas fa-star text-warning"></i>
                              <i class="fas fa-star text-warning"></i>
                              <i class="fas fa-star text-warning"></i>
                              <i class="fas fa-star-half-alt text-warning"></i>
                              <i class="far fa-star text-muted"></i>
                            </div>
                            <p class="mb-0 text-muted mt-1"
                              >Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                              industry's standard dummy text ever since the 1500.</p
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-body">
                        <div class="media align-items-start">
                          <div class="chat-avtar">
                            <img class="img-radius img-fluid wid-40" src="../assets/images/user/avatar-2.jpg" alt="User image" />
                            <div class="bg-success chat-badge"></div>
                          </div>
                          <div class="media-body ms-3">
                            <h6 class="mb-1">Lou Olson</h6>
                            <p class="text-muted text-sm mb-1">2 hour ago</p>
                            <div class="star">
                              <i class="fas fa-star text-warning"></i>
                              <i class="fas fa-star text-warning"></i>
                              <i class="fas fa-star-half-alt text-warning"></i>
                              <i class="far fa-star text-muted"></i>
                              <i class="far fa-star text-muted"></i>
                            </div>
                            <p class="mb-2 text-muted mt-1"
                              >Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                              industry's standard dummy text ever since the 1500.</p
                            >
                            <a href="#" class="link-primary mb-1">https://phoenixcoded.net/</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="text-center mt-3">
                      <button class="btn btn-link-primary">View more comments</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>  
            <div class="card w-100">
              <div class="card-header">
                <h5>Related Product</h5>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-sm-6 col-xl-3">
                    <div class="card product-card">
                      <div class="card-img-top">
                        <a href="ecom_product-details.html">
                          <img src="../admin/assets/images/application/img-prod-1.jpg" alt="image" class="img-prod img-fluid" />
                        </a>
                        <div class="card-body position-absolute end-0 top-0">
                          <div class="form-check prod-likes">
                            <input type="checkbox" class="form-check-input" checked />
                            <i data-feather="heart" class="prod-likes-icon"></i>
                          </div>
                        </div>
                        <div class="btn-prod-cart card-body position-absolute end-0 bottom-0">
                          <div class="btn btn-warning">
                            <svg class="pc-icon">
                              <use xlink:href="#custom-bag"></use>
                            </svg>
                          </div>
                        </div>
                      </div>
                      <div class="card-body">
                        <a href="ecom_product-details.html">
                          <p class="prod-content mb-0 text-muted">Apple watch -4</p>
                        </a>
                        <div class="d-flex align-items-center justify-content-between mt-2">
                          <h4 class="mb-0 text-truncate"><b>$399.00</b></h4>
                          <div class="prod-color">
                            <span class="bg-success"></span>
                            <span class="bg-dark"></span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-xl-3">
                    <div class="card product-card">
                      <div class="card-img-top">
                        <a href="ecom_product-details.html">
                          <img src="../admin/assets/images/application/img-prod-2.jpg" alt="image" class="img-prod img-fluid" />
                        </a>
                        <div class="card-body position-absolute end-0 top-0">
                          <div class="form-check prod-likes">
                            <input type="checkbox" class="form-check-input" />
                            <i data-feather="heart" class="prod-likes-icon"></i>
                          </div>
                        </div>
                        <div class="btn-prod-cart card-body position-absolute end-0 bottom-0">
                          <div class="btn btn-warning">
                            <svg class="pc-icon">
                              <use xlink:href="#custom-bag"></use>
                            </svg>
                          </div>
                        </div>
                      </div>
                      <div class="card-body">
                        <a href="ecom_product-details.html">
                          <p class="prod-content mb-0 text-muted">Apple watch -4</p>
                        </a>
                        <div class="d-flex align-items-center justify-content-between mt-2">
                          <h4 class="mb-0 text-truncate"><b>$399.00</b></h4>
                          <div class="prod-color">
                            <span class="bg-primary"></span>
                            <span class="bg-dark"></span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-xl-3">
                    <div class="card product-card">
                      <div class="card-img-top">
                        <a href="ecom_product-details.html">
                          <img src="../admin/assets/images/application/img-prod-3.jpg" alt="image" class="img-prod img-fluid" />
                        </a>
                        <div class="card-body position-absolute end-0 top-0">
                          <div class="form-check prod-likes">
                            <input type="checkbox" class="form-check-input" />
                            <i data-feather="heart" class="prod-likes-icon"></i>
                          </div>
                        </div>
                        <div class="card-body position-absolute start-0 top-0">
                          <span class="badge bg-success">30%</span>
                        </div>
                        <div class="btn-prod-cart card-body position-absolute end-0 bottom-0">
                          <div class="btn btn-warning">
                            <svg class="pc-icon">
                              <use xlink:href="#custom-bag"></use>
                            </svg>
                          </div>
                        </div>
                      </div>
                      <div class="card-body">
                        <a href="ecom_product-details.html">
                          <p class="prod-content mb-0 text-muted">Apple watch -4</p>
                        </a>
                        <div class="d-flex align-items-center justify-content-between mt-2">
                          <h4 class="mb-0 text-truncate"
                            ><b>$299.00</b> <span class="text-sm text-muted f-w-400 text-decoration-line-through">$399.00</span></h4
                          >
                          <div class="prod-color">
                            <span class="bg-danger"></span>
                            <span class="bg-dark"></span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-xl-3">
                    <div class="card product-card">
                      <div class="card-img-top">
                        <a href="ecom_product-details.html">
                          <img src="../admin/assets/images/application/img-prod-4.jpg" alt="image" class="img-prod img-fluid" />
                        </a>
                        <div class="card-body position-absolute end-0 top-0">
                          <div class="form-check prod-likes">
                            <input type="checkbox" class="form-check-input" checked />
                            <i data-feather="heart" class="prod-likes-icon"></i>
                          </div>
                        </div>
                        <div class="btn-prod-cart card-body position-absolute end-0 bottom-0">
                          <div class="btn btn-warning">
                            <svg class="pc-icon">
                              <use xlink:href="#custom-bag"></use>
                            </svg>
                          </div>
                        </div>
                      </div>
                      <div class="card-body">
                        <a href="ecom_product-details.html">
                          <p class="prod-content mb-0 text-muted">Apple watch -4</p>
                        </a>
                        <div class="d-flex align-items-center justify-content-between mt-2">
                          <h4 class="mb-0 text-truncate"><b>$399.00</b></h4>
                          <div class="prod-color">
                            <span class="bg-success"></span>
                            <span class="bg-dark"></span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- [ sample-page ] end -->
        </div>
        <!-- [ Main Content ] end -->
      </div>
    </div>
    <!-- [ Main Content ] end -->
    <footer class="pc-footer">
      <div class="footer-wrapper container-fluid">
        <div class="row">
          <div class="col my-1">
            <p class="m-0"
              >Able Pro &#9829; crafted by Team <a href="https://themeforest.net/user/phoenixcoded" target="_blank">Phoenixcoded</a></p
            >
          </div>
          <div class="col-auto my-1">
            <ul class="list-inline footer-link mb-0">
              <li class="list-inline-item"><a href="https://ableproadmin.com/index.html">Home</a></li>
              <li class="list-inline-item"><a href="https://phoenixcoded.gitbook.io/able-pro/" target="_blank">Documentation</a></li>
              <li class="list-inline-item"><a href="https://phoenixcoded.authordesk.app/" target="_blank">Support</a></li>
            </ul>
          </div>
        </div>
      </div>
    </footer> <!-- Required Js -->
<script src="../assets/js/plugins/popper.min.js"></script>
<script src="../assets/js/plugins/simplebar.min.js"></script>
<script src="../assets/js/plugins/bootstrap.min.js"></script>
<script src="../assets/js/fonts/custom-font.js"></script>
<script src="../assets/js/pcoded.js"></script>
<script src="../assets/js/plugins/feather.min.js"></script>





<script>layout_change('light');</script>




<script>layout_theme_contrast_change('false');</script>



<script>change_box_container('false');</script>


<script>layout_caption_change('true');</script>




<script>layout_rtl_change('false');</script>


<script>preset_change("preset-1");</script>

    <!-- [Page Specific JS] start -->
    <script>
      // scroll-block
      var tc = document.querySelectorAll('.scroll-block');
      for (var t = 0; t < tc.length; t++) {
        new SimpleBar(tc[t]);
      }
    </script>
    <!-- [Page Specific JS] end -->
    <div class="pct-c-btn">
      <a href="#" data-bs-toggle="offcanvas" data-bs-target="#offcanvas_pc_layout">
        <i class="ph-duotone ph-gear-six"></i>
      </a>
    </div>
    <div class="offcanvas border-0 pct-offcanvas offcanvas-end" tabindex="-1" id="offcanvas_pc_layout">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title">Settings</h5>
        <button type="button" class="btn btn-icon btn-link-danger" data-bs-dismiss="offcanvas" aria-label="Close"><i
            class="ti ti-x"></i></button>
      </div>
      <div class="pct-body customizer-body">
        <div class="offcanvas-body py-0">
          <ul class="list-group list-group-flush">
            <li class="list-group-item">
              <div class="pc-dark">
                <h6 class="mb-1">Theme Mode</h6>
                <p class="text-muted text-sm">Choose light or dark mode or Auto</p>
                <div class="row theme-color theme-layout">
                  <div class="col-4">
                    <div class="d-grid">
                      <button class="preset-btn btn active" data-value="true" onclick="layout_change('light');" data-bs-toggle="tooltip" title="Light">
                        <svg class="pc-icon text-warning">
                          <use xlink:href="#custom-sun-1"></use>
                        </svg>
                      </button>
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="d-grid">
                      <button class="preset-btn btn" data-value="false" onclick="layout_change('dark');" data-bs-toggle="tooltip" title="Dark">
                        <svg class="pc-icon">
                          <use xlink:href="#custom-moon"></use>
                        </svg>
                      </button>
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="d-grid">
                      <button class="preset-btn btn" data-value="default" onclick="layout_change_default();"
                        data-bs-toggle="tooltip" title="Automatically sets the theme based on user's operating system's color scheme.">
                        <span class="pc-lay-icon d-flex align-items-center justify-content-center">
                          <i class="ph-duotone ph-cpu"></i>
                        </span>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li class="list-group-item">
              <h6 class="mb-1">Theme Contrast</h6>
              <p class="text-muted text-sm">Choose theme contrast</p>
              <div class="row theme-contrast">
                <div class="col-6">
                  <div class="d-grid">
                    <button class="preset-btn btn" data-value="true" onclick="layout_theme_contrast_change('true');" data-bs-toggle="tooltip" title="True">
                      <svg class="pc-icon">
                        <use xlink:href="#custom-mask"></use>
                      </svg>
                    </button>
                  </div>
                </div>
                <div class="col-6">
                  <div class="d-grid">
                    <button class="preset-btn btn active" data-value="false" onclick="layout_theme_contrast_change('false');" data-bs-toggle="tooltip" title="False">
                      <svg class="pc-icon">
                        <use xlink:href="#custom-mask-1-outline"></use>
                      </svg>
                    </button>
                  </div>
                </div>
              </div>
            </li>
            <li class="list-group-item">
              <h6 class="mb-1">Custom Theme</h6>
              <p class="text-muted text-sm">Choose your primary theme color</p>
              <div class="theme-color preset-color">
                <a href="#!" data-bs-toggle="tooltip" title="Blue" class="active" data-value="preset-1"><i class="ti ti-checks"></i></a>
                <a href="#!" data-bs-toggle="tooltip" title="Indigo" data-value="preset-2"><i class="ti ti-checks"></i></a>
                <a href="#!" data-bs-toggle="tooltip" title="Purple" data-value="preset-3"><i class="ti ti-checks"></i></a>
                <a href="#!" data-bs-toggle="tooltip" title="Pink" data-value="preset-4"><i class="ti ti-checks"></i></a>
                <a href="#!" data-bs-toggle="tooltip" title="Red" data-value="preset-5"><i class="ti ti-checks"></i></a>
                <a href="#!" data-bs-toggle="tooltip" title="Orange" data-value="preset-6"><i class="ti ti-checks"></i></a>
                <a href="#!" data-bs-toggle="tooltip" title="Yellow" data-value="preset-7"><i class="ti ti-checks"></i></a>
                <a href="#!" data-bs-toggle="tooltip" title="Green" data-value="preset-8"><i class="ti ti-checks"></i></a>
                <a href="#!" data-bs-toggle="tooltip" title="Teal" data-value="preset-9"><i class="ti ti-checks"></i></a>
                <a href="#!" data-bs-toggle="tooltip" title="Cyan" data-value="preset-10"><i class="ti ti-checks"></i></a>
              </div>
            </li>
            <li class="list-group-item">
              <h6 class="mb-1">Sidebar Caption</h6>
              <p class="text-muted text-sm">Sidebar Caption Hide/Show</p>
              <div class="row theme-color theme-nav-caption">
                <div class="col-6">
                  <div class="d-grid">
                    <button class="preset-btn btn-img btn active" data-value="true" onclick="layout_caption_change('true');" data-bs-toggle="tooltip" title="Caption Show">
                      <img src="https://ableproadmin.com/assets/images/customizer/caption-on.svg" alt="img" class="img-fluid">
                    </button>
                  </div>
                </div>
                <div class="col-6">
                  <div class="d-grid">
                    <button class="preset-btn btn-img btn" data-value="false" onclick="layout_caption_change('false');" data-bs-toggle="tooltip" title="Caption Hide">
                      <img src="https://ableproadmin.com/assets/images/customizer/caption-off.svg" alt="img" class="img-fluid">
                    </button>
                  </div>
                </div>
              </div>
            </li>
            <li class="list-group-item">
              <div class="pc-rtl">
                <h6 class="mb-1">Theme Layout</h6>
                <p class="text-muted text-sm">LTR/RTL</p>
                <div class="row theme-color theme-direction">
                  <div class="col-6">
                    <div class="d-grid">
                      <button class="preset-btn btn-img btn active" data-value="false" onclick="layout_rtl_change('false');" data-bs-toggle="tooltip" title="LTR">
                        <img src="https://ableproadmin.com/assets/images/customizer/ltr.svg" alt="img" class="img-fluid">
                      </button>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="d-grid">
                      <button class="preset-btn btn-img btn" data-value="true" onclick="layout_rtl_change('true');" data-bs-toggle="tooltip" title="RTL">
                        <img src="https://ableproadmin.com/assets/images/customizer/rtl.svg" alt="img" class="img-fluid">
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li class="list-group-item pc-box-width">
              <div class="pc-container-width">
                <h6 class="mb-1">Layout Width</h6>
                <p class="text-muted text-sm">Choose Full or Container Layout</p>
                <div class="row theme-color theme-container">
                  <div class="col-6">
                    <div class="d-grid">
                      <button class="preset-btn btn-img btn active" data-value="false" onclick="change_box_container('false')" data-bs-toggle="tooltip" title="Full Width">
                        <img src="https://ableproadmin.com/assets/images/customizer/full.svg" alt="img" class="img-fluid">
                      </button>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="d-grid">
                      <button class="preset-btn btn-img btn" data-value="true" onclick="change_box_container('true')" data-bs-toggle="tooltip" title="Fixed Width">
                        <img src="https://ableproadmin.com/assets/images/customizer/fixed.svg" alt="img" class="img-fluid">
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li class="list-group-item">
              <div class="d-grid">
                <button class="btn btn-light-danger" id="layoutreset">Reset Layout</button>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </body>
  <!-- [Body] end -->

<!-- Mirrored from ableproadmin.com/application/ecom_product.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 Mar 2024 13:22:24 GMT -->
</html>
