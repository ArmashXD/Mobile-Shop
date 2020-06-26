<?php 
//DB Class
require('../database/DBController.php');
//user class
require('../database/User.php');


$db = new DBController();

$user = new User($db);

