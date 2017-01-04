<?php include "include/head.php" ?>
 <h1> Le blog</h1>
<?php
// Connexion à la base de données
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=utilisateur;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

// On récupère les 10 derniers billets
$req = $bdd->prepare('SELECT * FROM contenu');
$req->execute();
while ($article = $req->fetch()) {
?>
<div class="article">
    <h3>
        <?php echo htmlspecialchars($article['titre']); ?>
        <em>le <?php echo $article['date']; ?></em>
    </h3>
    <p>
		<?php echo nl2br(htmlspecialchars($article['commentaire'])); ?>
	</p>
	<p>
		<?php echo "<img src='".$article['photo']."'>"; ?>
    </p>
</div>
<?php
} // Fin de la boucle des billets
$req->closeCursor();
?>
<?php include "include/foot.php" ?>