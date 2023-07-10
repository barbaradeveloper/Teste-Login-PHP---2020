<html>
<!--usuario.php-->

<head>
<meta charset="utf-8">
<title>ANIMAIS CADASTRADOS</title>
</head>
<body background= "IMGFUNDO.jpg">
<img src="borda.png"><br><br>


<div style='position:absolute; top:110px; left:100px;'>
<img src="nossalogo.png" align="left">
</div>

<center><h1>DADOS DOS ANIMAIS</h1>
<hr>

<table border="1">
<tr>
<td><a href="usuario.php">ANIMAIS CADASTRADOS</td>
<td><a href="DadosAnimal.php">CADASTRAR ANIMAL</a></td>

</tr>
</table>
<br>
</center>
<?php
    require "dbConexao.php";
	
	$sql = 'select codigo,raca,pelagem,cor,porte,sexo,apelido,nome,pai,mae,opiniao from cadastropets order by codigo,raca,pelagem,cor,porte,sexo,apelido,nome,pai,mae,opiniao';
	$exec= mysqli_query($conexao, $sql);
	
?>

<center>
<table border="1" bgcolor="#FFDAB9" >
<th>Código</th>
<th>Raça</th>
<th>Pelagem</th>
<th>Cor</th>
<th>Porte</th>
<th>Sexo</th>
<th>Apelido</th>
<th>Nome</th>
<th>Pai</th>
<th>Mãe</th>
<th>Observações e Cuidados</th>
<tr>
<?php
while($resultado = mysqli_fetch_assoc($exec)) {
?>
<td><?php echo $resultado['codigo'].'<br>';?></td>
<td><?php echo $resultado['raca'].'<br>';?></td>
<td><?php echo $resultado['pelagem'].'<br>';?></td>
<td><?php echo $resultado['cor'].'<br>';?></td>
<td><?php echo $resultado['porte'].'<br>';?></td>
<td><?php echo $resultado['sexo'].'<br>';?></td>
<td><?php echo $resultado['apelido'].'<br>';?></td>
<td><?php echo $resultado['nome'].'<br>';?></td>
<td><?php echo $resultado['pai'].'<br>';?></td>
<td><?php echo $resultado['mae'].'<br>';?></td>
<td><?php echo $resultado['opiniao'].'<br>';?></td>




</tr>
<?php
}
?>

</table>
</center>
</body>
</html>