<?php 

// 2 - Criação do Connections
// 3 - Criação BD no msql

namespace app\models;

abstract class Connections {
 	
 	private $dbname = 'mysql:host=localhost;dbname=aula_mvc';
 	private $user = 'root';
 	private $pass = '';

 	protected function connect() {

 		try {

 			$conn = new \PDO($this->dbname, $this->user, $this->pass);
 			$conn->exec("set names utf8");
 			return $conn;

 		} catch(\PDOException $erro) {
 			echo $erro->getMessage();
 		}
 	}
}

?>