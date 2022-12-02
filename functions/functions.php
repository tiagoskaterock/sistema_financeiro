<?php

function go_to_admin() {
	echo '<script>window.location="../admin"</script>';
}

function go_to_login() {
	echo '<script>window.location="../login"</script>';
	session_unset();
	session_destroy();
	die();
}

function pr($stuff) {
	echo "<pre>";
	print_r($stuff);
	echo "</pre>";	
}

function dpr($stuff) {
	echo "<pre>";
	print_r($stuff);
	echo "</pre>";
	die();
}