<?php
/**
 * Created by PhpStorm.
 * User: Lumi
 * Date: 02/04/2017
 * Time: 11:53
 */
header('content-type: text/css');
//Contient la connexion à la db
include("../includes/connect_db.php");
//Contient les fonctions
include("../function.php");
?>

* {
background-size: cover;
}

/*div main_container */
#main_container {
display: flex;
justify-content: center;
margin-top: 5%;
}

/*div main_container*/

/* div nav */
#nav {
display: flex;
flex-direction: column;
flex-wrap: wrap;
width: 100px;
}

#lumi {
display: block;
height: 100px;
width: 100px;
border-radius: 5px;
background-image: url("../img/lumi.png");
margin-bottom: 1px;
}

/* second_link_container */
#second_link_container {
display: flex;
flex-wrap: wrap;
}

.second_link {
display: block;
height: 48px;
width: 48px;
border-radius: 5px;
margin: 1px;
}

/* Fonds des liens du second_link_container - Nav*/
<?php
//Déclarations de la table pour la fonction récupérant la liste des liens images
$table = "link_nav";
$list_img_link = listImageLink($table);
?>

<?php if (isset($list_img_link[0])){?>
    #link_nav_1 {background-image: url("<?php echo $list_img_link[0] ?>");}
<?php } ?>
<?php if (isset($list_img_link[1])){?>
    #link_nav_2 {background-image: url("<?php echo $list_img_link[1] ?>");}
<?php } ?>
<?php if (isset($list_img_link[2])){?>
    #link_nav_3 {background-image: url("<?php echo $list_img_link[2] ?>");}
<?php } ?>
<?php if (isset($list_img_link[3])){?>
    #link_nav_4 {background-image: url("<?php echo $list_img_link[3] ?>");}
<?php } ?>
<?php if (isset($list_img_link[4])){?>
    #link_nav_5 {background-image: url("<?php echo $list_img_link[4] ?>");}
<?php } ?>
<?php if (isset($list_img_link[5])){?>
    #link_nav_6 {background-image: url("<?php echo $list_img_link[5] ?>");}
<?php } ?>
<?php if (isset($list_img_link[6])){?>
#link_nav_7 {background-image: url("<?php echo $list_img_link[6] ?>");}
<?php } ?>
<?php if (isset($list_img_link[7])){?>
#link_nav_8 {background-image: url("<?php echo $list_img_link[7] ?>");}
<?php } ?>
<?php if (isset($list_img_link[8])){?>
    #link_nav_9 {background-image: url("<?php echo $list_img_link[8] ?>");}
<?php } ?>
<?php if (isset($list_img_link[9])){?>
    #link_nav_10 {background-image: url("<?php echo $list_img_link[9] ?>");}
<?php } ?>
<?php if (isset($list_img_link[10])){?>
    #link_nav_11 {background-image: url("<?php echo $list_img_link[10] ?>");}
<?php } ?>
<?php if (isset($list_img_link[11])){?>
    #link_nav_12 {background-image: url("<?php echo $list_img_link[11] ?>");}
<?php } ?>
<?php if (isset($list_img_link[12])){?>
    #link_nav_13 {background-image: url("<?php echo $list_img_link[12] ?>");}
<?php } ?>
<?php if (isset($list_img_link[13])){?>
    #link_nav_14 {background-image: url("<?php echo $list_img_link[13] ?>");}
<?php } ?>
<?php if (isset($list_img_link[14])){?>
    #link_nav_15 {background-image: url("<?php echo $list_img_link[14] ?>");}
<?php } ?>
<?php if (isset($list_img_link[15])){?>
    #link_nav_16 {background-image: url("<?php echo $list_img_link[15] ?>");}
<?php } ?>
/* second_link_container */
/* div nav */

/* div body */
/* div main_link_container */
#main_link_container {
display: flex;
}

.main_link {
display: block;
height: 100px;
width: 100px;
margin-left: 1px;
border-radius: 5px;
}

/* Fonds des block de liens dans la div main_link_container - Header */
<?php
$table = "link_head";
$list_img_link = listImageLink($table);
?>
<?php if (isset($list_img_link[0])){?>
#link_head_1 {background-image:  url("<?php echo $list_img_link[0] ?>");}
<?php }
if (isset($list_img_link[1])){?>
#link_head_2 {background-image: url("<?php echo $list_img_link[1] ?>");}
<?php }
if (isset($list_img_link[2])){?>
#link_head_3 {background-image: url("<?php echo $list_img_link[2] ?>");}
<?php }
if (isset($list_img_link[3])){?>
#link_head_4 {background-image: url("<?php echo $list_img_link[3] ?>");}
<?php }
if (isset($list_img_link[4])){?>
#link_head_5 {background-image: url("<?php echo $list_img_link[4] ?>");}
<?php }
if (isset($list_img_link[5])){?>
#link_head_6 {background-image: url("<?php echo $list_img_link[5] ?>");}
<?php }
if (isset($list_img_link[6])){?>
#link_head_7 {background-image: url("<?php echo $list_img_link[6] ?>");}
<?php }
if (isset($list_img_link[7])){?>
#link_head_8 {background-image: url("<?php echo $list_img_link[7] ?>");}
<?php } ?>
/*-----------------------------------------------------------------*/
/* div main_link_container */

/* div general_link_container */
#general_link_container {
display: flex;
}

.link_list_container {
margin: 1px;
padding-top: 5px;
border-radius: 5px;
}

.link_list {
display: block;
height: 345px;
width: 198px;
margin: 1px;
}
<?php
$table= 'wallpaper_games';
$wallpaper_games = ImgWallpaper($table);
?>
/* fond des conteneur des link_list + enlève le background lors du hover */
#gaming_container {
background-image: url("<?php echo $wallpaper_games ?>");
}

#gaming_container:hover {
background-image: none;
}
<?php
$table= 'wallpaper_devtools';
$wallpaper_devtools = ImgWallpaper($table);
?>
#devtools_container {
background-image: url("<?php echo $wallpaper_devtools ?>");
}

#devtools_container:hover {
background-image: none;
}
<?php
$table= 'wallpaper_administratif';
$wallpaper_administratif = ImgWallpaper($table);
?>
#administratif_container {
background-image: url("<?php echo $wallpaper_administratif ?>");
}

#administratif_container:hover {
background-image: none;
}
<?php
$table= 'wallpaper_divers';
$wallpaper_divers = ImgWallpaper($table);
?>
#divers_container {
background-image: url("<?php echo $wallpaper_divers ?>");
}

#divers_container:hover {
background-image: none;
}

/* fond des conteneur des link_list + enlève le background lors du hover */

/* Affiche le contenu des link_list lors du hover */
.link_list_container:hover #gaming {
visibility: visible;
}

.link_list_container:hover #devtools {
visibility: visible;
}

.link_list_container:hover #administratif {
visibility: visible;
}

.link_list_container:hover #divers {
visibility: visible;
}

/* Affiche le contenu des link_list lors du hover */

/* Cache le contenu des link_list pas default */
#gaming, #devtools, #administratif, #divers {
visibility: hidden;
}

/* Cache le contenu des link_list pas default */

/* Apparence  des liens  */
#general_link_container a {
font-family: "fibon_sansthin", "lane_-_narrowregular", "Arial";
margin-top: 10px;
display: flex;
justify-content: center;
}

#general_link_container a:hover {
color: darkgrey;
}

#gaming a:link, #gaming a:visited, #gaming a:active,
#devtools a:link, #devtools a:visited, #devtools a:active,
#administratif a:link, #administratif a:visited, #administratif a:active,
#divers a:link, #divers a:visited, #divers a:active {
color: black;
text-decoration: none;
}

#gaming a:hover, #devtools a:hover, #administratif a:hover, #divers a:hover {
color: darkgrey;
}

/* Apparence  des liens  */

/* div general_link_container */
/* div body*/

/* Footer */
#signature {
font-family: "infinite_strokeregular", "fibon_sansthin", "lane_-_narrowregular", "Arial";
font-size: 20px;
color: rgb(175,46,17);
}


#compteur {
font-family: "infinite_strokeregular", "fibon_sansthin", "lane_-_narrowregular", "Arial";
color: rgb(175,46,17);
}

/* Footer */

/* Police */
@font-face {
font-family: 'lane_-_narrowregular';
src: url('../font/lanenar_-webfont.woff2') format('woff2'),
url('../font/lanenar_-webfont.woff') format('woff');
font-weight: normal;
font-style: normal;
}

@font-face {
font-family: 'fibon_sansthin';
src: url('../font/fibon_sans_regular-webfont.woff2') format('woff2'),
url('../font/fibon_sans_regular-webfont.woff') format('woff');
font-weight: normal;
font-style: normal;
}

@font-face {
font-family: 'infinite_strokeregular';
src: url('../font/infinite_stroke-webfont.woff2') format('woff2'),
url('../font/infinite_stroke-webfont.woff') format('woff');
font-weight: normal;
font-style: normal;
}

/* Police */

/* Taille d'écran*/
@media only screen and (max-width: 960px) {
#body {
margin-top: 20%;
}

#nav {
width: 80px;
margin-top: 20%;
}

#lumi {
width: 80px;
height: 80px;
}

.second_link {
width: 38px;
height: 38px;
}

.main_link {
width: 80px;
height: 80px;
}

.link_list {
width: 158px;
height: 320px;
}