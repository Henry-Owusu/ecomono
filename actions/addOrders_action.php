<?php
include "../controllers/order_controller.php";
if ($_SERVER["REQUEST_METHOD"] == "GET") { 


    $userID = $_GET['userID'];
    $invoice_no = $_GET['invoice_no'];
    $totalAmount = $_GET['totalAmount'];

    $orders = addToOrders_ctr($userID, $invoice_no, $totalAmount);
    if ($orders !== false) {
        // Registration successful
        header("Location: ../view/payment_success.php");
    } else {
        // Registration failed
        echo "Form not submitted.";
}

    }





?>