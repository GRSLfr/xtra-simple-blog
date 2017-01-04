 <?php include "include/head.php" ?>
	<h1> Le blog des couleurs</h1>
        </header>
        <div id="corps">
            <form id="form" action="login.php" method="post">
                <h1>Log In</h1>
                <fieldset id="inputs">
                    <input id="username" type="text" name="user"
                           placeholder="Username" autofocus required>
                    <input id="password" type="password" name="pwd"
                           placeholder="Password" autofocus required>
                </fieldset>
				<fieldset id="button">
                <input type="submit" id="submit" value="Connexion"><br/>
				</fieldset>
				<fieldset id="lien">
				<br/>
                <a href="#"> Mot de passe oubli&eacute;  ?</a>
                <a href="inscription.php"> Pas encore membre ?</a>
                </fieldset>
        </div>
<?php include "include/foot.php" ?>