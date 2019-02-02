<?php 
$a = 0;
include 'includes/list-user.php';
   if (isset($_COOKIE['counte'])) {
      $counte = $_COOKIE['counte'] + 1;
  } else {
    $counte = 1;
    $a++;
}
setcookie('counte', "$counte", time()+60*60*24);
$abre =@fopen("includes/list-user.php","w");
$ss ='<?php $a='.$a.'; ?>';
$escreve =fwrite($abre, $ss);

  include "banco.php";
  $busca = "SELECT * from parceiros where primeiraPagina = 'sim' and status = 'ativo' limit 8";
  $iten = mysqli_query($con, $busca);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta http-equiv="Content-Type" content="text/html"; charset="utf-8"/>
  <meta name="author" content="Erick Ferreira"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no">
  <meta name="description" content="Ingresse na nossa rede de networking e receba benefícios exclusivos, um mundo de oportunidades esperam por você!"/>
  <meta name="keywords" content="infoco publicidades, infocomn, marketing, infoco publicidade, infoco, networking, plataforma comercial, erickkf600, erick ferreira, comercios, nova iguaçu, nova iguacu, rede networking">
  <meta name="author" content="Erick Ferreira"/>
  <meta name="google-site-verification" content="VEPmj7vef9AH59emCHJnJ2tNlZYxiEbAjlAjU1UKuRI" />
  <meta name="title" content="InFoco Publicidades: infoco"/>
  <title>InFoco Publicidades: infoco</title>
  <link rel="shortcut icon" href="icon.png"/>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"/>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.6/css/swiper.min.css"/>

  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css"/>  
  <link rel="stylesheet" type="text/css" href="css/min.css"/>
  <link href="css/core.css" rel="stylesheet" type="text/css"/>
</head>
<body>
  <div id="preloader"><div class="loader"></div></div>
  <a class="scrollToTop" href="#"><i class="fas fa-chevron-up"></i></a>
  <header id="header"><?php include "header.php" ?></header>
  <main>
    <?php include"includes/sobre-infoco.php"; include"includes/contador.php"; include"parceiros.php"; include"logos.php"; include"newsletter.php"?>
  </main>  
  <footer id="footer"><?php include "footer.php" ?></footer>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.3/jquery.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.6/js/swiper.min.js"></script>  
  <script type="text/javascript" src="js/waypoints.min.js"></script>
  <script type="text/javascript" src="js/wow.js"></script> 
  <script type="text/javascript" src="js/custom.js"></script>

</body>
</html>