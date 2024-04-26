<?php
//connect to database class
require_once("../settings/db_class.php");

class category_class extends db_connection
{

    // Function to add new Product
    public function addCategory($categoryName) {
        $ndb = new db_connection();

        $categoryName = mysqli_real_escape_string($ndb->db_conn(), $categoryName);

        // File upload handling   
        $sql = "INSERT INTO `categories` (`CategoryName`)  
                VALUES ('$categoryName')";
        return $this->db_query($sql);
                          

    }



    // Function to get all products
    public function viewAllCategories()
    {
        $ndb = new db_connection();
        $sql = "SELECT * FROM categories";
        return $this->db_fetch_all($sql);
        
    }




    // Function to edit product
    public function editCategory($categoryId, $categoryName) {
        $ndb = new db_connection;   
        $category_id= mysqli_real_escape_string($ndb->db_conn(), $categoryId);
        $categoryName= mysqli_real_escape_string($ndb->db_conn(), $categoryName);
 
        $sql = "UPDATE `categories` SET 
                `CategoryName` = '$categoryName' 
                WHERE `CategoryID` = $categoryId";
        return $this->db_query($sql);
    
    }
        

    // Function to delete Product
    public function deleteCategory($categoryId) {
        $ndb = new db_connection();

        // Sanitize the input
        $categoryId = mysqli_real_escape_string($ndb->db_conn(), $categoryId);

        // Delete query
        $sql = "DELETE FROM `categories` WHERE `CategoryID` = '$categoryId'";

        // Execute the query
        return $this->db_query($sql);
    }



	
    
    
}


?>


    