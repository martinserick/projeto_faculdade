<?php
require_once "validaUsuario.php";
require_once "./class/ProdutoEstabelecimento.class.php";
require_once "./class/Produto.class.php";
require_once "./class/Estabelecimento.class.php";

$estab = new Estabelecimento();
$prod = new Produto();
$prodEstab = new ProdutoEstabelecimento();

$listProd = $prod->listarProdutos();
$listEstab = $estab->listarEstabelecimentos();

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $prodEstab->cadastraPrecoEstabelecimento($_POST);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/css/style.css">
    <title>Cadastro de Preços</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center align-items-center mt-5">
            <h1 class="text-center">Cadastro de Preços</h1>
            <div class="col-8">
                <form action="#" method="POST">
                    <label for="prodId" class="form-label required">Produto</label>
                    <select name="prodId" id="prodId" class="form-select">
                    <?php foreach ($listProd as $prod) { ?>
                        <option value="<?php echo $prod['id']; ?>"><?php echo $prod['nome'];?></option>
                    <?php }?>
                    </select>

                    <label for="estabId" class="form-label required">Estabelecimento</label>
                    <select name="estabId" id="estabId" class="form-select">
                    <?php foreach ($listEstab as $estab) { ?>
                        <option value="<?php echo $estab['id']; ?>"><?php echo $estab['nome'];?></option>
                    <?php }?>
                    </select>

                    <label for="prodestabPreco" class="form-label">Preço</label>
                    <input type="number" name="prodestabPreco" id="prodEstabPreco" class="form-control" step="any">

                    <input type="submit" value="Enviar" class="btn btn-primary mt-3">
                    <a href="listarEstabelcimentos.php"><button type="button" class="btn btn-danger mt-3">Cancelar</button></a>
                </form>
            </div>
        </div>
    </div>

</body>
</html>
