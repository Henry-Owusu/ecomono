<?php
require("../controllers/category_controller.php");

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['category_id']) && isset($_POST['categoryName'])) { 
    // Retrieve form data
    $categoryName = $_POST['categoryName'];
    $categoryId = $_POST['category_id'];

    // Call the editCategory_ctr function and pass form data
    $editCategoryResult = editCategory_ctr($categoryId, $categoryName);

    // Check if the result is false or not
    if ($editCategoryResult !== false) {
        // Category edited successfully
        echo json_encode(array('status' => 'success', 'message' => 'Category update successfully'));
    } else {
        // Category editing failed
        echo json_encode(array('status' => 'error', 'message' => 'Category update failed'));
    }
} else {
    // Invalid request method or missing parameters
    echo json_encode(array('status' => 'error', 'message' => 'Invalid request'));
}
?>
