<h1>Lista de Veículos</h1>
<?php
	$sql = "SELECT * FROM veiculos";

	$res = $conn->query($sql);

	$qtd = $res->num_rows;

	if($qtd > 0){
		print "<table class='table table-hover table-bordered'>";
			print "<tr>";
			print "<th> </th>";
			print "<th>Marca</th>";
			print "<th>Modelo</th>";
			print "<th>Versão</th>";
			print "<th>Cor</th>";
			print "<th>Placa</th>";
			print "<th>Chassi</th>";
			print "<th>Ações</th>";
			print "</tr>";
		while($row  = $res-> fetch_object()){
			print "<tr>";
			print "<td>".$row->id."</td>";
			print "<td>".$row->marca."</td>";
			print "<td>".$row->modelo."</td>";
			print "<td>".$row->versao."</td>";
			print "<td>".$row->cor."</td>";
			print "<td>".$row->placa."</td>";
			print "<td>".$row->chassi."</td>";
			print "<td>
					<button onclick=\"location.href='?page=editar&id=".$row->id."';\"class='btn btn-success'>Editar</button>

					<button class='btn btn-danger'>Excluir</button>
				  </td>";
			print "</tr>";
		}
		print "</table>";
	}else{
		print "<p class='alert alert-danger'>Nenhum Veículo Cadastrado!</p>";
	}

?>