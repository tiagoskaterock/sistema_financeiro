<?php

session_start();
include_once '../../functions.php';

$nome = escape($_POST['nome']);
$email = escape($_POST['email']);
$senha = escape($_POST['senha']);
$user_id = $_POST['user_id'];

// id de usuário atual 
$user_atual = sql("SELECT id FROM usuarios WHERE id = '$user_id'");
$user_atual_id = $user_atual['id'];

// confere se existem mais usuários diferentes com o mesmo email
$sql = sql("SELECT count(email) FROM usuarios WHERE email = '$email' AND id <> '$user_atual_id'");
$registros_total = $sql["count(email)"];

if ($registros_total > 0) {
	echo 'Email já cadastrado por outro usuário';
	die();
}

// update
$sql = "UPDATE usuarios SET nome = '$nome', email = '$email', senha = '$senha' WHERE id = '$user_id'";

sql_update($sql);

echo 'Salvo com sucesso';
