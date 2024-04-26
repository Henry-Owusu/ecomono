<?php
//connect to database class
require_once("../settings/db_class.php");

class customer_class extends db_connection
{
    public function registerUser($cname, $password, $email, $user_role)
    {
        $ndb = new db_connection();
        
        // Prepare the SQL statement
        $sql = "INSERT INTO `users`(`Username`, `User_pass`, `Email`, `UserType`) 
                VALUES (?, ?, ?, ?)";
        
        // Get database connection
        $conn = $ndb->db_conn();
        
        // Hash the password
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        
        // Prepare the statement
        $stmt = $conn->prepare($sql);
        
        // Check if preparation was successful
        if ($stmt) {
            // Escape and sanitize input data (not needed for prepared statements)
            // Bind parameters
            $stmt->bind_param("ssss", $cname, $hashed_password, $email, $user_role);
            
            // Execute the statement
            $result = $stmt->execute();

            if ($result) {
                // If successful, get the UserID
                $user_id = mysqli_insert_id($conn);
                
                // Store the UserID in the session variable
                session_start();
                $_SESSION['user_id'] = $user_id;
                
                // Return true or any other desired value
                return true;
            } else {
                // If not successful, handle the error accordingly
                echo "Error: " . $stmt->error; // Display MySQL error message
                return false;
            }
        } else {
            // If preparation of the statement fails, handle the error accordingly
            return false;
        }
    }


	
    public function loginUser($cname, $password)
    {
        $ndb = new db_connection();
        
        // Escape and sanitize input data
        $cname = mysqli_real_escape_string($ndb->db_conn(), $cname);
        $password = mysqli_real_escape_string($ndb->db_conn(), $password);
        
        // Retrieve user from database based on email
        $sql = "SELECT * FROM `users` WHERE `Username` = '$cname'";
        $result = $this->db_fetch_one($sql);
        
        // Check for SQL query execution errors
        if (!$result) {
            // Handle query execution error
            echo "Error: " . mysqli_error($ndb->db_conn());
            return false;
        }
        
        // Check if user exists
        if ($result != null){
            $user = $result;
            // Verify password
            if (password_verify($password, $user['User_pass'])) {
                // Password is correct, return user data
                return $user;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }



    public function getAllUserDataWithCount()
    {
        $ndb = new db_connection();

        // Query to get total count of users
        $countSql = "SELECT COUNT(*) AS totalUsers FROM users";
        $countResult = $this->db_fetch_all($countSql);
        $totalCount = $countResult[0]['totalUsers'];

        // Query to get user data
        $userDataSql = "SELECT u.UserID, u.Username, u.Email, ur.RoleName FROM users u JOIN userroles ur ON u.UserType = ur.RoleID";
        $userData = $this->db_fetch_all($userDataSql);

        return array(
            'totalCount' => $totalCount,
            'userData' => $userData
        );
    }
        

    public function viewAllUserRoles()
    {
        $ndb = new db_connection();
        $sql = "SELECT * FROM userroles;";
        return $this->db_fetch_all($sql);
    }



    public function addShop($shopName, $location, $seller, $digitalAddress, $ghanaCard) 
    {
        $ndb = new db_connection();
        $shopName = mysqli_real_escape_string($ndb->db_conn(), $shopName);
        $location = mysqli_real_escape_string($ndb->db_conn(), $location);
        $seller = mysqli_real_escape_string($ndb->db_conn(), $seller);
        $digitalAddress = mysqli_real_escape_string($ndb->db_conn(), $digitalAddress);
        $ghanaCard = mysqli_real_escape_string($ndb->db_conn(), $ghanaCard);
        
        $sql = "INSERT INTO `shop` (`ShopName`, `ShopAddress`, `Seller`, `DigitalAddress`, `GhanaCard`)  VALUES ('$shopName', '$location', '$seller', '$digitalAddress', '$ghanaCard')";
        return $this->db_query($sql);

    }  

    public function viewAllShops()
    {
        $ndb = new db_connection();
        $sql = "SELECT * FROM shop;";
        return $this->db_fetch_all($sql);
    }





}

?>