<?php 
	session_start();
	$post = filter_input_array(INPUT_POST, FILTER_DEFAULT);

	$nome = $post['nome'];
	$cnpj = $post['cnpj'];
	$nomeFantasia = $post['nomeFantasia'];
	$inscricaoMunicipal = $post['inscricaoMunicipal'];
	$inscricaoEstadual = $post['inscricaoEstadual'];
	$segmentoProfissional = $post['segmentoProfissional'];

	$cep = $post['cep'];
	$municipio = $post['municipio'];
	$estado = $post['estado'];
	$endereco = $post['endereco'];
	$bairro = $post['bairro'];
	$numero = $post['numero'];

	$plano = $post['plano'];
	$valor = $post['valor'];

	$telefone = $post['telefone'];
	$celular = $post['celular'];
	$whastapp = $post['whastapp'];
	$email = $post['email'];
	$facebook = $post['facebook'];
	$instagram = $post['instagram'];
	$twitter = $post['twitter'];
	$site = $post['site'];
	$forma  = "Mercado Pago";
	$ref = rand(1,9999);

	$link = 'http://localhost/INFOCO%204/adesao';
	if (empty($nome)) {
	$_SESSION['nome_vazio'] = "Preencha o campo nome*";
	echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=$link'>";
}
	
	include "banco.php";
	$query =  "insert  into  fichaadesao (
									nome, 
									cnpj, 
									nomeFantasia, 
									inscricaoMunicipal, 
									inscricaoEstadual, 
									segmentoProfissional, 
									cep, 
									municipio, 
									estado, 
									endereco, 
									bairro, 
									numero,
									plano,
									valor,
									telefone,
									celular,
									whastapp,
									email,
									facebook,
									instagram,
									twitter,
									site,
									tipoPagamento,
									ref)
									values(
										'$nome', 
										'$cnpj', 
										'$nomeFantasia', 
										'$inscricaoMunicipal', 
										'$inscricaoEstadual', 
										'$segmentoProfissional', 
										'$cep', 
										'$municipio', 
										'$estado', 
										'$endereco', 
										'$bairro', 
										'$numero',
										'$plano',
										'$valor',
										'$telefone',
										'$celular',
										'$whastapp',
										'$email',
										'$facebook',
										'$instagram',
										'$twitter',
										'$site',
										'$forma',
										'$ref')";

	$insert = mysqli_query($con, $query);
	if($insert == 1){
		$query = mysqli_query($con,"SELECT * FROM `fichaadesao` WHERE ref='$ref' LIMIT 1");
		if($query){
        $fat = mysqli_fetch_assoc($query);
        $id = $fat['ref'];
        $idc = base64_encode($id);
		header("location: vendor/marcadoPago/pagamento.php?infocopag=$idc");
	}else{
		$_SESSION['falha_envio']="Ops algo deu errado. Tente novamente.*";
		echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=$link'>";
	}
}
 ?>
