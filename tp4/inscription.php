<?php include "include/head.php" ?>
            <h1> Inscris-toi au blog</h1>
        </header>
        <div id="corps">
            <form id="form" action="newmember.php" method="post">
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
<?php include "include/foot.php" ?>
