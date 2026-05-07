<?php
class Database {
    public $conn;
    public function connect() {
        $this->conn = mysqli_connect("localhost", "root", "", "library_db");
        if (!$this->conn) { die("Connection failed"); }
        return $this->conn;
    }
}
?>