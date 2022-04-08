<?php
require_once (dirname(__FILE__).'/../config/callPDO.php');

    //requete sql 
    $sql = "SELECT * FROM `clients`, `cards` WHERE `clients`.`cardNumber` = `cards`.`cardNumber` 
    AND `cards`.`cardTypesId` LIKE '%1';";
    // dde à pdo d'executer la requete
    $sth=$pdo->query($sql);
    // recuperer données clients dans un tableau php; 
    $customers=$sth->fetchAll();
//


include (dirname(__FILE__).'/../views/templates/header.php');
include (dirname(__FILE__).'/../views/ex4.php');
include (dirname(__FILE__).'/../views/templates/footer.php');