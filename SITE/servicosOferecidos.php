<?PHP
include "dbConexao.php";
?>
<html lang="pt-br">
<head>
	<meta charset="utf-8"> 
	<title>Agendamentos de Serviços</title>
	<link rel="stylesheet" type="text/css" href="estiloServico.css">	
</head>
<body background= "G:\SITE DUDAIMGFUNDO.jpg">
<img src="borda.png">

<form method="POST" action="verificarServicos.PHP"><!--formulário para o histórico-->
	
<div id="his" style='position:absolute; top:110px; left:100px;'>
<img src="nossalogo.png" align="left">
</div>

<font face="Times New Roman" size="10" color="black">

<table class="primeiratabela"  cellspacing="5">
<td width="800">
<B>Responsável</B><input type="text" name="nome"  maxlenght="30"><br>
<B>Animal</B><input type="text" name="animal"  maxlenght="30"><br><!--maxlenght limita a quantidade de caracteres que o usuário pode digitar-->
</td>
</table>

<table class="segundatabela"  cellspacing="5">
<td>
<B>Espécie</B><input type="text" name="especie"  maxlenght="30"><br>
<B>Raça<B><input type="text" name="raça"  maxlenght="30"><br>
<B>Data</B><input type="text" name="data"  maxlenght="30"><br>
<B>Serviço<B><input type="Serviço" name="serviço"  maxlenght="30"><br>
</td>
</table>

<table class="terceiratabela" cellspacing="5">
<td>
<input type="submit" name="submit" class="botao" value="Agendar">
<center><a href="http://localhost/SITE%20DUDA/menu/paginainicial.html">Voltar</a></center><br>
	
</td>
</table>


</form>
</body>
</html>
</html>