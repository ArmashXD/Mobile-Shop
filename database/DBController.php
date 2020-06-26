<?php 

class DBController{
    //Database Connection

    protected $host = 'localhost';
    protected $user = 'root';
    protected $pass = '';
    protected $table = 'e-commerce';

    //connection property
    public $con = null;

    //calling constructor

    public function __construct()
    {
        $this->con = mysqli_connect($this->host,$this->user,$this->pass,$this->table);
        if($this->con->connect_error){
            echo "Fail".$this->con->connect_error;
        }
    }
    //destructor

    public function __destruct()
    {
        $this->closeConnection();
    }


    //for closing connection

    protected function closeConnection(){
        if($this->con != null){
            $this->con->close();
            $this->con = null;
        }
    }
    

}
