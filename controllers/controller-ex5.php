<?php
require_once (dirname(__FILE__).'/../config/callPDO.php');

    //requete sql 
    $sql="SELECT `lastName`, `firstName` FROM `Clients` WHERE `lastName` LIKE 'm%' ORDER BY`lastName` ASC ;";
    // dde à pdo d'executer la requete
    $sth=$pdo->query($sql);
    // recuperer données clients dans un tableau php; 
    $customers=$sth->fetchAll();
//


include (dirname(__FILE__).'/../views/templates/header.php');
include (dirname(__FILE__).'/../views/ex5.php');
include (dirname(__FILE__).'/../views/templates/footer.php');