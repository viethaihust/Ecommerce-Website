<?php
//fetch_data.php
ob_start();
include('../functions.php');
session_start();

if(!empty($_POST['action']) && $_POST['action'] == 'saveRating' 
	&& !empty($_SESSION['user_id']) 
	&& !empty($_POST['rating']) 
	&& !empty($_POST['itemId'])) {
		$userID = $_SESSION['user_id'];
		$product->saveRating($_POST, $userID);
		$data = array(
			"success"	=> 1,	
		);
		echo json_encode($data);		
}

if(!empty($_POST['action']) && $_POST['action'] == 'deleteCart' 
	&& !empty($_POST['itemId'])) {
		$itemID = $_POST['itemId'];
		$Cart->deleteCart($_POST, $itemID);
		$data = array(
			"success"	=> 1,	
		);
		echo json_encode($data);		
}

if(!empty($_POST['action']) && $_POST['action'] == 'AddToCart'
	&& !empty($_POST['user_id']) 
	&& !empty($_POST['product_id']) 
	&& !empty($_POST['quantity'])) {
		$productID = $_POST['product_id'];
		$userID = $_POST['user_id'];
		$quantity = $_POST['quantity'];
		$Cart->addToCart($_POST, $userID, $productID, $quantity);
		$data = array(
			"success"	=> 1,	
		);
		echo json_encode($data);		
}
?>