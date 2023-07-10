<?PHP
include "dbConexao.php";
?>
<html>
<head>
<title> PET SHOP - PHP 5 com Mysql</title>
<center>

<link rel="stylesheet" type="text/css"   href="estiloDados.css">

</head>

<body background= "IMGFUNDO.jpg">
<img src="borda.png"><br><br>


<div style='position:absolute; top:110px; left:100px;'>
<img src="nossalogo.png" align="left">
</div>


<font face="Times New Roman">
<form name='form1' method ="post" action ="verificar_login.php">
<BR><BR>

<b>Código</b><input type="text" name="codigo"><BR>

<b>Raça</b><input type="text" name="raça"><BR>

<b>Pelagem</b><input type="text" name="pelagem"><BR>

<b>Cor</b><input type="text" name="cor"><BR>

<b>Porte</b><input type="text" name="porte"><BR>

<b>Sexo</b> 
<br><br>Fêmea<input name="sexo" TYPE="radio" value="F">Macho <input name="sexo" TYPE="radio" value="M"><br><br>



<b>Apelido</b><input type="text" name="apelido"><BR>

<b>Nome</b><input type="text" name="nome"><BR>

<b>Pai</b><input type="text" name="pai"><BR>

<b>Mãe</b><input type="text" name="mãe"><BR>

<b>Observações e Cuidados</b>
<br />
<textarea name="opniao" cols="50" rows="7"></textarea>
<br /><br />


<input type="submit" name="submit" class="botao" value="Cadastrar">
<a href="http://localhost/SITE%20DUDA/usuario.php">Animais Cadastrados</a><br>
<a href="http://localhost/SITE%20DUDA/menu/paginainicial.html">Voltar</a><br>
	


 
</form>
</center>
</body>
</html>