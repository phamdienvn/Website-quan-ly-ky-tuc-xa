<?php
    class db{
        private $servername = "localhost";
        private $username = "root";
        private $password = "";
        private $db= "qlkitucxa";
        public function connect(){
            $conn = null;
            try {
                $this->$conn = new PDO("mysql:host=".$this -> servername.";dbname=".$this->db."",$this -> username,$this -> password);
            // set the PDO error mode to exception
            $this->$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //echo "Kết nối thành công";
            } catch(PDOException $e) {
            //echo "Kết nối thất bại: " . $e->getMessage();
            }
            return $this->$conn;
        }
    }
?>
