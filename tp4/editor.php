<?php include "include/head.php" ?>
            <h1> AJOUTER UN ARTICLE</h1>
        </header>
        <div id="corps">
            <form id="form" action="addarticle.php" method="post">
                <fieldset id="inputs">
                    <input id="titre" type="text" name="titre" placeholder="Titre de l'article" autofocus required>
                    <input id="date" type="date" name="date" autofocus required>
					<textarea rows="4" cols="47" name="commentaire">Votre article...</textarea>
					<input type="file" name="photo" accept="image/*">
                </fieldset>
				<fieldset id="button">
                <input type="submit" id="submit" value="Ajouter l'article"><br/>
				</fieldset>
        </div>
<?php include "include/foot.php" ?>