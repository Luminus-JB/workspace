<?php
/**
 * Created by PhpStorm.
 * User: Lumi
 * Date: 06/04/2017
 * Time: 14:25
 */

/*
 * ZONE LINK HEAD
 */

// Déclarations et fonctions pour la zone link head
$table = 'link_head';
// Renvoie le nombre de place totale dans la table en paramètre
// Liste de tous les emplacements disponibles dans le nav
$list_total_place = array(1, 2, 3, 4, 5, 6, 7, 8);
// Compare la liste des places occupés et la liste des places totales en paramètres et renvoie la liste des places libres dans un array
$list_free_place = listFreePlace($table, $list_total_place);
// Récupère la liste croissante des places disponibles dans la table en paramètre.
$list_empty_place = listEmptyPlace($table);
// Récupère la liste croissante des places disponibles dans la table en paramètre.
$list_name_empty_place = listNameEmptyPlace($table);


// Formulaire partie 1
echo '<!-- ZONE LINK HEAD  -->
<div id="head" class="formulaire">
<form method="post" action="register_link.php" enctype="multipart/form-data" >
<!--<form method="post" action="../test.php" enctype="multipart/form-data" >-->
    <h2>Lien Entête</h2>
    <h3>Modification Lien</h3>
    <label for="link_head">Lien</label>
    <input type="url" name="link_head" id="link_head"/><br/><br/>
    <label for="name_link_head">Nom Lien</label>
    <input type="text" name="name_link_head" id="name_link_head"/><br/><br/>
    <label for="head_place_number">Lien n°</label>
    <select id="head_place_number" name="head_place_number">';

//Tant que $i est plus petit que le nombre de lignes dans la db link_nav
foreach (array_combine($list_empty_place, $list_name_empty_place) as $place => $name) {
    echo '<option>' . $place . ' - ' . $name;
}


echo '</select><br/><br/>
<label for="img_link_head" class="form_img">Icône du fichier (JPG, PNG ou GIF | max. 15 Ko) :</label>
<input type="file" name="img_link_head" id="img_link_head"/><br/><br/>
<input type="submit" value="Modifier"/><br /><br />
</form>';

echo '<form method="post" action="register_link.php" enctype="multipart/form-data" >
    <h3>Ajout Lien</h3>
    <label for="add_link_head" class="' . $class = freeOrFull($list_free_place) . '">Lien</label>
    <input type="url" required name="add_link_head" id="add_link_head" class="' . $class = freeOrFull($list_free_place) . '"/>  *<br/><br/>
    <label for="add_name_link_head" class="' . $class = freeOrFull($list_free_place) . '">Nom Lien</label>
    <input  type="text" required name="add_name_link_head" id="add_name_link_head" class="' . $class = freeOrFull($list_free_place) . '"/>  *<br/><br/>
    <label for="$add_place_link_head" class="' . $class = freeOrFull($list_free_place) . '">Lien n°</label>
    <select id="$add_place_link_head" required name="$add_place_link_head" class="' . $class = freeOrFull($list_free_place) . '">';
//Parcours de  l'array listant les places disponibles et l'affiche dans le menu déroulant
foreach ($list_free_place as $value) {
    echo '<option>' . $value;
}

echo'</select>  *<br/>';
if (empty($list_free_place)) {
    echo '<p><i class="limit_link_message"">Limite de lien atteinte, veuillez d\'abord en supprimer un.</i></p>';
}
echo '<label for="img_link_head" class="form_img ' . $class = freeOrFull($list_free_place) . '">Icône du fichier (JPG, PNG ou GIF | max. 15 Ko) :</label>
<input type="file" required name="img_link_head" id="img_link_head" class="' . $class = freeOrFull($list_free_place) . '"/>  *<br/><br/>
<input type="submit" value="Ajouter" class="' . $class = freeOrFull($list_free_place) . '"/><br /><br /><i class="required_message">Les champs indiqués par une * sont obligatoires</i></form>';


//Formulaire partie 3 (Suppression)
echo '<form method="post" action="register_link.php" enctype="multipart/form-data" >
    <h3>Suppression Lien</h3>
    <label for="delete_link_head_place">Lien n°</label>
    <select id="delete_link_head_place" name="delete_link_head_place">';

foreach (array_combine($list_empty_place, $list_name_empty_place) as $place => $name) {
    echo '<option>' . $place . ' - ' . $name;
}
//Formulaire partie 4 (Fermeture du formulaire)
echo '</select><br/><br/>
<input type="submit" value="Supprimer"/><br /><br />
</form>
</div>
<!-- ZONE LINK HEAD  -->';
/*
 * FIN ZONE LINK HEAD
 */