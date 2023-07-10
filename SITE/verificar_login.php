<?php
//verificar_login.php
require "dbConexao.php";

$codigo = $_POST['codigo'];
$raca = $_POST['raca'];
$pelagem = $_POST['pelagem'];
$cor = $_POST['cor'];
$porte = $_POST['porte'];
$sexo = $_POST['sexo'];
$apelido = $_POST['apelido'];
$nome = $_POST['nome'];
$pai = $_POST['pai'];
$mae = $_POST['mae'];
$opiniao = $_POST['opiniao'];

$inserir = "insert into cadastropets (codigo,raca,pelagem,cor,porte,sexo,apelido,nome,pai,mae,opiniao) values ('".$codigo."','".$raca."','".$pelagem."',
'".$cor."','".$porte."','".$sexo."','".$apelido."','".$nome."','".$pai."','".$mae."','".$opiniao."')";
	$query = mysqli_query($conexao,$inserir);
	
	if( $query)
		
	{
		echo '<script type="text/javascript">alert("CADASTRO REALIZADO COM SUCESSO.");</script>';
		echo("<script>location.href = 'DadosAnimal.php'</script>");
	}
else { 
echo '<script type="text/javascript">alert("NÃO FOI POSSÍVEL REALIZAR O CADASTRO TENTE NOVAMENTE.");</script>';
echo("<script>location.href = 'DadosAnimal.php'</script>");
}
?>