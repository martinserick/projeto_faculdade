<?php
require_once "validaUsuario.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/css/style.css">
    <title>Menu - Sistema de Preços</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row justify-content-end">
            <div class="col self-align-end">
                <a href="?sair=sim" class="btn btn-danger">Sair</a>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center align-items-center text-center mt-5">
            <div class="col-8">
                <h1>Bem vindo ao Sistema de Preços</h1>
                <ul id="actionMenuList" class="m-1">
                    <li><a href="listarProdutos.php" class="btn btn-primary m-2">Listagem de Produtos</a></li>
                    <li><a href="listarEstabelcimentos.php" class="btn btn-primary m-2">Listagem de Estabelecimentos</a></li>
                    <li><a href="cadastrarProdutoEstabelecimentos.php" class="btn btn-primary m-2">Cadastro de Preços</a></li>
                    <li><a href="listagemMenorPreco.php" class="btn btn-primary">Menores Preços</a></li>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>
