<?php

include_once '../../functions.php';

$sql = sql("SELECT count(id) as total_niveis FROM niveis");

echo $sql['total_niveis'];
