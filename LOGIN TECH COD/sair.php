<?php
session_start();
unset($_SESSION['id_usuario']); // para destruir a sessão
header("location: index.php");

?>