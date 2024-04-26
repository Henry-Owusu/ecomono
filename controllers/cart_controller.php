<?php
//connect to the cart class
include_once("../classes/cart_class.php");



// function to create new cart
function addToCart_ctr($productId, $ipAddress, $customerId, $quantity) {
    $cartClass = new orders_class();
    $result = $cartClass->addToCart($productId, $ipAddress, $customerId, $quantity);
    return $result;

}


// function to view all carts
function viewCart_ctr($userId)
{
    $cartClass = new cart_class();
    return $cartClass->viewCart($userId);
}



// Function to edit carts
function editCart_ctr($productId, $newQuantity) {
    $cartClass = new cart_class();
    $result = $cartClass->editCart($productId, $newQuantity); // Use $newQuantity instead of $quantity
    return $result;
}

// Function to delete cart
function deleteCart_ctr($productId) {
    $cartClass = new cart_class();
    $result = $cartClass->deleteCart($productId);
    return $result;
}

?>
