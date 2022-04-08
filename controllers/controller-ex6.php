<?php
require_once (dirname(__FILE__).'/../config/callPDO.php');

    //requete sql 
    $sql="SELECT `title`,`performer`,`date`, `startTime`FROM `Shows`;";
    // dde à pdo d'executer la requete
    $sth=$pdo->query($sql);
    // recuperer données clients dans un tableau php; 
    $performers=$sth->fetchAll();
//


include (dirname(__FILE__).'/../views/templates/header.php');
include (dirname(__FILE__).'/../views/ex6.php');
include (dirname(__FILE__).'/../views/templates/footer.php');