<?php 

$id 		= $_POST['id'];
$nome 		= $_POST['nome'];
$categoria	= $_POST['categoria'];
$primeria 	= $_POST['primeria'];
$tags 		= $_POST['tags'];
$link 		= $_POST['link'];


include "banco.php";

$query =  "update parceiros set
nome = '$nome', 
categoria = '$categoria',
url = '$link',
primeiraPagina = '$primeria',  
tags = '$tags' where id = $id";

$insert = mysqli_query($con, $query);

if($insert == 1){?>
	<script>
		alert("Informações Atualizadas");window.location.href='g-partner.php';
	</script>
<?php }else{ ?>
	<script>
		alert("OPS!! OCORREOU UM ERRO, TENTE NOVAMENTE!!");window.location.href='cad-parc.php';
	</script>
<?php } ?>