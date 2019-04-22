<?php
session_start();
include('verifica_login.php');
include('conexao.php');

$sql = "select * from perguntas";
$result = $conexao->query($sql);

/*$row = mysqli_num_rows($result);*/
     

//colocar noutro arquivo o seguinte trecho de código ******IMPORTANTE**
// conecta ao banco de dados
//$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB)  or die ('Não possível conectar'); 
// seleciona a base de dados em que vamos trabalhar
//mysql_select_db($db, $conexao);
// cria a instrução SQL que vai selecionar os dados
//$query = sprintf("SELECT pergunta_id, pergunta FROM perguntas");
// executa a query
//$dados = mysql_query($query, $conexao) or die(mysql_error());
// transforma os dados em um array
//$linha = mysql_fetch_assoc($dados);
// calcula quantos dados retornaram
//$total = mysql_num_rows($dados);
?>

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
                <li class="is-active">
                    <a href="questionarios.php">
                    <span>Questionários</span>
                    </a>
                </li>
                <li>
                    <a>
                    <span>Resultados</span>
                    </a>
                </li>
                <li>
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
        <a class="button is-info is-large" href="gera_questionario.php">CRIAR NOVO QUESTIONÁRIO</a><br> <br>
        <div class="box">
            <div class="content">
                <ol type="1">
                    <h2> Modelo de dieta & fitness </h2> 
                    <li> Quão fisicamente saudável está neste momento? </li>
                    <li> Consome suplementos nutricionais? </li>
                    <li> Qual grau de importância é dada à prática de exercícios físico? </li>
                    <li> Numa semana típica, quantas vezes pratica exercíco? </li>
                    <li> Qual é o exercício que pratica com maior frequência? </li>
                    <li> Avalie a frequencia com que pratica exercício físico. Sente que pratica muito exercício, pouco exercício ou o necessário? </li>
                    <li> Numa semana típica, quantas refeições ou lanches incluem carboidratos? </li>
                    <li> Numa semana típica, quantas refeições ou lanches incluem proteínas? </li>
                    <li> Numa semana típica, quantas refeições ou lanches incluem vegetais? </li>
                    <li> Numa semana típica, quantas refeições ou lanches incluem fruta? </li>
                </ol>
            </div>   
            <a class="button is-info is-outlined is-large" href="modeloq1.php">USAR ESSE/PERSONALIZAR</a>  
        </div>  
        <div class="box">
        
            <div class="content">
                <ol type="1">
                    <h2> Modelo médico de avaliação de desempenho  </h2> 
                    <li> Durante uma visita de rotina ao médico, sente que o consumo do seu tempo é elevado, baixo ou o tempo necessário? </li>
                    <li> Até que ponto confia no seu médico para tomar decisões médicas que são de seu grande interesse? </li>
                    <li> Quão útil foi o seu médico explicando a sua condição de saúde? </li>
                    <li> Quão bem o seu médico escutou a sua descrição, queixa ou pedido? </li>
                    <li> Quão rápida é a ajuda do seu médico e respectiva equipe sempre que necessita de ajuda? </li>
                    <li> Quão amigável é a equipe do seu médico? </li>
                    <li> Quão conhecedora é a equipe do seu médico? </li>
                    <li> Quão fácil é marcar uma consulta médica quando está doente? </li>
                    <li> De forma geral, quão satisfeito ou insatisfeito está com o seu médico? </li>
                    <li> Até que ponto recomendaria o seu médico à sua família e amigos? </li>
                </ol>
            </div> 
            <a class="button is-info is-outlined is-large">USAR ESSE/PERSONALIZAR</a>    
        </div>   
        <div class="box"> 
        <div class="content">
            <ol type="1">
                <h2> Modelo médico de avaliação de desempenho  </h2> 
                <li> Durante uma visita de rotina ao médico, sente que o consumo do seu tempo é elevado, baixo ou o tempo necessário? </li>
                <li> Até que ponto confia no seu médico para tomar decisões médicas que são de seu grande interesse? </li>
                <li> Quão útil foi o seu médico explicando a sua condição de saúde? </li>
                <li> Quão bem o seu médico escutou a sua descrição, queixa ou pedido? </li>
                <li> Quão rápida é a ajuda do seu médico e respectiva equipe sempre que necessita de ajuda? </li>
                <li> Quão amigável é a equipe do seu médico? </li>
                <li> Quão conhecedora é a equipe do seu médico? </li>
                <li> Quão fácil é marcar uma consulta médica quando está doente? </li>
                <li> De forma geral, quão satisfeito ou insatisfeito está com o seu médico? </li>
                <li> Até que ponto recomendaria o seu médico à sua família e amigos? </li>
            </ol>
        </div> 
        <a class="button is-info is-outlined is-large">USAR ESSE/PERSONALIZAR</a>    
    </div>      

   







 



</div>
</body>
</html>