<?php 
include "banco.php";
/*************PAGINAÇÃO********************/
//Verificar se está sendo passado na URL a página atual, senao é atribuido a pagina 
$pagina = (isset($_GET['pagina']))? $_GET['pagina'] : 1;
//Selecionar todos os itens da tabela
$busca = "SELECT * from parceiros where status = 'ativo'";
$iten = mysqli_query($con, $busca);
//Contar o total de itens
$total = mysqli_num_rows($iten);
//Seta a quantidade de itens por pagina
$quantidade_pg = 12;
//calcular o número de pagina necessárias para apresentar todos os itens
$num_pagina = ceil($total/$quantidade_pg);
//Calcular o inicio da visualizacao
$incio = ($quantidade_pg*$pagina)-$quantidade_pg;
//Selecionar os items a serem apresentado na página
$busca = "select * from parceiros limit $incio, $quantidade_pg";
$iten = mysqli_query($con, $busca);
$total = mysqli_num_rows($iten);
var_dump($incio);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no">
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
<body class="body-partner">
  <div id="preloader"><div class="loader"></div></div>
  <a class="scrollToTop" href="#"><i class="fas fa-chevron-up"></i></a> 
  <header id="header"><?php include "header-for-all.php" ?></header>
  <main>
    <section id="partners">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="area">
              <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12">
                  <div class="items-esquerda">
                    <article class="conteudo">                    
                      <div class="row" id="linha-card">
                        <?php 
                        while($f = mysqli_fetch_array($iten)){ 
                          $nome = $f['nome'];
                          $url = $f['url'];
                          $img = $f['img'];
                          ?>
                          <div class="cards col-md-4 col-sm-6 col-xs-6">
                            <div class="cards-item">
                              <div class="card" id="card-infoco">
                                <div class="card-image"><img src="img/parceiros/<?php echo $img ?>"></div>
                                <div class="card-content">
                                  <div class="card-title"><?php echo $nome ?></div>
                                  <a href="<?php echo $url ?>" target="_blank" class="btn btn-block card-btn">Visitar</a>
                                </div>
                              </div>
                            </div>  
                          </div>
                        <?php } ?>
                      </div>
                    </article>
                  </div>
                  <nav>
                    <ul class="pagination paginacao">
                      <?php 
                      $pagina_anterior = $pagina - 1;
                      $pagina_posterior = $pagina + 1; 
                      ?>
                      <li>
                        <?php if($pagina_anterior != 0){ ?>
                          <a href="parceiros.php?pagina=<?php echo$pagina_anterior ?>" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                          </a>
                        <?php }else{  ?>
                         <span class="hidden"></span>
                       <?php } ?>
                     </li>
                     <?php for($i = 1; $i < $num_pagina + 1; $i++){ ?>
                      <li>
                        <a href="parceiros.php?pagina=<?php echo$i ?>"><?php echo $i ?></a>
                      </li>
                    <?php } ?>
                    <li>
                      <?php if($pagina_posterior <= $num_pagina){ ?>
                        <a href="parceiros.php?pagina=<?php echo$pagina_posterior ?>" aria-label="Next">
                          <span aria-hidden="true">&raquo;</span>
                        </a>
                      <?php }else{ ?>
                        <span class="hidden"></span>
                      <?php } ?>  
                    </li>
                  </ul>
                </nav>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-12">
                <aside class="blog-right">
                  <div class="direita-cont">
                    <h2>Buscar Parceiro</h2>
                    <form class="insere-texto" method="get" action="pesquisa.php">
                      <input type="text" placeholder="Digite o que Procura..." name="pesq">
                      <button class="btn" id="pesquisar-btn" data-text="Pesquisar" type="submit">Buscar</button>
                    </form>
                  </div>
                  <div class="direita-cont">
                    <div class="intagram-title">
                      <h2>Instagram Posts</h2>
                      <a href="https://www.instagram.com/infocopublicidadepl/" target="_black">seguir</a>
                    </div>
                    <script src="https://cdn.lightwidget.com/widgets/lightwidget.js"></script><iframe src="//lightwidget.com/widgets/d8b365292b955736b88d4eca9d826c80.html" scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width:100%;border:0;overflow:hidden;"></iframe> 
                  </div>
                  <div id="fb-root"></div>
                  <script>(function(d, s, id) {
                    var js, fjs = d.getElementsByTagName(s)[0];
                    if (d.getElementById(id)) return;
                    js = d.createElement(s); js.id = id;
                    js.src = 'https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v3.2';
                    fjs.parentNode.insertBefore(js, fjs);
                  }(document, 'script', 'facebook-jssdk'));</script>
                  <div class="direita-cont">
                    <h2>Facebook Posts</h2>
                    <div class="fb-page" data-href="https://www.facebook.com/Infoco-Publicidades-2020576488244678/" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/Infoco-Publicidades-2020576488244678/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/InFoco-Marketing-Multin%C3%ADvel-1184742348366469/">InFoco Publicidades</a></blockquote></div>
                  </div>
                  <div class="direita-cont">
                    <h2>Assine a newslater</h2>
                    <form class="insere-texto">
                      <input type="text" placeholder="Seu Nome" required>
                      <input type="email" placeholder=" Seu Email" required>
                      <button class="btn" id="pesquisar-btn" data-text="Pesquisar" type="submit">Assinar</button>
                    </form>
                  </div>
                </aside>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
<footer id="footer"><?php include "footer.php" ?></footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.3/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.6/js/swiper.min.js"></script>  
<script type="text/javascript" src="js/script.js"></script>
</body>
</html>