<?php
//connect to the product class
include_once("../classes/product_class.php");



// function to create new product
function addProduct_ctr($productName, $productPrice, $productCategory, $shop, $productBrand, $productDescription, $productImage, $productMaterial, $productKeyword, $quantity) {
    $newProduct = new product_class();
    $result = $newProduct->addProduct($productName, $productPrice, $productCategory, $shop, $productBrand, $productDescription, $productImage, $productMaterial, $productKeyword, $quantity);
    return $result;
}


// function to view all products
function viewAllProducts_ctr()
{
    $products = new product_class();
    return $products->viewAllProducts();
}


function viewProductDetails_ctr($productId) {
    $products = new product_class();
    return $products->viewProductDetails($productId);
}


// Function to edit products
function editProduct_ctr($productId, $newProductName, $newProductPrice, $newProductCategory, $newShop, $newProductBrand, $newProductDescription, $newProductImage, $newProductMaterial, $newProductKeyword, $newQuantity) {
    $products = new product_class();
    $result = $products->editProducts($productId, $newProductName, $newProductPrice, $newProductCategory, $newShop, $newProductBrand, $newProductDescription, $newProductImage, $newProductMaterial, $newProductKeyword, $newQuantity);
    return $result;
}


// Function to delete product
function deleteProduct_ctr($productId) {
    $products = new product_class();
    $result = $products->deleteProduct($productId);
    return $result;
}

function filterByCategory_ctr($categoryId) {
    $filterClass = new product_class();
    $result = $filterClass->filterByCategory($categoryId);
    return $result;
}

function filterByBrand_ctr($brandId) {
    $filterClass = new product_class();
    $result = $filterClass->filterByBrand($brandId);
    return $result;
}

function filterByKeyword_ctr($serchTerm) {
    $keywordClass = new product_class();
    $result = $keywordClass->filterByKeyword($serchTerm);
}

?>
