<?php 

    mysql_set_charset('utf8');
	
	require "Db.class.php";
	$db = new Db();

	$sqlBusca = $_POST['sql'];// Pega o cиоdigo sql enviado pelo aplicativo
	$resultado = $db->query($sqlBusca);
	
	// Transforma o resultado da consulta em um array associativo
	while ($array = mysqli_fetch_assoc($resultado)) {
		$dados[] = $array;
	}
	
	echo json_encode($dados);// Retorna o resultado da consulta no formato JSON

?>