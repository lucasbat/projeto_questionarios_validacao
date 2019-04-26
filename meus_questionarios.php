<?php
session_start();
include('verifica_login.php');
include('conexao.php');

//$sql = "select * from Respostas_total";
/*
$sql = "SELECT Perguntas_questionarios.idPergunQuestio, 
Perguntas_questionarios.perguntaQuestio,
Perguntas_questionarios.idCategModelo,
Perguntas_questionarios.idModeloQuestio,
Respostas_total.idRespTotal, 
Respostas_total.respValor,
Respostas_total.idPergunQuestio,
Respostas_total.idUsuario,
Respostas_total.data
FROM Perguntas_questionarios, Respostas_total WHERE 
Perguntas_questionarios.idPergunQuestio = Respostas_total.idPergunQuestio";
*/

/*
FROM Perguntas_questionarios INNER JOIN Categorias_modelos 
ON Categorias_modelos.idCategModelo = Perguntas_questionarios.idCategModelo
INNER JOIN Modelos_questionarios ON Modelos_questionarios.idModeloQuestio = Perguntas_questionarios.idModeloQuestio";
*/



$sql = "SELECT Perguntas_questionarios.perguntaQuestio, Modelos_questionarios.modeloQuestio, 
Perguntas_questionarios.idPergunQuestio FROM Perguntas_questionarios INNER JOIN Categorias_modelos 
ON Categorias_modelos.idCategModelo = Perguntas_questionarios.idCategModelo
INNER JOIN Modelos_questionarios ON Modelos_questionarios.idModeloQuestio = Perguntas_questionarios.idModeloQuestio";


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
            <strong><?php echo $_SESSION['nomeUsuario'];?></strong>
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
                <li class="is-active">
                    <a href="meus_questionarios.php">
                     <span>Meus Questionários</span>
                    </a>
                </li>
                <li>
                    <a href="resultados.php">
                      <span>Resultados</span>
                    </a>
                </li>
            </ul>
        </div>
        <a class="button is-info is-large" href="gera_questionario.php">CRIAR NOVO QUESTIONÁRIO</a><br> <br>
        <div class="box">
           <!-- <input class="slider is-fullwidth is-info" step="10" min="0" max="100" value="0" type="range">
            -->   
           <div class="box">
              
           
                <table>                    
                    <td>
                    <strong>Questionário: Modelo médico de avaliação de desempenho<br>
                    <strong>Iniciado em:</h1><br>
                    <strong>Entrevistado(a) número</strong>:</h1><br><br>
                        <?php
                        if ($result->num_rows > 0) {
                            $i=$j=1;
                            
                            // saida de cada linha
                            while($row = $result->fetch_assoc()) { ?>
                               <div class="box"> 
                                <li><?php echo $i++ ?> - <?php echo $row["perguntaQuestio"]; ?> </li>
                                <form action="submete_quest.php" method="post">
                                    <div class="control">
                                        <br>
                                        <label class="radio">
                                            <input type="radio" name="pergunta_numero<?php echo $j ?>" value="1" >
                                            Muito Ruim
                                        </label>
                                      
                                      
                                        <label class="radio">
                                            <input type="radio" name="pergunta_numero<?php echo $j ?>" value="2">
                                            Ruim
                                        </label>
                                      
                                        <label class="radio">
                                            <input type="radio" name="pergunta_numero<?php echo $j ?>" value="3" checked="checked">
                                            Regular
                                        </label>
                                      
                                        <label class="radio">
                                            <input type="radio" name="pergunta_numero<?php echo $j ?>" value="4">
                                            Bom
                                        </label>
                                        
                                        <label class="radio">
                                            <input type="radio" name="pergunta_numero<?php echo $j ?>" value="5">
                                            Muito Bom
                                        </label>
                                        <?php $j++ ?>
                                    </div>
                                <br>
                                </div>
                                
                            <?php } 
                        } else {
                            echo "0 results";
                        }
                        ?>
                    </td>
                    
                </table>
                <!-- <br><a class="button is-info is-outlined is-large">Pronto</a> -->
                <br>
                <button type="submit" class="button is-block is-link is-large is-fullwidth">Enviar</button>
             </form>           
            </div>






        </div>   
          
    </div>      

</div>
</body>
</html>

<!--
<form action="submete_quest.php" method="post">
            <p>
                <input type="radio" name="band-rock" value="beatles"/>The Beatles
                <input type="radio" name="band-rock" value="led-zeppelin"/> Led Zeppelin
                <input type="radio" name="band-rock" value="pink-floyd"/>Pink Floy
            </p>
            <p>
                <input type="button" value="Submit me!" />
            </p>
</form>                               
-->