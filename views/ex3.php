<?php
//views html <section> avec inclus du php ds les balises 
?>

<section>
<div class="id-card-tag"></div>
	<div class="id-card-tag-strip"></div>
	<div class="id-card-hook"></div>
	<div class="id-card-holder">
		<div class="id-card">
			<div class="header">
				<img src="/public/assets/img/billet2.png">
			</div>
			<div class="foreach">
                <ul>
                    <p class="request"> TOUS LES 20 PREMIERS CLIENTS ! </p>
                    <?php foreach($customers as $customer): ?>
                    <li><?= $customer->lastName . ' ' . $customer-> firstName . ' ' . $customer-> birthDate . ' ' . $customer-> card . ' '
                    . $customer-> cardNumber?></li>
                    <?php endforeach ?>
                </ul>
			</div>
			<hr class="hr">
            <div class="qr-code">
				<img src="/public/assets/img/qr-code.png">
	            <h3>www.colyseum.info</h3>
            </div>
		</div>
	</div>
</section>
<?php
    //créer une variable query ou stock reponse de ma methode query qui appartient à la classe pdo cette méthode attend
    //la requette obligatoire (select) et para optionnel (fetch)

    //retourne un autre objet pdo statment//$query(sth) est un objet de type pdo statment//


// pdo statment extrait info du resultat de requete ici fetch all (qui récupere les lignes d'un ensemble de resultat tt les clients)
// recupére resultat sous forme d'un tableau de resultat.
// fetchAll() par defaut associatif et indexé si rien ds les ()
//fech obj sous forme de tableau d'objet
//customers est un tableau d'objet
