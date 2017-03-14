<?php

require __DIR__ . '/vendor/autoload.php';

use Zyrass\Info\Toto;
use Zyrass\Info\Tata;
/**
 * Une fois Les fichiers généré, on remplace maintenant notre require par : __DIR__ suivi du chemin vers le fichier
 * autoload.php qui fera le travail pour nous et ainsi nous éviter d'avoir 36 Require !!
 *
 * ----------------------------------------------
 * Si entre temps on regénère des répertoires ou autre ne pas oublier d'éditer le fichier composer.json,
 * rajouter les chemins et relancer dans un terminal la ligne de commande :
 * composer dump_autoload -o pour regénérer un autoload.php propre.
 */

$myToto = new Toto;
var_dump($myToto);
echo '<hr>';
$myTata = new Tata;
var_dump($myTata);