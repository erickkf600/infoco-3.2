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
  <meta name="robots" content="noindex">
  <meta http-eqiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/lists.css">
  <link rel="shortcut icon" href="icon.png">
</head>
<body>
  <?php include "header-admin.php" ?>
  <div class="container mb-5">
    <a href="http://infocomn.com.br/cartao-premium" class="btn btn-danger"id="cad">CADASTAR</a>
    <a href="gerar-planilha.php" class="btn btn-success" id="cad">CRIAR PLANILHA</a>
    <table class="table" id="func">
      <thead>
        <tr>
          <th style="width:2%">ID</th>
          <th style="width:20%">Nome</th>
          <th style="width:20%">Data do cadastro</th>
          <th style="width:18%">De onde vem</th>
          <th style="width:40%">Ação</th>
        </tr>
      </thead>
      <tbody id="myTable">
       <?php 
       include "banco.php";
       $sql    = ("SELECT * FROM cartao_premium where status = 'ativo'");
       $result = mysqli_query($con , $sql);
       while ($p = mysqli_fetch_array($result)) {
        $id   = $p['id'];
        $idc = base64_encode($id);
        $nome = $p['nome'];
        $email = $p['email'];
        $telefone = $p['telefone'];
        $celular = $p['celular'];
        $cep = $p['cep'];
        $cidade = $p['cidade'];
        $estado = $p['estado'];
        $endereco = $p['endereco'];
        $bairro = $p['bairro'];
        $numero = $p['numero'];
        $data = $p['data/hora'];
        $deOndeVem = $p['deOndeVem'];
        ?>
        <tr>
          <td data-th="ID"class="low text-dark"></td>
          <td><?php echo $id?></td>
          <td data-th="Nome"class="low"></td>
          <td id="name"><?php echo$nome?></td>
          <td data-th="Setores"class="low"></td>
          <td id="name"><?php echo date('d/m/Y', strtotime($data))?></td>
          <td data-th="De onde vem"class="low"></td>
          <td id="name"><?php echo$deOndeVem?></td>
          <td data-th="Ação"class="low"></td>
          <td class="td-actions">
            <a class="btn btn-success btn-just-icon btn-sm" href="edicao/info-cpremium.php?id=<?php echo$id?>">
            Mais Informações</a>
            <button type="button"rel="tooltip"class="btn btn-danger btn-just-icon btn-sm"data-toggle="modal"data-target="#comfirm">
            Deletar</button>
          </td>          
        </tr>
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
          <a href="delete.php?id=<?php echo$idc?>" class="btn btn-success">SIM</a>
          <button type="button"class="btn btn-danger"data-dismiss="modal">NÃO</button>
        </div>
      </div>
    </div>
  </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  </body>
  </html>


