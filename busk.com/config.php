<?php
session_start();

global $pdo;
try {
	$pdo = new PDO("mysql:dbname=classificados;host=localhost", "root", "123");
} catch(PDOException $e) {
	echo "FALHOU: ".$e->getMessage();
	exit;
}
?>