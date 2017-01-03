<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Inscription</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <header>
            <h1> TP PHP : Module Identification.</h1>
        </header>
        <div id="corps">
            <form id="login" action="newmember.php" method="post">
                <h1>Sign up</h1>
                <fieldset id="inputs">
                    <input id="username" type="text" name="user"
                           placeholder="Username" autofocus required>
					<input id="email" type="email" name="email"
                           placeholder="Email" autofocus required>
                    <input id="password" type="password" name="pwd"
                           placeholder="Password" autofocus required>
                </fieldset>
				<fieldset id="button">
                <input type="submit" id="submit" value="S'inscrire"><br/>
				</fieldset>
				<fieldset id="lien">
				<br/>
                <a href="#"> Mot de passe oubli&eacute;  ?</a>
                <a href="index.php">Se connecter</a>
                </fieldset>
        </div>
    </body>
</html>
