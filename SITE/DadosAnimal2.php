<?PHP
include "dbConexao.php";

//RECUPERA OS VALORES DIGITADOS NO FORMULÁRIO DADOS ANIMAL EM PHP
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



//INSERE O REGISTRO NA TABELA

$sql = "INSERT INTO cadastropets";
$sql = $sql . "(codigo, ";
$sql = $sql . "(raca, ";
$sql = $sql . "(pelagem, ";
$sql = $sql . "(cor, ";
$sql = $sql . "(porte, ";
$sql = $sql . "(sexo, ";
$sql = $sql . "(apelido, ";
$sql = $sql . "(nome, ";
$sql = $sql . "(pai, ";
$sql = $sql . "(mae, ";
$sql = $sql . "(opiniao, ";

$sql = $sql . "VALUES('codigo', ";
$sql = $sql . "'raca', ";
$sql = $sql . "'pelagem', ";
$sql = $sql . "'cor', ";
$sql = $sql . "'porte', ";
$sql = $sql . "'sexo', ";
$sql = $sql . "'apelido', ";
$sql = $sql . "'nome', ";
$sql = $sql . "'pai', ";
$sql = $sql . "'mae', ";
$sql = $sql . "'opiniao')";


mysqli_query($sql, $conexao);
?>

<html>
<head>
<title></title>
<head></head>
<body>
<h1>OS DADOS DESSE PET FOI REGISTRADO COM SUCESSO!</h1>
Código:&nbsp;<span class="data8"><?PHP print .$codigo. "<br />", ?></span>
Raça:&nbsp;<span class="data8"><?PHP print .$raca. "<br />", ?></span>
Pelagem:&nbsp;<span class="data8"><?PHP print .$pelagem. "<br />", ?></span>
Cor:&nbsp;<span class="data8"><?PHP print .$cor. "<br />", ?></span>
Porte:&nbsp;<span class="data8"><?PHP print .$porte. "<br />", ?></span>
Sexo:&nbsp;<span class="data8"><?PHP print .$sexo. "<br />", ?></span>
Apelido:&nbsp;<span class="data8"><?PHP print .$apelido. "<br />", ?></span>
Nome:&nbsp;<span class="data8"><?PHP print .$nome. "<br />", ?></span>
Pai:&nbsp;<span class="data8"><?PHP print .$pai. "<br />", ?></span>
Mãe:&nbsp;<span class="data8"><?PHP print .$mae. "<br />", ?></span>
Opinião:&nbsp;<span class="data8"><?PHP print .$opiniao. "<br />", ?></span>


</body>
</html>


