<?php
include_once "sql.php";

class ProdutoEstabelecimento
{

    private $prodestabId;
    private $prodId;
    private $estabId;
    private $prodestabPreco;
    private $con;

    public function __construct()
    {
        $this->con = new Sql();
    }

    public function getprodestabId()
    {
        return $this->prodestabId;
    }
    public function setprodestabId($id)
    {
        $this->prodestabId = $id;
    }
    public function getprodId()
    {
        return $this->prodId;
    }

    public function setprodId($id)
    {
        $this->prodId = $id;
    }

    public function getestabId()
    {
        return $this->estabId;
    }

    public function setestabId($id)
    {
        $this->estabId = $id;
    }

    public function getprodestabPreco()
    {
        return $this->prodestabPreco;
    }

    public function setprodestabPreco($preco)
    {
        $this->prodestabPreco = $preco;
    }

    //Fim do geters e seters

    public function __toString()
    {
        return "ID: " . $this->getprodestabId() . "<br>
                Produto:" . $this->getprodId() . "<br>
                Estabelecimento:" . $this->getestabId() . "<br>
                Preço:" . $this->getprodestabPreco() . "<br>";
    }

    public function listarProdutosEstabelecimentos($dado)
    {
        $this->setestabId($dado['estabId']);
        try {
            $cst = $this->con->conectar()->prepare('
            SELECT p.nome, p.marca, e.nome AS estabelecimento, ep.prodestabPreco
            FROM produtos p
            JOIN produto_estabelecimento ep ON p.id = ep.prodId
            JOIN estabelecimentos e ON ep.estabId = e.id
            JOIN
            (
                SELECT prodId, MIN(prodestabPreco) AS menor_preco
                FROM produto_estabelecimento
                GROUP BY prodId
            )
            ep_min ON ep.prodId = ep_min.prodId
            WHERE e.id = :id
            AND ep.prodestabPreco = ep_min.menor_preco;
        ');
            $cst->bindParam(":id", $this->estabId, PDO::PARAM_INT);
            if ($cst->execute()) {

            } else {

            }
            $rst = $cst->fetchAll();
            return $rst;
        } catch (PDOException $e) {
            return 'Error: ' . $e->getMessage();
        }
    }

    public function cadastraPrecoEstabelecimento($dados)
    {
        $this->setprodId($dados['prodId']);
        $this->setestabId($dados['estabId']);
        $this->setprodestabPreco($dados['prodestabPreco']);
        try {

            $cst = $this->con->conectar()->prepare("INSERT INTO `produto_estabelecimento` (`prodId`, `estabId`, `prodestabPreco`)
                                                    VALUES (:prodId, :estabId, :prodestabPreco);");
            $cst->bindParam(":prodId", $this->prodId, PDO::PARAM_INT);
            $cst->bindParam(":estabId", $this->estabId, PDO::PARAM_INT);
            $cst->bindParam(":prodestabPreco", $this->prodestabPreco, PDO::PARAM_STR);
            if ($cst->execute()) {
                return true;
            } else {
                return false;
            }
        } catch (PDOException $e) {
            return 'Error: ' . $e->getMessage();
        }


    }
}
?>

