<?php
session_start();
include('conexao.php');

/*Permitir acesso somente c senha*/
if(empty($_POST['nomeUsuario']) || empty($_POST['senhaUsuario'])){
    header('Location: index.php');
    exit();
}

$nomeUsuario = mysqli_real_escape_string($conexao, $_POST['nomeUsuario']);
$senhaUsuario = mysqli_real_escape_string($conexao, $_POST['senhaUsuario']);

$query = "select idUsuario, nomeUsuario from Usuarios where nomeUsuario = '{$nomeUsuario}' and 
                                                                           senhaUsuario = '{$senhaUsuario}'";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

/* echo $row; exit(); */

if($row == 1){
    $_SESSION['nomeUsuario'] = $nomeUsuario;
    header('Location: questionarios.php');
    exit();
}else {
    $_SESSION['nao_autenticado'] = true;
    header('Location: index.php');
    exit();
}
/* echo $query; exit;  */

