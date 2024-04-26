<?php
    // Include the database connection file
    include_once("../../controllers/brand_controller.php");
    include_once("../../controllers/category_controller.php");
    $brands = viewAllBrands_ctr();
    $Categories = viewAllCategories_ctr();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.9.1/dist/chart.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script> 
    <title>Ecomono</title>
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
                    <a href="index.php" class="active">
                        <span class="icon"><i class="ri-bar-chart-line"></i></span>
                        <div class="sidebar--item">Overview</div>
                    </a>
                </li>
                <li>
                    <a href="pages/products.php">
                        <span class="icon"><i class="ri-handbag-line"></i></span>
                        <div class="sidebar--item">Products</div>
                    </a>
                </li>

                <li>
                    <a href="pages/orders.php">
                        <span class="icon"><i class="ri-booklet-line"></i></span>
                        <div class="sidebar--item">Orders</div>
                    </a>
                </li>
                <li>
                    <a href="pages/inventory.php">
                        <span class="icon"><i class="ri-shopping-cart-2-line"></i></span>
                        <div class="sidebar--item">Inventory</div>
                    </a>
                </li>
                <li>
                    <a href="pages/customers.php">
                        <span class="icon"><i class="ri-user-line"></i></span>
                        <div class="sidebar--item">Customers</div>
                    </a>
                </li>
                <li>
                    <a href="pages/analytics.php">
                        <span class="icon"><i class="ri-booklet-line"></i></span>
                        <div class="sidebar--item">Analytics</div>
                    </a>
                </li>
                <li>
                    <a href="pages/marketing.php">
                        <span class="icon"><i class="ri-booklet-line"></i></span>
                        <div class="sidebar--item">Marketing</div>
                    </a>
                </li>
                <li>
                    <a href="pages/settings.php">
                        <span class="icon"><i class="ri-settings-3-line"></i></span>
                        <div class="sidebar--item">Settings</div>
                    </a>
                </li>
            </ul>
            <ul class="sidebar--bottom--items">
                <li>
                    <a href="pages/help.php">
                        <span class="icon"><i class="ri-question-line"></i></span>
                        <div class="sidebar--item">Help</div>
                    </a>
                </li>
                <li>
                    <a href="pages/logout.php">
                        <span class="icon"><i class="ri-logout-box-r-line"></i></span>
                        <div class="sidebar--item">Logout</div>
                    </a>
                </li>
            </ul>
        </div>
        <div class="main--container">
            <div class="col-md-12">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="javascript: void(0)">E-commerce</a></li>
                    <li class="breadcrumb-item" aria-current="page">Add New Product</li>
                </ul>
            </div>
            <div class="col-md-12">
              <div class="page-header-title">
                <h2 class="mb-0">Add New Product</h2>
              </div>
            </div>
      <!-- [ breadcrumb ] end -->
      <!-- [ Main Content ] start -->
        <div class="row">
            <!-- [ sample-page ] start -->
            <h2>Add New Product</h2>
                    <form id="productForm" action="../../actions/add_product_action.php" method="post" enctype="multipart/form-data">
                        <label for="productName">Product Name:</label>
                        <input type="text" id="productName" name="productName" required>
                        <label for="productPrice">Price:</label>
                        <input type="number" id="productPrice" name="productPrice" min="0" step="0.01" required>
                        <label for="productCategory">Category: </label>
                            <select for="productCategory" name="productBrand">
                            <?php foreach($brands as $brand): ?>
                                <option selected>Choose Brands</option>
                                <option value="<?php echo $brand['BrandID']; ?>"><?php echo $brand['BrandName']; ?></option>
                                <?php endforeach; ?> 
                            </select>

                        <label for="productCategory">Category: </label>
                            <select for="productCategory" name="productCategory">
                            <?php foreach($Categories as $category): ?>

                                <option value="<?php echo $category['CategoryID']; ?>"><?php echo $category['CategoryName']; ?></option>
                            <?php endforeach; ?> 
                        </select>
                        <label for="productPrice">Quantity:</label>
                        <input type="number" id="productPrice" name="quantity" required>

                        <label for="productDescription">Description:</label>
                        <textarea id="productDescription" name="productDescription" required></textarea>
                        <label for="productKeyword">Keyword:</label>
                        <input type="text" id="productKeyword" name="productKeyword" required>
                        <label for="productImage">Image Upload:</label>
                        <input type="file" id="productImage" name="productImage" accept="image/*">
                        <button type="submit">Add Product</button>
                        <button type="button" id="closePopup">Cancel</button>
                    </form>
        </div>    
   
    </section>
    <script src="../js/main.js"></script>
    <script src="../js/sales.js"></script>
    <script src="../js/orders.js"></script>
    <script src="../js/products.js"></script>
    <script src="../js/customers.js"></script>
    <script src="../js/tarsale.js"></script>
</body>
</html>