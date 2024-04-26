<?php
require("../controllers/product_controller.php");

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['pid']) && isset($_POST['productName']) && isset($_POST['productPrice']) && isset($_POST['productBrand'])
&& isset($_POST['productCategory']) && isset($_POST['shop']) && isset($_POST['quantity']) && isset($_POST['productDescription']) 
&& isset($_FILES['newProductImage']) && isset($_POST['productMaterial']) && isset($_POST['productKeyword'])) {
    // Retrieve form data
    $productId = $_POST['pid'];
    $newProductName = $_POST['productName'];
    $newProductPrice = $_POST['productPrice'];
    $newProductBrand= $_POST['productBrand'];
    $newProductCategory = $_POST['productCategory'];
    $newShop = $_POST['shop'];
    $newProductDescription = $_POST['productDescription'];
    $newProductMaterial = $_POST['productMaterial'];
    $newProductKeyword = $_POST['productKeyword'];
    $newQuantity = $_POST['quantity'];
    $newProductImage = $_FILES['newProductImage'];
    var_dump($newProductImage);
    // Call the editProducts function and pass form data
    $editProductResult = editProduct_ctr($productId, $newProductName, $newProductPrice, $newProductCategory, $newShop, $newProductBrand, $newProductDescription, $newProductImage, $newProductMaterial, $newProductKeyword, $newQuantity);

    // Redirect to the appropriate page after editing the product
    if ($editProductResult !== false) {
        // Product editing successful
        header("Location: ../admin/productManagement.php");

    } else {
        // Product editing failed
        echo json_encode(array('status' => 'error', 'message' => 'Product update failed'));
    }
} else {
    // Invalid request method or missing parameters
    // echo json_encode(array('status' => 'error', 'message' => 'Invalid request'));
}
?>
