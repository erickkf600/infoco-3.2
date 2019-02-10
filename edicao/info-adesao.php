<?php
session_start();
if(empty($_SESSION['usuario'])){
  header("Location: index.php");
}else{
  $usuario = $_SESSION['usuario']; 
}
$id = $_GET['id'];
include "../banco.php";
$sql    = ("SELECT * FROM fichaadesao where id = $id");
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
      $cnpj = $p['cnpj']; 
      $nomeFantasia= $p['nomeFantasia'];
      $inscricaoMunicipal = $p['inscricaoMunicipal'];
      $inscricaoEstadual = $p['inscricaoEstadual'];
      $segmentoProfissional = $p['segmentoProfissional']; 
      $cep = $p['cep']; 
      $municipio = $p['municipio'];
      $estado = $p['estado'];   
      $endereco = $p['endereco']; 
      $bairro = $p['bairro'];
      $numero = $p['numero'];
      $plano = $p['plano'];

      $telefone = $p['telefone']; 
      $celular = $p['celular'];
      $whastapp = $p['whastapp'];
      $email = $p['email'];
      $facebook = $p['facebook'];
      $instagram = $p['instagram'];
      $twitter = $p['twitter'];
      $site = $p['site'];
      ?>
      <form method="post" action="edit-adesao.php">
        <div class="modal-body">
          <div class="row">
            <div class="col-md-6">
              <small>Nome:</small>
              <input type="text"class="form-control" name="nome" value="<?php echo$nome ?>">
            </div>
            <div class="col-md-6">
              <small>Nome Fantasia:</small>
              <input type="text"class="form-control" name="nomeFantasia" value="<?php echo$nomeFantasia ?>">
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <small>CNPJ:</small>
              <input type="text"class="form-control" name="cnpj" value="<?php echo$cnpj ?>">
            </div>
            <div class="col-md-6">
              <small>Segmento Profissional:</small>
              <input type="text"class="form-control" name="segmentoProfissional" value="<?php 
              echo$segmentoProfissional ?>">
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <small>Inscrição Municipal:</small>
              <input type="text"class="form-control" name="inscricaoMunicipal" value="<?php 
              echo$inscricaoMunicipal ?>">
            </div>
            <div class="col-md-6">
              <small>Inscrição Estadual:</small>
              <input type="text"class="form-control" name="inscricaoEstadual" value="<?php 
              echo$inscricaoEstadual ?>">
            </div>
          </div> 
          <div class="row">
            <div class="col-md-6">
              <small>Plano:</small>
              <select name="plano" class="form-control" required>
                <option selected value="<?php echo$plano ?>"><?php echo$plano ?></option>
                <option value="Básico">Básico</option>
                <option value="Intermediário">Intermediário</option>
                <option value="Avançado">Avançado</option>
                <option value="Super">Super</option>
              </select>
            </div>
            <div class="col-md-6">
              <small>CEP:</small>
              <input type="text"class="form-control" name="cep" value="<?php echo$cep ?>">
            </div>
          </div>
          <div class="form-group">
            <small>Cidade:</small>
            <input type="text"class="form-control" name="municipio" value="<?php echo$municipio ?>">
            <small>Estado:</small>
            <input type="text"class="form-control" name="estado" value="<?php echo$estado ?>">
            <small>Endereço:</small>
            <input type="text"class="form-control" name="endereco" value="<?php echo$endereco ?>">
            <small>Bairro:</small>
            <input type="text"class="form-control" name="bairro" value="<?php echo$bairro ?>">
            <small>Número:</small>
            <input type="text"class="form-control" name="numero" value="<?php echo$numero ?>">
          </div>
          <div class="form-group">
            <div class="row">
              <div class="col-md-4">
                <small>Telefone:</small>
                <input type="text"class="form-control" name="telefone" value="<?php echo$telefone ?>">
              </div>
              <div class="col-md-4">
                <small>Celular:</small>
                <input type="text"class="form-control" name="celular" value="<?php echo$celular ?>">
              </div>
              <div class="col-md-4">
                <small>Whatsapp ?:</small>
                <select name="whastapp" class="form-control" required>
                  <option selected value="<?php echo$whastapp ?>"><?php echo$whastapp ?></option>
                  <option value="sim">sim</option>
                  <option value="não">não</option>
                </select>
              </div>
            </div>
            <small>Email:</small>
            <input type="text"class="form-control" name="email" value="<?php echo$email ?>">
            <small>Facebook:</small>
            <input type="text"class="form-control" name="facebook" value="<?php echo$facebook ?>">
            <small>Instagram:</small>
            <input type="text"class="form-control" name="instagram" value="<?php echo$instagram ?>">
            <small>Twitter:</small>
            <input type="text"class="form-control" name="twitter" value="<?php echo$twitter ?>">
            <small>Site:</small>
            <input type="text"class="form-control" name="site" value="<?php echo$site ?>">
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


