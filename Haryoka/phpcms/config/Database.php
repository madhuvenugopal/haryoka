<?php
include_once 'init.php';
class Database{
    public function getConnection(){
		// $conn = new mysqli($this->host, $this->user, $this->password, $this->database);
		$conn = new mysqli(HOST, USER, PASSWORD, DATABASE);
		if($conn->connect_error){
			die("Error failed to connect to MySQL: " . $conn->connect_error);
		} else {
			return $conn;
		}
    }
}
?>