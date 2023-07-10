<?php
class Usuario{
	private $pdo;
	public $msgErro = ""; // se está vázio ta ok 

	public function conectar($nome, $host, $usuario, $senha)
	{
		global $pdo; // para entender que é a mesma variável
		global $msgErro;
		try
		{
			$pdo = new PDO("mysql:dbname=".$nome.";host=".$host, $usuario, $senha);
		} catch (PDOException $e) {
			$msgErro = $e->getMessage();
		}		
	}

	public function cadastrar($nome, $telefone, $email, $senha)
	{
		global $pdo;
		global $msgErro;
		// verificar se já existe o email cadastrado
		$sql = $pdo->prepare("SELECT id_usuario FROM usuarios WHERE email = :e");
		$sql->bindValue(":e",$email);
		$sql->execute();
		if ($sql->rowCount() > 0) 
		{
			return false; // já está cadastrado
		}
		else
		{
			// caso não, cadastrar
			$sql = $pdo->prepare("INSERT INTO usuarios(nome, telefone, email, senha) VALUES (:n, :t, :e, :s)");
			$sql->bindValue(":n",$nome);
			$sql->bindValue(":t",$telefone);
			$sql->bindValue(":e",$email);
			$sql->bindValue(":s",md5($senha));
			$sql->execute(); // para executar o comando
			return true;
		}		
	}

	public function logar($email, $senha)
	{
		global $pdo;
		global $msgErro;
		// verificar se o email e senha estão cadastrados, se sim
		$sql = $pdo->prepare("SELECT id_usuario FROM usuarios WHERE email = :e AND senha = :s");
		$sql->bindValue(":e", $email); // para substituir o valor
		$sql->bindValue(":s", md5($senha));
		$sql->execute(); // para executar
		if($sql->rowCount() > 0) 
		{
			// entrar no sistema (sessão)
			$dado = $sql->fetch(); // para transformar o que veio do banco de dados em array 
			session_start(); // para iniciar sessão
			$_SESSION['id_usuario'] = $dado['id_usuario']; // o id do usuário será armazenado em uma sessão
			return true; // logado com sucesso
		}
		else
		{
			return false; // não foi possível logar
		}		
	}
}
?>