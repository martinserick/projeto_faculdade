<?php
include_once "sql.php";

class Usuario{

    private $usuId;
    private $usuNome;
    private $usuEmail;
    private $usuSenha;
    private $con;

    public function __construct(){
        $this->con = new Sql();
    }

    public function getusuId(){
        return $this->usuId;
    }
    public function setusuId($id){
        $this->usuId = $id;
    }
    public function getusuNome(){
        return $this->usuNome;
    }

    public function setusuNome($nome){
        $this->usuNome = $nome;
    }

    public function getusuEmail(){
        return $this->usuEmail;
    }

    public function setusuEmail($email){
        $this->usuEmail = $email;
    }

    public function getusuSenha(){
        return $this->usuSenha;
    }

    public function setusuSenha($senha){
        $this->usuSenha = $senha;
    }

    //Fim do geters e seters

    public function __toString(){
        return "ID: ". $this->getusuId() . "<br>
                Nome:" . $this->getusuNome() ."<br>
                E-mail:" . $this->getusuEmail() . "<br>
                Senha:" . $this->getusuSenha() . "<br>";
    }

    public function usuarioLogado($dado){
		$cst = $this->con->conectar()->prepare("SELECT `id`, `nome`, `email` FROM `usuarios` WHERE `id` = :idUser;");
		$cst->bindParam(':idUser', $dado, PDO::PARAM_INT);
		$cst->execute();
		$rst = $cst->fetch();
		$_SESSION['nome'] = $rst['nome'];
	}

    public function logarUsuario($dados)
    {
        $this->setusuEmail($dados['email']);
        $this->setusuSenha(sha1($dados['senha']));
        try {

			$cst = $this->con->conectar()->prepare("SELECT `nome`, `email`, `senha` FROM `usuarios` WHERE `email` = :email AND `senha` = :senha;");
			$cst->bindParam(':email', $this->usuEmail, PDO::PARAM_STR);
			$cst->bindParam(':senha', $this->usuSenha, PDO::PARAM_STR);
			$cst->execute();
			if($cst->rowCount() == 0){
				header('location: /login.php?login=error');
			}else{
				session_start();
				$rst = $cst->fetch();
				$_SESSION['logado'] = "sim";
                $_SESSION['user'] = $rst['id'];
				$_SESSION['nome'] = $rst['nome'];
				header("location: /menu.php");
			}
        } catch (PDOException $e) {
            return 'Error: '.$e->getMessage();
        }


    }

    public function logoutUsuario(){
        session_destroy();
        header ('location: /login.php');
    }


}
?>
