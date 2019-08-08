<?php
require_once('./controllers/Autoload.php');
$autoload = new Autoload();

$route = isset($_GET['r']) ? $_GET['r'] : 'users';

require_once('./views/' . $route . '.php');