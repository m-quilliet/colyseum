<?php
require_once (dirname(__FILE__).'/../config/callPDO.php');

    //requete sql 
    $sql='SELECT * FROM `clients` LIMIT 20';
    // dde à pdo d'executer la requete
    $sth=$pdo->query($sql);
    // recuperer données clients dans un tableau php; 
    $customers=$sth->fetchAll();
//


include (dirname(__FILE__).'/../views/templates/header.php');
include (dirname(__FILE__).'/../views/ex3.php');
include (dirname(__FILE__).'/../views/templates/footer.php');