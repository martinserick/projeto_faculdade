<?php
    require_once "validaUsuario.php";
    require_once "./class/ProdutoEstabelecimento.class.php";
    require_once "./class/Estabelecimento.class.php";

    $prodEstab = new ProdutoEstabelecimento();
    $estab = new Estabelecimento();

    $listEstab = $estab->listarEstabelecimentos();
    if($_SERVER["REQUEST_METHOD"]=='POST'){
        $listagem = $prodEstab->listarProdutosEstabelecimentos($_POST);
    }else{
        $listagem = [];
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/css/style.css">
    <title>Listagem de Estabelecimentos</title>
</head>
<body>
   <div class="container">
    <div class="row justify-content-center align-items-center text-center">
        <div class="col-8">
            <h1>Menores Preços</h1>
            <p>Selecione o estabelecimento para ver o menor preço:</p>
            <form action="#" method="POST">
            <label for="estabId" class="form-label required">Estabelecimento</label>
                    <select name="estabId" id="estabId" class="form-select">
                    <?php foreach ($listEstab as $estab) { ?>
                        <option value="<?php echo $estab['id']; ?>"><?php echo $estab['nome'];?></option>
                    <?php }?>
                    </select>
                    <input type="submit" class="btn btn-primary mt-3" value="Buscar">
            </form>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Nome Produto</th>
                        <th>Preço</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach ($listagem as $valor) {
                            echo '<tr>';?>
                            <td><?php echo $valor['nome']; ?></td>
                            <td><?php echo $valor['prodestabPreco']; ?></td>
                        <?php echo '</tr>';  }?>
                </tbody>
            </table>
            <a class="self-align-start" href="menu.php"><button class="btn btn-secondary">Voltar</button></a>
        </div>
    </div>
   </div>
</body>
</html>
