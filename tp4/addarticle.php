<?php include "include/head.php" ?>
<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=utilisateur;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

$titre = filter_input(INPUT_POST, 'titre');
$date = filter_input(INPUT_POST, 'date');
$commentaire = filter_input(INPUT_POST, 'commentaire');
$photo = 'img/'.filter_input(INPUT_POST, 'photo');

$req = $bdd->prepare('INSERT INTO contenu(titre, date, commentaire, photo) VALUES(:titre, :date, :commentaire, :photo)');
$req->execute(array(
	'titre' => $titre,
	'date' => $date,
	'commentaire' => $commentaire,
	'photo' => $photo
	));

echo 'Vous avez  ajouter un article !';
echo $titre;
echo "<br>";
echo $date;
echo "<br>";
echo $commentaire;
echo "<br>";
echo "<img src='".$photo."'>";
echo "<br>";

echo '<br><br><br><a href="editor.php">ajouter un article</a>';
?>

<?php include "include/foot.php" ?>