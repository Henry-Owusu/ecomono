<?php
//connect to the orders class
include_once("../classes/order_class.php");



// function to create new orders
function addToOrders_ctr($userID, $invoice_no, $totalAmount) {
    $ordersClass = new orders_class();
    $result = $ordersClass->addToOrders($userId, $invoice_no, $amount);
    return $result;

}


// function to view all orderss


?>
