<?php

class Membre
{
    /**
     * Opérateur de résolution de porter. (::)
     * Nous pouvons utiliser une constante ou une méthode static au sein même d'une classe grâce au mot clé 'self'.
     * Self se traduit par soi (Une constante peut être appelé dans une même class elle est ainsi appelé soit même).
     * ---------- L'avantage de static c'est qu'une valeur reste fixe comme en Procédurale.     *
     */
    const MAIL = 'zyrass@outlook.fr - et mon identifiant est : ';
    const SITE = '<a href=\'https://fr.wikibooks.org/wiki/Programmation_PHP/Programmation_orient%C3%A9e_objet\'>Voir le site...</a>';

    public static $_test = 'Je suis une propriétée static';
    public static $_id = 0;

    private $_prenom;

    public function test(){
        echo self::$_test;
        echo '<br />';
        echo self::MAIL;
    }

    public function __construct($prenom)
    {
        $this->_prenom = $prenom;
        self::$_id++;
        echo '<mark>'. self::$_id . '</mark><hr>';
    }
}

echo Membre::MAIL;
echo '<hr>';
echo Membre::SITE;
echo '<hr>';
$essai1 = new Membre('Alain');
$essai1->test();
$essai2 = new Membre('Rufus');
$essai2->test();
$essai3 = new Membre('Rintintin');
$essai3->test();
