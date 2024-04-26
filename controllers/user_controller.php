<?php
include_once("../classes/user_class.php");

// Call the function from the controller
$users = viewAllUsers_ctr();

function registerUser_ctr($cname, $password, $email, $user_role){
	$user=new customer_class();
	$result = $user->registerUser($cname, $password, $email, $user_role);
}


function loginUser_ctr($cname, $password) {
	$user = new customer_class();
	$result = $user->loginUser($cname, $password);
    // Call the login_user method in the general_class
    return $result;
}


function viewAllUsers_ctr() {
	$user = new customer_class();
	$result = $user->getAllUserDataWithCount();
    // Call the login_user method in the general_class
    return $result;
}



function viewAllUserRoles_ctr()
{
	$user = new customer_class();
	$result = $user->viewAllUserRoles();
    return $result;
}

function addShop_ctr($shopName, $location, $seller, $digitalAddress, $ghanaCard)
{
	$shop = new customer_class();
	$result = $shop->addShop($shopName, $location, $seller, $digitalAddress, $ghanaCard);
    return $result;
}


function viewAllShops_ctr()
{
	$shop = new customer_class();
	$result = $shop->viewAllShops();
    return $result;
}



?>