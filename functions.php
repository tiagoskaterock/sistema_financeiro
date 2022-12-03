<?php

include_once 'config.php';

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

function escape($string) {
	global $conn;
	return mysqli_real_escape_string($conn, $string);
}

function logout() {
	return URL . '/logout';
}