<?php
require("../controllers/cart_controller.php");

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['ProductID'])) {
    $productId = $_POST['ProductID'];

 
    $result = deleteCart_ctr($productId);

    if ($result) {
        echo "Cart Item deleted successfully.";
    } else {
        echo "Failed to delete cart item.";
    }
} else {
    echo "Invalid request.";
}
?>
