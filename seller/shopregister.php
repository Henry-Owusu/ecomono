<?php 
session_start();

    // Check if the session variables are set
    if (isset($_SESSION['user_id'])) {
        $user_id = $_SESSION['user_id'];
    } else {
        // Handle the case when 'user_id' session variable is not set
        // You might want to set a default value or perform some other action
        $user_id = null; // Or any other default value
    }

    if (isset($_SESSION['user_name'])) {
        $user_name = $_SESSION['user_name'];
    } else {
        // Handle the case when 'user_name' session variable is not set
        // You might want to set a default value or perform some other action
        $user_name = null; // Or any other default value
    }

?>


<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Shop Registration</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="assets/css/material-design-iconic-font.min.css">

		<!-- STYLE CSS -->
		<link rel="stylesheet" href="assets/css/shopregister.css">
		<style>
			.tacbox {
				display:block;
				padding: 1em;
				margin: 2em;
				border: 3px solid #ddd;
				background-color: #eee;
				max-width: 800px;
				}

				input {
				height: 2em;
				width: 2em;
				vertical-align: middle;
				}
		</style>
	</head>

	<body>

		<div class="wrapper" style="background-image: url('../images/homepage/heroimage.jpg');">
			<div class="inner">
				<div class="image-holder">
					<img src="../images/homepage/heroimage3.jpg" alt="">
				</div>
				<form action="../actions/addShop_action.php" method="post">
					<h3>Shop Registration</h3>
					<div class="form-group">
						<input type="text" placeholder="Shop Name" class="form-control" name="shopName">
					</div>
					<div class="form-wrapper">
						<input type="text" placeholder="Location" class="form-control" name="location">
						<i class="zmdi zmdi-account"></i>
					</div>
					<div class="form-wrapper">
						<input type="text" placeholder="Digital Address - GA-123-4567" class="form-control" name="digitalAddress">
						<i class="zmdi zmdi-account"></i>
					</div>
					<div class="form-wrapper">
						<input type="text" placeholder="Vendor Ghana Card Id - GHA-000000000-0" class="form-control" name="ghanaCard">
						<i class="zmdi zmdi-account"></i>
					</div>
					<div class="tacbox">
						<input id="checkbox" type="checkbox" />
						<label for="checkbox"> I agree to these <a href="#">Terms and Conditions</a>.</label>
					  </div>

					<button type="submit" name="submit">Register
						<i class="zmdi zmdi-arrow-right"></i>
					</button>
				</form>
			</div>
		</div>
		
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>