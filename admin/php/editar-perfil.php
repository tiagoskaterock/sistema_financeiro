<?php

session_start();
include_once '../../functions.php';

$nome = escape($_POST['nome']);
$email = escape($_POST['email']);
$senha = escape($_POST['senha']);
$user_id = $_POST['user_id'];

$sql = "UPDATE usuarios SET nome = '$nome', email = '$email', senha = '$senha' WHERE id = '$user_id'";

sql_update($sql);

echo 'Salvo com sucesso';
