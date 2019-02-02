<?php 
	session_start();
	$post = filter_input_array(INPUT_POST, FILTER_DEFAULT);
	$nome = $post['nome'];
	$email = $post['email'];
	$telefone = $post['telefone'];
	$celular = $post['celular'];
	$deOndeVem = $post['deOndeVem'];
	$nomeParceiro = $post['nomeParceiro'];

	$cep = $post['cep'];
	$cidade = $post['municipio'];
	$estado = $post['estado'];
	$endereco = $post['endereco'];
	$bairro = $post['bairro'];
	$numero = $post['numero'];
	$link = 'http://localhost/INFOCO%204/cartao-premium';
	if (empty($nome)) {
	$_SESSION['nome_vazio'] = "Preencha o campo nome*";
	echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=$link'>";
}
	
	include "banco.php";
	$query =  "insert  into  cartao_premium (
	nome, email, telefone, celular, cep, cidade, estado, endereco, bairro, numero, deOndeVem, nomeParceiro)
	values('$nome', '$email', '$telefone', '$celular', '$cep', '$cidade', '$estado', '$endereco', 
	'$bairro', '$numero', '$deOndeVem', '$nomeParceiro')";

	$insert = mysqli_query($con, $query);
	if($insert == 1){
		$_SESSION['sucesso_envio']="Parabêns você esta cadastrado, em breve seu cartão chegara em sua casa*";
		echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=$link'>";
	}else{
		$_SESSION['falha_envio']="Ops algo deu errado. Tente novamente.*";
		echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=$link'>";
	}
 ?>