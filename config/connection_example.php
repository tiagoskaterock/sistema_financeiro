<?php

date_default_timezone_set('America/Sao_Paulo');

$database = 'your_database_name';

$servername = 'localhost';

$username = 'database_username';

$password = 'database_user_password';

try {
	$pdo = new PDO("mysql:dbname=$database;host=$servername", "$username", "$password");	
} 
catch (Exception $e) {
	echo 'Não foi possível conectar ao banco de dados. <br><br>' . $e;
}
