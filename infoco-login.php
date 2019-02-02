<!doctype html>
<html lang="pt-br">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no">
  <meta http-eqiv="X-UA-Compatible" content="IE=edge" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <meta name="robots" content="noindex">
  <link rel="stylesheet" type="text/css">
</head>
<body>
  <header class="bg-light pb-2 pt-2">
    <h5 class="logo ml-4">InFoco</h5>
  </header>
  <h1 class="text-center titulo">Faça seu login no Sistema</h1>
  <div class="main container bg-dark p-5 mt-5 col-md-6">
    <form id="Login" action="login-func.php" method="post">
      <div class="form-group pb-2">
        <input type="text" id="form" name="usuario" class="form-control" placeholder="Usuario" required>
      </div>
      
      <div class="form-group">
        <input type="password" name="senha" id="form" class="form-control" placeholder="Senha" required>
      </div>
      <button type="submit" class="btn mt-3" id="botao">LOGIN</button>
    </form>
  </div>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
