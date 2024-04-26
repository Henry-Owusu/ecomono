<?php

include("../controllers/user_controller.php");

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $cname = $_POST["name"];
    $email = trim($_POST["email"]); // Trim whitespace from email address
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];
    $user_role = 3; // Assuming default role ID for new users

    // Perform validation on form data, e.g., check for empty fields, validate email format, match passwords, etc.
    // Example validation:
    if (empty($cname) || empty($email) || empty($password) || empty($confirm_password)) {
        echo "All fields are required. Please fill in all fields.";
        exit();
    }

    if ($password !== $confirm_password) {
        echo "Passwords do not match. Please enter matching passwords.";
        exit();
    }

    // Call the registerUser method in customer_controller.php
    $registrationResult = registerUser_ctr($cname, $password, $email, $user_role);

    // Check the result and handle accordingly
    if ($registrationResult !== false) {
        // Registration successful
        header("Location: ../view/signup.php?success=registrationsucess");
    } else {
        // Registration failed
        echo "Registration failed. Please try again later."; // Provide failure message
    }
}

?>
