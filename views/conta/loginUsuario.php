<?php require_once("../../utils/header.php") ?>
<link rel="stylesheet" href="../../css/conta.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<?php

$base_url = dirname($_SERVER['PHP_SELF']);
// Remove segmentos específicos
$base_url = str_replace("/views/conta", "", $base_url);
// Para a URL do cliente
$urlCliente = dirname($_SERVER['PHP_SELF']);
$urlCliente = str_replace("/views/conta", "", $urlCliente);

?>
<title>Nexus - Login</title>


<nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?php echo $base_url; ?>/index.php">
      <img src="../../assets/img/NEXUS-LOGO.png" class="d-inline-block align-text-top">

    </a>
  </div>
</nav>


<div class="container">
  <div class="login-container">
    <h2>Login</h2>
    <form>
      <input type="name" class="form-control" id="nomeUsuario" required placeholder="Nome do Usuario">
      <input type="email" class="form-control" id="emailUsuario" placeholder="E-mail">
      <input type="password" id="senhaUsuario" class="form-control" placeholder="Insira sua senha"
        aria-describedby="passwordHelpBlock">

      <button type="submit">Entrar</button>
    </form>
    <div class="option-login">
      <a href="#">Esqueci minha senha</a></p>
      <p>Não tem uma conta? <a href="<?php echo $base_url; ?>/views/conta/cadastroUsuario.php">Cadastre-se</a></p>
    </div>
  </div>
</div>


</body>

</html>