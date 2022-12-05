<?php

session_start();
include_once '../../functions.php';

$user_id = $_SESSION['user_id'];

$sql = sql("SELECT email FROM usuarios WHERE id = '$user_id'");

$email = $sql['email'];

echo $email;
