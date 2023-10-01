<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atletica website</title>
    <link rel="stylesheet" href="styles/styles.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital@1&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Syncopate:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>  

</head>
<body>
    <header>
          <nav class="navbar fixed-top navbar-expand-lg bg-white">
            <div class="container px-5 mx-auto">
            <div class="container-fluid">
            <a class="navbar-brand" href="index.php"><img src="assets/Logo atletica.png" width="80" height="80" alt="Logo atletica"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mx-auto p-2 gap-5">
                <li class="nav-item">
                  <a class="nav-link " href="index.php#sobre">Sobre</a>
                </li>
                  <li class="nav-item">
                    <a class="nav-link " href="noticias.php">Noticias</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="competicoes.php">Competições</a>
                  </li>
                  <li class="nav-item">
                  <a class="nav-link" href="eventos.php">Eventos</a>
                  </li>
                  <li class="nav-item">
                  <a class="nav-link" href="https://cheersapp.com.br/atletica-panterao-cefet-mg-leopoldina~3179">Loja</a>
                  </li>
              </ul>
                <?php

                $status = session_status();
                echo $status;
                if ($status === 2) {
                    echo '<div class="dropdown text-end">
                    <a href="#" class="d-block link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                      <img src="https://github.com/mdo.png" alt="mdo" width="50" height="50" class="rounded-circle">
                    </a>
                    <ul class="dropdown-menu text-small">
                      <li><a class="dropdown-item" href="#">Perfil</a></li>
                      <li><a class="dropdown-item" href="#">Painel Admin</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">Sair</a></li>
                    </ul>
                  </div>'; 
                } elseif ($status === 1) {
                    echo '<a href="login.php"><button type="button" class="btn btn-primary">Entrar</button></a>';
                } 
              ?>
            </div>
          </div>
        </div>
        </nav>
      
    </header>     
