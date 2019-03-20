<?php	
	SESSION_START();
?>
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/personalizado.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/signin.css" rel="stylesheet">
    <link rel="icon" type="imagem/png" href="../View/imagem/maos.png" />
	<title>Devfenas</title>
  </head>

  <body class="text-center">
    <div class="form-signin">
        <form action='../PHP/valida_login.php' method="POST">
        <h1 class="h3 mb-3 font-weight-normal">Área Administrativa</h1>

        <input name="email" type="email" class="form-control" placeholder="Email" required autofocus>
        <input name="senha" type="password" class="form-control" placeholder="Senha" required><br>
        
        <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
        <?php if(isset($_SESSION['CamposEmBranco'])){
            echo "<a style='color:red;'>Campos em branco</a>";
            unset($_SESSION['CamposEmBranco']);
        }?>
        <?php if(isset($_SESSION['erroLogin'])){
            echo "<a style='color:red;'>Erro no Email ou na Senha</a>";
            unset($_SESSION['erroLogin']);
        }?>
        </form>
    </div>
     
    	
  </body>
</html>
