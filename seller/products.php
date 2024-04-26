<?php
            // Include the database connection file
            include_once("../controllers/product_controller.php");          
            $products = viewAllProducts_ctr();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.9.1/dist/chart.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script> 
    <title>VM store.</title>
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
                    <a href="index.php" >
                        <span class="icon"><i class="ri-bar-chart-line"></i></span>
                        <div class="sidebar--item">Overview</div>
                    </a>
                </li>
                <li>
                    <a href="products.php" class="active">
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
        <div class="col-md-12">
              <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="https://ableproadmin.com/dashboard/index.html">Home</a></li>
                <li class="breadcrumb-item"><a href="javascript: void(0)">E-commerce</a></li>
                <li class="breadcrumb-item" aria-current="page">Add New Product</li>
              </ul>
        </div>
            <h2>Product Page</h2>
            <div class="search-container">
                <input type="text" name="search" class="search-input" placeholder="Search...">
            </div>      
                <a href="pages/add_product.php">
                <button class="add-product-btn"><ion-icon name="add-outline"></ion-icon>Add Product</button>
                </a>

            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>Product Name</th>
                            <th>Product Image</th>
                            <th>Brand</th>
                            <th>Category</th>
                            <th>Price</th>
                            <th>Stock</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach($products as $product): ?>

                        <tr>                        
                            <td><a href="#"><?php echo $product['ProductName']; ?></a></td>
                            <td><img src="<?php echo $product['productImage']; ?>" alt="<?php echo $product['ProductName']; ?>" class="product-image"></td>
                            <td>Brand A</td>
                            <td>Category X</td>
                            <td><?php echo $product['Price']; ?></td>
                            <td><?php echo $product['Quantity']; ?></td>
                            <td><span class="status pending">Pending</span></td>
                            <td>
                                <a href="#"><i class="fas fa-eye"></i></a>
                                <a href=""><i class="fas fa-edit"></i></a>
                                <a href="#" onclick="deleteBrand(<?php echo $product['ProductID']; ?>)"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                        <?php endforeach; ?>   
                    </tbody>
                </table>
            </div>
           <div class="pagination">
            <button class="page-btn">&laquo; Prev</button>
            <button class="page-btn">1</button>
            <button class="page-btn">2</button>
            <button class="page-btn">3</button>
            <button class="page-btn">Next &raquo;</button>
            </div>
        </div>    
    </section>
    <script src="../js/main.js"></script>
    <script>
    function deleteBrand(productId) {
            var confirmation = confirm("Are you sure you want to delete this product?");
            if (confirmation) {
                // Send an AJAX request to delete the brand
                var xhr = new XMLHttpRequest();
                xhr.open("POST", "../../actions/product_action/delete_product_action.php", true);
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
    <script src="../js/sales.js"></script>
    <script src="../js/orders.js"></script>
    <script src="../js/products.js"></script>
    <script src="../js/customers.js"></script>
    <script src="../js/tarsale.js"></script>
</body>
</html>