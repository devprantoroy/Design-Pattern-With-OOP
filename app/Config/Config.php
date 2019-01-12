<?php
namespace App\Config;

class Config{

    private $db = array();

    public function __construct($db){
        $this->db = $db;
    }

    public function connect(){
        $db_connect = mysqli_connect($this->db['DB_HOST'], $this->db['DB_USERNAME'], $this->db['DB_PASSWORD'], $this->db['DB_DATABASE']);
        $db_connect->set_charset('utf8');
        if (!$db_connect) {
            echo "Error: " . mysqli_connect_error() . PHP_EOL;
            exit;
        }
    }

    public function __destruct(){
        $db_connect = mysqli_connect($this->db['DB_HOST'], $this->db['DB_USERNAME'], $this->db['DB_PASSWORD'], $this->db['DB_DATABASE']);
        if ($db_connect) {
            mysqli_close($db_connect);
            exit;
        }
    }


}





