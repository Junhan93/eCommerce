<?php

class Product{  
    // when you dont assign a null, it will be 'undefined'.
    public $db = null;

    public function __construct(DBController $db) {
        if (!isset($db->conn)) return null;
        $this->db = $db;
    }

    // fetch product using getData method
    public function getData($table = 'product') {
        $result = $this->db->conn->query("SELECT * FROM `{$table}`");

        $resultArray = array();

        while($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $resultArray[] = $item;
        }

        return $resultArray;
    }

    // get Product using item id
    public function getProduct($item_id = null, $table = 'product') {
        // see if item_id exist
        if(isset($item_id)){
            $result = $this->db->conn->query("SELECT * FROM {$table} WHERE item_id={$item_id}");

            $resultArray = array();

            while($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                $resultArray[] = $item;
            }
    
            return $resultArray;
        }
    }
}

?>