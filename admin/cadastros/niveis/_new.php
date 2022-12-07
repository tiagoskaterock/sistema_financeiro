<?php

session_start();
include('../../../functions.php');

if (isset($_POST['titulo'])) {
	$titulo = escape($_POST['titulo']);
	$titulo = mysqli_real_escape_string($conn, $_POST['titulo']);
}
else {
	header("Location: " . URL . '/admin');
	die();
}

$sql = sql_insert("INSERT INTO niveis (titulo) VALUES ('$titulo')");

$_SESSION['alert_success'] = "Nível criado com sucesso";

header("Location: " . URL . '/admin/cadastros/niveis');
