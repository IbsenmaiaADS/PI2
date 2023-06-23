<?php
function select_bandas() {
	global $conn;
	$sth = $conn->prepare("SELECT * FROM tb_bandas");
	$sth->execute();
	return $sth->fetchAll();
}
?>