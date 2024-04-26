<?php
require("../controllers/cart_controller.php");

session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    // Retrieve form data
    $productId = $_POST['product_id'];
    $ipAddress = '';
    $customerId = $_SESSION['user_id'];
    $quantity = 1;
    // Retrieve other form data

    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ipAddress = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ipAddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        $ipAddress = $_SERVER['REMOTE_ADDR'];
    }
    


    // Call the addProduct function and pass form data
    $addProductResult = addToCart_ctr($productId, $ipAddress, $customerId, $quantity);
    // Redirect to the appropriate page after adding the product
    if ($addProductResult !== false) {
        // echo "succes";
        // Registration successful
        header("Location: ../view/products.php");
    } else {
        // Registration failed
        echo "Form not submitted.";
}
}
?>
