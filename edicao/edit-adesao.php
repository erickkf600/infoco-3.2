<?php 

	$id 	              = $_POST['id'];
	$nome                 = $_POST['nome']; 
	$cnpj                 = $_POST['cnpj']; 
	$nomeFantasia         = $_POST['nomeFantasia'];
	$inscricaoMunicipal   = $_POST['inscricaoMunicipal'];
	$inscricaoEstadual    = $_POST['inscricaoEstadual'];
	$segmentoProfissional = $_POST['segmentoProfissional']; 
	$cep 				  = $_POST['cep']; 
	$municipio            = $_POST['municipio'];
	$estado               = $_POST['estado'];   
	$endereco             = $_POST['endereco']; 
	$bairro               = $_POST['bairro'];
	$numero               = $_POST['numero'];
	$plano                = $_POST['plano'];

	$telefone             = $_POST['telefone']; 
	$celular              = $_POST['celular'];
	$whastapp             = $_POST['whastapp'];
	$email                = $_POST['email'];
	$facebook             = $_POST['facebook'];
	$instagram            = $_POST['instagram'];
	$twitter              = $_POST['twitter'];
	$site                 = $_POST['site'];

	include "../banco.php";

	$query =  "update fichaadesao set
	nome                 = '$nome', 
	cnpj                 = '$cnpj',
	nomeFantasia         = '$nomeFantasia',
	inscricaoMunicipal   = '$celular',  
	inscricaoEstadual    = '$inscricaoEstadual',
	segmentoProfissional = '$segmentoProfissional',
	cep                  = '$cep',
	municipio            = '$municipio',
	estado               = '$estado',
	endereco             = '$endereco',
	bairro               = '$bairro',
	numero               = '$numero',
	plano                = '$plano',
	telefone             = '$telefone',
	celular              = '$celular',
	whastapp             = '$whastapp',
	email                = '$email',
	facebook             = '$facebook',
	instagram            = '$instagram',
	twitter              = '$twitter',
	site                 = '$site'
	where id = $id";

	$insert = mysqli_query($con, $query);

	if($insert == 1){?>
		<script>
			alert("Informações Atualizadas");window.location.href='http://localhost/INFOCO%204/list-adesao.php';
		</script>
	<?php }else{ ?>
		<script>
			alert("OPS!! OCORREOU UM ERRO, TENTE NOVAMENTE!!");window.location.href='http://localhost/INFOCO%204/list-adesao.php';
		</script>
	<?php } ?>