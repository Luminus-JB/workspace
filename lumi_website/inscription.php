<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Inscription Minichat</title>
    </head>
    
    <body>
        <!-- Formulaire d'inscription -->
        <form method="POST" action="inscription_post.php">
            <p>
                <fieldset>
                    <legend>Inscription</legend>
                    <p>
                        <label for="pseudo_inscrit">Pseudo</label>
                        
                        <input type="text" name="pseudo_inscrit" id="pseudo_inscrit" required/>*  
                    </p>
                    <p>
                        <label for="message">Email</label>
                        <input type="text" name="mail_inscrit" id="mail_inscrit"/><br/>
                    </p>
                    <p>
                        <label for="message">Mot de Passe</label>
                        <input type="password" name="password_inscrit" id="password_inscrit" required/>*<br/>
                    </p>

                    <input type="submit"/>
                    <p>tous les champs avec * sont obligatoires</p>
                </fieldset>
            </p>
        </form>
    </body>
</html>