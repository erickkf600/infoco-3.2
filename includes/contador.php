<?php 
  $sql    = "SELECT * FROM parceiros where status = 'ativo'";
  $buscar = mysqli_query($con, $sql);
  $parceiros = mysqli_num_rows($buscar);

?>
<section id="counter">
  <div id="sec-counter">
    <h1>Já temos</h1>
    <div class="single-counter">
      <i class="fa fa-users"></i>
      <div class="counter-count">
        <h2 class="counter"><?php echo 1500 + $a ?></h2>
        <p>Acessos na Plataforma</p>
      </div>
    </div>
    <div class="single-counter">
      <i class="far fa-handshake"></i>
      <div class="counter-count">
        <h2 class="counter"><?php echo$parceiros ?></h2>
        <p>Parceiros</p>
      </div>
    </div>
  </div> 
</section>