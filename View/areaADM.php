<?php
    require_once('../PHP/conexao.php');
    include_once('../PHP/valida_permanencia.php');
    
    //echo $_SESSION['user_email'];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Devfenas</title>
    <link rel="icon" type="imagem/png" href="../View/imagem/maos.png" />
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   
    <link rel="stylesheet" href="css/bootstrap.css">
    <link href="css/started.css" rel="stylesheet"/>
    

</head>
<body style="background:#D3D3D3;">
<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
      <a class="navbar-brand disabled" href="#">Administrador</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" data-toggle="modal" data-target="#exampleModal">Mensagens</a>
          </li>
        </ul>
        <ul class="navbar-nav mr-auto">   
          <li class="nav-item">
            <a class="nav-link" href="../PHP/sair.php">Sair</a>
          </li>
        </ul>
      </div>
    </nav>
    <?php
        $sql = "SELECT * FROM usuarios WHERE sts = 1"; 
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
        //var_dump($users);
        
    ?>
   
   <table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col">Email</th>
      <th scope="col">Assunto</th>
      <th scope="col">Link</th>
    </tr>
  </thead>
  <tbody>
      <?php for($i = 0; $i <count($users); $i++) {?>
    <tr>
     <th scope="row"><?php if(isset($users[$i]['id_usuario'])){echo $users[$i]['id_usuario'];} ?></th>
      <td><?php if(isset($users[$i]['nome'])){echo $users[$i]['nome'];}?></td>  
      <td><?php if(isset($users[$i]['email'])){echo $users[$i]['email'];}?></td>
      <td><?php if(isset($users[$i]['assunto'])){echo $users[$i]['assunto'];}?></td>

      <td>
        <a data-toggle="modal" data-target="#modalMensagem" data-whatever="<?php echo $users[$i]['id_usuario']; ?>">
           <input type="button" id="<?php echo $users[$i]['id_usuario']; ?>" value="<?php echo $users[$i]['id_usuario']; ?>" onclick="BotaoId(this.id)"/>
        </a>
      <td>

        
    </tr>
    <?php } ?>
  </tbody>
</table>
<!-- Modal -->
<div class="modal fade" id="modalMensagem" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <script>
              BotaoId(id){
                var idclicado = document.getElementById(id);   
                alert(idclicado);   
              }
              
      </script>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fecha</button>
        <!--<button type="button" class="btn btn-primary">Save changes</button>-->
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Total de mensagens dos clientes</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php 
            $sql = "SELECT * FROM usuarios WHERE sts = 1"; 
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
            count($users);
            echo "Existe ".count($users). " mensagens";
        ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fecha</button>
        <!--<button type="button" class="btn btn-primary">Save changes</button>-->
      </div>
    </div>
  </div>
</div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</body>
</html>