<?php

session_start();
include_once '../../functions.php';

$user_id = $_SESSION['user_id'];

$sql = sql("SELECT nome FROM usuarios WHERE id = '$user_id'");

$nome = $sql['nome'];

echo $nome;
