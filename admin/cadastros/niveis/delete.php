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

// não excluir se tiver usuários
$sql = sql("SELECT COUNT(id) as total FROM usuarios WHERE nivel_id = $id");
$total_usuarios = $sql['total'];

if ($total_usuarios > 0) {
	$_SESSION['alert_warning'] = "Nível com usuários cadastrados, impossível excluir";
	header("Location: " . URL . '/admin/cadastros/niveis');
	die();
}

$sql = sql_delete("DELETE FROM niveis WHERE id = '$id'");

$_SESSION['alert_danger'] = "Nível excluído com sucesso";

header("Location: " . URL . '/admin/cadastros/niveis');