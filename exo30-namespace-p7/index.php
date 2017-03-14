<?php

require 'vendor/Zyrass/Info/Toto.class.php';

use Zyrass\Info\Toto;
/**
 * Conception d'une hierarchie par dossier
 * ------------------------
 * vendor -> dossier par défaut de composer
 * Zyrass -> auteur
 * Info   -> nom du projet
 * Toto   -> nom de la class
 */

$myToto = new Toto;
var_dump($myToto);