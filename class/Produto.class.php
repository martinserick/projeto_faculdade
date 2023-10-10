<?php
include_once "sql.php";

class Produto{

    private $prodId;
    private $prodNome;
    private $prodMarca;
    private $prodQuantidade;
    private $con;

    public function __construct(){
        $this->con = new Sql();
    }

    public function getprodId(){
        return $this->prodId;
    }
    public function setprodId($id){
        $this->prodId = $id;
    }
    public function getprodNome(){
        return $this->prodNome;
    }

    public function setprodNome($nome){
        $this->prodNome = $nome;
    }

    public function getprodMarca(){
        return $this->prodMarca;
    }

    public function setprodMarca($Marca){
        $this->prodMarca = $Marca;
    }

    public function getprodQuantidade(){
        return $this->prodQuantidade;
    }

    public function setprodQuantidade($Quantidade){
        $this->prodQuantidade = $Quantidade;
    }

    //Fim do geters e seters

    public function __toString(){
        return "ID: ". $this->getprodId() . "<br>
                Nome:" . $this->getprodNome() ."<br>
                Marca:" . $this->getprodMarca() . "<br>
                Quantidade:" . $this->getprodQuantidade() . "<br>";
    }

    public function listarProdutos(){
		$cst = $this->con->conectar()->prepare("SELECT * FROM `produtos`;");
		if($cst->execute()){

        }
		$rst = $cst->fetchAll();
        return $rst;
	}

    public function cadastraProduto($dados)
    {
        $this->setprodNome($dados['prodNome']);
        $this->setprodMarca($dados['prodMarca']);
        $this->setprodQuantidade($dados['prodQuantidade']);
        try {

			$cst = $this->con->conectar()->prepare("INSERT INTO `produtos` (`nome`, `marca`, `quantidade`)
                                                    VALUES (:nome, :marca, :quantidade);");
			$cst->bindParam(":nome", $this->prodNome, PDO::PARAM_STR);
			$cst->bindParam(":marca", $this->prodMarca, PDO::PARAM_STR);
			$cst->bindParam(":quantidade", $this->prodQuantidade, PDO::PARAM_INT);
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
