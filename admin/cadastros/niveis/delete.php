<?php

session_start();
include('../../../functions.php');

if (isset($_POST['excluir'])) {
	$id = $_POST['excluir'];
}
else {
	header("Location: " . URL . '/admin');
	die();
}

$sql = sql_delete("DELETE FROM niveis WHERE id = '$id'");

$_SESSION['alert_danger'] = "Nível excluído com sucesso";

header("Location: " . URL . '/admin/cadastros/niveis');