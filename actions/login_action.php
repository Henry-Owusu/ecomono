<?php

require("../controllers/user_controller.php");


// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if email and password are set and not empty
    if (isset($_POST["cname"]) && isset($_POST["password"]) && !empty($_POST["cname"]) && !empty($_POST["password"])) {
        // Get input values
        $cname = $_POST["cname"];
        $password = $_POST["password"];

        // AtteXmpt to login user
        // $generalClass = new general_controller();
        $user = loginUser_ctr($cname, $password);

        // Check if login was successful
        if ($user != null ) {
            // Start session
            session_start();

            // Store user data in session
            $_SESSION['user_id'] = $user['UserID'];
            $_SESSION['user_email'] = $user['Email'];
            $_SESSION['user_name'] = $user['Username'];

            // var_dump($_SESSION);        

            switch ($user["UserType"]) {
                case '1':
                    header("Location: ../admin/");
                    exit();
                case '2':
                    header("Location: ../seller/");
                    exit();
                    
                case '3':
                    header("Location: ../view/products.php");
                    exit();
                
                case '4':
                    header("Location: ../blogger/");
                    exit();

                default:
                    header("Location: ../login.php?error=role_not_recognized");
                    exit();
            
            }


        } else {
            // Redirect back to login page with error message
            header("Location: ../view/signup.php?error=invalid_credentials");
            exit();
        }
    
    } else {
        // Redirect back to login page with error message
        header("Location: ../view/signup.php?error=missing_fields");
        exit();
    }
} else {
    // Redirect back to login page
    echo "problem with form";
    // header("Location: ../view/signup.php");
    exit();
}
?>





