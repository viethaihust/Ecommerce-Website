<?php

// require MySQL Connection
require ('../class/DBController.php');

// require Product Class
require ('../class/Product.php');

// require Cart Class
require ('../class/Cart.php');

// DBController object
$db = new DBController();

// Product object
$product = new Product($db);

$product_shuffle = $product->getProductData();

// Cart object
$Cart = new Cart($db );

?>