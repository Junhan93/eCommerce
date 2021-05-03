<?php 

class DBController{
    
    // Database Connection properties
    protected $host = 'localhost';
    protected $user = 'root';
    protected $password = 'newrootpassword';
    protected $database = 'mobile';

    // connection property
    public $conn = null; // null is assigned because i dont want $conn to be 'undefined'

    // call constructor
    public function __construct(){
        $this->conn = mysqli_connect($this->host, $this->user, $this->password, $this->database);
        if($this->conn->connect_error){
            echo "Failed to connect" . $this->conn->connect_error;
        }

        // echo "Connection successful!";
    }

    public function __destruct(){
        // automatically executed when script ends
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
