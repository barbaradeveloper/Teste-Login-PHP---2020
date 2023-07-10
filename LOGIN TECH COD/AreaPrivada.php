<?php
 session_start();
 if(!isset($_SESSION['id_usuario']))
 { // senao existir essa sessão a pessoa será redirecionada para a página de login.
 	header('Location: index.php');
 	exit; // para não executar nada além dessa linha
 }
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	SEJAAAAAAAAAA BEM VINDOOOOOOOOOO!
<a href="sair.php">Sair</a>
</body>
</html>