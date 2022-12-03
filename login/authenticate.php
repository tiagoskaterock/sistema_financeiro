<?php

@session_start();

include_once '../functions.php';

$email = escape($_POST['email']);
$senha = escape($_POST['senha']);

$sql = "
	SELECT * FROM usuarios
	INNER JOIN niveis
	ON usuarios.nivel_id = niveis.id
	WHERE usuarios.senha = '$senha' AND usuarios.email = '$email'
";

$result = mysqli_query($conn, $sql);

$total = mysqli_num_rows($result);

// senha ou email errados
if ($total < 1) {  
	echo '<script>window.alert("Dados Incorretos")</script>';
	echo '<script>window.location="../login"</script>';
	session_unset();
	session_destroy();
	die();
}

$row = mysqli_fetch_assoc($result);

$_SESSION['username'] = $row['nome'];
$_SESSION['email'] = $row['email'];
$_SESSION['nivel_id'] = $row['nivel_id'];
$_SESSION['user_id'] = $row['id'];
$_SESSION['nivel_titulo'] = $row['titulo'];
$_SESSION['logado'] = true;

echo '<script>window.location="' . URL .  '/admin/"</script>';