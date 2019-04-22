<?php
session_start();
include('verifica_login.php');

?>

<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Web Science - Consultoria Científica</title>
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<nav class="navbar" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
    <a class="navbar-item" href="index.php">
      <img src="https://www.aecl.ca/wp-content/uploads/2018/11/icon-science-technology.png" width="28" height="28"><b>Web Science</b>
    </a>

    <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>

  </div>

  <div id="navbarBasicExample" class="navbar-menu">
    <div class="navbar-start">
      
      <a class="navbar-item">
        Serviços
      </a>
      
      <a class="navbar-item">
        Planos
      </a>

      <div class="navbar-item has-dropdown is-hoverable">
        <a class="navbar-link">
          Mais
        </a>

        <div class="navbar-dropdown">
          <a class="navbar-item">
            Sobre
          </a>
          <a class="navbar-item">
            Clientes
          </a>
          <a class="navbar-item">
            Contato
          </a>
          <hr class="navbar-divider">
          <a class="navbar-item">
            Ajuda
          </a>
        </div>
      </div>
    </div>
    
    <div class="navbar-end">
      <div class="navbar-item">
        <div class="buttons">
          <a class="button is-info is-outlined " href="painel.php">
            <strong><?php echo $_SESSION['usuario'];?></strong>
          </a>
          <a class="button is-light" href="logout.php">
            Sair
          </a>
        </div>
      </div>
    </div>
  </div>
</nav>   

    <div class="container">

        <div class="tabs is-medium is-centered">
            <ul>
                <li>
                    <a href="questionarios.php">
                    <span>Questionários</span>
                    </a>
                </li>
                <li>
                    <a>
                    <span>Resultados</span>
                    </a>
                </li>
                <li class="is-active">
                    <a href="painel.php">
                        <span>Meu Perfil</span>
                    </a>
                </li>
                <li>
                    <a href="logout.php">
                    <span>Sair</span>
                    </a>
                </li>
            </ul>
        </div>

</body>
</html>
