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

	$telefone = $post['telefone'];
	$celular = $post['celular'];
	$whastapp = $post['whastapp'];
	$email = $post['email'];
	$facebook = $post['facebook'];
	$instagram = $post['instagram'];
	$twitter = $post['twitter'];
	$site = $post['site'];

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
									telefone,
									celular,
									whastapp,
									email,
									facebook,
									instagram,
									twitter,
									site)
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
										'$telefone',
										'$celular',
										'$whastapp',
										'$email',
										'$facebook',
										'$instagram',
										'$twitter',
										'$site')";

	$insert = mysqli_query($con, $query);
	if($insert == 1){
		$_SESSION['sucesso_envio']="Parabêns você esta cadastrado na InFoco, em breve entraremos em contato*";
		echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=$link'>";
	}else{
		$_SESSION['falha_envio']="Ops algo deu errado. Tente novamente.*";
		echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=$link'>";
	}
 ?>