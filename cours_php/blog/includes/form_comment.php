<?php
/**
 * Created by PhpStorm.
 * User: pugju
 * Date: 28/02/2017
 * Time: 15:02
 */
echo '<form method="post" action="comment_post.php" enctype="multipart/form-data" >
        <!-- zone hidden -->
        <input type="hidden" name="id_billet" value="'. $id_billet .'">
        <!-- zone pseudo -->
        <label for="auteur">Pseudo</label>
        <input type="text" name="auteur" id="auteur"><br /><br />
        <!-- zone message -->
        <label for="commentaire">Commentaire</label><br/>
        <textarea id="commentaire" placeholder="Votre commentaire ici" name="commentaire" rows="5" cols="30" pl></textarea><br /><br />
        <input id="valider" type="submit" name="Valider"/>
    </form>
</body>
</html>';