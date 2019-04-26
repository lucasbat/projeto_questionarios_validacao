<?php
include('conexao.php');
session_start();


//INICIO DO TESTE

//$_POST['pergunta_numero1'] = ( isset($_POST['pergunta_numero1']) ) ? $_POST['pergunta_numero1'] : null;

# Visualizando os dados
//var_dump($_POST);

# Apartir deste ponto, entra em cena a lógica de seu programa.
# Em outras palavras, é o que faremos com os dados recebidos.

//FIM DO TESTE

$idPergunQuestio = idPergunQuestio;
$pergunta_numero1 = $_POST['pergunta_numero1'];
$pergunta_numero2 = $_POST['pergunta_numero2'];
$pergunta_numero3 = $_POST['pergunta_numero3'];
$pergunta_numero4 = $_POST['pergunta_numero4'];
$pergunta_numero5 = $_POST['pergunta_numero5'];
$pergunta_numero6 = $_POST['pergunta_numero6'];
$pergunta_numero7 = $_POST['pergunta_numero7'];
$pergunta_numero8 = $_POST['pergunta_numero8'];
$pergunta_numero9 = $_POST['pergunta_numero9'];
$pergunta_numero10 = $_POST['pergunta_numero10'];


//$idUsuario = $_SESSION['nomeUsuario'];
$idUsuario = 1;


/*
$sql = "INSERT INTO Respostas_total ( respValor, idUsuario) 
        VALUES ( $pergunta_numero1, $idUsuario)";

if (mysqli_query($conexao, $sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conexao);
}

$sql = "INSERT INTO Respostas_total ( respValor, idUsuario) 
        VALUES ( $pergunta_numero2, $idUsuario)";

if (mysqli_query($conexao, $sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conexao);
}

$sql = "INSERT INTO Respostas_total ( respValor, idUsuario) 
        VALUES ( $pergunta_numero3, $idUsuario)";

if (mysqli_query($conexao, $sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conexao);
}

$sql = "INSERT INTO Respostas_total ( respValor, idUsuario) 
        VALUES ( $pergunta_numero4, $idUsuario)";

if (mysqli_query($conexao, $sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conexao);
}

$sql = "INSERT INTO Respostas_total ( respValor, idUsuario) 
        VALUES ( $pergunta_numero5, $idUsuario)";

if (mysqli_query($conexao, $sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conexao);
}

$sql = "INSERT INTO Respostas_total ( respValor, idUsuario) 
        VALUES ( $pergunta_numero6, $idUsuario)";

if (mysqli_query($conexao, $sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conexao);
}

$sql = "INSERT INTO Respostas_total ( respValor, idUsuario) 
        VALUES ( $pergunta_numero7, $idUsuario)";

if (mysqli_query($conexao, $sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conexao);
}

$sql = "INSERT INTO Respostas_total ( respValor, idUsuario) 
        VALUES ( $pergunta_numero8, $idUsuario)";

if (mysqli_query($conexao, $sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conexao);
}

$sql = "INSERT INTO Respostas_total ( respValor, idUsuario) 
        VALUES ( $pergunta_numero9, $idUsuario)";

if (mysqli_query($conexao, $sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conexao);
}

$sql = "INSERT INTO Respostas_total ( respValor, idUsuario) 
        VALUES ( $pergunta_numero10, $idUsuario)";

if (mysqli_query($conexao, $sql)) {
    header('Location: sucesso_quest.php');;
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conexao);
}

*/

$sql = "INSERT INTO Respostas_total (idPergunQuestio, respValor, idUsuario) 
        VALUES (1, $pergunta_numero1, $idUsuario)";

if (mysqli_query($conexao, $sql)) {
    header('Location: sucesso_quest.php');;
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conexao);
}

$sql = "INSERT INTO Respostas_total (idPergunQuestio, respValor, idUsuario) 
        VALUES (2, $pergunta_numero2, $idUsuario)";

if (mysqli_query($conexao, $sql)) {
    header('Location: sucesso_quest.php');;
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conexao);
}

$sql = "INSERT INTO Respostas_total (idPergunQuestio, respValor, idUsuario) 
        VALUES (3, $pergunta_numero3, $idUsuario)";

if (mysqli_query($conexao, $sql)) {
    header('Location: sucesso_quest.php');;
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conexao);
}

$sql = "INSERT INTO Respostas_total (idPergunQuestio, respValor, idUsuario) 
        VALUES (4, $pergunta_numero4, $idUsuario)";

if (mysqli_query($conexao, $sql)) {
    header('Location: sucesso_quest.php');;
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conexao);
}

$sql = "INSERT INTO Respostas_total (idPergunQuestio, respValor, idUsuario) 
        VALUES (5, $pergunta_numero5, $idUsuario)";

if (mysqli_query($conexao, $sql)) {
    header('Location: sucesso_quest.php');;
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conexao);
}

$sql = "INSERT INTO Respostas_total (idPergunQuestio, respValor, idUsuario) 
        VALUES (6, $pergunta_numero6, $idUsuario)";

if (mysqli_query($conexao, $sql)) {
    header('Location: sucesso_quest.php');;
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conexao);
}
$sql = "INSERT INTO Respostas_total (idPergunQuestio, respValor, idUsuario) 
        VALUES (7, $pergunta_numero7, $idUsuario)";

if (mysqli_query($conexao, $sql)) {
    header('Location: sucesso_quest.php');;
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conexao);
}

$sql = "INSERT INTO Respostas_total (idPergunQuestio, respValor, idUsuario) 
        VALUES (8, $pergunta_numero8, $idUsuario)";

if (mysqli_query($conexao, $sql)) {
    header('Location: sucesso_quest.php');;
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conexao);
}

$sql = "INSERT INTO Respostas_total (idPergunQuestio, respValor, idUsuario) 
        VALUES (9, $pergunta_numero9, $idUsuario)";

if (mysqli_query($conexao, $sql)) {
    header('Location: sucesso_quest.php');;
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conexao);
}

$sql = "INSERT INTO Respostas_total (idPergunQuestio, respValor, idUsuario) 
        VALUES (10, $pergunta_numero10, $idUsuario)";

if (mysqli_query($conexao, $sql)) {
      header('Location: sucesso_quest.php');;
  } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conexao);
  }





/*
$sql = "INSERT INTO Respostas_total (idPerguntQuestio, respValor, idUsuario) 
        VALUES ($idPerguntQuestio, $pergunta_numero2, $idUsuario)";
$sql = "INSERT INTO Respostas_total (idPerguntQuestio, respValor, idUsuario) 
        VALUES ($idPerguntQuestio, $pergunta_numero3, $idUsuario)";
$sql = "INSERT INTO Respostas_total (idPerguntQuestio, respValor, idUsuario) 
        VALUES ($idPerguntQuestio, $pergunta_numero4, $idUsuario)";
$sql = "INSERT INTO Respostas_total (idPerguntQuestio, respValor, idUsuario) 
        VALUES ($idPerguntQuestio, $pergunta_numero5, $idUsuario)";
$sql = "INSERT INTO Respostas_total (idPerguntQuestio, respValor, idUsuario) 
        VALUES ($idPerguntQuestio, $pergunta_numero6, $idUsuario)";
$sql = "INSERT INTO Respostas_total (idPerguntQuestio, respValor, idUsuario) 
        VALUES ($idPerguntQuestio, $pergunta_numero7, $idUsuario)";
$sql = "INSERT INTO Respostas_total (idPerguntQuestio, respValor, idUsuario) 
        VALUES ($idPerguntQuestio, $pergunta_numero8, $idUsuario)";
$sql = "INSERT INTO Respostas_total (idPerguntQuestio, respValor, idUsuario) 
        VALUES ($idPerguntQuestio, $pergunta_numero9, $idUsuario)";
$sql = "INSERT INTO Respostas_total (idPerguntQuestio, respValor, idUsuario) 
        VALUES ($idPerguntQuestio, $pergunta_numero10, $idUsuario)";

*/

mysqli_close($conexao);
/*
$sql = "INSERT INTO Students (name, lastname, email) VALUES ('Thom', 'Vial', 'thom.v@some.com')";
if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
*/