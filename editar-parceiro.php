<?php  
include "banco.php";
$id = base64_decode($_GET['id']);
$sql    = ("SELECT * FROM parceiros where id = $id");
$editar = mysqli_query($con , $sql);
?>
<!doctype html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no">
	<meta http-eqiv="X-UA-Compatible" content="IE=edge" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/admin.css">
	<link rel="shortcut icon" href="icon.png">
</head>
<body>
	<div class="container bg-dark p-5 mt-5 col-md-6">
		<?php 
		while ($row = mysqli_fetch_array($editar)) {
			$nome = $row['nome'];
			$cat = $row['categoria'];
			$primeira = $row['primeiraPagina'];
			$img = $row['img'];
			$url = $row['url'];
			$tags = $row['tags'];
			?>
			<form action="editar-parc-func.php" method="post">
				<div class="form-group">
					<input type="text" class="form-control" value="<?php echo $nome ?>" placeholder="Nome" name="nome" required>	
				</div>
				<div class="form-group">
					<small class="text-muted">Categoria</small>
					<select name="categoria" class="form-control" required>
						<option selected value="<?php echo $cat ?>"><?php echo $cat ?></option>
						<option value="comercio">Comércio</option>
						<option value="moda">Moda</option>
						<option value="saude">Saude</option>
						<option value="beleza">Beleza</option>
						<option value="educacao">Educação</option>
						<option value="servicos">Serviços</option>
						<option value="lazer">Lazer</option>
						<option value="alimentacao">Alimentacão</option>
					</select>
				</div>
				<div class="form-group">
					<small class="text-muted">Inserir na primeira página?</small>
					<select name="primeria" class="form-control" required>
						<option selected value="<?php echo $primeira ?>"><?php echo $primeira ?></option>
						<option value="sim">Sim</option>
						<option value="nao">Não</option>
					</select>
				</div>
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Palavras Chave" name="tags" 
					value="<?php echo $tags ?>" required>
					<small class="text-muted">Separe as palavra por virgula</small>
				</div>
				<div class="form-group">
					<input type="url" class="form-control" placeholder="Site ou Rede Social" value="<?php echo $url ?>" name="link">
				</div>
				<input type="hidden" name="id" value="<?php echo $id ?>">
				<button type="submit" class="btn btn-danger mt-5">ATUALIZAR</button>
			<?php } ?>
		</form>
	</div>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>
</html>