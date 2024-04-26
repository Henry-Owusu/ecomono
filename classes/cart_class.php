<?php
//connect to database class
require_once("../settings/db_class.php");

class cart_class extends db_connection
{

    // Function to add new Product or increase quantity if product already exists
    public function addToCart($productId, $ipAddress, $customerId, $quantity) {
        $ndb = new db_connection();

        $productId = mysqli_real_escape_string($ndb->db_conn(), $productId);
        $ipAddress = mysqli_real_escape_string($ndb->db_conn(), $ipAddress);
        $customerId = mysqli_real_escape_string($ndb->db_conn(), $customerId);
        $quantity = mysqli_real_escape_string($ndb->db_conn(), $quantity);

        // Check if the product already exists in the cart
        $sql = "SELECT * FROM `cart` WHERE `productID` = '$productId' AND `ip_add` = '$ipAddress' AND `Customer` = '$customerId'";
        $result = $this->db_fetch_one($sql);

        if ($result) {
            // If product exists, update the quantityp
            $newQuantity = $result['Quantity'] + $quantity;
            $sqlUpdate = "UPDATE `cart` SET `Quantity` = '$newQuantity' 
                    WHERE `productID` = '$productId' AND `ip_add` = '$ipAddress' AND `Customer` = '$customerId'";
            return $this->db_query($sqlUpdate); // Return the update query
        } else {
            // If product doesn't exist, insert a new record
            $sqlInsert = "INSERT INTO `cart` (`productID`, `ip_add`, `Customer`, `Quantity`)  
                    VALUES ('$productId', '$ipAddress', '$customerId', '$quantity')";
            return $this->db_query($sqlInsert); // Return the insert query
        }
    }





    // Function to get all products
    public function viewCart($userId)
    {
        $ndb = new db_connection();
        $sql = "SELECT p.productImage, p.ProductName, p.BrandName, p.ProductID, p.Price, p.Description, c.Quantity, (p.Price * c.Quantity) AS total FROM products p JOIN cart c ON p.ProductID = c.productID WHERE c.Customer = $userId"; 

        return $this->db_fetch_all($sql);  
    }




    // Function to edit product
    public function editCart($productId, $newQuantity) {
        $ndb = new db_connection;   
        $productId= mysqli_real_escape_string($ndb->db_conn(), $productId);
        $newQuantity= mysqli_real_escape_string($ndb->db_conn(), $newQuantity);
 
        $sql = "UPDATE `cart` SET 
                `Quantity` = '$newQuantity' 
                WHERE `productID` = $productId";
        return $this->db_query($sql);
    }
        

    // Function to delete Product
    public function deleteCart($userId) {
        $ndb = new db_connection();

        // Sanitize the input
        $userId = mysqli_real_escape_string($ndb->db_conn(), $userId);

        // Delete query
        $sql = "DELETE FROM `cart` WHERE `Customer` = '$userId'";

        // Execute the query
        return $this->db_query($sql);
    }



	
    
    
}


?>


    