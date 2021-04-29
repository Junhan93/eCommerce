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


//  Cart object
$Cart = new Cart($db);
// $arr = array(
//     'user_id' => 1,
//     'item_id' => 4
// );
// $Cart->insertIntoCart($arr);


// this will show an array of all the data
// print_r($product->getData());


?>