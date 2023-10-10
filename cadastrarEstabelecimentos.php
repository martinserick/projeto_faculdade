<?php
require_once "validaUsuario.php";
require_once "./class/Estabelecimento.class.php";

$estab = new Estabelecimento();

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $estab->cadastraEstabelecimento($_POST);
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
    <title>Novo Estabelcimento</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center align-items-center mt-5">
            <h1 class="text-center">Cadastro de Estabelcimento</h1>
            <div class="col-8">
                <form action="#" method="POST">
                    <label for="estabNome" class="form-label required">Nome do Estabelecimento</label>
                    <input type="text" name="estabNome" id="estabNome" class="form-control" required>

                    <label for="estabEndereco" class="form-label">Endereco</label>
                    <input type="text" name="estabEndereco" id="estabEndereco" class="form-control" required>

                    <label for="estabCidade" class="form-label">Cidade</label>
                    <input type="text" name="estabCidade" id="estabCidade" class="form-control" required>

                    <label for="estabNumLoja" class="form-label">Nº Lojas</label>
                    <input type="text" name="estabNumLoja" id="estabNumLoja" class="form-control" required>

                    <input type="submit" value="Enviar" class="btn btn-primary mt-3">
                    <a href="listarEstabelcimentos.php"><button type="button" class="btn btn-danger mt-3">Cancelar</button></a>
                </form>
            </div>
        </div>
    </div>

</body>
</html>
