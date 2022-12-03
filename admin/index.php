<?php

@session_start();

include '../functions.php';
include '../helpers.php';

if (!isset($_SESSION['logado'])) {
	echo '<script>window.location="' . URL .  '/login/"</script>';
}

dpr($_SESSION);	