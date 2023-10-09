<?php
//CRIANDO A CLASSE DE CONEXAO
class Sql{
	//ATRIBUTO PRIVADOS
	private $usuario;
	private $senha;
	private $banco;
	private $servidor;
	private static $pdo;
	//CONSTRUTOR
	public function __construct(){
		$this->servidor = "db";
		$this->banco = "projeto";
		$this->usuario = "root";
		$this->senha = "example";
	}
	//METODO PARA CONECTAR
	public function conectar(){
		try{
			if(is_null(self::$pdo)){
				self::$pdo = new PDO("mysql:host=".$this->servidor.";dbname=".$this->banco, $this->usuario, $this->senha);
			}
			return self::$pdo;
		}catch(PDOException $e){
			echo 'Error: '.$e->getMessage();
		}
	}
}
?>
