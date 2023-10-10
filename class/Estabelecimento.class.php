<?php
include_once "sql.php";

class Estabelecimento{

    private $estabId;
    private $estabNome;
    private $estabEndereco;
    private $estabCidade;
    private $estabNumLoja;
    private $con;

    public function __construct(){
        $this->con = new Sql();
    }

    public function getestabId(){
        return $this->estabId;
    }
    public function setestabId($id){
        $this->estabId = $id;
    }
    public function getestabNome(){
        return $this->estabNome;
    }

    public function setestabNome($nome){
        $this->estabNome = $nome;
    }

    public function getestabEndereco(){
        return $this->estabEndereco;
    }

    public function setestabEndereco($Endereco){
        $this->estabEndereco = $Endereco;
    }

    public function getestabCidade(){
        return $this->estabCidade;
    }

    public function setestabCidade($Cidade){
        $this->estabCidade = $Cidade;
    }

    public function getestabNumLojas(){
        return $this->estabNumLoja;
    }

    public function setestabNumLojas($numLojas){
        $this->estabNumLoja = $numLojas;
    }

    //Fim do geters e seters

    public function __toString(){
        return "ID: ". $this->getestabId() . "<br>
                Nome:" . $this->getestabNome() ."<br>
                Endereco:" . $this->getestabEndereco() . "<br>
                Cidade:" . $this->getestabCidade() . "<br>
                Cidade:" . $this->getestabNumLojas() . "<br>";
    }

    public function listarEstabelecimentos(){
		$cst = $this->con->conectar()->prepare("SELECT * FROM `estabelecimentos`;");
		if($cst->execute()){

        }
		$rst = $cst->fetchAll();
        return $rst;
	}

    public function cadastraEstabelecimento($dados)
    {
        $this->setestabNome($dados['estabNome']);
        $this->setestabEndereco($dados['estabEndereco']);
        $this->setestabCidade($dados['estabCidade']);
        $this->setestabNumLojas($dados['estabNumLoja']);
        try {

			$cst = $this->con->conectar()->prepare("INSERT INTO `estabelecimentos` (`nome`, `endereco`, `cidade`, `numLojas`)
                                                    VALUES (:nome, :endereco, :cidade, :numLojas);");
			$cst->bindParam(":nome", $this->estabNome, PDO::PARAM_STR);
			$cst->bindParam(":endereco", $this->estabEndereco, PDO::PARAM_STR);
			$cst->bindParam(":cidade", $this->estabCidade, PDO::PARAM_STR);
			$cst->bindParam(":numLojas", $this->estabNumLoja, PDO::PARAM_INT);
			if($cst->execute()){
                return true;
            }
            else{
				return false;
			}
        } catch (PDOException $e) {
            return 'Error: '.$e->getMessage();
        }


    }
}
?>
