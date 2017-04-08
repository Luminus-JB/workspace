<?php
/**
 * Created by PhpStorm.
 * User: Lumi
 * Date: 06/04/2017
 * Time: 12:00
 */
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">
<head>
    <?php
    //Si le titre est indiqué, on l'affiche entre les balises <title>
    echo (!empty($titre))?'<title>'.$titre.'</title>':'<title> Lumi Website </title>';
    ?>
    <meta http-equiv="Content-type" content="text/html;charset=UTF-8">
    <link rel="stylesheet" media="screen" type="text/css" title="Design" href="<?php echo $css ?>"/>
    <link rel="icon" type="image/png" href="<?php echo $favicon ?>"/>
</head>
<body>
