<?php 

class DBController{
    
    // Database Connection properties
    protected $host = 'localhost';
    protected $user = 'root';
    protected $password = 'newrootpassword';
    protected $database = 'mobile';

    // connection property
    public $conn = null;

    // call constructor
    public function __construct(){
        $this->conn = mysqli_connect($this->host, $this->user, $this->password, $this->database);
        if($this->conn->connect_error){
            echo "Failed to connect" . $this->conn->connect_error;
        }

        // echo "Connection successful!";
    }

    public function __destruct(){
        // TODO: implement __destruct() method
        $this->closeConnection();
    }


    // mysqli closing connection
    protected function closeConnection(){
        if($this->conn != null){
            $this->conn->close();
            $this->conn = null;
        }
    }
}

?>
