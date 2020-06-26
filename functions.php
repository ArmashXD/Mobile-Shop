<?php

//dbcontroller class
require('database/DBController.php');
//product class
require('database/Product.php');
//cart class
require('database/Cart.php');



//object db
$db = new DBController();
//object product
$product = new Product($db);
$product_shuffle = $product->getData();

//Cart object
$Cart = new Cart($db);

//print_r($Cart->getCartId($product->getData('cart')))


// $arr = array(
//     "user_id"=>1,
//     "item_id"=>4,
// );
// $Cart->insertIntoCart($arr);

