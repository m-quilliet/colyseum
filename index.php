<?php 
$dsn = 'mysql:dbname=colyseum;host=127.0.0.1';
$user = 'root';

$pdo = new PDO($dsn, $user);

require_once(dirname(__FILE__).'/views/templates/header.php');
require_once(dirname(__FILE__).'/views/templates/footer.php');