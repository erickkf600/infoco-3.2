<?php 
  session_start();

if(empty($_SESSION['usuario'])){
  header("Location: index.php");
  }else{
    $usuario = $_SESSION['usuario']; 
}

?>
<!doctype html>
<html lang="pt-br">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no">
  <meta http-eqiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/lists.css">
  <link rel="shortcut icon" href="icon.png">
</head>
<body>
  <?php include "header-admin.php" ?>
  <div class="container mb-5">
    <div class="flex">
      <input class="pesq form-control form-control-lg" type="search" name="pesq" placeholder="Pesquisar">
      <a href="cad-parc.php" class="btn btn-danger" id="cad">CADASTRAR</a>
    </div>
    <table class="table" id="func">
      <thead>
        <tr>
          <th style="width:3%">ID</th>
          <th style="width:10%">IMG</th>
          <th style="width:30%">Nome</th>
          <th style="width:27%">Categoria</th>
          <th style="width:30%">Ação</th>
        </tr>
      </thead>
      <tbody id="myTable">
        <?php 
        include "banco.php";
        $sql    = ("SELECT * FROM parceiros where status = 'ativo'");
        $result = mysqli_query($con , $sql);
        while ($row = mysqli_fetch_array($result)) {
          $id   = $row['id'];
          $idc = base64_encode($id);
          $nome = $row['nome'];
          $cat = $row['categoria'];
          $img = $row['img'];
          ?>
          <tr>
            <td data-th="ID" class="low"></td>
            <td id="name"><?php echo $id ?></td>
            <td data-th="IMG" class="low text-dark"></td>
            <td>
              <?php if ($img == 0) {
                echo "<img src='img/parceiros/semlogo.jpg' width='60' class='img-fluid'>";
              }else{
                echo "<img src='img/parceiros/$img' width='60' class='img-fluid'>";  
              }
              ?>
            </td>
            <td data-th="Nome" class="low"></td>
            <td id="name"><?php echo $nome ?></td>
            <td data-th="Categoria" class="low"></td>
            <td id="name"><?php echo $cat ?></td>
            <td data-th="Ação" class="low"></td>
            <td class="td-actions">
              <a href="editar-parceiro.php?id=<?php echo $idc?>">
                <button type="button" rel="tooltip" class="btn btn-success btn-just-icon btn-sm">Editar</button>
              </a>
              <button type="button" rel="tooltip" class="btn btn-info btn-just-icon btn-sm" data-toggle="modal"data-target="#mudar<?php echo $id?>">Mudar Foto</button>
              <button type="button" rel="tooltip" class="btn btn-danger btn-just-icon btn-sm" data-toggle="modal"data-target="#comfirm">
              Deletar</button>
            </td>          
          </tr>
          <!-- MODAL DE MUDAR FOTO -->
          <div class="modal fade" id="mudar<?php echo $id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header bg-info text-white">
                  Novo Nome
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <form action="update-img.php" method="post" enctype="multipart/form-data">
                  <div class="modal-body">
                    <div class='input-wrapper'>
                      <input type="file" name="arquivos" id="foto" accept="image/jpeg, image/png, image/jpg" />
                      <input type="hidden" name="id" value="<?php echo $id ?>">
                      <small class="form-text text-muted">
                        Adione a nova Imagem com resolução maxima de L = 439px A = 364px
                      </small>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="submit" class="btn btn-info">OK</button>
                  </form>
                </div>
              </div>
            </div>
          <?php } ?> 
        </tbody>
      </table>
    </div>

    <!-- MODAL DE CONFIRMAÇÃO -->
    <div class="modal fade" id="comfirm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header bg-danger text-white">EXCLUIR</div>
          <div class="modal-body">Tem certeza que quer excluir este cadastro?</div>
          <div class="modal-footer">
            <a href="delete.php?id=<?php echo $idc?>" class="btn btn-success">SIM</a>
            <button type="button" class="btn btn-danger" data-dismiss="modal">NÃO</button>
          </div>
        </div>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  </body>
  </html>
