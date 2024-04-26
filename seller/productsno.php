<?php 
    include_once("../controllers/product_controller.php");
    include_once("../controllers/category_controller.php");
    $categories = viewAllCategories_ctr();
    $products = viewAllProducts_ctr();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="../admin/assets/fonts/inter/inter.css" id="main-font-link" />
    <!-- [Tabler Icons] https://tablericons.com -->
    <link rel="stylesheet" href="../admin/assets/fonts/tabler-icons.min.css" >
    <!-- [Feather Icons] https://feathericons.com -->
    <link rel="stylesheet" href="../admin/assets/fonts/feather.css" >
    <!-- [Font Awesome Icons] https://fontawesome.com/icons -->
    <link rel="stylesheet" href="../admin/assets/fonts/fontawesome.css" >
    <!-- [Material Icons] https://fonts.google.com/icons -->
    <link rel="stylesheet" href="../admin/assets/fonts/material.css" >
    <!-- [Template CSS Files] -->
    <link rel="stylesheet" href="css/gottenstyle.css" id="main-style-link" >
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.9.1/dist/chart.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script> 

    <title>Seller Products</title>
</head>
<body class="body">
    <section class="header">
        <div class="logo">
            <i class="ri-menu-line menu"></i>
            <h2><span class="eco">ECO</span><ion-icon name="leaf-outline" class="leaf"></ion-icon><span class="mono">MONO</span></h2>
        </div>
        <div class="header--items">
            <i class="ri-search-2-line"></i>
            <div class="dark--theme--btn">
                <i class="ri-moon-line moon"></i>
                <i class="ri-sun-line sun"></i>
            </div>
            <i class="ri-notification-2-line"></i>
            <i class="ri-wechat-2-line chat"></i>
            <div class="profile">
                <img src="assets/images/profile.jpg" alt="">
            </div>
        </div>
    </section>
    <section class="main">
        <div class="sidebar">
            <ul class="sidebar--items">
                <li>
                    <a href="index.php">
                        <span class="icon"><i class="ri-bar-chart-line"></i></span>
                        <div class="sidebar--item">Overview</div>
                    </a>
                </li>
                <li>
                    <a href="products.php"  class="active">
                        <span class="icon"><i class="ri-handbag-line"></i></span>
                        <div class="sidebar--item">Products</div>
                    </a>
                </li>

                <li>
                    <a href="orders.php">
                        <span class="icon"><i class="ri-booklet-line"></i></span>
                        <div class="sidebar--item">Orders</div>
                    </a>
                </li>
                <li>
                    <a href="inventory.php">
                        <span class="icon"><i class="ri-shopping-cart-2-line"></i></span>
                        <div class="sidebar--item">Inventory</div>
                    </a>
                </li>
                <li>
                    <a href="customers.php">
                        <span class="icon"><i class="ri-user-line"></i></span>
                        <div class="sidebar--item">Customers</div>
                    </a>
                </li>
                <li>
                    <a href="analytics.php">
                        <span class="icon"><i class="ri-booklet-line"></i></span>
                        <div class="sidebar--item">Analytics</div>
                    </a>
                </li>
                <li>
                    <a href="marketing.php">
                        <span class="icon"><i class="ri-booklet-line"></i></span>
                        <div class="sidebar--item">Marketing</div>
                    </a>
                </li>
                <li>
                    <a href="settings.php">
                        <span class="icon"><i class="ri-settings-3-line"></i></span>
                        <div class="sidebar--item">Settings</div>
                    </a>
                </li>
            </ul>
            <ul class="sidebar--bottom--items">
                <li>
                    <a href="help.php">
                        <span class="icon"><i class="ri-question-line"></i></span>
                        <div class="sidebar--item">Help</div>
                    </a>
                </li>
                <li>
                    <a href="logout.php">
                        <span class="icon"><i class="ri-logout-box-r-line"></i></span>
                        <div class="sidebar--item">Logout</div>
                    </a>
                </li>
            </ul>
        </div>
        
        <div class="main--container">
        <div class="row">
        <!-- [ sample-page ] start -->
        <div class="col-sm-12">
          <div class="card table-card">
            <div class="card-body">
              <div class="text-end p-4 pb-sm-2">
                <a href="ecom_product-add.html" class="btn btn-primary">
                  <i class="ti ti-plus f-18"></i> Add Product
                </a>
              </div>
              <div class="table-responsive">
                <table class="table table-hover" id="pc-dt-simple">
                  <thead>
                    <tr>
                    <th class="text-end">#</th>
                      <th>Product Detail</th>
                      <th>Brand</th>
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
                            <p class="text-muted f-12 mb-0"><?php echo $product['Description']; ?></p>
                          </div>
                        </div>
                      </td>
                      <td><?php echo $product['BrandName']; ?></td>
                      <td><?php echo $product['Category']; ?></td>
                      <td class="text-end"><?php echo $product['Material']; ?></td>
                      <td class="text-end">GHc <?php echo $product['Price']; ?></td>
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

      <div class="row">
        <!-- [ sample-page ] start -->
        <div class="col-sm-12">
          <div class="card table-card">
            <div class="card-body">
              <div class="text-end p-4 pb-sm-2">
                <a href="addProduct.php" class="btn btn-primary">
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
                            <a href="#" onclick="deleteProduct(<?php echo $category['CategoryID']; ?>)" class="avtar avtar-xs btn-link-danger btn-pc-default">
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
 
    </section>
    <script src="../admin/assets/js/main.js"></script>
    <script src="../admin/assets/js/plugins/popper.min.js"></script>
    <script src="../admin/assets/js/plugins/simplebar.min.js"></script>
    <script src="../admin/assets/js/plugins/bootstrap.min.js"></script>
    <script src="../admin/assets/js/plugins/feather.min.js"></script>
    <script src="../admin/assets/js/plugins/simple-datatables.js"></script>
    <script>
        const dataTable = new simpleDatatables.DataTable('#pc-dt-simple', {
        sortable: false,
        perPage: 5
        });
    </script>
    <script src="../js/sales.js"></script>
    <script src="../js/orders.js"></script>
    <script src="../js/products.js"></script>
    <script src="../js/customers.js"></script>
    <script src="../js/tarsale.js"></script>
</body>
</html>