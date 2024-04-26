<?php 
    include_once("../controllers/user_controller.php");
    $users = viewAllUsers_ctr();
?>



<!DOCTYPE html>
<html lang="en">
<!-- [Head] start -->


<head>
  <title>User List</title>
  <!-- [Meta] -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Able Pro is trending dashboard template made using Bootstrap 5 design framework. Able Pro is available in Bootstrap, React, CodeIgniter, Angular,  and .net Technologies.">
  <meta name="keywords" content="Bootstrap admin template, Dashboard UI Kit, Dashboard Template, Backend Panel, react dashboard, angular dashboard">
  <meta name="author" content="Phoenixcoded">

  <!-- [Favicon] icon -->
  <link rel="icon" href="Ecomonoimages/favicon.ico" type="image/x-icon"> 
<link rel="stylesheet" href="Ecomonoassets/fonts/inter/inter.css" id="main-font-link" />
<!-- [Tabler Icons] https://tablericons.com -->
<link rel="stylesheet" href="Ecomonoassets/fonts/tabler-icons.min.css" >
<!-- [Feather Icons] https://feathericons.com -->
<link rel="stylesheet" href="Ecomonoassets/fonts/feather.css" >
<!-- [Font Awesome Icons] https://fontawesome.com/icons -->
<link rel="stylesheet" href="Ecomonoassets/fonts/fontawesome.css" >
<!-- [Material Icons] https://fonts.google.com/icons -->
<link rel="stylesheet" href="Ecomonoassets/fonts/material.css" >
<!-- [Template CSS Files] -->
<link rel="stylesheet" href="assets/css/style.css" id="main-style-link" >
<link rel="stylesheet" href="assets/css/style-preset.css" >
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-14K1GBX9FG"></script>

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
      <a href="https://ableproadmin.com/dashboard/index.html" class="b-brand text-primary">
        <!-- ========   Change your logo from here   ============ -->
        <img src="https://ableproadmin.com/assets/images/logo-dark.svg" class="img-fluid logo-lg" alt="logo">
        <span class="badge bg-light-success rounded-pill ms-2 theme-version">v9.0</span>
      </a>
    </div>
    <div class="navbar-content">
      <div class="card pc-user-card">
        <div class="card-body">
          <div class="d-flex align-items-center">
            <div class="flex-shrink-0">
              <img src="Ecomonoassets/images/user/avatar-1.jpg" alt="user-image" class="user-avtar wid-45 rounded-circle" />
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
          <a href="Ecomonoindex.php" class="pc-link">
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
        <img src="Ecomonoassets/images/user/avatar-2.jpg" alt="user-image" class="user-avtar" />
      </a>
      <div class="dropdown-menu dropdown-user-profile dropdown-menu-end pc-h-dropdown">
        <div class="dropdown-header d-flex align-items-center justify-content-between">
          <h5 class="m-0">Profile</h5>
        </div>
        <div class="dropdown-body">
          <div class="profile-notification-scroll position-relative" style="max-height: calc(100vh - 225px)">
            <div class="d-flex mb-1">
              <div class="flex-shrink-0">
                <img src="Ecomonoassets/images/user/avatar-2.jpg" alt="user-image" class="user-avtar wid-35" />
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
                <img src="Ecomonoassets/images/user/avatar-1.jpg" alt="user-image" class="avtar" />
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
                <img src="Ecomonoassets/images/user/avatar-1.jpg" alt="user-image" class="avtar" />
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
              style="background-image: url(Ecomonoassets/images/layout/img-profile-card.jpg)"
            >
              <div class="card-body">
                <div class="user-group">
                  <img src="Ecomonoassets/images/user/avatar-1.jpg" alt="user-image" class="avtar" />
                  <img src="Ecomonoassets/images/user/avatar-2.jpg" alt="user-image" class="avtar" />
                  <img src="Ecomonoassets/images/user/avatar-3.jpg" alt="user-image" class="avtar" />
                  <img src="Ecomonoassets/images/user/avatar-4.jpg" alt="user-image" class="avtar" />
                  <img src="Ecomonoassets/images/user/avatar-5.jpg" alt="user-image" class="avtar" />
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
        <img src="Ecomonoassets/images/layout/img-announcement-1.png" alt="img" class="img-fluid mb-3" />
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
          ><img src="Ecomonoassets/images/layout/img-announcement-2.png" alt="img" class="img-fluid"
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
        <img src="Ecomonoassets/images/layout/img-announcement-3.png" alt="img" class="img-fluid" />
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
        <img src="Ecomonoassets/images/layout/img-announcement-4.png" alt="img" class="img-fluid" />
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
                <li class="breadcrumb-item"><a href="https://ableproadmin.com/dashboard/index.html">Home</a></li>
                <li class="breadcrumb-item"><a href="javascript: void(0)">E-commerce</a></li>
                <li class="breadcrumb-item" aria-current="page">Products list</li>
              </ul>
            </div>
            <div class="col-md-12">
              <div class="page-header-title">
                <h2 class="mb-0">User List</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- [ breadcrumb ] end -->
      <!-- [ Main Content ] start -->

      <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                <h5 class="mb-4">User Management</h5>
                
                <!-- User Table -->
                <div class="table-responsive">
                    <table class="table table-striped">
                    <thead>
                        <tr>
                        <th>User ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach($users as $user): ?>
                        <tr>
                        <td><?php echo $user['UserID']; ?></td>
                        <td><?php echo $user['Username']; ?></td>
                        <td><?php echo $user['Email']; ?></td>
                        <td><?php echo $user['RoleName']; ?></td>
                        <td>
                            <div class="btn-group">
                            <button class="btn btn-sm btn-info">Edit</button>
                            <button class="btn btn-sm btn-danger">Deactivate</button>
                            </div>
                        </td>
                        </tr>
                    <?php endforeach; ?>    
                      </tbody>
                    </table>
                </div>
                
                <!-- Define and Assign Roles Buttons -->
                <div class="mt-4">
                    <button class="btn btn-primary me-2">Define Roles</button>
                    <button class="btn btn-info">Assign Roles</button>
                </div>
                </div>
            </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6">
          <div class="card">
            <div class="card-body">
              <h5 class="mb-4">User Activity Monitoring</h5>
              
              <!-- View User Activity Logs -->
              <div class="mb-4">
                <h6>View User Activity Logs</h6>
                <p>Access to logs or audit trails that track user activity and actions taken on the platform.</p>
                <!-- Button to trigger displaying logs (optional) -->
                <button class="btn btn-primary" onclick="displayLogs()">View Logs</button>
              </div>
              
              <!-- User Activity Logs Table (Initially hidden) -->
              <div id="logsTable" style="display: none;">
                <h6>User Activity Logs</h6>
                <div class="table-responsive">
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>User ID</th>
                        <th>Action</th>
                        <th>Timestamp</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>Login</td>
                        <td>2024-03-30 10:15:22</td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>Update Profile</td>
                        <td>2024-03-29 14:30:10</td>
                      </tr>
                      <!-- Add more log entries as needed -->
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>

     <script src="Ecomonoassets/js/plugins/simple-datatables.js"></script>
    <script>
      const dataTable = new simpleDatatables.DataTable('#pc-dt-simple', {
        sortable: false,
        perPage: 5
      });
    </script>
          <script>
          // Function to display logs
          function displayLogs() {
            document.getElementById('logsTable').style.display = 'block';
          }
        </script>



<div class="col-md-6">
  <div class="card">
    <div class="card-body">
      <h5 class="mb-4">User Activity Monitoring</h5>
      
      <!-- Monitor User Engagement -->
      <div class="mb-4">
        <h6>Monitor User Engagement</h6>
        <p>Insights into user behavior, including login frequency, session duration, and interactions with platform features.</p>
        <!-- Button to trigger displaying engagement data (optional) -->
        <button class="btn btn-info" onclick="displayEngagements()">Monitor Engagement</button>
      </div>
      
      <!-- User Engagement Table (Initially hidden) -->
      <div id="engagementsTable" style="display: none;">
        <h6>User Engagements</h6>
        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>User ID</th>
                <th>Login Frequency</th>
                <th>Session Duration</th>
                <th>Interactions</th>
              </tr>
            </thead>
            <tbody>
              <!-- Sample data - Replace with actual engagement data -->
              <tr>
                <td>1</td>
                <td>10 times</td>
                <td>2 hours</td>
                <td>30 interactions</td>
              </tr>
              <tr>
                <td>2</td>
                <td>5 times</td>
                <td>1.5 hours</td>
                <td>20 interactions</td>
              </tr>
              <!-- Add more engagement data as needed -->
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

<script>
  // Function to display engagement data
  function displayEngagements() {
    document.getElementById('engagementsTable').style.display = 'block';
  }
</script>


<div class="row">

<div class="col-md-12">
  <div class="card">
    <div class="card-body">
      <h5 class="mb-4">User Feedback & Reviews</h5>
      
      <!-- Feedback Chart -->
      <div class="mb-4">
        <canvas id="feedbackChart" width="400" height="200"></canvas>
      </div>
      
      <!-- Feedback Table -->
      <div class="table-responsive">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>User</th>
              <th>Feedback</th>
              <th>Rating</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>John Doe</td>
              <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</td>
              <td>4.5</td>
            </tr>
            <tr>
              <td>Jane Doe</td>
              <td>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</td>
              <td>5</td>
            </tr>
            <!-- Add more feedback entries as needed -->
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
  // Sample data for feedback chart
  const feedbackChartData = {
    labels: ['Positive', 'Neutral', 'Negative'],
    datasets: [{
      label: 'Feedback Sentiment',
      data: [25, 10, 5],
      backgroundColor: [
        'rgba(75, 192, 192, 0.5)',
        'rgba(255, 206, 86, 0.5)',
        'rgba(255, 99, 132, 0.5)',
      ],
      borderColor: [
        'rgba(75, 192, 192, 1)',
        'rgba(255, 206, 86, 1)',
        'rgba(255, 99, 132, 1)',
      ],
      borderWidth: 1
    }]
  };

  // Draw feedback chart
  const feedbackChart = new Chart(document.getElementById('feedbackChart').getContext('2d'), {
    type: 'bar',
    data: feedbackChartData,
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>



      <div class="row">
        <!-- [ sample-page ] start -->
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                <h5 class="mb-4">User Management</h5>
                
                <!-- Add New User -->
                <div class="mb-4">
                    <h6>Add New User</h6>
                    <p>Functionality to create new user accounts for various roles (customer, seller, blogger, etc.) on the platform.</p>
                    <button class="btn btn-primary">Add New User</button>
                </div>
                
                <!-- Edit User Details -->
                <div class="mb-4">
                    <h6>Edit User Details</h6>
                    <p>Ability to update user information such as name, email address, and contact information.</p>
                    <button class="btn btn-info">Edit User Details</button>
                </div>
                
                <!-- Deactivate User -->
                <div>
                    <h6>Deactivate User</h6>
                    <p>Option to deactivate or suspend user accounts temporarily or permanently if needed.</p>
                    <button class="btn btn-danger">Deactivate User</button>
                </div>
                </div>
                
            </div>
            </div>


        <!-- [ sample-page ] end -->
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                <h5 class="mb-4">Role Permissions</h5>
                
                <!-- Define Roles -->
                <div class="mb-4">
                    <h6>Define Roles</h6>
                    <p>Capability to create and define different roles with specific permissions and access levels (e.g., admin, moderator, customer support).</p>
                    <button class="btn btn-primary">Define Roles</button>
                </div>
                
                <!-- Assign Roles -->
                <div class="mb-4">
                    <h6>Assign Roles</h6>
                    <p>Ability to assign roles to individual users based on their responsibilities and functions within the platform.</p>
                    <button class="btn btn-info">Assign Roles</button>
                </div>
                
                <!-- Manage Role Permissions -->
                <div>
                    <h6>Manage Role Permissions</h6>
                    <p>Tools to customize and adjust permissions for each role, specifying which features and functionalities users can access.</p>
                    <button class="btn btn-warning">Manage Role Permissions</button>
                </div>
            </div>
        </div>
        </div>

      </div>


      


      

      <!-- [ Main Content ] end -->
      </div>
  </div>
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
                    <img class="img-fluid rounded" src="Ecomonoassets/images/application/img-prod-4.jpg"
                      alt="User image">
                  </div>
                </div>
                <div class="position-absolute end-0 top-0 p-3">
                  <span class="badge bg-success">In Stock</span>
                </div>
              </div>
            </div>
            <div class="col-sm-8">
              <h5>Canon EOS 1500D 24.1 Digital</h5>
              <p class="text-muted">Image Enlargement: After shooting, you can enlarge photographs of the objects for clear zoomed view. Change In Aspect Ratio: Boldly crop the subject and save it with a composition that has impact.</p>
              <div class="table-responsive">
                <table class="table w-auto table-borderless">
                  <tbody>
                    <tr>
                      <td class="text-muted py-1">Categories</td>
                      <td class="py-1">Electronics, Camera</td>
                    </tr>
                    <tr>
                      <td class="text-muted py-1">Qty</td>
                      <td class="py-1">21</td>
                    </tr>
                    <tr>
                      <td class="text-muted py-1">Price</td>
                      <td class="py-1"><h5 class="mb-0">$399</h5></td>
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
  <!-- [ Main Content ] end -->
   <!-- Required Js -->
<script src="Ecomonoassets/js/plugins/popper.min.js"></script>
<script src="Ecomonoassets/js/plugins/simplebar.min.js"></script>
<script src="Ecomonoassets/js/plugins/bootstrap.min.js"></script>
<script src="Ecomonoassets/js/fonts/custom-font.js"></script>
<script src="Ecomonoassets/js/pcoded.js"></script>
<script src="Ecomonoassets/js/plugins/feather.min.js"></script>





<script>layout_change('light');</script>




<script>layout_theme_contrast_change('false');</script>



<script>change_box_container('false');</script>


<script>layout_caption_change('true');</script>




<script>layout_rtl_change('false');</script>


<script>preset_change("preset-1");</script>

  <!-- [Page Specific JS] start -->
  <script src="Ecomonoassets/js/plugins/simple-datatables.js"></script>
  <script>
    const dataTable = new simpleDatatables.DataTable('#pc-dt-simple', {
      sortable: false,
      perPage: 5
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
</body>
<!-- [Body] end -->


<!-- Mirrored from ableproadmin.com/application/ecom_product-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 Mar 2024 13:22:24 GMT -->
</html>