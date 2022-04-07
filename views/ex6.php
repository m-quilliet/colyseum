<?php 
require_once (dirname(__FILE__).'/../config/init.php');

try {
    $pdo= new PDO(DATA, USER, PASSWORD,[ 
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
]);
}
catch (PDOException $e) { //$e =exception
    echo $e ->getMessage(); // '$error=' à la place de 'echo' pr stocker le message d'erreur
}


try {
    //créer une variable query ou stock reponse de ma methode query qui appartient à la classe pdo cette méthode attend
    //la requette obligatoire (select) et para optionnel (fetch)
    $sth=$pdo->query("SELECT ``, `firstName` FROM `Clients` WHERE `lastName` LIKE 'm%';");
    //retourne un autre objet pdo statment//$query(sth) est un objet de type pdo statment//
    $customers= $sth->fetchAll();
} catch (PDOException $e) {
    $error1= $e->getMessage();
}
// pdo statment extrait info du resultat de requete ici fetch all (qui récupere les lignes d'un ensemble de resultat tt les clients)
// recupére resultat sous forme d'un tableau de resultat.
// fetchAll() par defaut associatif et indexé si rien ds les ()
//fech obj sous forme de tableau d'objet
//customers est un tableau d'objet
?>
<ul>
<?php foreach($customers as $customer): ?>
    <li><?= 'NOM: :'.$customer->lastName.' <br> PRENOM :' .$customer->firstName?></li>
    <?php endforeach ?>
</ul>