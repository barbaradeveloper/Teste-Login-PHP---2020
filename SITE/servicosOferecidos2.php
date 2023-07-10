<?PHP
include "dbConexao.php";

//RECUPERA OS VALORES DIGITADOS NO FORMULÁRIO AGENDAMENTO DE SERVVIÇOS EM PHP
$responsavel = $_POST['responsavel'];
$animal = $_POST['animal'];
$especiel = $_POST['especiel'];
$raca = $_POST['raca'];
$data = $_POST['data'];
$servico = $_POST['servico'];

$sql = "INSERT INTO agenservicos";
$sql = $sql . "(responsavel, ";
$sql = $sql . "(animal, ";
$sql = $sql . "(especiel, ";
$sql = $sql . "(raca, ";
$sql = $sql . "(data, ";
$sql = $sql . "(servico, ";

$sql = $sql . "VALUES('responsavel', ";
$sql = $sql . "'animal', ";
$sql = $sql . "'especiel', ";
$sql = $sql . "'raca', ";
$sql = $sql . "'data', ";
$sql = $sql . "'servico', ";

mysqli_query($sql, $conexao);
?>

<html>
<head>
<title></title>
<head></head>
<body>
<h1>OS DADOS DESSE PET FOI REGISTRADO COM SUCESSO!</h1>
Responsável:&nbsp;<span class="data8"><?PHP print .$responsavel. "<br />", ?></span>
Animal:&nbsp;<span class="data8"><?PHP print .$animal. "<br />", ?></span>
Esppecie:&nbsp;<span class="data8"><?PHP print .$especiel. "<br />", ?></span>
Raça:&nbsp;<span class="data8"><?PHP print .$raca. "<br />", ?></span>
Data:&nbsp;<span class="data8"><?PHP print .$data. "<br />", ?></span>
Serviço:&nbsp;<span class="data8"><?PHP print .$servico. "<br />", ?></span>
</body>
</html>

