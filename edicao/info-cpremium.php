<?php
session_start();
if(empty($_SESSION['usuario'])){
  header("Location: index.php");
}else{
  $usuario = $_SESSION['usuario']; 
}
$id = $_GET['id'];
include "../banco.php";
$sql    = ("SELECT * FROM cartao_premium where id = $id");
$result = mysqli_query($con , $sql); 
?>
<!doctype html>
<html lang="pt-br">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no">
  <meta name="robots" content="noindex">
  <meta http-eqiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/lists.css">
  <link rel="shortcut icon" href="icon.png">
</head>
<body>
  <div class="container col-md-6 mb-5 bg-light mt-5">
    <small class="text-center">Para alterar edite o campo que deseja e click em editar</small>
    <?php 
    while ($p = mysqli_fetch_array($result)) {
      $nome = $p['nome'];
      $email = $p['email'];
      $telefone = $p['telefone'];
      $celular = $p['celular'];
      $cep = $p['cep'];
      $cidade = $p['cidade'];
      $estado = $p['estado'];
      $endereco = $p['endereco'];
      $bairro = $p['bairro'];
      $numero = $p['numero'];
      $data = $p['data/hora'];
      $deOndeVem = $p['deOndeVem'];
      $nomeParceiro = $p['nomeParceiro'];
      ?>
      <form method="post" action="edit-cpremium.php">
        <div class="modal-body">
          <div class="form-group">
            <small >Nome:</small>
            <input type="text"class="form-control" name="nome" value="<?php echo$nome ?>">
            <small>Email:</small>
            <input type="text"class="form-control" name="email" value="<?php echo$email ?>">
          </div>
          <div class="row">
            <div class="col-md-6">
              <small>Telefone:</small>
              <input type="text"class="form-control" name="telefone" value="<?php echo$telefone ?>">
            </div>
            <div class="col-md-6">
              <small>Celular:</small>
              <input type="text"class="form-control" name="celular" value="<?php echo$celular ?>">
            </div>
          </div> 
          <div class="row">
            <div class="col-md-6">
              <small>De onde vem:</small>
              <select name="deOndeVem" class="form-control" required id="options">
                <option selected value="<?php echo$deOndeVem ?>"><?php echo$deOndeVem ?></option>
                <option value="facebook">Facebook</option>
                <option value="instagram">Instagram</option>
                <option value="empresas parceiras" id="empresa">Empresas Parceiras</option>
                <option value="indicaçao">Indicação</option>
              </select>
            </div>
            <div class="col-md-6">
              <small>Nome da empresa que indicou</small>
              <input type="text"class="form-control" name="nomeParceiro" value="<?php echo$nomeParceiro ?>">
            </div>
          </div>
          <div class="form-group">
            <small>CEP:</small>
            <input type="text"class="form-control" name="cep" value="<?php echo$cep ?>">
            <small>Cidade:</small>
            <input type="text"class="form-control" name="cidade" value="<?php echo$cidade ?>">
            <small>Estado:</small>
            <input type="text"class="form-control" name="estado" value="<?php echo$estado ?>">
            <small>Endereço:</small>
            <input type="text"class="form-control" name="endereco" value="<?php echo$endereco ?>">
            <small>Bairro:</small>
            <input type="text"class="form-control" name="bairro" value="<?php echo$bairro ?>">
            <small>Número:</small>
            <input type="text"class="form-control" name="numero" value="<?php echo$numero ?>">
            <input type="hidden"class="form-control" name="id" value="<?php echo$id ?>">
          </div>
        </div>
        <button type="submit" class="btn btn-success">EDITAR</button>
      </form>
    <?php } ?>
  </div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>
</html>


