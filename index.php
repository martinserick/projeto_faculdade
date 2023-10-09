<?php
//BUSCANDO AS CLASSES
require_once 'class/Usuario.class.php';
//ESTANCIANDO A CLASSES
$user = new Usuario();
//FAZENDO O LOGIN
if(isset($_POST['btLogar'])){
	$user->logarUsuario($_POST);
}
?>
<!DOCTYPE HTML>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<title>Sistema de login</title>

</head>

<body>
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col">
                <div id="areaLogin">
                    <form action="" method="post">
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon">@</span>
                                <input type="text" name="email" class="form-control" placeholder="E-mail" required="required" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
                              </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                                <input type="password" name="senha" class="form-control" placeholder="Senha">
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="btLogar" class="btn btn-primary btn-block">Logar</button>
                        </div>
                    </form>
                    <?php if(isset($_GET["login"]) == "error"){ ?>
                    <div class="alert alert-danger alert-block alert-aling" role="alert">Ops! E-mail ou Senha estão errado</div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
