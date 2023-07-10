<?php
require_once 'classes/usuarios.php';
$u = new Usuario;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Tela de Login</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
	<div id="corpo-form">
		<h1>Entrar</h1>
		<form method="post">
			<input type="email" name="email" placeholder="Usuário">
			<input type="password" name="senha" placeholder="Senha">
			<input type="submit" value="ACESSAR">
			<a href="cadastrar.php">Ainda não é inscrito?<strong>Cadastre-se</strong></a>
		</form>
	</div>
<?php
	// verificar se clicou no botão
if(isset($_POST['email'])){	
	$email = addslashes($_POST['email']);
	$senha = addslashes($_POST['senha']);	
// verificar se está preenchido
	if(!empty($email) && !empty($senha)){
		// para conectar com o banco
		$u->conectar("projeto_login","localhost","root", "");
		if($u->msgErro == ""){
		// se estiver logado, se retornar true
			if($u->logar($email,$senha)){
				header('Location: AreaPrivada.php');
			}else{
				?>
				<div class="msg-erro">
					Email e/ou Senha estão incorretos!
				</div>
				<?php
			}			
		}else{
			?>
			<div class="msg-erro">
			<?php echo "Erro ". $u->msgErro; ?>			
			</div>
			<?php
		}
	}else{
		?>
		<div class="msg-erro">
			Preencha todos os campos!
		</div>
		<?php
}
}
?>
</body>
</html>