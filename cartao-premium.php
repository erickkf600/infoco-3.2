<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no,user-scalable=no">
  <meta name="description" content="InFocoPublicidade,infocomn,publicidade,infoco,InFoco,marketing,erickferreira,mn,empresarial,plataformacomercial,comercios,parceiros">
  <meta name="author" content="Erick Ferreira">
  <meta name="google-site-verification" content="VEPmj7vef9AH59emCHJnJ2tNlZYxiEbAjlAjU1UKuRI" />
  <title>InFoco Publicidade</title>
  <link rel="shortcut icon" href="icon.png">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css"/> 
  <link href="css/min.css" rel="stylesheet">
  <link href="css/core.css" rel="stylesheet">
</head>
<body>
  <div id="preloader"><div class="loader"></div></div>
  <a class="scrollToTop" href="#"><i class="fas fa-chevron-up"></i></a> 
  <header id="header"><?php include"header-for-all.php" ?></header>
  <main>
    <section id="faq">
      <div class="container" id="container-adesao">
        <div class="faq-title">
          <h1 title="Inscreva-se para receber descontos exclusivos dos parcereiros da infoco" id="quem-somos">FICHA DE INSCRIÇÃO INFOCO</h1>
          <span class="tittle-line"></span>
          <p class="premium">Increva-se e receba em sua casa, o nosso cartão fidelidade premium. Com ele você receberá descontos exclusivos de nossos parceiros.</p>
        </div>
        <div class="col-md-12">
          <form class="form-horizontal" method="POST" action="assinatura-premium.php">
            <div class="row">
              <div class="col-md-6">
                <div class="panel">
                  <div class="panel-heading custom-header-panel">
                    <h4 class="panel-title">Informações Pessoais</h4>
                  </div>
                  <div class="panel-body">
                    <div class="form-group">
                      <label class="col-sm-4 control-label">Nome/Razão Social <span class="requerido"> *</span></label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="nome" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 control-label">Email <span class="requerido"> *</span></label>
                      <div class="col-sm-8">
                        <input type="email" class="form-control" name="email" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 control-label">Telefone <span class="requerido"> *</span></label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="telefone" onkeypress="return event.charCode >= 48 && event.charCode <= 57" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 control-label">Celular/Whatsapp <span class="requerido"> *</span></label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="celular" onkeypress="return event.charCode >= 48 && event.charCode <= 57" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 control-label">Como chegou aqui?<span class="requerido"> *</span></label>
                      <div class="col-sm-8">
                        <select name="deOndeVem" class="form-control" required id="options" onchange="mostra_div()">
                          <option selected disabled>Selecione</option>
                          <option value="facebook">Facebook</option>
                          <option value="instagram">Instagram</option>
                          <option value="empresas parceiras" id="empresa">Empresas Parceiras</option>
                          <option value="indicaçao">Indicação
                          </option>
                        </select>
                        <div id="QualEmpresa" style="margin-top:10px">
                          <input type="text" class="form-control" placeholder="Qual Emperesa?" name="nomeParceiro">
                        </div>
                      </div>
                    </div>       
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="panel">
                  <div class="panel-heading custom-header-panel">
                    <h4 class="panel-title">Endereço</h4>
                  </div>
                  <div class="panel-body">
                    <div class="form-group">
                      <label class="col-sm-4 control-label">CEP <span class="requerido"> *</span></label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="cep" id="cep" maxlength="8" onkeypress="return event.charCode >= 48 && event.charCode <= 57" onblur="pesquisacep(this.value);" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 control-label">Município <span class="requerido"> *</span></label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="municipio" id="municipio" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 control-label">UF <span class="requerido"> *</span></label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="estado" id="uf" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 control-label">Endereço <span class="requerido"> *</span></label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="endereco" name="endereco" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 control-label">Bairro <span class="requerido"> *</span></label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="bairro" name="bairro" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 control-label">Número <span class="requerido"> *</span></label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="numero" onkeypress="return event.charCode >= 48 && event.charCode <= 57" required>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group text-center">
              <?php 
              if(!empty($_SESSION['sucesso_envio'])){
                echo "<p style='color: #01ad01; font-size: 20px; font-weight: 600'>".$_SESSION['sucesso_envio']."</p>";
                unset($_SESSION['sucesso_envio']);
              }else{
                if(!empty($_SESSION['falha_envio'])){
                  echo "<p style='color: #f00>".$_SESSION['falha_envio']."</p>";
                  unset($_SESSION['falha_envio']);
                }
              }  
              ?>
              <button type="submit" id="submit_btn" class="btn btn-orange-md">ENVIAR</button>
            </div>
          </div>
        </form> 
        <div class="faq-title">
          <h3>Alguma duvida?</h3>
          <span class="tittle-line"></span>
        </div>
        <div class="adesao-btn">
          <a href="contato.php">ENTRE EM CONTATO</a>
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