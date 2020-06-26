<?php


//user class 
class User{

    //public variable db to access database class

    public $db = null;


    //constructor
    public function __construct(DBController $db)
    {
        if(!isset($db->con)) return null;
        $this->db = $db;
    }

    //login function
    public function login($email,$pass){
        
     $query = "SELECT * FROM user WHERE user_email = '$email' and user_password = '$pass'";
        
     $result = mysqli_query($this->db->con,$query) or die("Error:". mysqli_error($this->db->con));
     
     $user_data =mysqli_fetch_array($result);
     // Checking if the user available in table or not
     $count = $result->num_rows;

     if($count == 1){

        $_SESSION['login'] = true;
      //  $_SESSION['uid'] = $user_data['user_id'];
        return true;
       }
     else
         {
            return false;
        }
        
   
    }

    public function register($first_name, $last_name, $user_email, $user_password){
        $query = "INSERT INTO user(first_name, last_name, user_email, user_password, register_date) VALUES ('$first_name', '$last_name', '$user_email','$user_password', CURDATE()) ";
    
        $result = mysqli_query($this->db->con,$query) or die("Error:" + mysqli_error($this->db->con));

        if($result){
            echo "Registered !";
            return true;
        }
        else{
            var_dump($result);
            return false;
        }
    }

}