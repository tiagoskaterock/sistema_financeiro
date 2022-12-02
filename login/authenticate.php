<?php

include_once '../config/stuff.php';

$email = $_POST['email'];
$senha = $_POST['senha'];

// apenas admin
$query = $pdo->prepare("
		SELECT * FROM usuarios 
		WHERE email = :email 
		AND senha = :senha"
);

$query->bindValue(":email", $email);
$query->bindValue(":senha", $senha);

$query->execute();

$res = $query->fetchAll(PDO::FETCH_ASSOC);
$total_reg = @count($res);

$total_reg > 0 ? $logar = true : $logar = false;

if (!$logar) {
	echo '<script>window.alert("Dados Incorretos")</script>';
	echo '<script>window.location="../login"</script>';
	die();
}

$nivel = $res[0]['nivel_id'];

// admin
if ($nivel == 1) {
	echo '<script>window.alert("Logando como administrador")</script>';
	echo '<script>window.location="../admin"</script>';
	
}

// usuário
else if ($nivel == 2) {
	echo '<script>window.alert("Logando como usuário")</script>';
	echo '<script>window.location="../admin"</script>';	
}

