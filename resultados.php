<?php  
session_start();
include('verifica_login.php');
include('conexao.php');

/*
$sql = "select * from Respostas_total";
*/

$sql = "SELECT Perguntas_questionarios.perguntaQuestio, Modelos_questionarios.modeloQuestio, 
Perguntas_questionarios.idPergunQuestio FROM Perguntas_questionarios INNER JOIN Categorias_modelos 
ON Categorias_modelos.idCategModelo = Perguntas_questionarios.idCategModelo
INNER JOIN Modelos_questionarios ON Modelos_questionarios.idModeloQuestio = Perguntas_questionarios.idModeloQuestio";

$result = $conexao->query($sql);



/********** GRÁFICO POR RESPOSTA INICIA AQUI *****************/

$soma1 = "SELECT * FROM Respostas_total WHERE respValor = 1 "; 
$soma2 = "SELECT * FROM Respostas_total WHERE respValor = 2 "; 
$soma3 = "SELECT * FROM Respostas_total WHERE respValor = 3 "; 
$soma4 = "SELECT * FROM Respostas_total WHERE respValor = 4 "; 
$soma5 = "SELECT * FROM Respostas_total WHERE respValor = 5 ";  

$result1 = $conexao->query($soma1);
$result2 = $conexao->query($soma2);
$result3 = $conexao->query($soma3);
$result4 = $conexao->query($soma4);
$result5 = $conexao->query($soma5);

    if ($result1->num_rows > 0) {
        $res1 = $result1->num_rows;
        
    } 

    if ($result2->num_rows > 0) {
        $res2 = $result2->num_rows;
        
    } 
    if ($result3->num_rows > 0) {
        $res3 = $result3->num_rows;
        
    } 

    if ($result4->num_rows > 0) {
        $res4 = $result4->num_rows;
        
    } 

    if ($result5->num_rows > 0) {
        $res5 = $result5->num_rows;
        
    }


$total = $res1 + $res2 + $res3 + $res4 + $res5;

// calculando porcentagem
$r1 = ($res1/$total)*100;
$r2 = ($res2/$total)*100;
$r3 = ($res3/$total)*100;
$r4 = ($res4/$total)*100;
$r5 = ($res5/$total)*100;

if (is_nan( $r1 ) == true)
  $r1 = 0;

if (is_nan( $r2 ) == true)
  $r2 = 0;

if (is_nan( $r3 ) == true)
  $r3 = 0;

if (is_nan( $r4 ) == true)
  $r4 = 0;

if (is_nan( $r5 ) == true)
  $r5 = 0;

/********** GRÁFICO POR RESPOSTA ENCERRA AQUI *****************/


/*+++++++++++ GRÁFICO POR PERGUNTA INICIA AQUI +++++++++++++++*/

$total2 = 0;
$PREmr = 0;
$PREru = 0;  
$PREre = 0;
$PREbo = 0; 
$PREmb = 0; 

$PergunQuestio1 = "SELECT * FROM Respostas_total WHERE idPergunQuestio = 1 "; 
$PergunQuestio2 = "SELECT * FROM Respostas_total WHERE idPergunQuestio = 2 "; 
$PergunQuestio3 = "SELECT * FROM Respostas_total WHERE idPergunQuestio = 3 "; 
$PergunQuestio4 = "SELECT * FROM Respostas_total WHERE idPergunQuestio = 4 "; 
$PergunQuestio5 = "SELECT * FROM Respostas_total WHERE idPergunQuestio = 5 ";  

$PergunQuestio6 = "SELECT * FROM Respostas_total WHERE idPergunQuestio = 6 "; 
$PergunQuestio7 = "SELECT * FROM Respostas_total WHERE idPergunQuestio = 7 "; 
$PergunQuestio8 = "SELECT * FROM Respostas_total WHERE idPergunQuestio = 8 "; 
$PergunQuestio9 = "SELECT * FROM Respostas_total WHERE idPergunQuestio = 9 "; 
$PergunQuestio10 = "SELECT * FROM Respostas_total WHERE idPergunQuestio = 10 ";  


$result1 = $conexao->query($PergunQuestio1);
$result2 = $conexao->query($PergunQuestio2);
$result3 = $conexao->query($PergunQuestio3);
$result4 = $conexao->query($PergunQuestio4);
$result5 = $conexao->query($PergunQuestio5);

$result6 = $conexao->query($PergunQuestio6);
$result7 = $conexao->query($PergunQuestio7);
$result8 = $conexao->query($PergunQuestio8);
$result9 = $conexao->query($PergunQuestio9);
$result10 = $conexao->query($PergunQuestio10);

if (is_nan( $result1 ) == true)
  $result1 = 0;

if (is_nan( $result2 ) == true)
  $result2 = 0;

if (is_nan( $result3 ) == true)
  $result3 = 0;

if (is_nan( $result4 ) == true)
  $result4 = 0;

if (is_nan( $result5 ) == true)
  $result5 = 0;

  if (is_nan( $result6 ) == true)
  $result6 = 0;

if (is_nan( $result7 ) == true)
  $result7 = 0;

if (is_nan( $result8 ) == true)
  $result8 = 0;

if (is_nan( $result9 ) == true)
  $result9 = 0;

if (is_nan( $result10 ) == true)
  $result10 = 0;
/*+++++++++++ GRÁFICO POR PERGUNTA ENCERRA AQUI ++++++++++++++*/

?>

<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Web Science - Consultoria Científica</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
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
                <li>
                    <a href="meus_questionarios.php">
                     <span>Meus Questionários</span>
                    </a>
                </li>
                <li class="is-active">
                    <a>
                    <span>Resultados</span>
                    </a>
                </li>
            </ul>
        </div>
        <a class="button is-info is-large" href="gera_questionario.php">CRIAR NOVO QUESTIONÁRIO</a><br> <br>
        <div class="box">
           <!-- <input class="slider is-fullwidth is-info" step="10" min="0" max="100" value="0" type="range">
              -->  
                <!--<strong>OPÇÕES:</strong>
                Resultados Individuais
                Resultados por Perguntas
              -->    

              <strong>
                  Questionário: Modelo médico de avaliação de desempenho <br>
                  Iniciado em: xx/xx/xxxx <br>
              </strong><br><br>
              <!-- GRÁFICO POR RESPOSTAS  -->
            <div class="box">
                <strong> GRÁFICO POR RESPOSTAS </strong> <br><br>

                <strong>Muito Ruim: <?php echo number_format($r1, 2, ',', '.'); ?>% 
                <progress class="progress is-danger" value="<?php echo $r1 ?>" max="100"></progress>
                
                Ruim: <?php echo number_format($r2, 2, ',', '.'); ?>% 
                <progress class="progress is-warning" value="<?php echo $r2 ?>" max="100"></progress>
                
                Regular: <?php echo number_format($r3, 2, ',', '.'); ?>%
                <progress class="progress is-success" value="<?php echo $r3 ?>" max="100"></progress>
                
                Bom: <?php echo number_format($r4, 2, ',', '.'); ?>%
                <progress class="progress is-info" value="<?php echo $r4 ?>" max="100"></progress>
                
                Muito Bom <?php echo number_format($r5, 2, ',', '.'); ?>%
                <progress class="progress is-link" value="<?php echo $r5 ?>" max="100"></progress>
                </strong>  
            </div>
            <!-- FIM DO GRÁFICO POR RESPOSTAS  -->
            
            <!-- INICIO DO GRÁFICO POR PERGUNTAS  -->
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
                                <?php echo $i++ ?> - <?php echo $row["perguntaQuestio"]; ?>
                                
                                
                                <br><br>

                           <!-- começa aqui -->

                             
                              <?php
                                   // ********* Pergunta 1  **********
                                  if ($result1->num_rows > 0) {
                                      while($row = $result1->fetch_assoc()){
                                        
                                          switch($row["respValor"]){
                                              case 1:
                                                  $PREmr++;
                                              break;
                                              case 2:
                                                  $PREru++;
                                              break;
                                              case 3:
                                                  $PREre++;
                                              break;
                                              case 4:
                                                  $PREbo++;
                                              break;
                                              case 5:
                                                  $PREmb++;
                                              break;
                                              default:
                                              break;
                                          }
                                      }    
                                  } 
                              

                                 $total2 = $PREmr + $PREru + $PREre + $PREbo + $PREmb; 
 
                                $mr = ($PREmr/$total2)*100;
                                $ru = ($PREru/$total2)*100;
                                $re = ($PREre/$total2)*100;
                                $bo = ($PREbo/$total2)*100;
                                $mb = ($PREmb/$total2)*100;

                                if (is_nan( $mr ) == true)$mr = 0;
                                if (is_nan( $ru ) == true)$ru = 0;
                                if (is_nan( $re ) == true)$re = 0;
                                if (is_nan( $bo ) == true)$bo = 0;
                                if (is_nan( $mb ) == true)$mb = 0;
                  
                                  ?> 
                                  
                                <strong>Muito Ruim: <?php echo number_format($mr, 2, ',', '.'); ?>% 
                                <progress class="progress is-danger" value="<?php echo $mr ?>" max="100"></progress>
                                <strong>Ruim: <?php echo number_format($ru, 2, ',', '.'); ?>% 
                                <progress class="progress is-warning" value="<?php echo $ru ?>" max="100"></progress>
                                <strong>Regular: <?php echo number_format($re, 2, ',', '.'); ?>% 
                                <progress class="progress is-success" value="<?php echo $re ?>" max="100"></progress>
                                <strong>Bom: <?php echo number_format($bo , 2, ',', '.');?>% 
                                <progress class="progress is-info" value="<?php echo $bo ?>" max="100"></progress>
                                <strong>Muito Bom: <?php echo number_format($mb, 2, ',', '.'); ?>% 
                                <progress class="progress is-link" value="<?php echo $mb ?>" max="100"></progress>
                                  <?php
                                 
                                $total2 = 1;
                                $PREmr = 0;
                                $PREru = 0;  
                                $PREre = 0;
                                $PREbo = 0; 
                                $PREmb = 0;
                                ?>
                                </div><div class="box">
                                  <?php
                                // ********* Pergunta 2  **********
                                if ($result->num_rows > 0) {
                                  
                                  
                                  // saida de cada linha
                                  while($row = $result->fetch_assoc()) { ?>
                                  
                                      <?php echo $i++ ?> - <?php echo $row["perguntaQuestio"]; ?>
                                    <br><br>
                                    <?php
                                        if ($result2->num_rows > 0) {
                                            while($row = $result2->fetch_assoc()){
                                              
                                                switch($row["respValor"]){
                                                    case 1:
                                                        $PREmr++;
                                                    break;
                                                    case 2:
                                                        $PREru++;
                                                    break;
                                                    case 3:
                                                        $PREre++;
                                                    break;
                                                    case 4:
                                                        $PREbo++;
                                                    break;
                                                    case 5:
                                                        $PREmb++;
                                                    break;
                                                    default:
                                                    break;
                                                }
                                            }    
                                        } 
                                    

                                      $total2 = $PREmr + $PREru + $PREre + $PREbo + $PREmb; 

                                      $mr = ($PREmr/$total2)*100;
                                      $ru = ($PREru/$total2)*100;
                                      $re = ($PREre/$total2)*100;
                                      $bo = ($PREbo/$total2)*100;
                                      $mb = ($PREmb/$total2)*100;
                                      if (is_nan( $mr ) == true)$mr = 0;
                                      if (is_nan( $ru ) == true)$ru = 0;
                                      if (is_nan( $re ) == true)$re = 0;
                                      if (is_nan( $bo ) == true)$bo = 0;
                                      if (is_nan( $mb ) == true)$mb = 0;
                        
                                        
                                      ?> 
                                      <strong>Muito Ruim: <?php echo number_format($mr, 2, ',', '.'); ?>% 
                                      <progress class="progress is-danger" value="<?php echo $mr ?>" max="100"></progress>
                                      <strong>Ruim: <?php echo number_format($ru, 2, ',', '.'); ?>% 
                                      <progress class="progress is-warning" value="<?php echo $ru ?>" max="100"></progress>
                                      <strong>Regular: <?php echo number_format($re, 2, ',', '.'); ?>% 
                                      <progress class="progress is-success" value="<?php echo $re ?>" max="100"></progress>
                                      <strong>Bom: <?php echo number_format($bo , 2, ',', '.');?>% 
                                      <progress class="progress is-info" value="<?php echo $bo ?>" max="100"></progress>
                                      <strong>Muito Bom: <?php echo number_format($mb, 2, ',', '.'); ?>% 
                                      <progress class="progress is-link" value="<?php echo $mb ?>" max="100"></progress>

                                        <?php
                                      $total2 = 1;
                                      $PREmr = 0;
                                      $PREru = 0;  
                                      $PREre = 0;
                                      $PREbo = 0; 
                                      $PREmb = 0;
                                        ?>
                                        </div><div class="box">
                                        <?php

                                // ********* Pergunta 3  **********
                                if ($result->num_rows > 0) {
                                  
                                  // saida de cada linha
                                  while($row = $result->fetch_assoc()) { ?>
                                      <?php echo $i++ ?> - <?php echo $row["perguntaQuestio"]; ?>

                                    <br><br>
                                    <?php
                                        if ($result3->num_rows > 0) {
                                            while($row = $result3->fetch_assoc()){
                                              
                                                switch($row["respValor"]){
                                                    case 1:
                                                        $PREmr++;
                                                    break;
                                                    case 2:
                                                        $PREru++;
                                                    break;
                                                    case 3:
                                                        $PREre++;
                                                    break;
                                                    case 4:
                                                        $PREbo++;
                                                    break;
                                                    case 5:
                                                        $PREmb++;
                                                    break;
                                                    default:
                                                    break;
                                                }
                                            }    
                                        } 
                                    
                                      $total2 = $PREmr + $PREru + $PREre + $PREbo + $PREmb; 

                                      $mr = ($PREmr/$total2)*100;
                                      $ru = ($PREru/$total2)*100;
                                      $re = ($PREre/$total2)*100;
                                      $bo = ($PREbo/$total2)*100;
                                      $mb = ($PREmb/$total2)*100;
                                      if (is_nan( $mr ) == true)$mr = 0;
                                      if (is_nan( $ru ) == true)$ru = 0;
                                      if (is_nan( $re ) == true)$re = 0;
                                      if (is_nan( $bo ) == true)$bo = 0;
                                      if (is_nan( $mb ) == true)$mb = 0;
                        
                                      ?> 
                                      <strong>Muito Ruim: <?php echo number_format($mr, 2, ',', '.'); ?>% 
                                      <progress class="progress is-danger" value="<?php echo $mr ?>" max="100"></progress>
                                      <strong>Ruim: <?php echo number_format($ru, 2, ',', '.'); ?>% 
                                      <progress class="progress is-warning" value="<?php echo $ru ?>" max="100"></progress>
                                      <strong>Regular: <?php echo number_format($re, 2, ',', '.'); ?>% 
                                      <progress class="progress is-success" value="<?php echo $re ?>" max="100"></progress>
                                      <strong>Bom: <?php echo number_format($bo , 2, ',', '.');?>% 
                                      <progress class="progress is-info" value="<?php echo $bo ?>" max="100"></progress>
                                      <strong>Muito Bom: <?php echo number_format($mb, 2, ',', '.'); ?>% 
                                      <progress class="progress is-link" value="<?php echo $mb ?>" max="100"></progress>
                                      <?php
                                      $total2 = 1;
                                      $PREmr = 0;
                                      $PREru = 0;  
                                      $PREre = 0;
                                      $PREbo = 0; 
                                      $PREmb = 0;
                                        ?></div><div class="box"><?php
// ********* Pergunta 4  **********
if ($result->num_rows > 0) {
                                  
  // saida de cada linha
  while($row = $result->fetch_assoc()) { ?>
      <?php echo $i++ ?> - <?php echo $row["perguntaQuestio"]; ?>

    <br><br>
    <?php
        if ($result4->num_rows > 0) {
            while($row = $result4->fetch_assoc()){
              
                switch($row["respValor"]){
                    case 1:
                        $PREmr++;
                    break;
                    case 2:
                        $PREru++;
                    break;
                    case 3:
                        $PREre++;
                    break;
                    case 4:
                        $PREbo++;
                    break;
                    case 5:
                        $PREmb++;
                    break;
                    default:
                    break;
                }
            }    
        } 
    
      $total2 = $PREmr + $PREru + $PREre + $PREbo + $PREmb; 

      $mr = ($PREmr/$total2)*100;
      $ru = ($PREru/$total2)*100;
      $re = ($PREre/$total2)*100;
      $bo = ($PREbo/$total2)*100;
      $mb = ($PREmb/$total2)*100;
      if (is_nan( $mr ) == true)$mr = 0;
      if (is_nan( $ru ) == true)$ru = 0;
      if (is_nan( $re ) == true)$re = 0;
      if (is_nan( $bo ) == true)$bo = 0;
      if (is_nan( $mb ) == true)$mb = 0;

        ?> 
           
          <strong>Muito Ruim: <?php echo number_format($mr, 2, ',', '.'); ?>% 
          <progress class="progress is-danger" value="<?php echo $mr ?>" max="100"></progress>
          <strong>Ruim: <?php echo number_format($ru, 2, ',', '.'); ?>% 
          <progress class="progress is-warning" value="<?php echo $ru ?>" max="100"></progress>
          <strong>Regular: <?php echo number_format($re, 2, ',', '.'); ?>% 
          <progress class="progress is-success" value="<?php echo $re ?>" max="100"></progress>
          <strong>Bom: <?php echo number_format($bo , 2, ',', '.');?>% 
          <progress class="progress is-info" value="<?php echo $bo ?>" max="100"></progress>
          <strong>Muito Bom: <?php echo number_format($mb, 2, ',', '.'); ?>% 
          <progress class="progress is-link" value="<?php echo $mb ?>" max="100"></progress>
          
      <?php

      $total2 = 1;
      $PREmr = 0;
      $PREru = 0;  
      $PREre = 0;
      $PREbo = 0; 
      $PREmb = 0;
 ?></div><div class="box"><?php

// ********* Pergunta 5  **********
if ($result->num_rows > 0) {
                                  
  // saida de cada linha
  while($row = $result->fetch_assoc()) { ?>
      <?php echo $i++ ?> - <?php echo $row["perguntaQuestio"]; ?>

    <br><br>
    <?php
        if ($result5->num_rows > 0) {
            while($row = $result5->fetch_assoc()){
              
                switch($row["respValor"]){
                    case 1:
                        $PREmr++;
                    break;
                    case 2:
                        $PREru++;
                    break;
                    case 3:
                        $PREre++;
                    break;
                    case 4:
                        $PREbo++;
                    break;
                    case 5:
                        $PREmb++;
                    break;
                    default:
                    break;
                }
            }    
        } 
    
      $total2 = $PREmr + $PREru + $PREre + $PREbo + $PREmb; 

      $mr = ($PREmr/$total2)*100;
      $ru = ($PREru/$total2)*100;
      $re = ($PREre/$total2)*100;
      $bo = ($PREbo/$total2)*100;
      $mb = ($PREmb/$total2)*100;
      if (is_nan( $mr ) == true)$mr = 0;
      if (is_nan( $ru ) == true)$ru = 0;
      if (is_nan( $re ) == true)$re = 0;
      if (is_nan( $bo ) == true)$bo = 0;
      if (is_nan( $mb ) == true)$mb = 0;

         ?> 
           
           <strong>Muito Ruim: <?php echo number_format($mr, 2, ',', '.'); ?>% 
          <progress class="progress is-danger" value="<?php echo $mr ?>" max="100"></progress>
          <strong>Ruim: <?php echo number_format($ru, 2, ',', '.'); ?>% 
          <progress class="progress is-warning" value="<?php echo $ru ?>" max="100"></progress>
          <strong>Regular: <?php echo number_format($re, 2, ',', '.'); ?>% 
          <progress class="progress is-success" value="<?php echo $re ?>" max="100"></progress>
          <strong>Bom: <?php echo number_format($bo , 2, ',', '.');?>% 
          <progress class="progress is-info" value="<?php echo $bo ?>" max="100"></progress>
          <strong>Muito Bom: <?php echo number_format($mb, 2, ',', '.'); ?>% 
          <progress class="progress is-link" value="<?php echo $mb ?>" max="100"></progress>
 
      <?php

      $total2 = 1;
      $PREmr = 0;
      $PREru = 0;  
      $PREre = 0;
      $PREbo = 0; 
      $PREmb = 0;

      ?></div><div class="box"><?php



// ********* Pergunta 6  **********
if ($result->num_rows > 0) {
                                  
  // saida de cada linha
  while($row = $result->fetch_assoc()) { ?>
      <?php echo $i++ ?> - <?php echo $row["perguntaQuestio"]; ?>

    <br><br>
    <?php
        if ($result6->num_rows > 0) {
            while($row = $result6->fetch_assoc()){
              
                switch($row["respValor"]){
                    case 1:
                        $PREmr++;
                    break;
                    case 2:
                        $PREru++;
                    break;
                    case 3:
                        $PREre++;
                    break;
                    case 4:
                        $PREbo++;
                    break;
                    case 5:
                        $PREmb++;
                    break;
                    default:
                    break;
                }
            }    
        } 
    
      $total2 = $PREmr + $PREru + $PREre + $PREbo + $PREmb; 

      $mr = ($PREmr/$total2)*100;
      $ru = ($PREru/$total2)*100;
      $re = ($PREre/$total2)*100;
      $bo = ($PREbo/$total2)*100;
      $mb = ($PREmb/$total2)*100;
      if (is_nan( $mr ) == true)$mr = 0;
      if (is_nan( $ru ) == true)$ru = 0;
      if (is_nan( $re ) == true)$re = 0;
      if (is_nan( $bo ) == true)$bo = 0;
      if (is_nan( $mb ) == true)$mb = 0;

     ?> 
           
           <strong>Muito Ruim: <?php echo number_format($mr, 2, ',', '.'); ?>% 
          <progress class="progress is-danger" value="<?php echo $mr ?>" max="100"></progress>
          <strong>Ruim: <?php echo number_format($ru, 2, ',', '.'); ?>% 
          <progress class="progress is-warning" value="<?php echo $ru ?>" max="100"></progress>
          <strong>Regular: <?php echo number_format($re, 2, ',', '.'); ?>% 
          <progress class="progress is-success" value="<?php echo $re ?>" max="100"></progress>
          <strong>Bom: <?php echo number_format($bo , 2, ',', '.');?>% 
          <progress class="progress is-info" value="<?php echo $bo ?>" max="100"></progress>
          <strong>Muito Bom: <?php echo number_format($mb, 2, ',', '.'); ?>% 
          <progress class="progress is-link" value="<?php echo $mb ?>" max="100"></progress>
       <?php
      $total2 = 1;
      $PREmr = 0;
      $PREru = 0;  
      $PREre = 0;
      $PREbo = 0; 
      $PREmb = 0;
      ?></div><div class="box"><?php

// ********* Pergunta 7  **********
if ($result->num_rows > 0) {
                                  
  // saida de cada linha
  while($row = $result->fetch_assoc()) { ?>
      <?php echo $i++ ?> - <?php echo $row["perguntaQuestio"]; ?>

    <br><br>
    <?php
        if ($result7->num_rows > 0) {
            while($row = $result7->fetch_assoc()){
              
                switch($row["respValor"]){
                    case 1:
                        $PREmr++;
                    break;
                    case 2:
                        $PREru++;
                    break;
                    case 3:
                        $PREre++;
                    break;
                    case 4:
                        $PREbo++;
                    break;
                    case 5:
                        $PREmb++;
                    break;
                    default:
                    break;
                }
            }    
        } 
    
      $total2 = $PREmr + $PREru + $PREre + $PREbo + $PREmb; 

      $mr = ($PREmr/$total2)*100;
      $ru = ($PREru/$total2)*100;
      $re = ($PREre/$total2)*100;
      $bo = ($PREbo/$total2)*100;
      $mb = ($PREmb/$total2)*100;
      if (is_nan( $mr ) == true)$mr = 0;
      if (is_nan( $ru ) == true)$ru = 0;
      if (is_nan( $re ) == true)$re = 0;
      if (is_nan( $bo ) == true)$bo = 0;
      if (is_nan( $mb ) == true)$mb = 0;

      ?> 
           
           <strong>Muito Ruim: <?php echo number_format($mr, 2, ',', '.'); ?>% 
          <progress class="progress is-danger" value="<?php echo $mr ?>" max="100"></progress>
          <strong>Ruim: <?php echo number_format($ru, 2, ',', '.'); ?>% 
          <progress class="progress is-warning" value="<?php echo $ru ?>" max="100"></progress>
          <strong>Regular: <?php echo number_format($re, 2, ',', '.'); ?>% 
          <progress class="progress is-success" value="<?php echo $re ?>" max="100"></progress>
          <strong>Bom: <?php echo number_format($bo , 2, ',', '.');?>% 
          <progress class="progress is-info" value="<?php echo $bo ?>" max="100"></progress>
          <strong>Muito Bom: <?php echo number_format($mb, 2, ',', '.'); ?>% 
          <progress class="progress is-link" value="<?php echo $mb ?>" max="100"></progress>
      <?php

      $total2 = 1;
      $PREmr = 0;
      $PREru = 0;  
      $PREre = 0;
      $PREbo = 0; 
      $PREmb = 0;
      ?></div><div class="box"><?php

      // ********* Pergunta 8  **********
  if ($result->num_rows > 0) {
                                  
  // saida de cada linha
  while($row = $result->fetch_assoc()) { ?>
      <?php echo $i++ ?> - <?php echo $row["perguntaQuestio"]; ?>

    <br><br>
    <?php
        if ($result8->num_rows > 0) {
            while($row = $result8->fetch_assoc()){
              
                switch($row["respValor"]){
                    case 1:
                        $PREmr++;
                    break;
                    case 2:
                        $PREru++;
                    break;
                    case 3:
                        $PREre++;
                    break;
                    case 4:
                        $PREbo++;
                    break;
                    case 5:
                        $PREmb++;
                    break;
                    default:
                    break;
                }
            }    
        } 
    
      $total2 = $PREmr + $PREru + $PREre + $PREbo + $PREmb; 

      $mr = ($PREmr/$total2)*100;
      $ru = ($PREru/$total2)*100;
      $re = ($PREre/$total2)*100;
      $bo = ($PREbo/$total2)*100;
      $mb = ($PREmb/$total2)*100;
      if (is_nan( $mr ) == true)$mr = 0;
      if (is_nan( $ru ) == true)$ru = 0;
      if (is_nan( $re ) == true)$re = 0;
      if (is_nan( $bo ) == true)$bo = 0;
      if (is_nan( $mb ) == true)$mb = 0;

      ?> 
          <strong>Muito Ruim: <?php echo number_format($mr, 2, ',', '.'); ?>% 
          <progress class="progress is-danger" value="<?php echo $mr ?>" max="100"></progress>
          <strong>Ruim: <?php echo number_format($ru, 2, ',', '.'); ?>% 
          <progress class="progress is-warning" value="<?php echo $ru ?>" max="100"></progress>
          <strong>Regular: <?php echo number_format($re, 2, ',', '.'); ?>% 
          <progress class="progress is-success" value="<?php echo $re ?>" max="100"></progress>
          <strong>Bom: <?php echo number_format($bo , 2, ',', '.');?>% 
          <progress class="progress is-info" value="<?php echo $bo ?>" max="100"></progress>
          <strong>Muito Bom: <?php echo number_format($mb, 2, ',', '.'); ?>% 
          <progress class="progress is-link" value="<?php echo $mb ?>" max="100"></progress>
     <?php

      $total2 = 1;
      $PREmr = 0;
      $PREru = 0;  
      $PREre = 0;
      $PREbo = 0; 
      $PREmb = 0;
      ?></div><div class="box"><?php
// ********* Pergunta 9  **********
if ($result->num_rows > 0) {
                                  
  // saida de cada linha
  while($row = $result->fetch_assoc()) { ?>
      <?php echo $i++ ?> - <?php echo $row["perguntaQuestio"]; ?>

    <br><br>
    <?php
        if ($result9->num_rows > 0) {
            while($row = $result9->fetch_assoc()){
              
                switch($row["respValor"]){
                    case 1:
                        $PREmr++;
                    break;
                    case 2:
                        $PREru++;
                    break;
                    case 3:
                        $PREre++;
                    break;
                    case 4:
                        $PREbo++;
                    break;
                    case 5:
                        $PREmb++;
                    break;
                    default:
                    break;
                }
            }    
        } 
    
      $total2 = $PREmr + $PREru + $PREre + $PREbo + $PREmb; 

      $mr = ($PREmr/$total2)*100;
      $ru = ($PREru/$total2)*100;
      $re = ($PREre/$total2)*100;
      $bo = ($PREbo/$total2)*100;
      $mb = ($PREmb/$total2)*100;
      if (is_nan( $mr ) == true)$mr = 0;
      if (is_nan( $ru ) == true)$ru = 0;
      if (is_nan( $re ) == true)$re = 0;
      if (is_nan( $bo ) == true)$bo = 0;
      if (is_nan( $mb ) == true)$mb = 0;

      ?> 
           
           <strong>Muito Ruim: <?php echo number_format($mr, 2, ',', '.'); ?>% 
          <progress class="progress is-danger" value="<?php echo $mr ?>" max="100"></progress>
          <strong>Ruim: <?php echo number_format($ru, 2, ',', '.'); ?>% 
          <progress class="progress is-warning" value="<?php echo $ru ?>" max="100"></progress>
          <strong>Regular: <?php echo number_format($re, 2, ',', '.'); ?>% 
          <progress class="progress is-success" value="<?php echo $re ?>" max="100"></progress>
          <strong>Bom: <?php echo number_format($bo , 2, ',', '.');?>% 
          <progress class="progress is-info" value="<?php echo $bo ?>" max="100"></progress>
          <strong>Muito Bom: <?php echo number_format($mb, 2, ',', '.'); ?>% 
          <progress class="progress is-link" value="<?php echo $mb ?>" max="100"></progress>
 <?php

      $total2 = 1;
      $PREmr = 0;
      $PREru = 0;  
      $PREre = 0;
      $PREbo = 0; 
      $PREmb = 0;
      ?></div><div class="box"><?php
// ********* Pergunta 10  **********
if ($result->num_rows > 0) {
                                  
  // saida de cada linha
  while($row = $result->fetch_assoc()) { ?>
      <?php echo $i++ ?> - <?php echo $row["perguntaQuestio"]; ?>

    <br><br>
    <?php
        if ($result10->num_rows > 0) {
            while($row = $result10->fetch_assoc()){
              
                switch($row["respValor"]){
                    case 1:
                        $PREmr++;
                    break;
                    case 2:
                        $PREru++;
                    break;
                    case 3:
                        $PREre++;
                    break;
                    case 4:
                        $PREbo++;
                    break;
                    case 5:
                        $PREmb++;
                    break;
                    default:
                    break;
                }
            }    
        } 
    
      $total2 = $PREmr + $PREru + $PREre + $PREbo + $PREmb; 

      $mr = ($PREmr/$total2)*100;
      $ru = ($PREru/$total2)*100;
      $re = ($PREre/$total2)*100;
      $bo = ($PREbo/$total2)*100;
      $mb = ($PREmb/$total2)*100;
      if (is_nan( $mr ) == true)$mr = 0;
      if (is_nan( $ru ) == true)$ru = 0;
      if (is_nan( $re ) == true)$re = 0;
      if (is_nan( $bo ) == true)$bo = 0;
      if (is_nan( $mb ) == true)$mb = 0;

      ?> 
           
          <strong>Muito Ruim: <?php echo number_format($mr, 2, ',', '.'); ?>% 
          <progress class="progress is-danger" value="<?php echo $mr ?>" max="100"></progress>
          <strong>Ruim: <?php echo number_format($ru, 2, ',', '.'); ?>% 
          <progress class="progress is-warning" value="<?php echo $ru ?>" max="100"></progress>
          <strong>Regular: <?php echo number_format($re, 2, ',', '.'); ?>% 
          <progress class="progress is-success" value="<?php echo $re ?>" max="100"></progress>
          <strong>Bom: <?php echo number_format($bo , 2, ',', '.');?>% 
          <progress class="progress is-info" value="<?php echo $bo ?>" max="100"></progress>
          <strong>Muito Bom: <?php echo number_format($mb, 2, ',', '.'); ?>% 
          <progress class="progress is-link" value="<?php echo $mb ?>" max="100"></progress>
 <?php

      $total2 = 1;
      $PREmr = 0;
      $PREru = 0;  
      $PREre = 0;
      $PREbo = 0; 
      $PREmb = 0;
      ?></div><?php

}
}
}
}
}
}
}
}
}
}
}
}
}
}
                            } }       
                           // termina aqui 
  
                                  
                             } } } 
                        } else {
                            echo "0 results";
                        }
                        ?>
                       
                    </td>
     
                </table>

            </div>

        </div>   
          
    </div>      

</div>
</body>
</html>
