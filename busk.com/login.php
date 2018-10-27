<?php require 'pages/header.php'; ?>
<?php ?>
<div class="container">
<div class="container">
	<h1>Login</h1>
	</div>
	<?php
	require 'classes/usuarios.class.php';
	$u = new Usuarios();
	if(isset($_POST['email']) && !empty($_POST['email'])) {
		$email = addslashes($_POST['email']);
		$senha = $_POST['senha'];

		if($u->login($email, $senha)) {
			?>
			<script type="text/javascript">window.location.href="./";</script>
			<?php
		} else {
			?>
			<div class="alert alert-danger">
				Usuário e/ou Senha errados!
			</div>
			<?php
		}
	}
	?>

		<form  method="POST" >
			<div class="form-group" >
			
				<label for="email" class="col-sm-2" ><h3>E-mail:</h3></label>
				<input  type="email" name="email" id="email" class="row" class="validate black"  />
			</div>
				<div class="form-group">
					<label for="icon_telephone" class="col-sm-2"><h3>Senha:</h3></label>
					<input type="password" name="senha" id="icon_telephone" class="row" class="validate" />
				</div>
			<br>
			<div class="container ">
				<input type="submit" value="Fazer Login" class="waves-effect waves-light btn-small blue" />
		</div>
     
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
<br>
<br>
<br>
<br>
<?php require 'pages/footer.php'; ?>