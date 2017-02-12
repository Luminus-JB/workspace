<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Inscription Minichat</title>
    </head>
    
    <body>
        <h1>Veuillez-vous connectez :</h1>
        <!-- Formulaire de connexion -->
        <form method="POST" action="test.php">
            <p>
                <fieldset>
                    <legend>Connexion</legend>
                    <p>
                        <label for="login">Pseudo</label>
                        
                        <input type="text" name="login" id="login" required/>  
                    </p>
                    <p>
                        <label for="message">Mot de Passe</label>
                        <input type="password" name="password" id="password" required/><br/>
                    </p>
                    <input type="submit"/>
                </fieldset>
            </p>
        </form>
        <!-- Lien de redirection vers le formulaire d'inscription-->
        <p>
            Si vous n'êtes pas inscrit cliquez <a href="inscription.php">ici</a> pour vous inscrire
        </p>
    </body>
</html>