<?php

include_once '../../functions.php';

$sql = sql("SELECT count(id) as total_usuarios FROM usuarios");

echo $sql['total_usuarios'];
