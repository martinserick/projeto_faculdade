<?php
    require_once "validaUsuario.php";
    require_once "./class/Produto.class.php";

    $prod = new Produto();

    $listaProd = $prod->listarProdutos();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/css/style.css">
    <title>Listagem de Produtos</title>
</head>
<body>
   <div class="container">
    <div class="row justify-content-center align-items-center text-center mt-5">
        <div class="col-8">
            <h1 class="mb-3">Listagem de Produtos</h1>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#ID</th>
                        <th>Produto</th>
                        <th>Marca</th>
                        <th>Quantidade</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach ($listaProd as $valor) {
                            echo '<tr>';?>
                            <td><?php echo $valor['id']; ?></td>
                            <td><?php echo $valor['nome']; ?></td>
                            <td><?php echo $valor['marca']; ?></td>
                            <td><?php echo $valor['quantidade']; ?></td>
                        <?php echo '</tr>';  }?>
                </tbody>
            </table>
            <a class="self-align-start" href="cadastrarProdutos.php"><button class="btn btn-success">Novo</button></a>
            <a class="self-align-start" href="menu.php"><button class="btn btn-secondary">Voltar</button></a>
        </div>
    </div>
   </div>
</body>
</html>
