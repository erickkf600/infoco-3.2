<?php 

$id 	      = $_POST['id'];
$nome 	      = $_POST['nome'];
$email	      = $_POST['email'];
$telefone     = $_POST['telefone'];
$celular      = $_POST['celular'];
$cep 	      = $_POST['cep'];
$cidade       = $_POST['cidade'];
$estado       = $_POST['estado'];
$endereco     = $_POST['endereco'];
$bairro       = $_POST['bairro'];
$numero       = $_POST['numero'];
$deOndeVem    = $_POST['deOndeVem'];
$nomeParceiro = $_POST['nomeParceiro'];

include "../banco.php";

$query =  "update cartao_premium set
	nome         =  '$nome', 
	email        =  '$email',
	telefone     = '$telefone',
	celular      = '$celular',  
	cep          =  '$cep',
	cidade       = '$cidade',
	estado       = '$estado',
	endereco     = '$endereco',
	bairro       = '$bairro',
	numero       = '$numero',
	deOndeVem    = '$deOndeVem',
	nomeParceiro = '$nomeParceiro'
	where id = $id";

$insert = mysqli_query($con, $query);

if($insert == 1){?>
	<script>
		alert("Informações Atualizadas");window.location.href='http://localhost/INFOCO%204/lista-cpremium.php';
	</script>
<?php }else{ ?>
	<script>
		alert("OPS!! OCORREOU UM ERRO, TENTE NOVAMENTE!!");window.location.href='http://localhost/INFOCO%204/lista-cpremium.php';
	</script>
<?php } ?>