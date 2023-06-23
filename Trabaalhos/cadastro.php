<?php

// função de insert - ajustar para tabela destino
function db_insert_teste($codigo, $nome, $sexo, $ativo, $cpf, $idade) {
	global $conn;
	$sql = "INSERT INTO teste (id, nome) VALUES ($codigo, '$nome')";
    //$conn->query($sql);
	//return $conn->insert_id;
	echo $sql;
	return null;
}

//require_once("./banco.php");

// verificação da chegada de dados
var_dump($_REQUEST);

// atribuição dos campos para variáveis
$cod = $_REQUEST['codigo'];
$nome = $_REQUEST['nome'];
$nome = $_REQUEST['sexo'];
$nome = $_REQUEST['ativo'];
$nome = $_REQUEST['cpf'];
$nome = $_REQUEST['idade'];

// chamada da função
db_insert_teste($codigo, $nome, $sexo, $ativo, $cpf, $idade);

?>