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

$username = filter_input(INPUT_POST, 'user');
$password = filter_input(INPUT_POST, 'pwd');
$email = filter_input(INPUT_POST, 'email');

$req = $bdd->prepare('INSERT INTO users(username, pwd, email) VALUES(:username, :password, :email)');
$req->execute(array(
	'username' => $username,
	'password' => $password,
	'email' => $email
	));

echo 'Vous êtes maintenant membre !';
echo '<a href="index.php">Se connecter</a>';
echo '<br><a href="inscription.php"> << revenir à la page d\'inscription</a>';
?>
<?php include "include/foot.php" ?>