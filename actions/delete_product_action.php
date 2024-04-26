<?php
require("../controllers/product_controller.php");

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['ProductID'])) {
    $productId = $_POST['ProductID'];

 
    $result = deleteProduct_ctr($productId);

    if ($result) {
        echo "Product deleted successfully.";
    } else {
        echo "Failed to delete product.";
    }
} else {
    echo "Invalid request.";
}
?>
