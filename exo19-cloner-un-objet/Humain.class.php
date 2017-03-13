<?php

/**
 * Cloner un objet permet de reprendre le même contenu avec juste la possibilité pour le second objet de modifier son propre contenu.
 */

class Papa
{
    private $_prenom = 'Alain';

    public function getPrenom(){
        echo $this->_prenom;
    }

    public function setPrenom($p){
        $this->_prenom = $p;
    }
}

$papa1 = new Papa();
var_dump($papa1);
echo '<hr>';
$papa2 = clone $papa1;
$papa2->setPrenom('Pierre');
var_dump($papa2);