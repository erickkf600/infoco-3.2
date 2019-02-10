
<section id="parceiros">
 <div class="container">
   <div class="row">
     <div class="col-md-12">
       <div class="portfolio-area">
        <div class="title-area">
          <h2>Novidades</h2>
          <span class="tittle-line"></span>
          <p class="p-nov">Confira também os nossos novos parceiros</p>
        </div>

        <!-- CARDS -->
        <div class="row" id="linha-card">
          <?php 
            while($f = mysqli_fetch_array($iten)){ 
              $nome = $f['nome'];
              $url = $f['url'];
              $img = $f['img'];
            ?>
            <div class="cards col-md-3 col-sm-6 col-xs-6">
              <div class="cards-item">
                <div class="card">
                  <div class="card-image"><img src="img/parceiros/<?php echo $img ?>" width="100%" alt="parceiro-imagem"></div>
                  <div class="card-content">
                    <div class="card-title"><?php echo $nome ?></div>
                    <a href="<?php echo $url ?>" target="_blank" class="btn btn-block card-btn">Visitar</a>
                  </div>
                </div>
              </div>  
            </div>
          <?php } ?>
          </div>
          <a href="partners-page.php" class="btn ver-mais">Ver Mais</a>
        </div>
      </div>
    </div>
  </div>
</section>
