<?php

// require MySQL connection
require('database/DBController.php');

// require Product Class
require('database/Product.php');

// require Cart Class
require('database/Cart.php');

// DBController object
$db = new DBController();

// dependency injection - we can now access all the DB controller class using public $db = null property
// Product object
$product = new Product($db);
$product_shuffle = $product->getData(); // now we can access $product_shuffle anywhere in the project

//  Cart object
$Cart = new Cart($db);


// this will show an array of all the data
// print_r($product->getData());


?>