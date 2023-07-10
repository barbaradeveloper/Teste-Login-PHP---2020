<html lang="pt-br"> <!--indica que o site está em português.-->
<head>
	<meta charset="utf-8"> <!--coloca os caracteres brasileiros, para não ter nenhum erro de acentuação,etc.-->
	<title>Tela de Login</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<style>
      body{
		  background-image: url(foto.png);
		  background-size:100%;
		  background-repeat: no-repeat;
		  background-attachment: scroll;
	  }
</style>

<img src="borda.png">
<div style='position:absolute; top:110px; left:100px;'>
<img src="nossalogo.png" align="left">
</div>

<div id="corpo-form" >

	<h1>Entrar</h1><!--Título do formulário-->
	<form method="POST" action="http://localhost/SITE%20DUDA/menu/paginainicial.html"><!--formulário para a tela de login-->
	<input type="email" placeholder="Usuário"  name="email"><!-- input pra login-->
	<input type="password" placeholder="Senha"  name="senha"><!-- input pra senha-->
	<input type="submit" placeholder="ACESSAR"><!-- input para o botão para enviar os dados-->
	<a href="cadastrar.PHP">Ainda não é inscrito?<strong>Cadastre-se</strong></a><!--Adcionar link para realizar cadastro-->
	</form>
</div>
<?php

?>
</body>
</html>