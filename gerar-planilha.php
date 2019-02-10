<?php 
session_start();
include "banco.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
</head>
<body>
	<?php 
	$arquivo = 'lista_cartao_premium.xls';
	$html = '';
	$html .= '<table border="1">';
	$html .= '<tr>';
	$html .= '<th colspan="12">Planilha de cadastrados para o cartão premium</th>';

	$html .= '<tr>';
	$html .= '<td><b>ID</b></td>';
	$html .= '<td><b>Nome</b></td>';
	$html .= '<td><b>E-mail</b></td>';
	$html .= '<td><b>Telefone</b></td>';
	$html .= '<td><b>Celular</b></td>';
	$html .= '<td><b>CEP</b></td>';
	$html .= '<td><b>Cidade</b></td>';
	$html .= '<td><b>Estado</b></td>';
	$html .= '<td><b>Endereço</b></td>';
	$html .= '<td><b>Bairro</b></td>';
	$html .= '<td><b>Número</b></td>';
	$html .= '<td><b>Data do Cadastro</b></td>';
	$html .= '</tr>';

	header ("Content-Description: PHP Generated Data" );
	header ("Content-type: application/x-msexcel");
	header ("Content-Disposition: attachment; filename=\"{$arquivo}\"" );
	header ("Expires: 0");
	header ("Cache-Control: must-revalidate, post-check=0, pre-check=0");
	header ("Pragma: no-cache");
	header('Pragma: public');

	echo $html;
	exit;
	?>

</body>
</html>