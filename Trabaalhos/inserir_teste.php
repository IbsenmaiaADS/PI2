<?php

// função de insert - ajustar para tabela destino
function db_insert_teste($codigo, $nome) {
	global $conn;
	$sql = "INSERT INTO teste (id, nome) VALUES ($codigo, '$nome')";
    $conn->query($sql);
	//return $conn->insert_id;
	return null;
}

require_once("./banco.php");

// verificação da chegada de dados
var_dump($_REQUEST);

// atribuição dos campos para variáveis
$cod = $_REQUEST['codigo'];
$nome = $_REQUEST['nome'];

// chamada da função
db_insert_teste($cod, $nome);

?>