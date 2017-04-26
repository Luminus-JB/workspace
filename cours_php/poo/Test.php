<?php

/**
 * Created by PhpStorm.
 * User: Lumi
 * Date: 21/04/2017
 * Time: 14:31
 */
class Test
{
    // Déclarations des attributs de la class en privé.

    private $_nom;
    private $_prenom;
    private $_age;
    private $_type_compte;

    const COMPTE_UTILISATEUR = 1;
    const COMPTE_TEST = 2;

    public function __construct($type_compte, $nom, $prenom, $age)
    {
        echo 'Compte crée';
        $this->setTypeCompte($type_compte);
        $this->setAge($age);
        $this->setNom($nom);
        $this->setPrenom($prenom);
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->_nom = $nom;
    }

    /**
     * @param mixed $age
     */
    public function setAge($age)
    {
        $this->_age = $age;
    }

    /**
     * @param mixed $prenom
     */
    public function setPrenom($prenom)
    {
        $this->_prenom = $prenom;
    }

    /**
     * @param mixed $type_compte
     */
    public function setTypeCompte($type_compte)
    {
        // On vérifie qu'on nous donne bien soit un compte utilisateur ou un compte de test
        if (in_array($type_compte, [self::COMPTE_UTILISATEUR, self::COMPTE_TEST])) {
            $this->_type_compte = $type_compte;
        }else{
            trigger_error('Le compte de l\utilisateur doit être soit un compte d\'essai ou un compte normal', E_USER_WARNING);
            return;
        }
    }
}