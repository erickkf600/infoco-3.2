  <!-- menu section -->
  <section id="menu-area">
    <nav id="nav">
      <button id="fechar"><i class="far fa-window-close"></i></button>
      <ul>
        <span>
          <fieldset class="menu-mobile">MENU</fieldset>
          <li><a href="home" class="first"  title="Inicio">HOME</a></li>
          <li><a href="contato" title="Contato">CONTATO</a></li>
          <li><a href="planos" title="Planos">PLANOS</a></li>
          <li><a href="sobre" title="Quem nós somos">QUEM SOMOS</a></li>
          <li><a href="parceiros" title="Novidades">PARCEIROS</a></li>
          <li><a href="faq" title="Perguntas Frequentes">FAQ</a></li>
        </span>
        <fieldset class="categ">CATEGORIAS</fieldset>
        <li><a href="categoria.php?infocateg=comercio" class="first"><i class="fas fa-store"></i>Comércio</a></li>
        <li><a href="categoria.php?infocateg=moda"><i class="fas fa-tshirt"></i>Moda</a></li>
        <li><a href="categoria.php?infocateg=saude"><i class="fas fa-briefcase-medical"></i>Saúde</a></li>
        <li><a href="categoria.php?infocateg=beleza"><i class="fas fa-grin"></i>Beleza</a></li>
        <li><a href="categoria.php?infocateg=educacao"><i class="fas fa-graduation-cap"></i>Educação</a></li>
        <li><a href="categoria.php?infocateg=servicos"><i class="fas fa-cogs"></i>Serviços</a></li>
        <li><a href="categoria.php?infocateg=lazer"><i class="fas fa-umbrella-beach"></i>Lazer</a></li>
        <li><a href="categoria.php?infocateg=alimentacao"><i class="fas fa-utensils"></i>Alimentação</a></li>
      </ul>
    </nav>
    <nav class="navbar navbar-default main-navbar">  
      <div class="container">
        <div class="navbar-header">
          <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
          <!-- LOGO --> 
          <div class="sidebar-logo">
            <div class="menu"><i class="fas fa-bars" title="Menu"></i></div>                                               
            <a class="navbar-brand logo" href="home"><img src="intro.png" alt="InFoco"></a> 
          </div>                     
        </div>
        <div id="navbar">
          <ul id="top-menu" class="nav navbar-nav main-nav menu-scroll">
            <li class="active"><a href="home" title="Inicio">Home</a></li>
            <li><a href="contato" title="Contato">CONTATO</a></li>                  
            <li><a href="planos"  title="Planos">PLANOS</a></li> 
            <li><a href="sobre" title="Quem nós somos">QUEM SOMOS</a></li>
            <li><a href="parceiros" title="Novidades">PARCEIROS</a></li>             
            <li><a href="faq" title="Perguntas Frequentes">FAQ</a></li>             
          </ul>                            
        </div><!--/.nav-collapse -->
        <div class="search-area">
          <form method="get" action="pesquisa.php">
            <input id="search" name="pesq" type="text" placeholder="Digite o que procura...">
            <input id="search_submit" type="submit">
          </form>
        </div> 

      </div>          
    </nav> 
  </section>