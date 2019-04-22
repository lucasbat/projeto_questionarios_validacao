<?php
session_start();
 
/* unset($_SESSION['NOMEDASESSAO']);    <-- Usa para destruir uma sessão específica */

session_destroy();                    /* <- Usa para destruir uma sessão específica */
header('Location: index.php');
exit();