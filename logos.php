  <section id="client">
    <div class="container">
      <div class="swiper-container" id="logos-infoco">
        <div class="swiper-wrapper">
          <?php 
            $logo = 0;
            while ( $logo < 5) {
            $logo++;  
             echo "<div class='swiper-slide'>
              <img src='img/logos/$logo.png' alt='client logo'>
              </div>";
            }
           ?>
        </div>
      </div>
    </div>
  </section>
