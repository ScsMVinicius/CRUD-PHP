<?php
	switch ($_REQUEST["acao"]) {
		case 'cadastrar':
			$marca = $_POST["marca"];
			$modelo = $_POST["modelo"];
			$versao = $_POST["versao"];
			$cor = $_POST["cor"];
			$placa = $_POST["placa"];
			$chassi = $_POST["chassi"];

			$sql = "INSERT INTO veiculos (marca, modelo, versao, cor, placa, chassi) VALUES ('{$marca}','{$modelo}','{$versao}', '{$cor}', '{$placa}', '{$chassi}' )";

			$res = $conn->query($sql);
			break;
		
		case 'editar':
			// code...
			break;
			
		case 'excluir':
			// code...
			break;
			
	}