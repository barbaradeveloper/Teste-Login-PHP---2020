<?PHP
include "conexao.php";

//RECUPERA OS VALORES DIGITADOS NO FORMULÁRIO DADOS ANIMAL EM PHP
$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$senha = $_POST['senha'];



//INSERE O REGISTRO NA TABELA

$sql = "INSERT INTO usuarios";
$sql = $sql . "(nome, ";
$sql = $sql . "(telefone, ";
$sql = $sql . "(email, ";
$sql = $sql . "(senha, ";



$sql = $sql . "VALUES('nome', ";
$sql = $sql . "'telefone', ";
$sql = $sql . "'email', ";
$sql = $sql . "'senha')";
mysqli_query($sql, $conexao);
?>

