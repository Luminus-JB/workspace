<?php
/**
 * Created by PhpStorm.
 * User: Lumi
 * Date: 27/03/2017
 * Time: 11:01
 */
/*
 * INCLUDES
 */
//Contient le header
include("includes/admin_header.php");
//Contient la connexion à la db
include("includes/connect_db.php");
//Contient les fonctions
include("function.php");

/*
 * ZONE LINK HEAD
 */

// Déclarations et fonctions pour la zone link head
$i = 1;
$table = 'link_head';
// Renvoie le nombre de place totale dans la table en paramètre
$nbr_place = nbrPlace($table);
// Liste de tous les emplacements disponibles dans le nav
$list_total_place = array(1, 2, 3, 4, 5, 6, 7, 8);
// Compare la liste des places occupés et la liste des places totales en paramètres et renvoie la liste des places libres dans un array
$list_free_place = listFreePlace($list_total_place, $table);

if ($list_free_place != NULL){
    $styles_css = "style.css";
}else{
    $styles_css = "style_link_full.css";
}
// Formulaire partie 1
include("includes/form_link_head/form_part_1.html");
//Tant que $i est plus petit que le nombre de lignes dans la db link_nav
while ($i <= $nbr_place) {
    echo '<option>' . $i;
    $i++;
}
// Formulaire partie 2
include("includes/form_link_head/form_part_2.html");
//Parcours de  l'array listant les places disponibles et l'affiche dans le menu déroulant
foreach ($list_free_place as $value) {
    echo '<option>' . $value;
}
// Formulaire partie 3
include("includes/form_link_head/form_part_3.html");


/*
 * ZONE LINK NAV
 */
// Déclarations et fonctions pour la zone link nav
$i = 1;
$table = 'link_nav';
$nbr_place = nbrPlace($table);
$list_total_place = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14);
$list_free_place = listFreePlace($list_total_place, $table);

// Formulaire partie 1
include("includes/form_link_nav/form_part_1.html");

while ($i <= $nbr_place) {
    echo '<option>' . $i;
    $i++;
}
// Formulaire partie 2
include("includes/form_link_nav/form_part_2.html");

foreach ($list_free_place as $i) {
    echo '<option>' . $i;
}
// Formulaire partie 3
include("includes/form_link_nav/form_part_3.html");


echo '
<!-- ZONE LINK GAMES  -->
<form method="post" action="register_link.php" enctype="multipart/form-data" >
    <h2>Lien Games</h2>
    <h3>Modification Lien</h3>
    <label for="link_games">Lien</label>
    <input type="url" name="link_games" id="link_games"/>
    <label for="name_link_games">Nom Lien </label>
    <input type="text" name="name_link_games" id="name_link_games"/>
    <label for="games_place_number">Lien n°</label>
    <select id="games_place_number" name="games_place_number">
    <option>1
    <option>2
    <option>3
    <option>4
    <option>5
    <option>6
    </select>
    <input type="submit" value="Modifier" name="Valider"/><br /><br />
</form>
<h3>Ajout Lien</h3>
<form method="post" action="register_link.php" enctype="multipart/form-data" >
    <label for="add_link_games">Lien</label>
    <input type="url" name="add_link_games" id="add_link_games"/>
    <label for="add_name_link_games">Nom Lien</label>
    <input type="" name="add_name_link_games" id="add_name_link_games"/>
    <input type="submit" name="Valider"/><br /><br />
    <p id="trick">*6 Lien max</p>
</form>
<!-- ZONE LINK GAMES  -->

<!-- ZONE LINK DEVTOOLS  -->
<form method="post" action="register_link.php" enctype="multipart/form-data" >
    <h2>Lien Devtools</h2>
    <h3>Modification Lien</h3>
    <label for="link_devtools">Lien </label>
    <input type="url" name="link_devtools" id="link_devtools"/>
    <label for="name_link_devtools">Nom Lien </label>
    <input type="text" name="name_link_devtools" id="name_link_devtools"/>
    <label for="devtools_place_number">Lien n°</label>
    <select id="devtools_place_number" name="devtools_place_number">
    <option>1
    <option>2
    <option>3
    <option>4
    <option>5
    <option>6
    </select>
    <input type="submit" value="Ajouter"/><br /><br />
</form>
<!-- ZONE LINK DEVTOOLS  -->

<!-- ZONE LINK ADMINISTRATIF  -->
<form method="post" action="register_link.php" enctype="multipart/form-data" >
    <h2>Lien Administratif</h2>
    <h3>Modification Lien</h3>
    <label for="link_administratif">Lien </label>
    <input type="url" name="link_administratif" id="link_administratif"/>
    <label for="name_link_administratif">Nom Lien </label>
    <input type="text" name="name_link_administratif" id="name_link_administratif"/>
    <label for="administratif_place_number">Lien n°</label>
    <select id="administratif_place_number" name="administratif_place_number">
    <option>1
    <option>2
    <option>3
    <option>4
    <option>5
    <option>6
    </select>
    <input type="submit" value="Modifier"/><br /><br />
</form>
<!-- ZONE LINK ADMINISTRATIF  -->

<!-- ZONE LINK DIVERS  -->
<form method="post" action="register_link.php" enctype="multipart/form-data" >
    <h2>Lien Divers</h2>
    <h3>Modification Lien</h3>
    <label for="link_divers">Lien </label>
    <input type="url" name="link_divers" id="link_divers"/>
    <label for="name_link_divers">Nom Lien </label>
    <input type="text" name="name_link_divers" id="name_link_divers"/>
    <label for="divers_place_number">Lien n°</label>
    <select id="divers_place_number" name="divers_place_number">
    <option>1
    <option>2
    <option>3
    <option>4
    <option>5
    <option>6
    </select>
    <input type="submit" value="Modifier"/><br /><br />
</form>
<!-- ZONE LINK DIVERS  -->
</body>
</html>
';