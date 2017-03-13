<?php

require 'Toto.class.php';

/**
 * Vu que j'ai déclarer un namespace, je vais avoir une erreur sachant que pour php,
 * il pense que ma class Toto se situe dans un namspace global.
 * ------------------------------------------------------------------------
 * Pour celà 2 solutions. (Voir exo 26)
 */

$myToto = new Toto;

var_dump($myToto);