<?php

include_once 'config.php';

function favicon() {
	echo '<link rel="shortcut icon" href="' . URL . '/img/logo/logo.ico" type="image/x-icon">';
}

function btn_novo($link) {
	echo '<a href="' . $link . '" title="Adicionar" class="btn btn-sm btn-outline-primary"><i class="fas fa-plus"></i>Novo</a>';
}

function btn_editar($link) { ?>
	<a class="btn btn-sm btn-outline-primary" href="<?= $link ?>" title="Editar">
		<i class="fas fa-edit"></i>
	</a> <?php
}

function btn_salvar() { ?>
	<button type="submit" class="btn-sm btn btn-success" title="Salvar">Salvar</button> <?php
}

function btn_excluir($link) { ?>
	<form method="post" action="<?= $link ?>" class="d-inline">
		<button type="submit" class="btn btn-sm btn-outline-danger" title="Excluir">
			<i class="fas fa-trash"></i>
		</button>
	</form> <?php
}

function logo() {
	echo URL . '/img/logo/logo.png';
}

function avatar() {
	echo URL . '/admin/img/avatar.png';
}

function css($path) {
	echo '<link rel="stylesheet" href="' . $path . '">';
}

function js($path) {
	echo '<script src="' . $path . '"></script>';
}

function bootstrap() {
	echo 
	'
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	';
}

function viewport() {
	echo '<meta name="viewport" content="width=device-width, initial-scale=1">';
}

function utf8() {
	echo '<meta charset="utf-8">';
}