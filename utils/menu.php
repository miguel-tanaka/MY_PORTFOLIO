<link rel="stylesheet" href="../../css/style.css">

<?php
$base_url = dirname($_SERVER['PHP_SELF']);

$base_url = str_replace("/views/conta", "", $base_url);

?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<nav class="navbar fixed-top navbar-expand-lg navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="<?php echo $base_url; ?>/assets/img/NEXUS-LOGO-white.png" alt=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav m-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo $base_url; ?>/index.php">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo $base_url; ?>/planos.php">MEUS PROJETOS</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            SOBRE MIM
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Conheça a Nexus</a></li>
            <li><a class="dropdown-item" href="#">Política de Privacidade</a></li>
          </ul>
        </li>

       
      </ul>
    </div>
  </div>
</nav>


<script type="text/javascript">
      var nav = document.querySelector('nav');

      window.addEventListener('scroll', function () {
        if (window.pageYOffset > 100) {
          nav.classList.add('bg-menu', 'shadow');
        } else {
          nav.classList.remove('bg-menu', 'shadow');
        }
      });
    </script>



<!-- HTML End Tag Labels -->