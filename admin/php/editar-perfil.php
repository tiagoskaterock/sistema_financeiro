<?php

session_start();
include_once '../../functions.php';

$nome = escape($_POST['nome']);
$email = escape($_POST['email']);
$senha = escape($_POST['senha']);
$user_id = $_POST['user_id'];

// confere se existem mais usuários com mesmo email
$sql = sql("SELECT count(email) FROM usuarios WHERE email = '$email'");
$registros_total = $sql["count(email)"];

if ($registros_total > 0) {
	echo 'Email já cadastrado por outro usuário';
	die();
}

// update
$sql = "UPDATE usuarios SET nome = '$nome', email = '$email', senha = '$senha' WHERE id = '$user_id'";

sql_update($sql);

echo 'Salvo com sucesso';
