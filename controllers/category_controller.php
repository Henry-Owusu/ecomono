<?php
//connect to the category class
include_once("../classes/category_class.php");



// function to create new category
function addCategory_ctr($categoryName) {
    $category = new category_class();
    $result = $category->addCategory($categoryName);
    return $result;
}


// function to view all categorys
function viewAllCategories_ctr()
{
    $category = new category_class();
    $result = $category->viewAllCategories();
    return $result;
}



// Function to edit categorys
function editCategory_ctr($categoryId, $categoryName) {
    $category = new category_class();
    $result = $category->editCategory($categoryId, $categoryName);
    return $result;
}

// Function to delete category
function deleteCategory_ctr($categoryId) {
    $category = new category_class();
    $result = $category->deleteCategory($categoryId);
    return $result;
}

?>
