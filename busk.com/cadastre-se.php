<?php require 'pages/header.php'; ?>
<div class="container">
<div class="container center">
	<h1>Cadastre-se</h1>
	</div>
	<?php
	require 'classes/usuarios.class.php';
	$u = new Usuarios();
	if(isset($_POST['nome']) && !empty($_POST['nome'])) {
		$nome = addslashes($_POST['nome']);
		$email = addslashes($_POST['email']);
		$senha = $_POST['senha'];
		$telefone = addslashes($_POST['telefone']);

		if(!empty($nome) && !empty($email) && !empty($senha)) {
			if($u->cadastrar($nome, $email, $senha, $telefone)) {
				?>
				<div class="alert alert-success">
					<strong>Parabéns!</strong> Cadastrado com sucesso. <a href="login.php" class="alert-link">Faça o login agora</a>
				</div>
				<?php
			} else {
				?>
				<div class="alert alert-warning">
					Este usuário já existe! <a href="login.php" class="alert-link">Faça o login agora</a>
				</div>
				<?php
			}
		} else {
			?>
			<div class="alert alert-warning">
				Preencha todos os campos!
			</div>
			<?php
		}

	}
	
	?>
	<form method="POST">
		<div class="row">
			<label for="nome" class="col-sm-2"><h3>Nome:</h3></label>
			<input type="text" name="nome" id="nome" class="row " />
		</div>
		<div class="row">
			<label for="email" class="col-sm-2"><h3>E-mail:</h3></label>
			<input type="email" name="email" id="email" class="row" />
		</div>
		<div class="row">
			<label for="senha" class="col-sm-2"><h3>Senha:</h3></label>
			<input type="password" name="senha" id="senha" class="row" />
		</div>
		<div class="row">
			<label for="telefone"class="col-sm-2"><h3>Telefone:</h3></label>
			<input type="text" name="telefone" id="telefone" class="row" />
		</div>
		<input type="submit" value="Cadastrar" class="btn btn-default" />
	</form>

</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<?php require 'pages/footer.php'; ?>