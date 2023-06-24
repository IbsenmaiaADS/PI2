<?php
function select_registros() {
	global $conn;
	$sth = $conn->prepare("SELECT * FROM tb_musica");
	$sth->execute();
	return $sth->fetchAll();
}

require_once("../includes/banco.php");

// chamada da função
$registros = select_registros();
echo "<TABLE border=\"1\">\n";
foreach($registros as $registro) {
	echo "<TR>\n";
	echo "<td>{$registro['id_musica']}</td>\n";
	echo "<td>{$registro['nome_musica']}</td>\n";	
	echo "<td>{$registro['cifra']}</td>\n";
	echo "<td>{$registro['id_album']}</td>\n";
	echo "<td>{$registro['hit']}</td>\n";
	echo "</TR>\n";
}		
echo "</TABLE>\n";
?>