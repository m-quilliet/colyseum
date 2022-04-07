<?php 
$dsn = 'mysql:dbname=colyseum;host=localhost';
$user = 'root';
$pass = 'root';

$pdo = new PDO($dsn, $user, $pass);

$query= $pdo->query('SELECT * FROM clients');

require_once(dirname(__FILE__).'/views/templates/header.php');
require_once(dirname(__FILE__).'/views/templates/footer.php');