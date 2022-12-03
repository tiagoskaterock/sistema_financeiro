<?php
session_start();

include_once 'config.php';
include_once 'functions.php';

session_destroy();
session_unset();

echo '<script>window.location="' . URL . '/login"</script>';