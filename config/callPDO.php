<?php
//correction
//
require_once(dirname(__FILE__).'/../config/init.php');

try {
    $pdo= new PDO(DATA, USER, PASSWORD,array(
        PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_OBJ
    ));
} catch (Exception $e){
die('erreur:'. $e->getMessage());
}