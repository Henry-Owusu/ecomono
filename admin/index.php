<?php


  // Include the user controller using the absolute path
  include_once('../controllers/user_controller.php');

  // Call the function from the controller
  $users = viewAllUsers_ctr();
  $totalCount = $users['totalCount'];
  $userData = $users['userData'];

?>    
<!DOCTYPE html>
<html lang="en">
  <!-- [Head] start -->

  
<head>
    <title>Ecomono</title>
    <!-- [Meta] -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Able Pro is trending dashboard template made using Bootstrap 5 design framework. Able Pro is available in Bootstrap, React, CodeIgniter, Angular,  and .net Technologies.">
    <meta name="keywords" content="Bootstrap admin template, Dashboard UI Kit, Dashboard Template, Backend Panel, react dashboard, angular dashboard">
    <meta name="author" content="Phoenixcoded">

    <!-- [Favicon] icon -->
      <link rel="icon" href="../images/favicon.ico" type="image/x-icon"> 
      <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
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
<style>
  .card {
    border: none;
    border-radius: 10px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    transition: box-shadow 0.3s ease;
  }
  .card:hover {
    box-shadow: 0 6px 10px rgba(0, 0, 0, 0.2);
  }
  .avatar {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: #f1f5f8;
  }
  .avatar svg {
    width: 24px;
    height: 24px;
    fill: #4680FF;
  }
  h6 {
    font-size: 1.2rem;
    font-weight: bold;
    color: #333;
  }
  h1 {
    font-size: 2.5rem;
    font-weight: bold;
    color: #4680FF;
  }
  .bg-body {
    background-color: #fff;
  }

  /* .subtitle {
    background-color: #f8f9fa;
    padding: 10px;
    border-radius: 5px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  } */
  .subtitle h5 {
    font-size: 1.2rem;
    font-weight: bold;
    margin-bottom: 0;
    color: #333;
    text-transform: uppercase;
  }
  
  
  p {
    font-size: 1.2rem;
    color: #666;
    margin-bottom: 0.3rem;
  }
/* 
  span {
    font-weight: bold;
    color: #4680FF;
  } */


  .alert-icon,
  .performance-icon {
    font-size: 2.5rem;
    color: #4680FF;
  }
  .alert-icon i {
    color: #FF5B5B;
  }
  .metric-value {
    font-size: 1.5rem;
    font-weight: bold;
  }


  .bg-body {
    background-color: #fff;
  }


  .icon {
      font-size: 2rem;
      margin-right: 10px;
    }
    .green {
      color: #28a745;
    }
    .orange {
      color: #ffc107;
    }

</style>

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
              <h6 class="mb-0">Henry Owusu</h6>
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
              </svg> </span
            ><span class="pc-mtext">Users & Roles</span></a>
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
        aria-expanded="false"
      >
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
                <h6 class="mb-1">Henry Owusu 🖖</h6>
                <span>henry.owusu@ecomono.com</span>
              </div>
            </div>
            <hr class="border-secondary border-opacity-50" />
            <div class="card">
              <div class="card-body py-3">
                <div class="d-flex align-items-center justify-content-between">
                  <h5 class="mb-0 d-inline-flex align-items-center"
                    ><svg class="pc-icon text-muted me-2">
                      <use xlink:href="#custom-notification-outline"></use></svg>Notification</h5>                  >
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
                  <use xlink:href="#custom-profile-2user-outline"></use>
                </svg>
                <span>Friends Groups</span>
              </span>
              <div class="user-group">
                <img src="assets/images/user/avatar-1.jpg" alt="user-image" class="avtar" />
                <span class="avtar bg-danger text-white">K</span>
                <span class="avtar bg-success text-white">
                  <svg class="pc-icon m-0">
                    <use xlink:href="#custom-user"></use>
                  </svg>
                </span>
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
              style="background-image: url(assets/images/layout/img-profile-card.jpg)"
            >
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
                  <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                  <li class="breadcrumb-item"><a href="javascript: void(0)">Dashboard</a></li>
                  <li class="breadcrumb-item" aria-current="page">Home</li>
                </ul>
              </div>
              <div class="col-md-12">
                <div class="page-header-title">
                  <h2 class="mb-0">Home</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <div class="col-md-6 col-xxl-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex align-items-center">
                    <div class="flex-shrink-0">
                      <div class="avatar avatar-s bg-light-primary">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path
                            opacity="0.4"
                            d="M13 9H7"
                            stroke="#4680FF"
                            stroke-width="1.5"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                          />
                          <path
                            d="M22.0002 10.9702V13.0302C22.0002 13.5802 21.5602 14.0302 21.0002 14.0502H19.0402C17.9602 14.0502 16.9702 13.2602 16.8802 12.1802C16.8202 11.5502 17.0602 10.9602 17.4802 10.5502C17.8502 10.1702 18.3602 9.9502 18.9202 9.9502H21.0002C21.5602 9.9702 22.0002 10.4202 22.0002 10.9702Z"
                            stroke="#4680FF"
                            stroke-width="1.5"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                          />
                          <path
                            d="M17.48 10.55C17.06 10.96 16.82 11.55 16.88 12.18C16.97 13.26 17.96 14.05 19.04 14.05H21V15.5C21 18.5 19 20.5 16 20.5H7C4 20.5 2 18.5 2 15.5V8.5C2 5.78 3.64 3.88 6.19 3.56C6.45 3.52 6.72 3.5 7 3.5H16C16.26 3.5 16.51 3.50999 16.75 3.54999C19.33 3.84999 21 5.76 21 8.5V9.95001H18.92C18.36 9.95001 17.85 10.17 17.48 10.55Z"
                            stroke="#4680FF"
                            stroke-width="1.5"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                          />
                        </svg>
                      </div>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <h6 class="mb-0">Total Registered Users</h6>
                    </div>
                  </div>
                  <div class="bg-body p-3 mt-3 rounded">
                    <h1 id="totalUsers"><?php echo $totalCount; ?></h1>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-xxl-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex align-items-center">
                    <div class="flex-shrink-0">
                      <div class="avatar avatar-s bg-light-primary">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <!-- Your SVG content for Active Users -->
                        </svg>
                      </div>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <h6 class="mb-0">Active Users</h6>
                    </div>
                  </div>
                  <div class="bg-body p-3 mt-3 rounded">
                    <h1 id="activeUsers">0</h1>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-xxl-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex align-items-center">
                    <div class="flex-shrink-0">
                      <div class="avatar avatar-s bg-light-primary">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <!-- Your SVG content for Total Products -->
                        </svg>
                      </div>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <h6 class="mb-0">Total Products</h6>
                    </div>
                  </div>
                  <div class="bg-body p-3 mt-3 rounded">
                    <h1 id="totalProducts">0</h1>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-xxl-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex align-items-center">
                    <div class="flex-shrink-0">
                      <div class="avatar avatar-s bg-light-primary">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <!-- Your SVG content for Blog Posts -->
                        </svg>
                      </div>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <h6 class="mb-0">Blog Posts</h6>
                    </div>
                  </div>
                  <div class="bg-body p-3 mt-3 rounded">
                    <h1 id="totalPosts">0</h1>
                  </div>
                </div>
              </div>
            </div>
          </div>


          <div class="row">
            <div class="col-md-6 col-xxl-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex align-items-center">
                    <div class="flex-shrink-0">
                      <div class="avatar avatar-s bg-light-primary">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path
                            opacity="0.4"
                            d="M13 9H7"
                            stroke="#4680FF"
                            stroke-width="1.5"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                          />
                          <path
                            d="M22.0002 10.9702V13.0302C22.0002 13.5802 21.5602 14.0302 21.0002 14.0502H19.0402C17.9602 14.0502 16.9702 13.2602 16.8802 12.1802C16.8202 11.5502 17.0602 10.9602 17.4802 10.5502C17.8502 10.1702 18.3602 9.9502 18.9202 9.9502H21.0002C21.5602 9.9702 22.0002 10.4202 22.0002 10.9702Z"
                            stroke="#4680FF"
                            stroke-width="1.5"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                          />
                          <path
                            d="M17.48 10.55C17.06 10.96 16.82 11.55 16.88 12.18C16.97 13.26 17.96 14.05 19.04 14.05H21V15.5C21 18.5 19 20.5 16 20.5H7C4 20.5 2 18.5 2 15.5V8.5C2 5.78 3.64 3.88 6.19 3.56C6.45 3.52 6.72 3.5 7 3.5H16C16.26 3.5 16.51 3.50999 16.75 3.54999C19.33 3.84999 21 5.76 21 8.5V9.95001H18.92C18.36 9.95001 17.85 10.17 17.48 10.55Z"
                            stroke="#4680FF"
                            stroke-width="1.5"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                          />
                        </svg>
                      </div>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <h6 class="mb-0">Total Registered Customers</h6>
                    </div>
                  </div>
                  <div class="bg-body p-3 mt-3 rounded">
                    <h1 id="totalUsers">0</h1>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-xxl-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex align-items-center">
                    <div class="flex-shrink-0">
                      <div class="avatar avatar-s bg-light-primary">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <!-- Your SVG content for Active Users -->
                        </svg>
                      </div>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <h6 class="mb-0">Total Sellers</h6>
                    </div>
                  </div>
                  <div class="bg-body p-3 mt-3 rounded">
                    <h1 id="activeUsers">0</h1>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-xxl-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex align-items-center">
                    <div class="flex-shrink-0">
                      <div class="avatar avatar-s bg-light-primary">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <!-- Your SVG content for Total Products -->
                        </svg>
                      </div>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <h6 class="mb-0">Total Customers</h6>
                    </div>
                  </div>
                  <div class="bg-body p-3 mt-3 rounded">
                    <h1 id="totalProducts">0</h1>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-xxl-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex align-items-center">
                    <div class="flex-shrink-0">
                      <div class="avatar avatar-s bg-light-primary">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <!-- Your SVG content for Blog Posts -->
                        </svg>
                      </div>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <h6 class="mb-0">Total Bloggers</h6>
                    </div>
                  </div>
                  <div class="bg-body p-3 mt-3 rounded">
                    <h1 id="totalPosts">0</h1>
                  </div>
                </div>
              </div>
            </div>
          </div>


          <div class="row">
            <div class="col-12">
              <div class="subtitle">
                <h5>User Engagement Metrics</h5>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6 col-xxl-4">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex align-items-center">
                    <div class="flex-shrink-0">
                      <div class="avatar avatar-s bg-light-success">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bar-chart-2">
                          <line x1="18" y1="20" x2="18" y2="10"></line>
                          <line x1="12" y1="20" x2="12" y2="4"></line>
                          <line x1="6" y1="20" x2="6" y2="14"></line>
                        </svg>
                      </div>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <h6 class="mb-0">Traffic Overview</h6>
                    </div>
                  </div>
                  <div class="bg-body p-3 mt-3 rounded">
                    <p>Total Visits: <span id="totalVisits">0</span></p>
                    <p>Total Page Views: <span id="totalPageViews">0</span></p>
                    <p>Unique Visitors: <span id="uniqueVisitors">0</span></p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-xxl-4">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex align-items-center">
                    <div class="flex-shrink-0">
                      <div class="avatar avatar-s bg-light-warning">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-percent">
                          <line x1="19" y1="5" x2="5" y2="19"></line>
                          <circle cx="6.5" cy="6.5" r="2.5"></circle>
                          <circle cx="17.5" cy="17.5" r="2.5"></circle>
                        </svg>
                      </div>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <h6 class="mb-0">Conversion Rates</h6>
                    </div>
                  </div>
                  <div class="bg-body p-3 mt-3 rounded">
                    <p>Purchase Conversion Rate: <span id="purchaseConversion">0%</span></p>
                    <p>Content Engagement Rate: <span id="contentEngagement">0%</span></p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-xxl-4">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex align-items-center">
                    <div class="flex-shrink-0">
                      <div class="avatar avatar-s bg-light-info">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity">
                          <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                        </svg>
                      </div>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <h6 class="mb-0">User Activity</h6>
                    </div>
                  </div>
                  <div class="bg-body p-3 mt-3 rounded">
                    <p>Comments: <span id="comments">0</span></p>
                    <p>Likes: <span id="likes">0</span></p>
                    <p>Shares: <span id="shares">0</span></p>
                  </div>
                </div>
              </div>
            </div>
          </div>



          <div class="row">
            <div class="col-md-6 col-lg-4">
              <div class="card bg-danger text-white">
                <div class="card-body">
                  <h5 class="card-title">System Status</h5>
                  <p class="card-text">Alerts or notifications regarding any technical issues, downtime, or maintenance activities.</p>
                  <div class="alert-icon">
                    <i class="fas fa-exclamation-triangle"></i>
                  </div>
                  <div class="metric-value mt-3">
                    <!-- System status value written here -->
                    <span>Critical</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Performance Metrics</h5>
                  <p class="card-text">Server response time, website loading speed, and other indicators of platform health.</p>
                  <div class="performance-icon">
                    <i class="fas fa-chart-line"></i>
                  </div>
                  <div class="metric-value mt-3">
                    <!-- Performance metrics value written here -->
                    <span>Normal</span>
                  </div>
                </div>
              </div>
            </div>
          </div>



          




          



          <div class="col-md-6 col-xxl-3">
            <div class="card">
              <div class="card-body">
                <div class="d-flex align-items-center">
                  <div class="flex-shrink-0">
                    <div class="avtar avtar-s bg-light-warning">
                      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M21 7V17C21 20 19.5 22 16 22H8C4.5 22 3 20 3 17V7C3 4 4.5 2 8 2H16C19.5 2 21 4 21 7Z"
                          stroke="#E58A00"
                          stroke-width="1.5"
                          stroke-miterlimit="10"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                        />
                        <path
                          opacity="0.6"
                          d="M14.5 4.5V6.5C14.5 7.6 15.4 8.5 16.5 8.5H18.5"
                          stroke="#E58A00"
                          stroke-width="1.5"
                          stroke-miterlimit="10"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                        />
                        <path
                          opacity="0.6"
                          d="M8 13H12"
                          stroke="#E58A00"
                          stroke-width="1.5"
                          stroke-miterlimit="10"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                        />
                        <path
                          opacity="0.6"
                          d="M8 17H16"
                          stroke="#E58A00"
                          stroke-width="1.5"
                          stroke-miterlimit="10"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                        />
                      </svg>
                    </div>
                  </div>
                  <div class="flex-grow-1 ms-3">
                    <h6 class="mb-0">Page Views</h6>
                  </div>
                </div>
                <div class="bg-body p-3 mt-3 rounded">
                  <div class="mt-3 row align-items-center">
                    <div class="col-7">
                      <div id="page-views-graph"></div>
                    </div>
                    <div class="col-5">
                      <h5 class="mb-1">290K+</h5>
                      <p class="text-warning mb-0"><i class="ti ti-arrow-up-right"></i> 30.6%</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
                    

          
    
     
          <div class="col-lg-9">
            <div class="card">
              <div class="card-body border-bottom pb-0">
                <div class="d-flex align-items-center justify-content-between">
                  <h5 class="mb-0">Transactions</h5>
                  <div class="dropdown">
                    <a
                      class="avtar avtar-s btn-link-secondary dropdown-toggle arrow-none"
                      href="#"
                      data-bs-toggle="dropdown"
                      aria-haspopup="true"
                      aria-expanded="false"
                    >
                      <i class="ti ti-dots-vertical f-18"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
                      <a class="dropdown-item" href="#">Today</a>
                      <a class="dropdown-item" href="#">Weekly</a>
                      <a class="dropdown-item" href="#">Monthly</a>
                    </div>
                  </div>
                </div>
                <ul class="nav nav-tabs analytics-tab" id="myTab" role="tablist">
                  <li class="nav-item" role="presentation">
                    <button
                      class="nav-link active"
                      id="analytics-tab-1"
                      data-bs-toggle="tab"
                      data-bs-target="#analytics-tab-1-pane"
                      type="button"
                      role="tab"
                      aria-controls="analytics-tab-1-pane"
                      aria-selected="true"
                      >All Transaction</button
                    >
                  </li>
                  <li class="nav-item" role="presentation">
                    <button
                      class="nav-link"
                      id="analytics-tab-2"
                      data-bs-toggle="tab"
                      data-bs-target="#analytics-tab-2-pane"
                      type="button"
                      role="tab"
                      aria-controls="analytics-tab-2-pane"
                      aria-selected="false"
                      >Success</button
                    >
                  </li>
                  <li class="nav-item" role="presentation">
                    <button
                      class="nav-link"
                      id="analytics-tab-3"
                      data-bs-toggle="tab"
                      data-bs-target="#analytics-tab-3-pane"
                      type="button"
                      role="tab"
                      aria-controls="analytics-tab-3-pane"
                      aria-selected="false"
                      >Pending</button
                    >
                  </li>
                </ul>
              </div>
              <div class="tab-content" id="myTabContent">
                <div
                  class="tab-pane fade show active"
                  id="analytics-tab-1-pane"
                  role="tabpanel"
                  aria-labelledby="analytics-tab-1"
                  tabindex="0"
                >
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                      <div class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                          <div class="avtar avtar-s border"> AI </div>
                        </div>
                        <div class="flex-grow-1 ms-3">
                          <div class="row g-1">
                            <div class="col-6">
                              <h6 class="mb-0">Apple Inc.</h6>
                              <p class="text-muted mb-0"><small>#ABLE-PRO-T00232</small></p>
                            </div>
                            <div class="col-6 text-end">
                              <h6 class="mb-1">$210,000</h6>
                              <p class="text-danger mb-0"><i class="ti ti-arrow-down-left"></i> 10.6%</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="list-group-item">
                      <div class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                          <div class="avtar avtar-s border" data-bs-toggle="tooltip" data-bs-title="10,000 Tracks"><span>SM</span></div>
                        </div>
                        <div class="flex-grow-1 ms-3">
                          <div class="row g-1">
                            <div class="col-6">
                              <h6 class="mb-0">Spotify Music</h6>
                              <p class="text-muted mb-0"><small>#ABLE-PRO-T10232</small></p>
                            </div>
                            <div class="col-6 text-end">
                              <h6 class="mb-1">- 10,000</h6>
                              <p class="text-success mb-0"><i class="ti ti-arrow-up-right"></i> 30.6%</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="list-group-item">
                      <div class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                          <div class="avtar avtar-s border bg-light-primary" data-bs-toggle="tooltip" data-bs-title="143 Posts"
                            ><span>MD</span>
                          </div>
                        </div>
                        <div class="flex-grow-1 ms-3">
                          <div class="row g-1">
                            <div class="col-6">
                              <h6 class="mb-0">Medium</h6>
                              <p class="text-muted mb-0"><small>06:30 pm</small></p>
                            </div>
                            <div class="col-6 text-end">
                              <h6 class="mb-1">-26</h6>
                              <p class="text-warning mb-0"><i class="ti ti-arrows-left-right"></i> 5%</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="list-group-item">
                      <div class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                          <div class="avtar avtar-s border" data-bs-toggle="tooltip" data-bs-title="143 Posts"><span>U</span> </div>
                        </div>
                        <div class="flex-grow-1 ms-3">
                          <div class="row g-1">
                            <div class="col-6">
                              <h6 class="mb-0">Uber</h6>
                              <p class="text-muted mb-0"><small>08:40 pm</small></p>
                            </div>
                            <div class="col-6 text-end">
                              <h6 class="mb-1">+210,000</h6>
                              <p class="text-success mb-0"><i class="ti ti-arrow-up-right"></i> 10.6%</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="list-group-item">
                      <div class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                          <div class="avtar avtar-s border bg-light-warning" data-bs-toggle="tooltip" data-bs-title="143 Posts"
                            ><span>OC</span>
                          </div>
                        </div>
                        <div class="flex-grow-1 ms-3">
                          <div class="row g-1">
                            <div class="col-6">
                              <h6 class="mb-0">Ola Cabs</h6>
                              <p class="text-muted mb-0"><small>07:40 pm</small></p>
                            </div>
                            <div class="col-6 text-end">
                              <h6 class="mb-1">+210,000</h6>
                              <p class="text-success mb-0"><i class="ti ti-arrow-up-right"></i> 10.6%</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
                <div class="tab-pane fade" id="analytics-tab-2-pane" role="tabpanel" aria-labelledby="analytics-tab-2" tabindex="0">
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                      <div class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                          <div class="avtar avtar-s border" data-bs-toggle="tooltip" data-bs-title="143 Posts"><span>U</span> </div>
                        </div>
                        <div class="flex-grow-1 ms-3">
                          <div class="row g-1">
                            <div class="col-6">
                              <h6 class="mb-0">Uber</h6>
                              <p class="text-muted mb-0"><small>08:40 pm</small></p>
                            </div>
                            <div class="col-6 text-end">
                              <h6 class="mb-1">+210,000</h6>
                              <p class="text-success mb-0"><i class="ti ti-arrow-up-right"></i> 10.6%</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="list-group-item">
                      <div class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                          <div class="avtar avtar-s border bg-light-warning" data-bs-toggle="tooltip" data-bs-title="143 Posts"
                            ><span>OC</span>
                          </div>
                        </div>
                        <div class="flex-grow-1 ms-3">
                          <div class="row g-1">
                            <div class="col-6">
                              <h6 class="mb-0">Ola Cabs</h6>
                              <p class="text-muted mb-0"><small>07:40 pm</small></p>
                            </div>
                            <div class="col-6 text-end">
                              <h6 class="mb-1">+210,000</h6>
                              <p class="text-success mb-0"><i class="ti ti-arrow-up-right"></i> 10.6%</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="list-group-item">
                      <div class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                          <div class="avtar avtar-s border">AI</div>
                        </div>
                        <div class="flex-grow-1 ms-3">
                          <div class="row g-1">
                            <div class="col-6">
                              <h6 class="mb-0">Apple Inc.</h6>
                              <p class="text-muted mb-0"><small>#ABLE-PRO-T00232</small></p>
                            </div>
                            <div class="col-6 text-end">
                              <h6 class="mb-1">$210,000</h6>
                              <p class="text-danger mb-0"><i class="ti ti-arrow-down-left"></i> 10.6%</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="list-group-item">
                      <div class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                          <div class="avtar avtar-s border" data-bs-toggle="tooltip" data-bs-title="10,000 Tracks"><span>SM</span></div>
                        </div>
                        <div class="flex-grow-1 ms-3">
                          <div class="row g-1">
                            <div class="col-6">
                              <h6 class="mb-0">Spotify Music</h6>
                              <p class="text-muted mb-0"><small>#ABLE-PRO-T10232</small></p>
                            </div>
                            <div class="col-6 text-end">
                              <h6 class="mb-1">- 10,000</h6>
                              <p class="text-success mb-0"><i class="ti ti-arrow-up-right"></i> 30.6%</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="list-group-item">
                      <div class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                          <div class="avtar avtar-s border bg-light-primary" data-bs-toggle="tooltip" data-bs-title="143 Posts"
                            ><span>MD</span>
                          </div>
                        </div>
                        <div class="flex-grow-1 ms-3">
                          <div class="row g-1">
                            <div class="col-6">
                              <h6 class="mb-0">Medium</h6>
                              <p class="text-muted mb-0"><small>06:30 pm</small></p>
                            </div>
                            <div class="col-6 text-end">
                              <h6 class="mb-1">-26</h6>
                              <p class="text-warning mb-0"><i class="ti ti-arrows-left-right"></i> 5%</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
                <div class="tab-pane fade" id="analytics-tab-3-pane" role="tabpanel" aria-labelledby="analytics-tab-3" tabindex="0">
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                      <div class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                          <div class="avtar avtar-s border" data-bs-toggle="tooltip" data-bs-title="10,000 Tracks"><span>SM</span></div>
                        </div>
                        <div class="flex-grow-1 ms-3">
                          <div class="row g-1">
                            <div class="col-6">
                              <h6 class="mb-0">Spotify Music</h6>
                              <p class="text-muted mb-0"><small>#ABLE-PRO-T10232</small></p>
                            </div>
                            <div class="col-6 text-end">
                              <h6 class="mb-1">- 10,000</h6>
                              <p class="text-success mb-0"><i class="ti ti-arrow-up-right"></i> 30.6%</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="list-group-item">
                      <div class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                          <div class="avtar avtar-s border bg-light-primary" data-bs-toggle="tooltip" data-bs-title="143 Posts"
                            ><span>MD</span>
                          </div>
                        </div>
                        <div class="flex-grow-1 ms-3">
                          <div class="row g-1">
                            <div class="col-6">
                              <h6 class="mb-0">Medium</h6>
                              <p class="text-muted mb-0"><small>06:30 pm</small></p>
                            </div>
                            <div class="col-6 text-end">
                              <h6 class="mb-1">-26</h6>
                              <p class="text-warning mb-0"><i class="ti ti-arrows-left-right"></i> 5%</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="list-group-item">
                      <div class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                          <div class="avtar avtar-s border" data-bs-toggle="tooltip" data-bs-title="143 Posts"><span>U</span> </div>
                        </div>
                        <div class="flex-grow-1 ms-3">
                          <div class="row g-1">
                            <div class="col-6">
                              <h6 class="mb-0">Uber</h6>
                              <p class="text-muted mb-0"><small>08:40 pm</small></p>
                            </div>
                            <div class="col-6 text-end">
                              <h6 class="mb-1">+210,000</h6>
                              <p class="text-success mb-0"><i class="ti ti-arrow-up-right"></i> 10.6%</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="list-group-item">
                      <div class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                          <div class="avtar avtar-s border"> AI </div>
                        </div>
                        <div class="flex-grow-1 ms-3">
                          <div class="row g-1">
                            <div class="col-6">
                              <h6 class="mb-0">Apple Inc.</h6>
                              <p class="text-muted mb-0"><small>#ABLE-PRO-T00232</small></p>
                            </div>
                            <div class="col-6 text-end">
                              <h6 class="mb-1">$210,000</h6>
                              <p class="text-danger mb-0"><i class="ti ti-arrow-down-left"></i> 10.6%</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="list-group-item">
                      <div class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                          <div class="avtar avtar-s border bg-light-warning" data-bs-toggle="tooltip" data-bs-title="143 Posts"
                            ><span>OC</span>
                          </div>
                        </div>
                        <div class="flex-grow-1 ms-3">
                          <div class="row g-1">
                            <div class="col-6">
                              <h6 class="mb-0">Ola Cabs</h6>
                              <p class="text-muted mb-0"><small>07:40 pm</small></p>
                            </div>
                            <div class="col-6 text-end">
                              <h6 class="mb-1">+210,000</h6>
                              <p class="text-success mb-0"><i class="ti ti-arrow-up-right"></i> 10.6%</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="card-footer">
                <div class="row g-2">
                  <div class="col-md-6">
                    <div class="d-grid">
                      <button class="btn btn-outline-secondary d-grid"
                        ><span class="text-truncate w-100">View all Transaction History</span></button
                      >
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="d-grid">
                      <button class="btn btn-primary d-grid"><span class="text-truncate w-100">Create new Transaction</span></button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        
        </div>
        <!-- [ Main Content ] end -->
      </div>
    </div>
    <!-- [ Main Content ] end -->
  
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
 
    <script src="assets/js/plugins/apexcharts.min.js"></script>
    <script src="assets/js/pages/dashboard-default.js"></script>
   <!-- [Page Specific JS]  -->
    <script src="assets/js/plugins/popper.min.js"></script>
    <script src="assets/js/plugins/simplebar.min.js"></script>
    <script src="assets/js/plugins/bootstrap.min.js"></script>
    <script src="assets/js/fonts/custom-font.js"></script>
    <script src="assets/js/pcoded.js"></script>
    <script src="assets/js/plugins/feather.min.js"></script>

    
    
    
    
    <script>layout_change('light');</script>
    
    
    
    
    <script>layout_theme_contrast_change('false');</script>
    
    
    
    <script>change_box_container('false');</script>
    
    
    <script>layout_caption_change('true');</script>
    
    
    
    
    <script>layout_rtl_change('false');</script>
    
    
    <script>preset_change("preset-1");</script>
    
  </body>


</html>
