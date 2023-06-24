<?php
function select_registros() {
	global $conn;
	$sth = $conn->prepare("SELECT * FROM tb_usuario");
	$sth->execute();
	return $sth->fetchAll();
}

require_once("../includes/banco.php");

// chamada da função
$registros = select_registros();

echo "<TABLE border=\"1\">\n";
foreach($registros as $registro) {
	echo "<TR>\n";
	echo "<td>{$registro['id_usuario']}</td>\n";
	echo "<td>{$registro['nome_usuario']}</td>\n";
	echo "<td>{$registro['email_usuario']}</td>\n";
	echo "<td>{$registro['senha_usuario']}</td>\n";
	echo "<td>{$registro['telefone']}</td>\n";
	echo "</TR>\n";
}		
echo "</TABLE>\n";

?>