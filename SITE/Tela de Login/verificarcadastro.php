<?php
//verificar_login.php
require "conexao.php";

$codigo = $_POST['nome'];
$raca = $_POST['telefone'];
$pelagem = $_POST['email'];
$cor = $_POST['senha'];



$inserir = "insert into usuarios (nome,telefone,email,senha) values ('".$nome."','".$telefone."','".$email."',
'".$senha."')";
	$query = mysqli_query($conexao,$inserir);
	
	if( $query)
		
	{
		echo '<script type="text/javascript">alert("CADASTRO REALIZADO COM SUCESSO.");</script>';
		echo("<script>location.href = 'cadastrar.php'</script>");
	}
else { 
echo '<script type="text/javascript">alert("NÃO FOI POSSÍVEL REALIZAR O CADASTRO TENTE NOVAMENTE.");</script>';
echo("<script>location.href = 'cadastrar.php'</script>");
}
		?>