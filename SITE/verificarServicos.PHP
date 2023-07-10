<?php
//verificar_login.php
require "dbConexao.php";

$responsavel = $_POST['responsavel'];
$animal = $_POST['animal'];
$especiel = $_POST['especiel'];
$raca = $_POST['raca'];
$data = $_POST['data'];
$servico = $_POST['servico'];


$inserir = "insert into agenservicos (responsavel,animal,especiel,raca,data,servico) values ('".$responsavel."','".$animal."','".$especiel."','".$raca."','".$data."','".$servico."')";
	$query = mysqli_query($conexao,$inserir);
	
	if( $query)
		
	{
		echo '<script type="text/javascript">alert("CADASTRO REALIZADO COM SUCESSO.");</script>';
		echo("<script>location.href = 'servicosOferecidos.php'</script>");
	}
else { 
echo '<script type="text/javascript">alert("NÃO FOI POSSÍVEL REALIZAR O CADASTRO TENTE NOVAMENTE.");</script>';
echo("<script>location.href = 'servicosOferecidos.php'</script>");
}

?>