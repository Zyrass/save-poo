<?php

class Info
{
    public static $_nom = 'Guillon';
    /**
     * La méthode static permet de récupérer une information sans forcément instancier un objet.
     * Le this ne fonctionnera pas !!
     * ---------------------------------------------------------
     * Souvent utiliser pour regrouper les fonctions entre elles.
     * - RSS
     * - BDD
     * - etc...
     **/

    public static function information($toto) {
        echo 'Salut '. $toto .' il fait beau aujourd\'hui !';
    }
}

Info::information('Alain');
echo '<hr>';
echo Info::$_nom;