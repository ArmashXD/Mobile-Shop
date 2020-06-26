<?php

// php cart class
class Cart{
    public $db =null;
    //init constructor for db
    public function __construct(DBController $db)
    {
        if(!isset($db->con)) return null;
        $this->db = $db;
    }
    //insert into cart table
    public function insertIntoCart($params = null, $table = "cart"){
        if($this->db->con != null){
            if($params != null){
                //"Insert into cart(user_id) values (0)"
                //get table columns
                $columns = implode(',',array_keys($params));
                //print_r($params);
                $values = implode(',',array_values($params));
               //print_r($values);
                //create sql query
                $query_string = sprintf("INSERT INTO %s(%s) VALUES (%s)", $table, $columns, $values);
                //echo $query_string;

                //execute query
                $result = $this->db->con->query($query_string);

                return $result;
            }
        }
    }

    //to get user_id = item_id and insert them into cart table
    public function addToCart($user_id,$item_id){
         if(isset($user_id) && isset($item_id)){
             $params = array(
                 "user_id"=> $user_id,
                 "item_id" => $item_id
             );
             //insert data into cart
             $result = $this->insertIntoCart($params);
             if($result){
                 //reload page
                 //echo alert 
                // echo "<script>if(!alert('Item Added to Cart')){window.location.reload(); break;} </script>";    
                header('Location:'.$_SERVER['PHP_SELF']);
            }
         }
    }
    //calculate sub total

    public function getSum($arr){
        if(isset($arr)){
            $sum = 0;
            foreach($arr as $item){
                $sum += floatval($item[0]);
            }
            return sprintf('%.2f',$sum);
        }
    }
    //get item_id of shopping cart list
    public function getCartId($cartArray = null,$key = 'item_id'){
        if($cartArray != null){
            //array_map cannot access variable outside its scope so in order to access them use (use) keyword and pass variable in it.
            $cart_id = array_map(function($value) use($key){
                return $value[$key];
            }, $cartArray);
            return $cart_id;
        }
    }

    //delete cart item using item_id
    public function deleteCart($item_id = null,$table = 'cart'){
        if($item_id != null){
        //Deleting items from the cart    
        $query = "DELETE FROM {$table} WHERE item_id = {$item_id}";
        $result = $this->db->con->query($query);
        if($result){
            header("Loaction:" .$_SERVER["PHP_SELF"]);
        }
        return $result;
        }
    }

    //Save for later method
    public function saveForLater($item_id = null,$saveTable = 'wishlist',$fromTable = 'cart'){
        if($item_id != null){
        // getting all values from the cart and inserting into the wishlist table    
        $query = "INSERT INTO {$saveTable} SELECT * FROM {$fromTable} WHERE item_id ={$item_id};" ;
        $query .= "DELETE FROM {$fromTable} WHERE item_id = {$item_id};";

        //executing two queries at once
        $result = $this->db->con->multi_query($query);
        if($result){
            header("Location:" .$_SERVER['PHP_SELF']);
        }
        return $result;
        }
    }
}