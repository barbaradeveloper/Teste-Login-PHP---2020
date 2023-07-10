<?php 
	require_once 'classes/usuarios.php';
	$u = new Usuario;
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Cadastre-se</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
	<div id="corpo-form-cad">
		<h1>Cadastrar</h1>
		<form method="post">
			<input type="text" name="nome" placeholder="Nome Completo" maxlength="30">
			<input type="text" name="telefone" placeholder="Telefone" maxlength="30">
			<input type="email" name="email" placeholder="Usuário" maxlength="40">
			<input type="password" name="senha" placeholder="Senha" maxlength="15">
			<input type="password" name="confSenha" placeholder="Confirmar Senha" maxlength="15">
			<input type="submit" value="CADASTRAR">
		</form>
	</div>
<?php
// verificar se clicou no botão
if(isset($_POST['nome']))
{
	$nome = addslashes($_POST['nome']); // addslashes para tirar comandos maliciosos
	$telefone = addslashes($_POST['telefone']);
	$email = addslashes($_POST['email']);
	$senha = addslashes($_POST['senha']);
	$confirmarSenha = addslashes($_POST['confSenha']);
// verificar se está preenchido
	if(!empty($nome) && !empty($telefone) && !empty($email) && !empty($senha) && !empty($confirmarSenha))
	{
		$u->conectar("projeto_login","localhost","root","");
	  // se não tiver mensagem de erro
		if($u->msgErro=="")
		{
			if ($senha == $confirmarSenha) 
			{
				if($u->cadastrar($nome,$telefone,$email,$senha)){	
				?>		
				<div id="msg-erro">
					Cadastrado com sucesso! Acesse para entrar!
				</div>	
					<!--echo "Cadastrado com sucesso! Acesse para entrar!";	-->
					<?php		
				}
				else
				{	
				?>	
				<div class="msg-erro">
					Email já cadastrado!
				</div>		
					<!--echo "Email já cadastrado!";-->	
					<?php			
				}
			}
			else{	
			?>		
			<div class="msg-erro">
				Senha e Confirmar Senha não correspondem!
			</div>		
				<!--echo "Senha e Confirmar Senha não correspondem!";-->
				<?php				
			}			
		}else{	
		?>		
		<div class="msg-erro">
			<?php echo "Erro: ". $msgErro; ?>
		</div>					
			<!--echo "Erro: ". $msgErro; -->
			<?php				
		}
	}else{		
	?>	
	<div class="msg-erro">
		Preencha todos os campos!
	</div>		
		<!--echo "Preencha todos os campos!";-->		
		<?php
	}
}
?>
</body>
</html>