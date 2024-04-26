<?php
require("../controllers/category_controller.php");



if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    // Retrieve form data
    $categoryName = $_POST['categoryName'];
    
    // Retrieve other form data

    // Create an instance of the GeneralController


    // Call the addProduct function and pass form data
    $addCategoryResult =addCategory_ctr($categoryName);
    // Redirect to the appropriate page after adding the product
    if ($addCategoryResult !== false) {
        // Registration successful
        header("Location: ../admin/productManagement.php");
  
    } else {
        // Registration failed
        echo "Form not submitted.";
}
}
?>
