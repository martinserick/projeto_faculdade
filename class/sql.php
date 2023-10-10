<?php
class Sql{
	private $usuario;
	private $senha;
	private $banco;
	private $servidor;
	private static $pdo;

	public function __construct(){
		$this->servidor = "db";
		$this->banco = "projeto";
		$this->usuario = "root";
		$this->senha = "example";
	}
	public function conectar(){
		try{
			if(is_null(self::$pdo)){
				self::$pdo = new PDO("mysql:host=".$this->servidor.";dbname=".$this->banco.";charset=utf8", $this->usuario, $this->senha);
			}
			return self::$pdo;
		}catch(PDOException $e){
			echo 'Error: '.$e->getMessage();
		}
	}
}
?>
