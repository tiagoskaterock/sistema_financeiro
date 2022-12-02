<?php

data_default_timezone_set('America/Sao_Paulo');

$database = 'financeiro';

$servername = 'localhost';

$username = 'tiago';

$password = '123';

try {
	$pdo = new PDO("mysql:dbname=$database;host=$servername", "$username", "$password");	
} 
catch (Exception $e) {
	echo 'Não foi possível conectar ao banco de dados. <br><br>' . $e;
}
