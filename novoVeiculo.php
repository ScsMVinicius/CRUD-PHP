<h1>Novo Veículo</h1>
<form action="?page=salvar" method="POST">
	<input type="hidden" name="acao" value="cadastrar">
	<div class="mb-3">
		<label>Marca</label>
		<input type="text" name="marca" class="form-control">
	</div>
	<div class="mb-3">
		<label>Modelo</label>
		<input type="text" name="modelo" class="form-control">
	</div>
	<div class="mb-3">
		<label>Versão</label>
		<input type="text" name="versao" class="form-control">
	</div>
	<div class="mb-3">
		<label>Cor</label>
		<input type="text" name="cor" class="form-control">
	</div>
	<div class="mb-3">
		<label>Placa</label>
		<input type="text" name="placa" class="form-control">
	</div>
	<div class="mb-3">
		<label>Chassi</label>
		<input type="text" name="chassi" class="form-control">
	</div>
	<div class="mb-3">
		<button type="submit "class="btn btn-primary">Cadastrar</button>
	</div>
</form>