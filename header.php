 <section id="menu-area">
  <nav id="nav">
    <button id="fechar"><i class="far fa-window-close"></i></button>
    <ul>
      <span>
        <fieldset class="menu-mobile">MENU</fieldset>
        <li><a href="home" class="home"  title="Pagina inicial infoco">HOME</a></li>
        <li><a href="contato" title="Pagina contato infoco">CONTATO</a></li>
        <li><a href="planos" title="Pagina planos infoco">PLANOS</a></li>
        <li><a href="sobre" title="Pagina quem somos infoco">QUEM SOMOS</a></li>
        <li><a href="parceiros" title="Pagina novidades infoco">PARCEIROS</a></li>
        <li><a href="faq" title="Pagina perguntas frequentes infoco">FAQ</a></li>
      </span>
      <fieldset class="categ">CATEGORIAS</fieldset>
      <li><a href="categoria.php?infocateg=comercio" class="first"><i class="fas fa-store"></i>Comércio</a></li>
      <li><a href="categoria.php?infocateg=moda" title="moda"><i class="fas fa-tshirt"></i>Moda</a></li>
      <li><a href="categoria.php?infocateg=saude" title="saude"><i class="fas fa-briefcase-medical"></i>Saúde</a></li>
      <li><a href="categoria.php?infocateg=beleza" title="beleza"><i class="fas fa-grin"></i>Beleza</a></li>
      <li><a href="categoria.php?infocateg=educacao" title="educacao"><i class="fas fa-graduation-cap"></i>Educação</a></li>
      <li><a href="categoria.php?infocateg=servicos" title="servicos"><i class="fas fa-cogs"></i>Serviços</a></li>
      <li><a href="categoria.php?infocateg=lazer" title="lazer"><i class="fas fa-umbrella-beach"></i>Lazer</a></li>
      <li><a href="categoria.php?infocateg=alimentacao" title="alimentacao"><i class="fas fa-utensils"></i>Alimentação</a></li>
    </ul>
  </nav>
  <nav class="navbar navbar-default main-navbar">  
    <div class="container">
      <div class="navbar-header">
        <div class="sidebar-logo">
          <div class="menu"><i class="fas fa-bars" title="Menu InFoco"></i></div>
          <a class="navbar-brand logo" href="home" title="Pagina inicial infoco"><img src="intro.png" alt="InFoco logo" title="logo da infoco"></a>
        </div>                     
      </div>
      <div id="navbar">
        <ul id="top-menu" class="nav navbar-nav main-nav menu-scroll">
         <li><a href="home" class="home"  title="Pagina inicial infoco">HOME</a></li>
        <li><a href="contato" title="Pagina contato infoco">CONTATO</a></li>
        <li><a href="planos" title="Pagina planos infoco">PLANOS</a></li>
        <li><a href="sobre" title="Pagina quem somos infoco">QUEM SOMOS</a></li>
        <li><a href="parceiros" title="Pagina novidades infoco">PARCEIROS</a></li>
        <li><a href="faq" title="Pagina perguntas frequentes infoco">FAQ</a></li>            
       </ul>                            
     </div>
     <div class="search-area">
      <form method="get" action="pesquisa.php">
        <input id="search" name="pesq" type="text" placeholder="Digite o que procura...">
        <input id="search_submit" type="submit">
      </form>
    </div> 

  </div>          
</nav> 
</section>
<section>
<div id="carousel-parceiros">
  <div class="header-inner">
  <div class="swiper-container" id="slide-comercial">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <img src='img/banners/med.jpg' width='100%' alt='Medisim' title="parceiro infoco medisim">
        <a href="http://medisim.com.br/" target="_blank" title="parceiro infoco medisim" class="btn link-carousel">VISITAR</a>
      </div>
      <?php 
      $i = 0;
      while ( $i < 5) { 
        $i++;  
        echo "<div class='swiper-slide'>
        <img src='img/banners/$i.jpg' width='100%' alt='BANNER PARCEIROS INFOCO' title='Banner de Parceiros Infoco'>
        </div>";
      } 
      ?>
      <div class="swiper-slide">
        <img src='img/banners/infoco.jpg' width='100%' alt='Infoco Publicidades' title="Infoco Publicidades">
        <a href="adesao.php" class="btn link-infoco" title="adesão infoco">FAÇA SUA ADESÃO</a>
      </div>
    </div>
    <div class="scrolldown">
      <a class="scroll-icon smoothscroll" title="Veja mais da infoco">    
        Role para Baixo       
        <i class="fas fa-arrow-right"></i>
      </a>
    </div> 
    <div class="next-back">
      <div class="voltar"></div>
      <div class="proximo"></div>
    </div>
    <div class="swiper-pagination"></div>     
  </div>
</div>
</div>
</section>