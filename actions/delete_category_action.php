<?php
require("../controllers/category_controller.php");

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['CategoryID'])) {
    $categoryId = $_POST['CategoryID'];

 
    $result = deleteCategory_ctr($categoryId);

    if ($result) {
        echo "Category deleted successfully.";
    } else {
        echo "Failed to delete Category.";
    }
} else {
    echo "Invalid request.";
}
?>
