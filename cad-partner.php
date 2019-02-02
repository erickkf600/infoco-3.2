<?php 

	$nome 		= $_POST['nome'];
	$categoria	= $_POST['categoria'];
	$primeria 	= $_POST['primeria'];
	$tags 		= $_POST['tags'];
	$link 		= $_POST['link'];


	include "banco.php";

	$query =  "insert  into  parceiros (nome, categoria, url, primeiraPagina, tags) values('$nome', '$categoria', '$link', 
	'$primeria', '$tags')";

	$insert = mysqli_query($con, $query);

	if($insert == 1){
		include "upload.php";?>
		<script>
			alert("PARCEIRO CADASTRADA");window.location.href='g-partner.php';
		</script>
	<?php }else{ ?>

		<script>
			alert("OPS!! OCORREOU UM ERRO, TENTE NOVAMENTE!!");window.location.href='cad-parc.php';
		</script>

<?php } ?>