<?php 
include "banco.php";
session_start();

if(empty($_SESSION['usuario'])){
  header("Location: index.php");
  $off = "update acesso set status = 'offline' where usuario = '$usuario' limit 1";
  $sair = mysqli_query($con, $off);
  }else{
    $usuario = $_SESSION['usuario'];
    $query = "select * from acesso where usuario = '$usuario'";
    $consulta = mysqli_query($con, $query);
  
}
  ?>
  <!doctype html>
  <html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no">
    <meta http-eqiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/admin.css">
    <meta name="robots" content="noindex">
    <link rel="shortcut icon" href="icon.png">
  </head>
  <body>
    <?php 
      while($f = mysqli_fetch_array($consulta)){
    include "header-admin.php"; 
      $nome = $f['nome']; 
     echo "<h1 class='text-center titulo'>Bem vindo(a): <span id='nome'>$nome<span></h1>";
      }
    ?>
      <div class="container">
        <!-- FORM DE PESQUISA -->
        <div class="row justify-content-center">
          <div class="col-12">
            <form class="card card-sm" method="get" action="pesquisar.php">
              <div class="card-body row no-gutters align-items-center">
                <div class="col-auto">
                  <img src="css/lupa.png" class="img-fuid">
                </div>
                <div class="col">
                  <input class="pesq form-control form-control-lg" type="search" name="pesq" placeholder="Pesquisar">
                  <button class="btn" type="submit" id="botao">Pesquisar</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <!--------->
      <!-- BOTÕES -->
      <div class="container">
        <div class="itens mt-4">
          <div class="row box">
            <div class="col-md-4">
              <a href="g-partner.php">
                <div class="card-counter">
                  <p>GERENCIAR PARCEIROS</p>
                </div>
              </a>
            </div>
            <div class="col-md-4">
              <a href="">
                <div class="card-counter">
                  <p>MENSAGENS</p>
                </div>
              </a>
            </div>
            <div class="col-md-4">
              <a href="">
                <div class="card-counter">
                  <P>GERENCIAR CAROUSEL</P>
                </div>
              </a>
            </div>  
          </div>
        </div>
      </div>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    </body>
    </html>