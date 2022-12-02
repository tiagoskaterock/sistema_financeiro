<?php

@session_start();

include_once '../config/stuff.php';

if (!isset($_SESSION['logado'])) {
	go_to_login();	
}

dpr($_SESSION);	