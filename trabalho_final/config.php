<?php
require 'environment.php';

global $config;
global $db;

$config = array();
if(ENVIRONMENT == 'development') {
	define("BASE_URL", "http://localhost/nova_loja/");
	$config['dbname'] = 'postos';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'postgres';
	$config['dbpass'] = 'root';
} else {
	define("BASE_URL", "http://localhost/nova_loja/");
	$config['dbname'] = 'postos';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'postgres';
	$config['dbpass'] = 'root';
}

$config['default_lang'] = 'pt-br';

$db = new PDO("pgsql:dbname=".$config['dbname'].";host=".$config['host'], $config['dbuser'], $config['dbpass']);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>
