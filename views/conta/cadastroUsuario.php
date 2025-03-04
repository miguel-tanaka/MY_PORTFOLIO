<?php require_once("../../utils/header.php"); ?>
<link rel="stylesheet" href="../../css/conta.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<?php
$base_url = dirname($_SERVER['PHP_SELF']);
$base_url = str_replace("/views/conta", "", $base_url);
?>

<title>Nexus - Cadastro</title>

<nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?php echo $base_url; ?>/index.php">
      <img src="../../assets/img/NEXUS-LOGO.png" class="d-inline-block align-text-top">
    </a>
  </div>
</nav>

<div class="container-fluid">
  <div class="row justify-content-center">
    <div class="col-md-8 col-lg-6 col-xl-12">
      <div class="card p-4 shadow-lg">
        <h2 class="text-center">Cadastro</h2>
        <form>
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="nome" class="form-label">Nome</label>
              <input type="text" class="form-control" id="nome" required>
            </div>
            <div class="col-md-6 mb-3">
              <label for="sobrenome" class="form-label">Sobrenome</label>
              <input type="text" class="form-control" id="sobrenome" required>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="email" class="form-label">E-mail</label>
              <input type="email" class="form-control" id="email" required>
            </div>
            <div class="col-md-6 mb-3">
              <label for="confirmarEmail" class="form-label">Confirme o E-mail</label>
              <input type="email" class="form-control" id="confirmarEmail" required>
            </div>
          </div>

          <div class="row">

            <div class="col-md-6 mb-3">
              <label for="telefone" class="form-label">Telefone</label>
              <input type="tel" class="form-control" id="telefone" required>
            </div>

            <div class="col-md-6 mb-3">
              <label for="tipoPessoa" class="form-label">Tipo de Pessoa</label>
              <select class="form-select" id="tipoPessoa" required onchange="toggleDocumento()">
                <option value="fisica">Pessoa Física</option>
                <option value="juridica">Pessoa Jurídica</option>
              </select>
            </div>


          </div>
<div class="row">
          <div class="col-md-6 mb-3" id="cpfContainer">
            <label for="cpf" class="form-label">CPF</label>
            <input type="text" class="form-control" id="cpf">
          </div>
          <div class="col-md-6 mb-3 d-none" id="cnpjContainer">
            <label for="cnpj" class="form-label">CNPJ</label>
            <input type="text" class="form-control" id="cnpj">
          </div>

          <div class="col-md-6 mb-3">
              <label for="tipoPessoa" class="form-label">Quantas pessoas há em sua Empresa?</label>
              <select class="form-select" id="empregados" required onchange="toggleDocumento()">
                <option value="somenteEu">Apenas eu</option>
                <option value="menosDe5">2 a 5</option>
                <option value="menosDe5">6 a 10</option>
                <option value="menosDe5">11 a 15</option>
                <option value="menosDe5">16 a 25</option>
                <option value="menosDe5">26 a 50</option>
                <option value="menosDe5">51 a 100</option>
                <option value="menosDe5">mais......</option>

              </select>
            </div>
            </div>
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="senha" class="form-label">Senha</label>
              <input type="password" class="form-control" id="senha" required>
            </div>
            <div class="col-md-6 mb-3">
              <label for="confirmarSenha" class="form-label">Confirme a Senha</label>
              <input type="password" class="form-control" id="confirmarSenha" required>
            </div>
          </div>
          <div class="mb-3">
            <label for="cep" class="form-label">CEP</label>
            <input type="text" class="form-control" id="cep" onblur="buscarCEP()" required>
          </div>
          <div class="mb-3">
            <label for="rua" class="form-label">Rua</label>
            <input type="text" class="form-control" id="rua" required>
          </div>
          <div class="row">
            <div class="col-md-4 mb-3">
              <label for="numero" class="form-label">Número</label>
              <input type="text" class="form-control" id="numero" required>
            </div>
            <div class="col-md-4 mb-3">
              <label for="bairro" class="form-label">Bairro</label>
              <input type="text" class="form-control" id="bairro" required>
            </div>
            <div class="col-md-4 mb-3">
              <label for="estado" class="form-label">Estado</label>
              <input type="text" class="form-control" id="estado" required>
            </div>
          </div>
          <button type="submit" class="btn btn-primary w-100">Cadastrar</button>
        </form>
      </div>
    </div>
  </div>
</div>

<script>
  function toggleDocumento() {
    var tipo = document.getElementById('tipoPessoa').value;
    document.getElementById('cpfContainer').classList.toggle('d-none', tipo !== 'fisica');
    document.getElementById('cnpjContainer').classList.toggle('d-none', tipo !== 'juridica');
  }

  function buscarCEP() {
    var cep = document.getElementById('cep').value.replace(/\D/g, '');
    if (cep.length !== 8) return;

    fetch(`https://viacep.com.br/ws/${cep}/json/`)
      .then(response => response.json())
      .then(data => {
        if (!data.erro) {
          document.getElementById('rua').value = data.logradouro;
          document.getElementById('bairro').value = data.bairro;
          document.getElementById('estado').value = data.uf;
        }
      });
  }
</script>

</body>

</html>