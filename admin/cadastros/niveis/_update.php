<?php

session_start();
include('../../../functions.php');

if (isset($_POST['titulo'])) {
	$titulo = escape($_POST['titulo']);
	$id = $_POST['id'];
}
else {
	header("Location: " . URL . '/admin');
	die();
}

$sql = sql_update("UPDATE niveis SET titulo = '$titulo' WHERE id = '$id'");

if($sql) {
	echo 'foi';
}
else{
	echo 'não foi!!!';
}

$_SESSION['alert_success'] = "Nível atualizado com sucesso";

header("Location: " . URL . '/admin/cadastros/niveis/nivel/' . $id);
