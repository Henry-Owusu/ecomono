<?php
require("../controllers/user_controller.php");

session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    // Retrieve form data
    $shopName = $_POST['shopName'];
    $location = $_POST['location'];
    $digitalAddress = $_POST['digitalAddress'];
    $ghanaCard = $_POST['ghanaCard'];
    $seller = $_SESSION['user_id'];

    // Retrieve other form data


    


    // Call the addProduct function and pass form data
    $addShopResult = addShop_ctr($shopName, $location, $seller, $digitalAddress, $ghanaCard);
    // Redirect to the appropriate page after adding the product
    if ($addShopResult !== false) {
        // echo "succes";
        // Registration successful
        header("Location: ../seller/");
    } else {
        // Registration failed
        echo "Form not submitted.";
}
}
?>
