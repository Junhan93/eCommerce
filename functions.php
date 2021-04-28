<?php

// require MySQL connection
require('database/DBController.php');

// require Product Class
require('database/Product.php');

// DBController object
$db = new DBController();

// dependency injection - we can now access all the DB controller class using public $db = null property
$product = new Product($db);


print_r($product->getData());