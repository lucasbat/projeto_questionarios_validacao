<?php
define('HOST', '127.0.0.1');
define('USUARIO', 'root');
define('SENHA', '*NCish9zyX47*//');
define('DB', 'login');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não possível conectar');