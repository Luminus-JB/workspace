<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Homepage</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css" />
    <script type="text/javascript" src="monscript.js"></script>
</head>

<body>
    <div id="nav">
        <a href="" id="lumi"></a><br />
        <div id="lien_perso">
            <a href="http://www.julien-barras.com/">Mon Site</a><br />
            <a href="http://www.julien-barras.fr/">Mon CV</a><br />
            <a href="https://login.live.com/login.srf?wa=wsignin1.0&rpsnv=13&ct=1486905681&rver=6.7.6636.0&wp=MBI_SSL&wreply=https:%2f%2faccount.microsoft.com%2fauth%2fcomplete-signin%3fru%3dhttps%253a%252f%252faccount.microsoft.com%252f%253fref%253dMeControl%2526lang%253dfr-FR%2526partnerId%253dxboxcomuhf%2526partnerDomain%253daccount.xbox.com%2526refd%253daccount.microsoft.com%2526refp%253dhome-about-index&lc=1036&id=292666&lw=1&fl=easi2&pcexp=true&uictx=me">Windows Login</a><br />
            <a href="http://localhost/phpmyadmin/">phpMyAdmin</a><br />
            <a href="http://localhost/">Localhost</a><br />
            <a href=""></a><br />
        </div>
    </div>

    <div id="corp">
        <div id="header">
            <a href="https://mail.google.com/mail/u/0/#inbox" id="gmail" class="lien_header"></a>
            <a href="https://twitter.com/" id="twitter" class="lien_header"></a>
            <a href="https://www.facebook.com/" id="facebook" class="lien_header"></a>
            <a href="https://www.youtube.com/" id="youtube" class="lien_header"></a>
            <a href="https://www.linkedin.com/" id="linkedin" class="lien_header"></a>
            <a href="https://github.com/" id="github" class="lien_header"></a>
            <a href="https://www.evernote.com/Home.action#n=06879adf-0316-4843-a756-d396568caad1&ses=4&sh=2&sds=5&" id="evernote" class="lien_header"></a>
            <a href="https://www.dropbox.com/fr/" id="dropbox" class="lien_header"></a>
        </div>

        <div id="menu">
            <div id="gaming_conteneur">
                <div id="gaming">
                    <a href="https://worldofwarcraft.com/fr-fr/">World of Warcraft</a><br/>
                    <a href="http://euw.leagueoflegends.com/fr">League of legend</a><br/>
                    <a href="http://www.championselect.net/">Champion Select</a><br/>
                    <a href="http://www.lolnexus.com/EUW/search?name=luminus&region=EUW">LoL Nexus</a><br/>
                    <a href="http://warlockspirit.com/">Warlock Spirit</a><br/>

                </div>
            </div>
            <div id="devtools_conteneur">
                <div id="devtools">
                    <a href="http://php.net/manual/fr/indexes.functions.php">PHP</a><br/>
                    <a href="http://www.w3schools.com/css/">CSS - w3schools</a><br/>
                    <a href="http://www.w3schools.com/js/">JS - w3schools</a><br/>
                    <a href="https://sql.sh/">SQL</a><br/>
                    <a href="https://www.fontsquirrel.com/tools/webfont-generator">Font Squirrel</a><br/>
                    <a href="https://openclassrooms.com/dashboard">OpenClassrooms</a><br/>

                </div>
            </div>
            <div id="administratif_conteneur">
                <div id="administratif">
                    <a href="https://www.impots.gouv.fr/portail/">Impots</a><br/>
                    <a href="https://www.labanquepostale.fr/particulier.html">Banque</a><br/>
                    <a href="http://www.pole-emploi.fr/accueil/">Pôle Emploi</a><br/>
                    <a href="https://assure.ameli.fr/PortailAS/appmanager/PortailAS/assure?_nfpb=true&_pageLabel=as_accueil_page&_somtc=true">Ameli</a><br/>
                </div>
            </div>
            <div id="divers_conteneur">
                <div id="divers">
                    <a href="http://www.speedtest.net/fr/">Test Réseau</a><br/>
                    <a href="http://space1.io/">Space.io</a><br/>
                    <a href="http://bonpatron.com/">Bon Patron</a><br/>
                    <a href="https://www.google.fr/search?q=traduction&oq=tra&aqs=chrome.0.69i59j69i57j69i65j69i60l3.1023j0j7&sourceid=chrome&ie=UTF-8">Traduction</a><br/>
                    <a href="https://www.amazon.fr/">Amazon</a><br/>
                </div>
            </div>
        </div>
        <div id="signature">
            <p>Make by Lumi</p>
            <?php
            $monfichier = fopen('compteur.txt', 'r+');

            $pages_vues = fgets($monfichier); // On lit la première ligne (nombre de pages vues)
            $pages_vues += 1; // On augmente de 1 ce nombre de pages vues
            fseek($monfichier, 0); // On remet le curseur au début du fichier
            fputs($monfichier, $pages_vues); // On écrit le nouveau nombre de pages vues

            fclose($monfichier);

            echo '<p id="compteur">Cette page a été vue ' . $pages_vues . ' fois !</p>';
            ?>
        </div>
    </div>
</body>
</html>