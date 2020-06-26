<?php

//Use to fetch product data

class Product{
    //public variable db to access database class
    public $db = null;

    //constructor
    public function __construct(DBController $db)
    {
        if(!isset($db->con)) return null;
        $this->db = $db;
    }
    //fetch product data using getData Method
    //dependency injection
    public function getData($table = 'product'){
    
        $result = $this->db->con->query("SELECT * FROM {$table}");
        
       //init array to store data in assoc array
       $resultArray = array();
    
       // fetching data one by one
        while($item = mysqli_fetch_array($result,MYSQLI_ASSOC)){
            $resultArray[] = $item;
        }
        //returning array
        return $resultArray;
    }

    //get product using item id
    public function getProduct($item_id =null, $table='product'){
        if(isset($item_id)){
        $result = $this->db->con->query("SELECT * FROM {$table} WHERE item_id ={$item_id}");
        //init array to store data    
        $resultArray = array();
        //fetching data one by one
        while($item = mysqli_fetch_array($result,MYSQLI_ASSOC)){
            $resultArray[] = $item;
        }
        // returning array
        return $resultArray;
        }
    }
}