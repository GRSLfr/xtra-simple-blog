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


// Vérification des identifiants
$req = $bdd->prepare('SELECT id FROM users WHERE username = :username AND pwd = :password');
$req->execute(array(
    'username' => $username,
    'password' => $password));

$resultat = $req->fetch();

if (!$resultat)
{
    echo 'Mauvais identifiant ou mot de passe !';
}
else
{
    session_start();
    $_SESSION['id'] = $resultat['id'];
    $_SESSION['username'] = $username;
	echo 'Bonjour ' . $_SESSION['username'] .", vous êtes maintenant connecté !";
}

?>