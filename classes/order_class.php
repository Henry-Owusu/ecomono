<?php
//connect to database class
require_once("../settings/db_class.php");

class orders_class extends db_connection
{

    // Function to add new Product or increase quantity if product already exists
    public function addToOrders($userID, $invoice_no, $amount) {
        $ndb = new db_connection();
    
        // Escape variables to prevent SQL injection
        $userID = mysqli_real_escape_string($ndb->db_conn(), $userID);
        $invoice_no = mysqli_real_escape_string($ndb->db_conn(), $invoice_no);
        $amount = mysqli_real_escape_string($ndb->db_conn(), $amount);
    
        // SQL query to insert data into the orders table
        $sql = "INSERT INTO `orders`(`invoice_no`, `UserID`, `TotalAmount`) VALUES ('$invoice_no', '$userID', '$amount')";
    
        // Execute the query
        $result = $this->db_query($sql);
    
        // Return the result (true if successful, false otherwise)
        return $result;
    }
    





    // Function to get all products
    public function viewOrders()
    {
        $ndb = new db_connection();
        $sql = "SELECT p.productImage, p.ProductName, p.BrandName, p.ProductID, p.Price, p.Description, c.Quantity, (p.Price * c.Quantity) AS total FROM products p JOIN orders c ON p.ProductID = c.productID";        
        return $this->db_fetch_all($sql);  
    }




    // Function to edit product
    public function editOrders($productId, $newQuantity) {
        $ndb = new db_connection;   
        $productId= mysqli_real_escape_string($ndb->db_conn(), $productId);
        $newQuantity= mysqli_real_escape_string($ndb->db_conn(), $newQuantity);
 
        $sql = "UPDATE `orders` SET 
                `Quantity` = '$newQuantity' 
                WHERE `productID` = $productId";
        return $this->db_query($sql);
    }
        

    // Function to delete Product
    public function deleteOrders($productId) {
        $ndb = new db_connection();

        // Sanitize the input
        $productId = mysqli_real_escape_string($ndb->db_conn(), $productId);

        // Delete query
        $sql = "DELETE FROM `orders` WHERE `productID` = '$productId'";

        // Execute the query
        return $this->db_query($sql);
    }



	
    
    
}


?>


    