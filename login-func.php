<?php 
  $usuario = strip_tags($_POST['usuario']);
  $senha    = $_POST['senha'];


  include "banco.php";

  $query = "select * from acesso where usuario = '$usuario' and senha = '$senha' limit 1";

  $consulta = mysqli_query($con, $query);

  $total = mysqli_num_rows($consulta);
  if($total == 0){
    ?>  
    <script>
      alert("NENHUM USUARIO ENCONTRADO");window.location.href='infoco-login.php';
    </script>
    <?php 
  }else{
    session_start();
    $_SESSION['usuario'] = $usuario;
    $atualiza = "update acesso set ultimoAcesso = CURRENT_TIMESTAMP, status = 'online' where usuario = '$usuario' and senha = '$senha' limit 1";
    $hora = mysqli_query($con, $atualiza);
    header("Location: infoco-admin.php");
  }if (empty($_SESSION['usuario'])) {
     $atualiza = "update acesso set status = 'offline' where usuario = '$usuario' and senha = '$senha' limit 1";
  }
?>
  