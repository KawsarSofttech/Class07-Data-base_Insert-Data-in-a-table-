<?php

class Connection{

	public $conn;

	public function __construct(){
		$this->conn = new PDO("mysql:host=localhost;dbname=ctg-323","root","");
	

	}

}

?>
