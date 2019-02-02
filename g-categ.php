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
    <button type="button"class="btn btn-danger"data-toggle="modal"data-target="#add"id="cad">CADASTAR</button>
    <table class="table" id="func">
      <thead>
        <tr>
          <th style="width:3%">ID</th>
          <th style="width:20%">Nome</th>
          <th style="width:30%">Setores</th>
          <th style="width:47%">Ação</th>
        </tr>
      </thead>
      <tbody id="myTable">
       <!--  <?php  ?> -->
       <tr>
        <td data-th="ID"class="low text-dark"></td>
        <td><?php echo "01"?></td>
        <td data-th="Nome"class="low"></td>
        <td id="name"><?php echo"nome"?></td>
        <td data-th="Setores"class="low"></td>
        <td id="name"><?php echo"nome"?></td>
        <td data-th="Ação"class="low"></td>
        <td class="td-actions">
          <button type="button"rel="tooltip"class="btn btn-primary btn-just-icon btn-sm"data-toggle="modal"data-target="#edit">
          Editar</button>
          <button type="button"rel="tooltip"class="btn btn-danger btn-just-icon btn-sm"data-toggle="modal"data-target="#comfirm">
          Deletar</button>
        </td>          
      </tr>
      <!-- <?php ?> -->
    </tbody>
  </table>
</div>

<!-- MODAL DE ADCIONAR -->
<div class="modal fade"id="add">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-success text-white">NOVA CATEGORIA</div>
      <form action="cad-categ.php"method="post">
        <div class="modal-body">
          <div class="form-group">
            <input type="text"class="form-control"name="categoria" required>
            <small class="form-text text-muted">Cadastre uma nova Categoria</small>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit"class="btn btn-success">CADASTRAR</button>
        </form>
      </div>
    </div>
  </div>

<!-- MODAL DE CONFIRMAÇÃO -->
<div class="modal fade" id="comfirm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-danger text-white">EXCLUIR</div>
      <div class="modal-body">Tem certeza que quer excluir este cadastro?</div>
      <div class="modal-footer">
        <a href="delete.php?id=<?php echo$idc?>" class="btn btn-success">SIM</a>
        <button type="button"class="btn btn-danger"data-dismiss="modal">NÃO</button>
      </div>
    </div>
  </div>
</div>

      <!-- MODAL DE EDITAR -->
    <div class="modal fade"id="edit">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-primary text-white">EDITAR</div>
      <form action="cat.php"method="post">
        <div class="modal-body">
          <div class="form-group">
            <input type="text"class="form-control"name="categoria">
            <small class="form-text text-muted">Cadastre uma nova Categoria</small>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit"class="btn btn-primary">CADASTRAR</button>
        </form>
      </div>
    </div>
  </div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>
</html>


