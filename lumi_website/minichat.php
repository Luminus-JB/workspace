<?php

// On démarre la session AVANT d'écrire du code HTML

session_start();

 

// On s'amuse à créer quelques variables de session dans $_SESSION

$_SESSION['prenom'] = 'Jean';

$_SESSION['nom'] = 'Dupont';

$_SESSION['age'] = 24;

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Minichat</title>
    </head>
    
    <body>
        <!-- Formulaire de saisie de pseudo -->
        <form method="POST" action="minichat_post.php">
            <p>
                <fieldset>
                    <legend>Minichat</legend>
                    <p>
                        <label for="pseudo_user">Pseudo</label>
                        
                        <input type="text" name="pseudo_user" id="pseudo_user" value='<?php if(isset($_SESSION['pseudo'])){
                                echo htmlspecialchars($_SESSION['pseudo']);
                            }else{
                               if(isset($_COOKIE['pseudo'])){
                                   
                                    echo htmlspecialchars($_COOKIE['pseudo']);
                                }
                            }
                               ?>' required/> 
                            
                    </p>
                    <p>
                        <label for="message">Message</label>
                        <input type="text" name="message_user" id="message_user" required/><br/>
                    </p>

                    <input type="submit"/>
                </fieldset>
            </p>
            <!-- Affichage des 10 derniers message -->
            <p>
                <?php
                    // Connection à la BD
                    try
                    {
                        $bdd = new PDO('mysql:host=db643990396.db.1and1.com;dbname=db643990396;charset=utf8', 'dbo643990396', '*M1n3BDD*', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                    }
                    catch(Exception $e)
                    {
                            die('Erreur : '.$e->getMessage());
                    }
                    // Execution de la requète
                    $reponse = $bdd->query('SELECT pseudo, message FROM minichat ORDER BY ID desc LIMIT 10');

                    //Affiche la ChatRoom
                    echo '<p>ChatRoom:</p>';
                    while ($donnees = $reponse->fetch())
                    {
                        echo '<strong>' . $donnees['pseudo'] . '</strong> : '. $donnees['message']. '<br/>';
                    }

                    $reponse->closeCursor();

                    ?>
            </p>
            <p>
            <iframe src="https://calendar.google.com/calendar/embed?src=81k5pdkqfd807lec9invkgtibg%40group.calendar.google.com&ctz=Europe/Paris" style="border: 0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
            </p>        
        </form>
    </body>
</html>