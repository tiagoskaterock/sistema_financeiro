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

function sql($sql) {
  global $conn;
  return mysqli_fetch_assoc(mysqli_query($conn, $sql));
}

function sql_update($sql) {
	global $conn;
  mysqli_query($conn, $sql);
}

function sql_insert($sql) {
	global $conn;
  mysqli_query($conn, $sql);
}