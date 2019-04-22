<?php 
session_start();
?>

<!DOCTYPE html>
<html>
    
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Web Science - Consultoria Científica</title>
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
          <a class="button is-info is-outlined" href="cadastro.php">
            <strong>Cadastrar</strong>
          </a>
          <a class="button is-light" href="index.php">
            Entrar
          </a>
        </div>
      </div>
    </div>
  </div>
</nav>




    <section class="hero is-success is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <h3 class="title has-text-grey">Web Science</h3>
                    <h4 class="subtitle has-text-grey">Consultoria Científica</h4>
                   
                    <?php 
                        if(isset($_SESSION['nao_autenticado'])):
                    ?>    
                        <div class="notification is-danger">
                            <p>ERRO: Usuário ou senha inválidos.</p>
                        </div>
                    <?php
                        endif;
                        unset($_SESSION['nao_autenticado']);
                    ?>
                    
                    <div class="box">
                        <h2>Entrar</h2><br>
                        <form action="login.php" method="POST">
                            <div class="field">
                                <div class="control">
                                    <input name="usuario" name="text" class="input is-large" placeholder="Seu usuário" autofocus="">
                                </div>
                            </div>

                            <div class="field">
                                <div class="control">
                                    <input name="senha" class="input is-large" type="password" placeholder="Sua senha">
                                </div>
                            </div>
                            <button type="submit" class="button is-block is-link is-large is-fullwidth">Entrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>