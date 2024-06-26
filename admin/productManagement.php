<?php 
    include_once("../controllers/product_controller.php");
    include_once("../controllers/category_controller.php");
    $categories = viewAllCategories_ctr();
    $products = viewAllProducts_ctr();
    
?>

<!DOCTYPE html>
<html lang="en">
<!-- [Head] start -->


<!-- Mirrored from ableproadmin.com/application/ecom_product-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 Mar 2024 13:22:24 GMT -->
<head>
  <title>Customer List | Able Pro Dashboard Template</title>
  <!-- [Meta] -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Able Pro is trending dashboard template made using Bootstrap 5 design framework. Able Pro is available in Bootstrap, React, CodeIgniter, Angular,  and .net Technologies.">
  <meta name="keywords" content="Bootstrap admin template, Dashboard UI Kit, Dashboard Template, Backend Panel, react dashboard, angular dashboard">
  <meta name="author" content="Phoenixcoded">

  <!-- [Favicon] icon -->
  <link rel="icon" href="../images/favicon.ico" type="image/x-icon"> <!-- [Font] Family -->
<link rel="stylesheet" href="assets/fonts/inter/inter.css" id="main-font-link" />
<!-- [Tabler Icons] https://tablericons.com -->
<link rel="stylesheet" href="assets/fonts/tabler-icons.min.css" >
<!-- [Feather Icons] https://feathericons.com -->
<link rel="stylesheet" href="assets/fonts/feather.css" >
<!-- [Font Awesome Icons] https://fontawesome.com/icons -->
<link rel="stylesheet" href="assets/fonts/fontawesome.css" >
<!-- [Material Icons] https://fonts.google.com/icons -->
<link rel="stylesheet" href="assets/fonts/material.css" >
<!-- [Template CSS Files] -->
<link rel="stylesheet" href="assets/css/style.css" id="main-style-link" >
<link rel="stylesheet" href="assets/css/style-preset.css" >
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-14K1GBX9FG"></script>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script> 


</head>
<!-- [Head] end -->
<!-- [Body] Start -->

<body data-pc-preset="preset-1" data-pc-sidebar-caption="true" data-pc-direction="ltr" data-pc-theme_contrast="" data-pc-theme="light">
  <!-- [ Pre-loader ] start -->
<div class="loader-bg">
  <div class="loader-track">
    <div class="loader-fill"></div>
  </div>
</div>
<!-- [ Pre-loader ] End -->
 <!-- [ Sidebar Menu ] start -->
<nav class="pc-sidebar">
  <div class="navbar-wrapper">
    <div class="m-header">
    <a href="index.html" class="b-brand text-primary">
      <!-- ========   Change your logo from here   ============ -->
      <h2 class="ecomonologo"><span class="eco">ECO</span><ion-icon name="leaf-outline" class="leaf"></ion-icon><span class="mono">MONO</span></h2>
    </a>
  </div>
    <div class="navbar-content">
      <div class="card pc-user-card">
        <div class="card-body">
          <div class="d-flex align-items-center">
            <div class="flex-shrink-0">
              <img src="assets/images/user/avatar-1.jpg" alt="user-image" class="user-avtar wid-45 rounded-circle" />
            </div>
            <div class="flex-grow-1 ms-3 me-2">
              <h6 class="mb-0">Jonh Smith</h6>
              <small>Administrator</small>
            </div>
            <a class="btn btn-icon btn-link-secondary avtar" data-bs-toggle="collapse" href="#pc_sidebar_userlink">
              <svg class="pc-icon">
                <use xlink:href="#custom-sort-outline"></use>
              </svg>
            </a>
          </div>
          <div class="collapse pc-user-links" id="pc_sidebar_userlink">
            <div class="pt-3">
              <a href="#!">
                <i class="ti ti-user"></i>
                <span>My Account</span>
              </a>
              <a href="#!">
                <i class="ti ti-settings"></i>
                <span>Settings</span>
              </a>
              <a href="#!">
                <i class="ti ti-lock"></i>
                <span>Lock Screen</span>
              </a>
              <a href="#!">
                <i class="ti ti-power"></i>
                <span>Logout</span>
              </a>
            </div>
          </div>
        </div>
      </div>

      <ul class="pc-navbar">
        
        <li class="pc-item">
          <a href="index.php" class="pc-link">
            <span class="pc-micon">
              <svg class="pc-icon">
                <use xlink:href="#custom-status-up"></use>
              </svg> </span
            ><span class="pc-mtext">Dashboard</span></a>
        </li>

        <li class="pc-item">
        <a href="user_roles.php" class="pc-link">
            <span class="pc-micon">
              <svg class="pc-icon">
                <use xlink:href="#custom-user-square"></use>
              </svg> </span><span class="pc-mtext">Users & Roles</span></a>
        </li>

        <li class="pc-item">
          <a href="productManagement.php" class="pc-link">
            <span class="pc-micon">
              <svg class="pc-icon">
                <use xlink:href="#custom-shopping-bag"></use>
              </svg> </span>
              <span class="pc-mtext">Product Management</span></a>

        </li>

        <li class="pc-item">
        <a href="blogmgt.php" class="pc-link">
            <span class="pc-micon">
              <svg class="pc-icon">
                <use xlink:href="#custom-box-1"></use>
              </svg> </span
            ><span class="pc-mtext">Blog Management</span></a>
        </li>

        <li class="pc-item">
        <a href="orders_trans.php" class="pc-link">
            <span class="pc-micon">
              <svg class="pc-icon">
                <use xlink:href="#custom-dollar-square"></use>
              </svg> </span>
              <span class="pc-mtext">Orders & Transactions</span></a>
        </li>

        <li class="pc-item">
        <a href="analytics.php" class="pc-link">
            <span class="pc-micon">
              <svg class="pc-icon">
                <use xlink:href="#custom-presentation-chart"></use>
              </svg> </span
            ><span class="pc-mtext">Analytics & Reporting</span></a>
        </li>

        <li class="pc-item">
        <a href="config.php" class="pc-link">
            <span class="pc-micon">
              <svg class="pc-icon">
                <use xlink:href="#custom-box-1"></use>
              </svg> </span
            ><span class="pc-mtext">Settings & Configuration</span></a>
        </li>

        <li class="pc-item">
        <a href="activitylog.php" class="pc-link">
            <span class="pc-micon">
              <svg class="pc-icon">
                <use xlink:href="#custom-box-1"></use>
              </svg> </span
            ><span class="pc-mtext">Activity Logs</span></a>
        </li>

        <li class="pc-item">
        <a href="impersonation.php" class="pc-link">
            <span class="pc-micon">
              <svg class="pc-icon">
                <use xlink:href="#custom-box-1"></use>
              </svg> </span
            ><span class="pc-mtext">User Switching</span></a>
        </li>

        <li class="pc-item">
        <a href="logout.php" class="pc-link">
            <span class="pc-micon">
              <svg class="pc-icon">
                <use xlink:href="#custom-box-1"></use>
              </svg> </span
            ><span class="pc-mtext">Logout</span></a>
        </li>

      </ul>
    </div>
  </div>
</nav>
<!-- [ Sidebar Menu ] end --> <!-- [ Header Topbar ] start -->
<header class="pc-header">
  <div class="header-wrapper"> <!-- [Mobile Media Block] start -->
<div class="me-auto pc-mob-drp">
  <ul class="list-unstyled">
    <!-- ======= Menu collapse Icon ===== -->
    <li class="pc-h-item pc-sidebar-collapse">
      <a href="#" class="pc-head-link ms-0" id="sidebar-hide">
        <i class="ti ti-menu-2"></i>
      </a>
    </li>
    <li class="pc-h-item pc-sidebar-popup">
      <a href="#" class="pc-head-link ms-0" id="mobile-collapse">
        <i class="ti ti-menu-2"></i>
      </a>
    </li>
    <li class="dropdown pc-h-item">
      <a
        class="pc-head-link dropdown-toggle arrow-none m-0 trig-drp-search"
        data-bs-toggle="dropdown"
        href="#"
        role="button"
        aria-haspopup="false"
        aria-expanded="false">
        <svg class="pc-icon">
          <use xlink:href="#custom-search-normal-1"></use>
        </svg>
      </a>
      <div class="dropdown-menu pc-h-dropdown drp-search">
        <form class="px-3 py-2">
          <input type="search" class="form-control border-0 shadow-none" placeholder="Search here. . ." />
        </form>
      </div>
    </li>
  </ul>
</div>
<!-- [Mobile Media Block end] -->
<div class="ms-auto">
  <ul class="list-unstyled">
    <li class="dropdown pc-h-item">
      <a
        class="pc-head-link dropdown-toggle arrow-none me-0"
        data-bs-toggle="dropdown"
        href="#"
        role="button"
        aria-haspopup="false"
        aria-expanded="false"
      >
        <svg class="pc-icon">
          <use xlink:href="#custom-sun-1"></use>
        </svg>
      </a>
      <div class="dropdown-menu dropdown-menu-end pc-h-dropdown">
        <a href="#!" class="dropdown-item" onclick="layout_change('dark')">
          <svg class="pc-icon">
            <use xlink:href="#custom-moon"></use>
          </svg>
          <span>Dark</span>
        </a>
        <a href="#!" class="dropdown-item" onclick="layout_change('light')">
          <svg class="pc-icon">
            <use xlink:href="#custom-sun-1"></use>
          </svg>
          <span>Light</span>
        </a>
        <a href="#!" class="dropdown-item" onclick="layout_change_default()">
          <svg class="pc-icon">
            <use xlink:href="#custom-setting-2"></use>
          </svg>
          <span>Default</span>
        </a>
      </div>
    </li>
    <li class="dropdown pc-h-item">
      <a
        class="pc-head-link dropdown-toggle arrow-none me-0"
        data-bs-toggle="dropdown"
        href="#"
        role="button"
        aria-haspopup="false"
        aria-expanded="false"
      >
        <svg class="pc-icon">
          <use xlink:href="#custom-setting-2"></use>
        </svg>
      </a>
      <div class="dropdown-menu dropdown-menu-end pc-h-dropdown">
        <a href="#!" class="dropdown-item">
          <i class="ti ti-user"></i>
          <span>My Account</span>
        </a>
        <a href="#!" class="dropdown-item">
          <i class="ti ti-settings"></i>
          <span>Settings</span>
        </a>
        <a href="#!" class="dropdown-item">
          <i class="ti ti-headset"></i>
          <span>Support</span>
        </a>
        <a href="#!" class="dropdown-item">
          <i class="ti ti-lock"></i>
          <span>Lock Screen</span>
        </a>
        <a href="#!" class="dropdown-item">
          <i class="ti ti-power"></i>
          <span>Logout</span>
        </a>
      </div>
    </li>
    <li class="pc-h-item">
      <a href="#" class="pc-head-link me-0" data-bs-toggle="offcanvas" data-bs-target="#announcement" aria-controls="announcement">
        <svg class="pc-icon">
          <use xlink:href="#custom-flash"></use>
        </svg>
      </a>
    </li>
    <li class="dropdown pc-h-item">
      <a
        class="pc-head-link dropdown-toggle arrow-none me-0"
        data-bs-toggle="dropdown"
        href="#"
        role="button"
        aria-haspopup="false"
        aria-expanded="false"
      >
        <svg class="pc-icon">
          <use xlink:href="#custom-notification"></use>
        </svg>
        <span class="badge bg-success pc-h-badge">3</span>
      </a>
      <div class="dropdown-menu dropdown-notification dropdown-menu-end pc-h-dropdown">
        <div class="dropdown-header d-flex align-items-center justify-content-between">
          <h5 class="m-0">Notifications</h5>
          <a href="#!" class="btn btn-link btn-sm">Mark all read</a>
        </div>
        <div class="dropdown-body text-wrap header-notification-scroll position-relative" style="max-height: calc(100vh - 215px)">
          <p class="text-span">Today</p>
          <div class="card mb-2">
            <div class="card-body">
              <div class="d-flex">
                <div class="flex-shrink-0">
                  <svg class="pc-icon text-primary">
                    <use xlink:href="#custom-layer"></use>
                  </svg>
                </div>
                <div class="flex-grow-1 ms-3">
                  <span class="float-end text-sm text-muted">2 min ago</span>
                  <h5 class="text-body mb-2">UI/UX Design</h5>
                  <p class="mb-0">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of
                    type and scrambled it to make a type</p>
                </div>
              </div>
            </div>
          </div>
          <div class="card mb-2">
            <div class="card-body">
              <div class="d-flex">
                <div class="flex-shrink-0">
                  <svg class="pc-icon text-primary">
                    <use xlink:href="#custom-sms"></use>
                  </svg>
                </div>
                <div class="flex-grow-1 ms-3">
                  <span class="float-end text-sm text-muted">1 hour ago</span>
                  <h5 class="text-body mb-2">Message</h5>
                  <p class="mb-0">Lorem Ipsum has been the industry's standard dummy text ever since the 1500.</p>
                </div>
              </div>
            </div>
          </div>
          <p class="text-span">Yesterday</p>
          <div class="card mb-2">
            <div class="card-body">
              <div class="d-flex">
                <div class="flex-shrink-0">
                  <svg class="pc-icon text-primary">
                    <use xlink:href="#custom-document-text"></use>
                  </svg>
                </div>
                <div class="flex-grow-1 ms-3">
                  <span class="float-end text-sm text-muted">2 hour ago</span>
                  <h5 class="text-body mb-2">Forms</h5>
                  <p class="mb-0"
                    >Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of
                    type and scrambled it to make a type</p
                  >
                </div>
              </div>
            </div>
          </div>
          <div class="card mb-2">
            <div class="card-body">
              <div class="d-flex">
                <div class="flex-shrink-0">
                  <svg class="pc-icon text-primary">
                    <use xlink:href="#custom-user-bold"></use>
                  </svg>
                </div>
                <div class="flex-grow-1 ms-3">
                  <span class="float-end text-sm text-muted">12 hour ago</span>
                  <h5 class="text-body mb-2">Challenge invitation</h5>
                  <p class="mb-2"><span class="text-dark">Jonny aber</span> invites to join the challenge</p>
                  <button class="btn btn-sm btn-outline-secondary me-2">Decline</button>
                  <button class="btn btn-sm btn-primary">Accept</button>
                </div>
              </div>
            </div>
          </div>
          <div class="card mb-2">
            <div class="card-body">
              <div class="d-flex">
                <div class="flex-shrink-0">
                  <svg class="pc-icon text-primary">
                    <use xlink:href="#custom-security-safe"></use>
                  </svg>
                </div>
                <div class="flex-grow-1 ms-3">
                  <span class="float-end text-sm text-muted">5 hour ago</span>
                  <h5 class="text-body mb-2">Security</h5>
                  <p class="mb-0"
                    >Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of
                    type and scrambled it to make a type</p
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="text-center py-2">
          <a href="#!" class="link-danger">Clear all Notifications</a>
        </div>
      </div>
    </li>
    <li class="dropdown pc-h-item header-user-profile">
      <a
        class="pc-head-link dropdown-toggle arrow-none me-0"
        data-bs-toggle="dropdown"
        href="#"
        role="button"
        aria-haspopup="false"
        data-bs-auto-close="outside"
        aria-expanded="false"
      >
        <img src="assets/images/user/avatar-2.jpg" alt="user-image" class="user-avtar" />
      </a>
      <div class="dropdown-menu dropdown-user-profile dropdown-menu-end pc-h-dropdown">
        <div class="dropdown-header d-flex align-items-center justify-content-between">
          <h5 class="m-0">Profile</h5>
        </div>
        <div class="dropdown-body">
          <div class="profile-notification-scroll position-relative" style="max-height: calc(100vh - 225px)">
            <div class="d-flex mb-1">
              <div class="flex-shrink-0">
                <img src="assets/images/user/avatar-2.jpg" alt="user-image" class="user-avtar wid-35" />
              </div>
              <div class="flex-grow-1 ms-3">
                <h6 class="mb-1">Carson Darrin 🖖</h6>
                <span>carson.darrin@company.io</span>
              </div>
            </div>
            <hr class="border-secondary border-opacity-50" />
            <div class="card">
              <div class="card-body py-3">
                <div class="d-flex align-items-center justify-content-between">
                  <h5 class="mb-0 d-inline-flex align-items-center"
                    ><svg class="pc-icon text-muted me-2">
                      <use xlink:href="#custom-notification-outline"></use></svg>Notification</h5
                  >
                  <div class="form-check form-switch form-check-reverse m-0">
                    <input class="form-check-input f-18" type="checkbox" role="switch" />
                  </div>
                </div>
              </div>
            </div>
            <p class="text-span">Manage</p>
            <a href="#" class="dropdown-item">
              <span>
                <svg class="pc-icon text-muted me-2">
                  <use xlink:href="#custom-setting-outline"></use>
                </svg>
                <span>Settings</span>
              </span>
            </a>
            <a href="#" class="dropdown-item">
              <span>
                <svg class="pc-icon text-muted me-2">
                  <use xlink:href="#custom-share-bold"></use>
                </svg>
                <span>Share</span>
              </span>
            </a>
            <a href="#" class="dropdown-item">
              <span>
                <svg class="pc-icon text-muted me-2">
                  <use xlink:href="#custom-lock-outline"></use>
                </svg>
                <span>Change Password</span>
              </span>
            </a>
            <hr class="border-secondary border-opacity-50" />
            <p class="text-span">Team</p>
            <a href="#" class="dropdown-item">
              <span>
                <svg class="pc-icon text-muted me-2">
                  <use xlink:href="#custom-profile-2user-outline"></use>
                </svg>
                <span>UI Design team</span>
              </span>
              <div class="user-group">
                <img src="assets/images/user/avatar-1.jpg" alt="user-image" class="avtar" />
                <span class="avtar bg-danger text-white">K</span>
                <span class="avtar bg-success text-white">
                  <svg class="pc-icon m-0">
                    <use xlink:href="#custom-user"></use>
                  </svg>
                </span>
                <span class="avtar bg-light-primary text-primary">+2</span>
              </div>
            </a>

            <a href="#" class="dropdown-item">
              <span>
                <svg class="pc-icon text-muted me-2">
                  <use xlink:href="#custom-add-outline"></use>
                </svg>
                <span>Add new</span>
              </span>
              <div class="user-group">
                <span class="avtar bg-primary text-white">
                  <svg class="pc-icon m-0">
                    <use xlink:href="#custom-add-outline"></use>
                  </svg>
                </span>
              </div>
            </a>
            <hr class="border-secondary border-opacity-50" />
            <div class="d-grid mb-3">
              <button class="btn btn-primary">
                <svg class="pc-icon me-2">
                  <use xlink:href="#custom-logout-1-outline"></use></svg>Logout
              </button>
            </div>
            <div
              class="card border-0 shadow-none drp-upgrade-card mb-0"
              style="background-image: url(assets/images/layout/img-profile-card.jpg)">
              <div class="card-body">
                <div class="user-group">
                  <img src="assets/images/user/avatar-1.jpg" alt="user-image" class="avtar" />
                  <img src="assets/images/user/avatar-2.jpg" alt="user-image" class="avtar" />
                  <img src="assets/images/user/avatar-3.jpg" alt="user-image" class="avtar" />
                  <img src="assets/images/user/avatar-4.jpg" alt="user-image" class="avtar" />
                  <img src="assets/images/user/avatar-5.jpg" alt="user-image" class="avtar" />
                  <span class="avtar bg-light-primary text-primary">+20</span>
                </div>
                <h3 class="my-3 text-dark">245.3k <small class="text-muted">Followers</small></h3>
                <div class="btn btn btn-warning">
                  <svg class="pc-icon me-2">
                    <use xlink:href="#custom-logout-1-outline"></use>
                  </svg>
                  Upgrade to Business
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </li>
  </ul>
</div>
 </div>
</header>
<div class="offcanvas pc-announcement-offcanvas offcanvas-end" tabindex="-1" id="announcement" aria-labelledby="announcementLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="announcementLabel">What's new announcement?</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <p class="text-span">Today</p>
    <div class="card mb-3">
      <div class="card-body">
        <div class="align-items-center d-flex flex-wrap gap-2 mb-3">
          <div class="badge bg-light-success f-12">Big News</div>
          <p class="mb-0 text-muted">2 min ago</p>
          <span class="badge dot bg-warning"></span>
        </div>
        <h5 class="mb-3">Able Pro is Redesigned</h5>
        <p class="text-muted">Able Pro is completely renowed with high aesthetics User Interface.</p>
        <img src="assets/images/layout/img-announcement-1.png" alt="img" class="img-fluid mb-3" />
        <div class="row">
          <div class="col-12">
            <div class="d-grid"
              ><a
                class="btn btn-outline-secondary"
                href="https://1.envato.market/zNkqj6"
                target="_blank"
                >Check Now</a
              ></div
            >
          </div>
        </div>
      </div>
    </div>
    <div class="card mb-3">
      <div class="card-body">
        <div class="align-items-center d-flex flex-wrap gap-2 mb-3">
          <div class="badge bg-light-warning f-12">Offer</div>
          <p class="mb-0 text-muted">2 hour ago</p>
          <span class="badge dot bg-warning"></span>
        </div>
        <h5 class="mb-3">Able Pro is in best offer price</h5>
        <p class="text-muted">Download Able Pro exclusive on themeforest with best price. </p>
        <a
          href="https://1.envato.market/zNkqj6"
          target="_blank"
          ><img src="assets/images/layout/img-announcement-2.png" alt="img" class="img-fluid"
        /></a>
      </div>
    </div>

    <p class="text-span mt-4">Yesterday</p>
    <div class="card mb-3">
      <div class="card-body">
        <div class="align-items-center d-flex flex-wrap gap-2 mb-3">
          <div class="badge bg-light-primary f-12">Blog</div>
          <p class="mb-0 text-muted">12 hour ago</p>
          <span class="badge dot bg-warning"></span>
        </div>
        <h5 class="mb-3">Featured Dashboard Template</h5>
        <p class="text-muted">Do you know Able Pro is one of the featured dashboard template selected by Themeforest team.?</p>
        <img src="assets/images/layout/img-announcement-3.png" alt="img" class="img-fluid" />
      </div>
    </div>
    <div class="card mb-3">
      <div class="card-body">
        <div class="align-items-center d-flex flex-wrap gap-2 mb-3">
          <div class="badge bg-light-primary f-12">Announcement</div>
          <p class="mb-0 text-muted">12 hour ago</p>
          <span class="badge dot bg-warning"></span>
        </div>
        <h5 class="mb-3">Buy Once - Get Free Updated lifetime</h5>
        <p class="text-muted">Get the lifetime free updates once you purchase the Able Pro.</p>
        <img src="assets/images/layout/img-announcement-4.png" alt="img" class="img-fluid" />
      </div>
    </div>
  </div>
</div>
<!-- [ Header ] end -->



  <!-- [ Main Content ] start -->
  <div class="pc-container">
    <div class="pc-content">
      <!-- [ breadcrumb ] start -->
      <div class="page-header">
        <div class="page-block">
          <div class="row align-items-center">
            <div class="col-md-12">
              <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item" aria-current="page">Products list</li>
              </ul>
            </div>
            <div class="col-md-12">
              <div class="page-header-title">
                <h2 class="mb-0">Products list</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- [ breadcrumb ] end -->
      <!-- [ Main Content ] start -->
      <div class="row">
        <!-- [ sample-page ] start -->
        <div class="col-sm-12">
          <div class="card table-card">
            <div class="card-body">
              <div class="text-end p-4 pb-sm-2">
                <a href="addProduct.php" class="btn btn-primary">
                  <i class="ti ti-plus f-18"></i> Add Product
                </a>
              </div>
              <div class="table-responsive">
                <table class="table table-hover" id="pc-dt-simple">
                  <thead>
                    <tr>
                      <th class="text-end">#</th>
                      <th>Product Detail</th>
                      <th>Vendor</th>
                      <th>Categories</th>
                      <th>Eco-Friendly Material</th>
                      <th class="text-end">Price</th>
                      <th class="text-end">Stock</th>
                      <th>Status</th>
                      <th class="text-center">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php 
                      $counter = 1; // Initialize counter variable
                      foreach($products as $product): ?>
                    <tr>
                      <td class="text-end"><?php echo $counter++; ?></td>
                      <td>
                        <div class="row">
                          <div class="col-auto pe-0">
                            <img src="<?php echo $product['productImage']; ?>" alt="<?php echo $product['ProductName']; ?>" class="wid-40 rounded">
                          </div>
                          <div class="col">
                            <h6 class="mb-1"><?php echo $product['ProductName']; ?></h6>
                            <p class="text-muted f-12 mb-0"><?php echo $product['BrandName']; ?></p>
                          </div>
                        </div>
                      </td>
                      <td><?php echo $product['ShopName']; ?></td>
                      <td><?php echo $product['CategoryName']; ?></td>
                      <td class="text-center"><?php echo $product['Material']; ?></td>
                      <td class="text-end">$<?php echo $product['Price']; ?></td>
                      <td class="text-end"><?php echo $product['Quantity']; ?></td>
                      <td><span class="badge bg-light-success  f-12">In Stock</span> </td>
                      <td class="text-center">
                        <ul class="list-inline me-auto mb-0">
                          <li class="list-inline-item align-bottom" data-bs-toggle="tooltip" title="View">
                            <a href="#" class="avtar avtar-xs btn-link-secondary btn-pc-default" data-bs-toggle="modal"
                              data-bs-target="#cust-modal">
                              <i class="ti ti-eye f-18"></i>
                            </a>
                          </li>
                          <li class="list-inline-item align-bottom" data-bs-toggle="tooltip" title="Edit">
                            <a href="editProduct.php?pid=<?php echo $product['ProductID']; ?>" class="avtar avtar-xs btn-link-success btn-pc-default">
                              <i class="ti ti-edit-circle f-18"></i>
                            </a>
                          </li>
                          <li class="list-inline-item align-bottom" data-bs-toggle="tooltip" title="Delete">
                            <a href="#" onclick="deleteProduct(<?php echo $product['ProductID']; ?>)" class="avtar avtar-xs btn-link-danger btn-pc-default">
                              <i class="ti ti-trash f-18"></i>
                            </a>
                          </li>
                        </ul>
                      </td>
                    </tr>
                    <?php endforeach; ?> 
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <!-- [ sample-page ] end -->
      </div>

      <div class="modal fade" id="addCategoryModal" tabindex="-1" aria-labelledby="addCategoryModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="addCategoryModalLabel">Add Category</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form id="addCategoryForm" action="../actions/add_category_action.php" method="post">
                <div class="mb-3">
                  <label for="categoryName" class="form-label">Category Name</label>
                  <input type="text" class="form-control" id="categoryName" name="categoryName" required>
                </div>
                <button type="submit" class="btn btn-primary">Add Category</button>
              </form>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <!-- [ sample-page ] start -->
        <div class="col-sm-12">
          <div class="card table-card">
            <div class="card-body">
              <div class="text-end p-4 pb-sm-2">
                <a  id="addCategoryButton" class="btn btn-primary">
                  <i class="ti ti-plus f-18"></i> Add Category
                </a>
              </div>
              <div class="table-responsive">
                <table class="table table-hover" id="pc-dt-simple">
                  <thead>
                    <tr>
                      <th class="text-end">#</th>
                      <th>Category</th>
                       <th class="text-center">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php 
                      $counter = 1; // Initialize counter variable
                      foreach($categories as $category): ?>
                    <tr>
                      <td class="text-end"><?php echo $counter++; ?></td>
                      <td class="align-middle"><?php echo $category['CategoryName']; ?></td>
                      <td class="text-center">
                        <ul class="list-inline me-auto mb-0">
                          <li class="list-inline-item align-bottom" data-bs-toggle="tooltip" title="Edit">
                            <a href="editProduct.php?pid=<?php echo $product['ProductID']; ?>" class="avtar avtar-xs btn-link-success btn-pc-default">
                              <i class="ti ti-edit-circle f-18"></i>
                            </a>
                          </li>
                          <li class="list-inline-item align-bottom" data-bs-toggle="tooltip" title="Delete">
                            <a href="#" onclick="deleteCat(<?php echo $category['CategoryID']; ?>)" class="avtar avtar-xs btn-link-danger btn-pc-default">
                              <i class="ti ti-trash f-18"></i>
                            </a>
                          </li>
                        </ul>
                      </td>
                    </tr>
                    <?php endforeach; ?> 
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <!-- [ sample-page ] end -->
      </div>
      <!-- [ Main Content ] end -->
    </div>
  </div>
  <?php foreach($products as $product): ?>

  <div class="modal fade" id="cust-modal" data-bs-keyboard="false" tabindex="-1"
    aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header border-0 pb-0">
          <h5 class="mb-0">Product Details</h5>
          <a href="#" class="avtar avtar-s btn-link-danger btn-pc-default" data-bs-dismiss="modal">
            <i class="ti ti-x f-20"></i>
          </a>
        </div>
        <div class="modal-body">
          <div class="row align-items-center">
            <div class="col-sm-4">
              <div class="bg-light rounded position-relative">
                <div class="text-center">
                  <div class="chat-avtar d-inline-flex mx-auto">
                    <img class="img-fluid rounded" src="<?php echo $product['productImage']; ?>"
                      alt="User image">
                  </div>
                </div>
                <div class="position-absolute end-0 top-0 p-3">
                  <span class="badge bg-success">In Stock</span>
                </div>
              </div>
            </div>
            <div class="col-sm-8">
              <h5><?php echo $product['ProductName']; ?></h5>
              <p class="text-muted"><?php echo $product['Description']; ?></p>
              <div class="table-responsive">
                <table class="table w-auto table-borderless">
                  <tbody>
                    <tr>
                      <td class="text-muted py-1">Categories</td>
                      <td class="py-1"><?php echo $product['Category']; ?></td>
                    </tr>
                    <tr>
                      <td class="text-muted py-1">Qty</td>
                      <td class="py-1"><?php echo $product['Quantity']; ?></td>
                    </tr>
                    <tr>
                      <td class="text-muted py-1">Price</td>
                      <td class="py-1"><h5 class="mb-0"><?php echo $product['Price']; ?></h5></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php endforeach; ?>
  <!-- [ Main Content ] end -->
 <!-- Required Js -->
<script src="assets/js/plugins/popper.min.js"></script>
<script src="assets/js/plugins/simplebar.min.js"></script>
<script src="assets/js/plugins/bootstrap.min.js"></script>
<script src="assets/js/fonts/custom-font.js"></script>
<script src="assets/js/pcoded.js"></script>
<script src="assets/js/plugins/feather.min.js"></script>

<script>
function deleteProduct(productId) {  
  var confirmation = confirm("Are you sure you want to delete this Product?");
  if (confirmation) {
      // Send an AJAX request to delete the brand
      var xhr = new XMLHttpRequest();
      xhr.open("POST", "../actions/delete_product_action.php", true);
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


  function deleteCat(catId) {  
  var confirmation = confirm("Are you sure you want to delete this Category?");
  if (confirmation) {
      // Send an AJAX request to delete the brand
      var xhr = new XMLHttpRequest();
      xhr.open("POST", "../actions/delete_category_action.php", true);
      xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
      xhr.onreadystatechange = function() {
          if (xhr.readyState == 4 && xhr.status == 200) {
              // Reload the page or update the brand list after successful deletion
              location.reload();
          }
      };
      xhr.send("CategoryID=" + catId);
  }
  }; 

</script>



<script>layout_change('light');</script>




<script>layout_theme_contrast_change('false');</script>



<script>change_box_container('false');</script>


<script>layout_caption_change('true');</script>




<script>layout_rtl_change('false');</script>


<script>preset_change("preset-1");</script>

  <!-- [Page Specific JS] start -->
  <script src="assets/js/plugins/simple-datatables.js"></script>
  <script>
    const dataTable = new simpleDatatables.DataTable('#pc-dt-simple', {
      sortable: false,
      perPage: 5
    });
  </script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <!-- Bootstrap CSS -->
<!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet"> -->

<!-- Bootstrap Bundle with Popper -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<script>
  $(document).ready(function() {
    // When the "Add Category" button is clicked, show the modal
    $('#addCategoryButton').click(function() {
      $('#addCategoryModal').modal('show');
    });
  });
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



<!-- jQuery -->

</body>
<!-- [Body] end -->


</html>