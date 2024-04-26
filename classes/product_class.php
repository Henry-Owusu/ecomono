<?php
//connect to database class
require_once("../settings/db_class.php");

class product_class extends db_connection
{
    // Function to add new Product
    public function addProduct($productName, $productPrice, $productCategory, $shop, $productBrand, $productDescription, $productImage, $productMaterial, $productKeyword, $quantity) {
        $ndb = new db_connection();

        $productName = mysqli_real_escape_string($ndb->db_conn(), $productName);
        $productPrice = mysqli_real_escape_string($ndb->db_conn(), $productPrice);
        $productCategory = mysqli_real_escape_string($ndb->db_conn(), $productCategory);
        $productBrand = mysqli_real_escape_string($ndb->db_conn(), $productBrand);
        $shop = mysqli_real_escape_string($ndb->db_conn(), $shop);
        $productDescription = mysqli_real_escape_string($ndb->db_conn(), $productDescription);
        $productMaterial = mysqli_real_escape_string($ndb->db_conn(), $productMaterial);
        $productKeyword = mysqli_real_escape_string($ndb->db_conn(), $productKeyword);
        $quantity = mysqli_real_escape_string($ndb->db_conn(), $quantity);


       // File upload handling
        $targetDirectory = "../images/products/"; // Adjust the directory as needed
        $targetFile = $targetDirectory . basename($productImage["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

        // Check if image file is a actual image or fake image
        $check = getimagesize($productImage["tmp_name"]);
        if ($check !== false) {
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }

        // Check file size (adjust as needed)
        if ($productImage["size"] > 10000000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }

        // Allow certain file formats (adjust as needed)
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            // handle errors if needed
        } else {
            // if everything is ok, try to upload file
            if (move_uploaded_file($productImage["tmp_name"], $targetFile)) {
                // File uploaded successfully, proceed with database insertion
                $sql = "INSERT INTO `products`(`ProductName`, `Price`, `BrandName`, `Category`, `shop`, `productImage`, `Quantity`, `Material`, `Description`, `Keywords`) 
                        VALUES ('$productName', '$productPrice', '$productBrand', $productCategory, $shop, '$targetFile', '$quantity','$productMaterial', '$productDescription', '$productKeyword')";
                return $this->db_query($sql);
            } else {
                $sql = "INSERT INTO `products`(`ProductID`, `ProductName`, `Price`, `BrandName`, `Category`, `shop`, `Quantity`, `Material`, `Description`, `Keywords`, `date_created`)
                        VALUES ('$productName', '$productPrice', '$productBrand', $productCategory, $shop, '$quantity','$productMaterial', '$productDescription', '$productKeyword')";
                return $this->db_query($sql);
            }
        }              
                                                                                                                                                                                      
    }


    // Function to get all products
    public function viewAllProducts()
    {
        $ndb = new db_connection();
        $sql = "SELECT 
        products.*, 
        categories.*,
        shop.* 
    FROM 
        products 
    JOIN 
        categories ON products.Category = categories.CategoryID
    JOIN
        shop ON products.shop = shop.ShopID;
    ";
        return $this->db_fetch_all($sql);
        
    }


    // Function to retrieve details of a single product
    public function viewProductDetails($productId) {
        $ndb = new db_connection();
        $productId = mysqli_real_escape_string($ndb->db_conn(), $productId);

        // SQL query to retrieve details of the specified product
        $sql = "SELECT * FROM products WHERE productID = '$productId'";
        
        // Execute the query and fetch the first row (since we only expect one result)
        return $this->db_fetch_one($sql);
    }




    // Function to edit product
    public function editProducts($productId, $newProductName, $newProductPrice, $newProductCategory, $newShop, $newProductBrand, $newProductDescription, $newProductImage, $newProductMaterial, $newProductKeyword, $newQuantity) {
        $ndb = new db_connection;
        $productId = mysqli_real_escape_string($ndb->db_conn(), $productId);
        $newProductName= mysqli_real_escape_string($ndb->db_conn(), $newProductName);
        $newProductPrice= mysqli_real_escape_string($ndb->db_conn(), $newProductPrice);
        $newProductCategory= mysqli_real_escape_string($ndb->db_conn(), $newProductCategory);
        $newShop= mysqli_real_escape_string($ndb->db_conn(), $newShop);
        $newProductBrand= mysqli_real_escape_string($ndb->db_conn(), $newProductBrand);
        $newProductDescription= mysqli_real_escape_string($ndb->db_conn(), $newProductDescription);
        $newProductMaterial= mysqli_real_escape_string($ndb->db_conn(), $newProductMaterial);
        $newQuantity= mysqli_real_escape_string($ndb->db_conn(), $newQuantity);
        $newProductKeyword= mysqli_real_escape_string($ndb->db_conn(), $newProductKeyword);

        
        $targetDirectory = "../images/products/"; // Adjust the directory as needed
        $targetFile = $targetDirectory . basename($newProductImage["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

        // Check if image file is a actual image or fake image
        $check = getimagesize($newProductImage["tmp_name"]);
        if ($check !== false) {
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }

        // Check file size (adjust as needed)
        if ($newProductImage["size"] > 500000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }

        // Allow certain file formats (adjust as needed)
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            // handle errors if needed
        } else {
            // if everything is ok, try to upload file
            if (move_uploaded_file($newProductImage["tmp_name"], $targetFile)) {
                // File uploaded successfully, proceed with database insertion
                $sql = "UPDATE `products` SET `ProductName`='$newProductName',
                `Price`='$newProductPrice',
                `BrandName`='$newProductBrand',
                `Category`='$newProductCategory',
                `shop`='$newShop',
                `productImage`='$targetFile',
                `Quantity`='$newQuantity',
                `Material`='$newProductMaterial',
                `Description`='$newProductDescription'
                ,`Keywords`='$newProductKeyword' 
                WHERE `ProductID` = '$productId'";
                return $this->db_query($sql);
            } else {
                $sql = "UPDATE `products` SET 
                `ProductName`='$newProductName',
                `Price`='$newProductPrice',
                `BrandName`='$newProductBrand',
                `Category`='$newProductCategory',
                `shop`='$newShop',
                `Quantity`='$newQuantity',
                `Material`='$newProductMaterial',
                `Description`='$newProductDescription',
                `Keywords`='$newProductKeyword' 
                WHERE `ProductID` = '$productId'";

                return $this->db_query($sql);
            }
        }              
                                                                                                                                                                                          
    }
        

    // Function to delete Product
    public function deleteProduct($productId) {
        $ndb = new db_connection();

        // Sanitize the input
        $productId = mysqli_real_escape_string($ndb->db_conn(), $productId);

        // Delete query
        $sql = "DELETE FROM `products` WHERE `ProductID` = '$productId'";

        // Execute the query
        return $this->db_query($sql);
    }

    public function filterByCategory($categoryId) {
        $ndb = new db_connection();
        $categoryId = mysqli_real_escape_string($ndb->db_conn(), $categoryId);
        $sql = "SELECT p.*, c.cat_name 
                FROM products p 
                INNER JOIN categories c ON p.product_cat = c.cat_id 
                WHERE c.cat_id = '$categoryId'";
        return $this->db_fetch_all($sql);
    }
    
    public function filterByBrand($brandId) {
        $ndb = new db_connection();
        $brandId = mysqli_real_escape_string($ndb->db_conn(), $brandId);
        $sql = "SELECT p.*, b.brand_name 
                FROM products p 
                INNER JOIN brands b ON p.product_brand = b.brand_id 
                WHERE b.brand_id = '$brandId'";
        return $this->db_fetch_all($sql);
    }


    public function filterByKeyword($serchTerm) {
        $ndb = new db_connection();

        $serchTerm = mysqli_real_escape_string($ndb->db_conn(), $serchTerm);

        $sql = "SELECT * FROM products WHERE product_title LIKE '%$serchTerm%' OR 
        product_desc LIKE '%$serchTerm%' OR 
        product_brand LIKE '%$serchTerm%' OR 
        product_cat LIKE '%$serchTerm%' OR 
        product_keywords LIKE '%$serchTerm%';
        ";
        return $this->db_fetch_all($sql);
    }


    
    
    
}

?>


    