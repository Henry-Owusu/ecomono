<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="../../css/admin.css"> -->
    <link rel="stylesheet" href="../../css/sellerproducts.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.9.1/dist/chart.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <title>VM store.</title>
</head>
<body class="body">
    <section class="header">
        <div class="logo">
            <i class="ri-menu-line menu"></i>
            <div class="logo">
                <span class="eco">ECO</span><ion-icon name="leaf-outline" class="leaf"></ion-icon><span class="mono">MONO</span>
            </div>
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
                    <a href="#">
                        <span class="icon"><i class="ri-bar-chart-line"></i></span>
                        <div class="sidebar--item">Overview</div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="ri-handbag-line"></i></span>
                        <div class="sidebar--item">Product</div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="ri-user-line"></i></span>
                        <div class="sidebar--item">Invoice</div>
                    </a>
                </li>
                <li>
                    <a href="#" class="active">
                        <span class="icon"><i class="ri-booklet-line"></i></span>
                        <div class="sidebar--item">Orders</div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="ri-booklet-line"></i></span>
                        <div class="sidebar--item">Brand</div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="ri-shopping-cart-2-line"></i></span>
                        <div class="sidebar--item">Category</div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="ri-settings-3-line"></i></span>
                        <div class="sidebar--item">Settings</div>
                    </a>
                </li>
            </ul>
            <ul class="sidebar--bottom--items">
                <li>
                    <a href="#">
                        <span class="icon"><i class="ri-question-line"></i></span>
                        <div class="sidebar--item">Help</div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="ri-logout-box-r-line"></i></span>
                        <div class="sidebar--item">Logout</div>
                    </a>
                </li>
            </ul>
        </div>
        <div class="main--container">
        <section class="content">

		  <div class="row">
			  <div class="col-12">
				<div class="box">
				  <div class="box-body">
					<div class="table-responsive">
						<table id="productorder" class="table table-hover no-wrap product-order" data-page-size="10">
							<thead>
								<tr>
									 <th>Customer</th>
									 <th>Order ID</th>
									 <th>Photo</th>
									 <th>Product</th>
									 <th>Quantity</th>
									 <th>Date</th>
									 <th>Status</th>
									 <th>Actions</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Maical Roy</td>
									<td>#12485791</td>
									<td><img src="../images/product/product-1.png" alt="product" width="50"></td>
									<td>Product Title</td>
									<td>17</td>
									<td>24-01-2018</td>
									<td><span class="badge badge-pill badge-success">Paid</span></td>
									<td><a href="javascript:void(0)" class="text-info me-10" data-bs-toggle="tooltip" data-bs-original-title="Edit">
											<i class="ti-marker-alt"></i>
										</a> 
										<a href="javascript:void(0)" class="text-danger" data-bs-original-title="Delete" data-bs-toggle="tooltip">
											<i class="ti-trash"></i>
										</a>
									</td>
								</tr>
								<tr>
									<td>Maical Roy</td>
									<td>#12485791</td>
									<td><img src="../images/product/product-2.png" alt="product" width="50"></td>
									<td>Product Title</td>
									<td>12</td>
									<td>24-01-2018</td>
									<td><span class="badge badge-pill badge-warning">Pending</span></td>
									<td><a href="javascript:void(0)" class="text-info me-10" data-bs-toggle="tooltip" data-bs-original-title="Edit">
											<i class="ti-marker-alt"></i>
										</a> 
										<a href="javascript:void(0)" class="text-danger" data-bs-original-title="Delete" data-bs-toggle="tooltip">
											<i class="ti-trash"></i>
										</a>
									</td>
								</tr>
								<tr>
									<td>Maical Roy</td>
									<td>#12485791</td>
									<td><img src="../images/product/product-3.png" alt="product" width="50"></td>
									<td>Product Title</td>
									<td>15</td>
									<td>24-01-2018</td>
									<td><span class="badge badge-pill badge-success">Paid</span></td>
									<td><a href="javascript:void(0)" class="text-info me-10" data-bs-toggle="tooltip" data-bs-original-title="Edit">
											<i class="ti-marker-alt"></i>
										</a> 
										<a href="javascript:void(0)" class="text-danger" data-bs-original-title="Delete" data-bs-toggle="tooltip">
											<i class="ti-trash"></i>
										</a>
									</td>
								</tr>
								<tr>
									<td>Maical Roy</td>
									<td>#12485791</td>
									<td><img src="../images/product/product-4.png" alt="product" width="50"></td>
									<td>Product Title</td>
									<td>19</td>
									<td>24-01-2018</td>
									<td><span class="badge badge-pill badge-danger">Failed</span></td>
									<td><a href="javascript:void(0)" class="text-info me-10" data-bs-toggle="tooltip" data-bs-original-title="Edit">
											<i class="ti-marker-alt"></i>
										</a> 
										<a href="javascript:void(0)" class="text-danger" data-bs-original-title="Delete" data-bs-toggle="tooltip">
											<i class="ti-trash"></i>
										</a>
									</td>
								</tr>
								<tr>
									<td>Maical Roy</td>
									<td>#12485791</td>
									<td><img src="../images/product/product-5.png" alt="product" width="50"></td>
									<td>Product Title</td>
									<td>24</td>
									<td>24-01-2018</td>
									<td><span class="badge badge-pill badge-success">Pending</span></td>
									<td><a href="javascript:void(0)" class="text-info me-10" data-bs-toggle="tooltip" data-bs-original-title="Edit">
											<i class="ti-marker-alt"></i>
										</a> 
										<a href="javascript:void(0)" class="text-danger" data-bs-original-title="Delete" data-bs-toggle="tooltip">
											<i class="ti-trash"></i>
										</a>
									</td>
								</tr>
								<tr>
									<td>Maical Roy</td>
									<td>#12485791</td>
									<td><img src="../images/product/product-6.png" alt="product" width="50"></td>
									<td>Product Title</td>

									<td>04</td>
									<td>24-01-2018</td>
									<td><span class="badge badge-pill badge-danger">Failed</span></td>
									<td><a href="javascript:void(0)" class="text-info me-10" data-bs-toggle="tooltip" data-bs-original-title="Edit">
											<i class="ti-marker-alt"></i>
										</a> 
										<a href="javascript:void(0)" class="text-danger" data-bs-original-title="Delete" data-bs-toggle="tooltip">
											<i class="ti-trash"></i>
										</a>
									</td>
								</tr>
								<tr>
									<td>Maical Roy</td>
									<td>#12485791</td>
									<td><img src="../images/product/product-7.png" alt="product" width="50"></td>
									<td>Product Title</td>
									<td>10</td>
									<td>24-01-2018</td>
									<td><span class="badge badge-pill badge-success">Paid</span></td>
									<td><a href="javascript:void(0)" class="text-info me-10" data-bs-toggle="tooltip" data-bs-original-title="Edit">
											<i class="ti-marker-alt"></i>
										</a> 
										<a href="javascript:void(0)" class="text-danger" data-bs-original-title="Delete" data-bs-toggle="tooltip">
											<i class="ti-trash"></i>
										</a>
									</td>
								</tr>
								<tr>
									<td>Maical Roy</td>
									<td>#12485791</td>
									<td><img src="../images/product/product-8.png" alt="product" width="50"></td>
									<td>Product Title</td>
									<td>11</td>
									<td>24-01-2018</td>
									<td><span class="badge badge-pill badge-warning">Pending</span></td>
									<td><a href="javascript:void(0)" class="text-info me-10" data-bs-toggle="tooltip" data-bs-original-title="Edit">
											<i class="ti-marker-alt"></i>
										</a> 
										<a href="javascript:void(0)" class="text-danger" data-bs-original-title="Delete" data-bs-toggle="tooltip">
											<i class="ti-trash"></i>
										</a>
									</td>
								</tr>
								<tr>
									<td>Maical Roy</td>
									<td>#12485791</td>
									<td><img src="../images/product/product-9.png" alt="product" width="50"></td>
									<td>Product Title</td>
									<td>13</td>
									<td>24-01-2018</td>
									<td><span class="badge badge-pill badge-success">Paid</span></td>
									<td><a href="javascript:void(0)" class="text-info me-10" data-bs-toggle="tooltip" data-bs-original-title="Edit">
											<i class="ti-marker-alt"></i>
										</a> 
										<a href="javascript:void(0)" class="text-danger" data-bs-original-title="Delete" data-bs-toggle="tooltip">
											<i class="ti-trash"></i>
										</a>
									</td>
								</tr>
								<tr>
									<td>Maical Roy</td>
									<td>#12485791</td>
									<td><img src="../images/product/product-10.png" alt="product" width="50"></td>
									<td>Product Title</td>
									<td>34</td>
									<td>24-01-2018</td>
									<td><span class="badge badge-pill badge-warning">Pending</span></td>
									<td><a href="javascript:void(0)" class="text-info me-10" data-bs-toggle="tooltip" data-bs-original-title="Edit">
											<i class="ti-marker-alt"></i>
										</a> 
										<a href="javascript:void(0)" class="text-danger" data-bs-original-title="Delete" data-bs-toggle="tooltip">
											<i class="ti-trash"></i>
										</a>
									</td>
								</tr>
								<tr>
									<td>Maical Roy</td>
									<td>#12485791</td>
									<td><img src="../images/product/product-11.png" alt="product" width="50"></td>
									<td>Product Title</td>
									<td>22</td>
									<td>24-01-2018</td>
									<td><span class="badge badge-pill badge-danger">Failed</span></td>
									<td><a href="javascript:void(0)" class="text-info me-10" data-bs-toggle="tooltip" data-bs-original-title="Edit">
											<i class="ti-marker-alt"></i>
										</a> 
										<a href="javascript:void(0)" class="text-danger" data-bs-original-title="Delete" data-bs-toggle="tooltip">
											<i class="ti-trash"></i>
										</a>
									</td>
								</tr>
								<tr>
									<td>Maical Roy</td>
									<td>#12485791</td>
									<td><img src="../images/product/product-12.png" alt="product" width="50"></td>
									<td>Product Title</td>
									<td>12</td>
									<td>24-01-2018</td>
									<td><span class="badge badge-pill badge-warning">Pending</span></td>
									<td><a href="javascript:void(0)" class="text-info me-10" data-bs-toggle="tooltip" data-bs-original-title="Edit">
											<i class="ti-marker-alt"></i>
										</a> 
										<a href="javascript:void(0)" class="text-danger" data-bs-original-title="Delete" data-bs-toggle="tooltip">
											<i class="ti-trash"></i>
										</a>
									</td>
								</tr>

							</tbody>						
						</table>
					</div>
				  </div>
				</div>
			  </div>		  
		  </div>

		</section>
        </div>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script> 
    <script src="../../js/main.js"></script>
    <script src="../../js/sales.js"></script>
    <script src="../../js/orders.js"></script>
    <script src="../../js/products.js"></script>
    <script src="../../js/customers.js"></script>
    <script src="../../js/tarsale.js"></script>
</body>
</html>