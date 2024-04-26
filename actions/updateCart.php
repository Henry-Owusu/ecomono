<?php
// Include the necessary controller file
include_once("../controllers/cart_controller.php");

// Check if the request method is POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the product ID and new quantity from the POST data
    $productId = $_POST['productID'];
    $newQuantity = $_POST['quantity'];

    // Call the function to update the cart item with the new quantity
    $updateResult = editCart_ctr($productId, $newQuantity);

    // Check if the update was successful
    if ($updateResult) {
        // If successful, send a response indicating success
        echo "success";
    } else {
        // If unsuccessful, send a response indicating failure
        echo "failure";
    }
} else {
    // If the request method is not POST, send a response indicating failure
    echo "Invalid request method.";
}
?>
