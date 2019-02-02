<?php 
	include "banco.php";
	 if(empty($_GET['pesq'])){
    $query = "select * from parceiros";     
  }else{
    $p = $_GET['pesq'];
    $query = "select * from parceiros where nome like '%$p%' or tags like '%$p%'";
  }
  $consulta = mysqli_query($con, $query);
  $pesquisa = mysqli_num_rows($consulta);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no">
  <meta name="description" content="InFoco Publicidade, infocomn, publicidade, infoco, InFoco, marketing, erick ferreira, mn, empresarial, plataforma comercial, comercios, parceiros, categoria">
  <meta name="author" content="Erick Ferreira">
  <meta name="google-site-verification" content="VEPmj7vef9AH59emCHJnJ2tNlZYxiEbAjlAjU1UKuRI" />
  <title>InFoco Publicidades</title>
  <link rel="shortcut icon" href="icon.png">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.6/css/swiper.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css"/>    
  <link rel="stylesheet" type="text/css" href="css/min.css">
  <link href="css/core.css" rel="stylesheet">
</head>
<body>
  <div id="preloader"><div class="loader"></div></div>
  <a class="scrollToTop" href="#"><i class="fas fa-chevron-up"></i></a> 
  <header id="header"><?php include "header-for-all.php" ?></header>
  <?php if($pesquisa == 0){ ?>
  	<div class="container" id="container">
      <div class="faq-title">
        <h1 title="Sem Categoria" style="padding: 20rem 10rem 5px 10rem">Não temos nenhum parcerio com este nome no momento.</h1>
        <span class="tittle-line" style="margin-bottom: 10rem"></span>
      </div>
    </div>  
  <?php }else{ ?>	
  <main>
    <section id="partners">
      <div class="container">
        <?php 
          if($pesquisa > 1){ 
            $res = "Resultados";
          }else{
            $res = "Resultado";
          }
          echo "<h3>$pesquisa $res para busca '$p'</h3>"; 
        ?>
        <div class="row">
          <div class="col-md-12">
            <div class="area">
              <div class="row">
                  <div class="items-esquerda">                  
                      <div class="row" id="linha-card">
                      	<?php 
                      		while($f = mysqli_fetch_array($consulta)){
                      		$nome = $f['nome'];
                      		$img = $f['img'];
                      		$url = $f['url'];
                      	?>
                        <div class="cards col-md-3 col-sm-6 col-xs-6">
                          <div class="cards-item">
                            <div class="card">
                              <div class="card-image"><img src="img/parceiros/<?php echo $img  ?>" width="100%"></div>
                              <div class="card-content">
                                <div class="card-title"><?php echo $nome ?></div>
                                <a href="<?php echo $url ?>" target="_blank" class="btn btn-block card-btn">Visitar</a>
                              </div>
                            </div>
                          </div>  
                        </div>
    					<?php } ?>	
                     </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
<?php } ?>  
  <footer id="footer"><?php include "footer.php" ?></footer>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.3/jquery.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.6/js/swiper.min.js"></script>  
  <script type="text/javascript" src="js/script.js"></script>
</body>
</html>