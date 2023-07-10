<?PHP
include "conexao.php";
?>
<html lang="pt-br"> <!--indica que o site está em português.-->
<head>
	<meta charset="utf-8"> <!--coloca os caracteres brasileiros, para não ter nenhum erro de acentuação,etc.-->
	<title>Tela de Login</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<style>
      body{
		  background-image: url(CADASTRAR.jpg);
		  background-size:100%;
		  background-repeat: no-repeat;
		  background-attachment: scroll;
	  }
</style>
<body>
<img src="borda.png">
<div style='position:absolute; top:110px; left:100px;'>
<img src="nossalogo.png" align="left">
</div>
<div id="corpo-form">
	<h1>Cadastrar</h1><!--Título do formulário-->
	<form method="POST" action="verificarcadastro.php"><!--formulário para a tela de login-->
	<input type="text" name="nome" placeholder="Nome completo" maxlenght="30"><!--maxlenght limita a quantidade de caracteres que o usuário pode digitar-->
	<input type="text" name="telefone" placeholder="Telefone" maxlenght="30">
	<input type="email" name="email" placeholder="Usuário" maxlenght="40"><!-- input pra login-->
	<input type="password" name="senha" placeholder="Senha" maxlenght="32"><!-- input pra senha-->
	<input type="password" name="confSenha" placeholder="Confirmar Senha">
	<input type="submit"  name="submit" class="botao" value="Cadastrar"><!-- input para o botão para enviar os dados-->
	</form>
</div>
</body>
</html>