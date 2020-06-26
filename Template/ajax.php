<?php
//dbcontroller class
require('../database/DBController.php');

//product class
require('../database/Product.php');

//Dbcontoller object
$db = new DBController();

//object product
$product = new Product($db);
$product_shuffle = $product->getData();

if(isset($_POST['itemid'])){

$result = $product->getProduct($_POST['itemid']);
   
echo json_encode($result); 
}