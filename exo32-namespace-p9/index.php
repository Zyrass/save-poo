<?php

require __DIR__ . '/vendor/autoload.php';

use Zyrass\Info\Toto;
/**
 * Les fichiers généré on remplaceme maintenant notre require par : __DIR__ suivi du chemin vers le fichier
 * autoload.php qui fera le travail pour nous et ainsi nous éviter d'avoir 36 Require !!
 *
 * ----------------------------------------------
 * Si entre temps on regénère des répertoire ou autre ne pas oublier d'éditer le fichier composer.json,
 * rajouter les chemins et relancer dans un terminal la ligne de commande :
 * composer dump_autoload -o pour regénérer un autoload.php propre.
 */

$myToto = new Toto;
var_dump($myToto);