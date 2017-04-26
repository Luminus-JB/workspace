<?php

/**
 * Created by PhpStorm.
 * User: Lumi
 * Date: 21/04/2017
 * Time: 14:31
 */
class Personnage
{
    // Déclarations des attributs de la class en privé.

    private $_force;
    private $_degats;
    private $_localisation;
    private $_xp;
    private $_pv;
    private $_buff;
    private $_role;

    // Déclarations des constantes en rapport avec la force.
    const FORCE_PETITE = 20;
    const FORCE_MOYENNE = 50;
    const FORCE_GRANDE = 80;

    // Déclarations des constantes en rapport avec la force.
    const RESISTANCE_DIVINE = 100;
    const POING_DIVIN = 100;

    //Variable statique privée
private static $_texteADire = 'Je vais tous vous tuer !';

    public function __construct($force, $degats)
    {
        echo 'Personnage crée !<br/>'; // Message s'affichant une fois que tout objet est créé.
        $this->setForce($force); // Initialisation de la force.
        $this->setDegats($degats); // Initialisation des dégâts.
        $this->_xp = 1; // Initialisation de l'expérience à 1.
        $this->_localisation = "zone de départ";
        $this->_pv = 100;

    }

    public function deplacer()
    {

    }

    public function buff()
    {
        $this->_force = $this->_force + $this->_buff;
    }

    public function frapper(Personnage $cible)
    {
        $this->_degats = $this->_degats + $this->_force;
        $cible->_pv = $cible->_pv - $this->_degats;
    }

    public function gagnerExperience()
    {
        $this->_xp++;
    }

    public static function parler()
    {
        echo self::$_texteADire;
    }

    /*
     * GETTERS
     */
    // Renvoie le contenu de l'attribut force.
    public function getForce()
    {
        return $this->_force;
    }

    // Renvoie le contenu de l'attribut localisation.
    public function getLocalisation()
    {
        return $this->_localisation;
    }

    // Renvoie le contenu de l'attribut xp.
    public function getXp()
    {
        return $this->_xp;
    }

    // Renvoie le contenu de l'attribut degats.
    public function getDegats()
    {
        return $this->_degats;
    }

    // Renvoie le contenu de l'attribut role.
    public function getRole()
    {
        return $this->_role;
    }

    // Renvoie le contenu de l'attribut pv.
    public function getPv()
    {
        return $this->_pv;
    }

    // Renvoie le contenu de l'attribut buff.
    public function getBuff()
    {
        return $this->_buff;
    }
    /*
     *  FIN GETTERS
     */

    /*
     * SETTERS
     */
    // Mutateur chargé de modifier l'attribut $_force.
    public function setForce($force)
    {
        // On vérifie qu'on nous donne bien soit une « FORCE_PETITE », soit une « FORCE_MOYENNE », soit une « FORCE_GRANDE ».
        if (in_array($force, [self::FORCE_PETITE, self::FORCE_MOYENNE, self::FORCE_GRANDE])) {
            $this->_force = $force;
        } else {
            trigger_error('La force d\'un personnage petite (20), moyenne (50) ou grande (80) ', E_USER_WARNING);
            return;
        }
    }

    // Mutateur chargé de modifier l'attribut $_localisation.
    public function setLocalisation($localisation)
    {
        //On vérifie que la localisation soit bien une chaîne de caractères.
        if (is_string($localisation)) {
            $this->_localisation = $localisation;
        } else {
            trigger_error('Cette localisation est inconnue ', E_USER_WARNING);
            return;
        }
    }

    // Mutateur chargé de modifier l'attribut $_xp.
    public function setXp($xp)
    {
        //On vérifie que la xp soit bien un nombre entier.
        if (is_int($xp)) {
            $this->_xp = $xp;
        } else {
            trigger_error('L\'expérience d\'un personnage doit être un nombre entier ', E_USER_WARNING);
            return;
        }
    }

    // Mutateur chargé de modifier l'attribut $_degats.
    public function setDegats($degats)
    {
        //On vérifie que la xp soit bien un nombre entier.
        if (is_int($degats)) {
            $this->_degats = $degats + $this->_buff;
        } else {
            trigger_error('L\'expérience d\'un personnage doit être un nombre entier ', E_USER_WARNING);
            return;
        }
    }

    // Mutateur chargé de modifier l'attribut $_pv.
    public function setPv($pv)
    {
        //On vérifie que la xp soit bien un nombre entier.
        if (is_int($pv)) {
            $this->_pv = $pv;
        } else {
            trigger_error('L\'expérience d\'un personnage doit être un nombre entier ', E_USER_WARNING);
            return;
        }
    }

    // Mutateur chargé de modifier l'attribut $_buff.
    public function setBuff($buff)
    {
        // On vérifie que le buff bien soit bien présent dans le tableau.
        if (in_array($buff, [self::RESISTANCE_DIVINE, self::POING_DIVIN])) {
            $this->_buff = $buff;
        } else {
            trigger_error('Le Buff doit être égal à 100', E_USER_WARNING);
            return;
        }
    }

    // Mutateur chargé de modifier l'attribut $_role.
    public function setClasse($role)
    {
        // Déclarations de la liste des roles disponibles
        $liste_roles = array("mage", "guerrier", "archer");
        // On vérifie que le role bien soit bien présent dans le tableau.
        if (in_array($role, $liste_roles)) {
            $this->_role = $role;
        } else {
            trigger_error('La role du personnage doit être soit mage, guerrier, ou archer', E_USER_WARNING);
            return;
        }
    }
    /*
     * FIN SETTERS
     */
}