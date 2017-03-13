<?php

/**
 * La fonction magique d'autoload permet de ne pas avoir à saisir 50 require.
 * A savoir elle ne prends pas le mot clé public au début !
 */
function __autoload($className){
    require_once $className . '.class.php';
}


$papa = new Papa();
$papa->_prenom;
$papa->_nom;
echo '<hr>';
echo '<p>Pour l\'édition rien de plus simple... </p>';
$papa->_prenom = 'John';
$papa->_nom = ' Doe';
$papa->_prenom;
$papa->_nom;

if (isset($papa->_prenom)){
    echo 'Ce prénom existe';
} else {
    echo 'Ce prenom n\'existe pas !';
}
echo '<hr>';
echo '<h2>Avant le UNSET</h2>';
var_dump($papa);
unset($papa->_prenom);
echo '<h2>Après le UNSET</h2>';
var_dump($papa);