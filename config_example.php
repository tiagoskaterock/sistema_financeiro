<?php

date_default_timezone_set('America/Sao_Paulo');

$database = 'financeiro';

$servername = 'localhost';

$username = 'tiago';

$password = '123';

try {
	$conn = mysqli_connect($servername, $username, $password, $database);
} 
catch (Exception $e) {
	echo 'Não foi possível conectar ao banco de dados. <br><br>' . $e;
}

define('APP_NAME', 'Sistema Financeiro');

define('URL', 'http://localhost/cupcake_software_projects/sistema_financeiro_php_pdo');

define('ADMIN_EMAIL', 'admin@admin.com');

define('ADMIN', 'admin');