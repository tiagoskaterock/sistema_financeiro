<?php

@session_start();

include_once '../config/stuff.php';

$email = $_POST['email'];
$senha = $_POST['senha'];

// apenas cadastrados
$query = $pdo->prepare("
	SELECT 
		usuarios.id as usuario_id, 
		usuarios.senha as usuario_senha, 
		usuarios.nome as usuario_nome, 
		usuarios.email as usuario_email, 
		niveis.id as nivel_id, 
		niveis.titulo as nivel_nome 
	FROM 
		usuarios 
	INNER JOIN 
		niveis 
	ON 
		usuarios.nivel_id = niveis.id
	WHERE 
		usuarios.email = '$email'
	AND 
		usuarios.senha = '$senha'
	;
");

$query->bindValue(":email", $email);
$query->bindValue(":senha", $senha);

$query->execute();

$res = $query->fetchAll(PDO::FETCH_ASSOC);
$total_reg = count($res);

$total_reg > 0 ? $logar = true : $logar = false;

if (!$logar) {
	echo '<script>window.alert("Dados Incorretos")</script>';
	go_to_login();
}

$_SESSION['usuario_id'] = $res[0]['usuario_id'];
$_SESSION['usuario_nome'] = $res[0]['usuario_nome'];
$_SESSION['usuario_email'] = $res[0]['usuario_email'];
$_SESSION['nivel_id'] = $res[0]['nivel_id'];
$_SESSION['logado'] = true;

// admin
if ($_SESSION['nivel_id'] == 1) {
	echo '<script>window.alert("Logando como administrador")</script>';
	go_to_admin();	
}

// usuário
else if ($_SESSION['nivel_id'] == 2) {
	echo '<script>window.alert("Logando como usuário")</script>';
	go_to_admin();		
}
