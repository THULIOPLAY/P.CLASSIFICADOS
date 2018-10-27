<?php require 'pages/header.php'; ?>
<?php
if(empty($_SESSION['cLogin'])) {
	?>
	<script type="text/javascript">window.location.href="login.php";</script>
	<?php
	exit;
}

require 'classes/anuncios.class.php';
$a = new Anuncios();
if(isset($_POST['titulo']) && !empty($_POST['titulo'])) {
	$titulo = addslashes($_POST['titulo']);
	$categoria = addslashes($_POST['categoria']);
	$valor = addslashes($_POST['valor']);
	$descricao = addslashes($_POST['descricao']);
	$estado = addslashes($_POST['estado']);

	$a->addAnuncio($titulo, $categoria, $valor, $descricao, $estado);

	?>
	<div class="alert alert-success">
		Produto adicionado com sucesso!
	</div>
	<?php
}
?>
<div class="container">
	<h1>Meus Anúncios - Adicionar Anúncio</h1>

	<form method="POST" enctype="multipart/form-data">

		<div class="row">
			<label for="categoria"><h3>Categoria:</h3></label>
			<select name="categoria" id="categoria" class="form-control">
				<?php
				require 'classes/categorias.class.php';
				$c = new Categorias();
				$cats = $c->getLista();
				foreach($cats as $cat):
				?>
				<option value="<?php echo $cat['id']; ?>"><?php echo utf8_encode($cat['nome']); ?></option>
				<?php
				endforeach;
				?>
			</select>
		</div>
		<div class="row">
			<label for="titulo"><h3>Titulo:</h3></label>
			<input type="text" name="titulo" id="titulo" class="row" />
		</div>
		<div class="row">
			<label for="valor"><h3>Valor:</h3></label>
			<input type="text" name="valor" id="valor" class="row" />
		</div>
		<div class="row">
			<label for="descricao"><h3>Descrição:</h3></label>
			<textarea class="form-control" name="descricao"></textarea>
		</div>
		<div class="row">
			<label for="estado"><h3>Estado de Conservação:</h3></label>
			<select name="estado" id="estado" class="form-control">
				<option value="0">Ruim</option>
				<option value="1">Bom</option>
				<option value="2">Ótimo</option>
			</select>
		</div>
		<input type="submit" value="Adicionar" class="btn btn-default" />
	</form>

</div>
<?php require 'pages/footer.php'; ?>