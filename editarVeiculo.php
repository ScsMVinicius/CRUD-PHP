<h1>Editar Veículo</h1>
<?php
	$sql = "SELECT * FROM veiculos WHERE id=".$_REQUEST["id"];
	$res = $conn->query($sql);
	$row = $res->fetch_object();
?>
<form action="?page=salvar" method="POST">
	<input type="hidden" name="acao" value="editar">
	<input type="hidden" name="id" value="<?php print $row->id; ?>">
	<div class="mb-3">
		<label>Marca</label>
		<input type="text" name="marca"  value="<?php print $row->marca; ?>" class="form-control">
	</div>
	<div class="mb-3">
		<label>Modelo</label>
		<input type="text" name="modelo" value="<?php print $row->modelo; ?>"class="form-control">
	</div>
	<div class="mb-3">
		<label>Versão</label>
		<input type="text" name="versao" value="<?php print $row->versao; ?>" class="form-control">
	</div>
	<div class="mb-3">
		<label>Cor</label>
		<input type="text" name="cor" value="<?php print $row->cor; ?>" class="form-control">
	</div>
	<div class="mb-3">
		<label>Placa</label>
		<input type="text" name="placa" value="<?php print $row->placa; ?>"class="form-control">
	</div>
	<div class="mb-3">
		<label>Chassi</label>
		<input type="text" name="chassi" value="<?php print $row->chassi; ?>" class="form-control">
	</div>
	<div class="mb-3">
		<button type="submit "class="btn btn-primary">Editar</button>
	</div>
</form>