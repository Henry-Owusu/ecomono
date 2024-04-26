<?php
require("../controllers/product_controller.php");



if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    // Retrieve form data
    $productName = $_POST['productName'];
    $productPrice = $_POST['productPrice'];
    $productCategory = $_POST['productCategory'];
    $productBrand = $_POST['productBrand'];
    $productDescription = $_POST['productDescription'];
    $productKeyword = $_POST['productKeyword'];
    $quantity = $_POST['quantity'];
    $productMaterial = $_POST['productMaterial'];
    $shop = $_POST['shop'];
    $productImage = $_FILES['productImage'];
    // Retrieve other form data

    // Create an instance of the GeneralController


    // Call the addProduct function and pass form data
    $addProductResult = addProduct_ctr($productName, $productPrice, $productCategory, $shop, $productBrand, $productDescription, $productImage, $productMaterial, $productKeyword, $quantity);
    // Redirect to the appropriate page after adding the product
    if ($addProductResult !== false) {
        // Registration successful
        header("Location: ../admin/productManagement.php");
    } else {
        // Registration failed
        echo "Form not submitted.";
}
}
?>
