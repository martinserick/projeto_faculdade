<?php
require_once "validaUsuario.php";
require_once "./class/Produto.class.php";

$prod = new Produto();

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $prod->cadastraProduto($_POST);
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
    <title>Novo Produto</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center align-items-center mt-5">
            <h1 class="text-center">Cadastro de Produtos</h1>
            <div class="col-8">
                <form action="#" method="POST">
                    <label for="prodNome" class="form-label required">Nome do Produto</label>
                    <input type="text" name="prodNome" id="prodNome" class="form-control" required>

                    <label for="prodMarca" class="form-label">Marca</label>
                    <input type="text" name="prodMarca" id="prodMarca" class="form-control" required>

                    <label for="prodQuantidade" class="form-label">Quantidade</label>
                    <input type="number" name="prodQuantidade" id="prodQuantidade" class="form-control" required step='any'>

                    <input type="submit" value="Enviar" class="btn btn-primary mt-3">
                    <a href="listarProdutos.php"><button type="button" class="btn btn-danger mt-3">Cancelar</button></a>
                </form>
            </div>
        </div>
    </div>

</body>
</html>
