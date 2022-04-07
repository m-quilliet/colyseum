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
    $sth=$pdo->query("SELECT * FROM `clients`");
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
    <li><?= $customer->lastName . ' ' . $customer-> firstName . ' ' . $customer-> birthDate . ' ' . $customer-> card . ' ' . $customer-> cardNumber?></li>
    <?php endforeach ?>
</ul>

<div class="id-card-tag"></div>
	<div class="id-card-tag-strip"></div>
	<div class="id-card-hook"></div>
	<div class="id-card-holder">
		<div class="id-card">
			<div class="header">
				<img src="https://lh3.googleusercontent.com/-ebxWAGWvWg0/WTABBfdBv2I/AAAAAAAAAqw/qef78bVeIngorIsmAUD4tWVUd8WDvZyuQCEw/w140-h74-p/Untitled-2.png">
			</div>
			<div class="photo">
				<img src="https://media.licdn.com/mpr/mpr/shrinknp_200_200/AAEAAQAAAAAAAAuXAAAAJDE2YjQzOGZkLTU5YzAtNGRkNC04NTUzLTM3Zjg0ZWVlMGQxZA.jpg">
			</div>
			<h2>Kiran Das DA</h2>
			<div class="qr-code">
				<img src="https://www.shopify.com/growth-tools-assets/qr-code/shopify-faae7065b7b351d28495b345ed76096c03de28bac346deb1e85db632862fd0e4.png">
			</div>
			<h3>www.onetikk.info</h3>
			<hr>
			<p><strong>"PENGG"</strong>HOUSE,4th Floor, TC 11/729(4), Division Office Road <p>
			<p>Near PMG Junction, Thiruvananthapuram Kerala, India <strong>695033</strong></p>
			<p>Ph: 9446062493 | E-ail: info@onetikk.info</p>

		</div>
	</div>

