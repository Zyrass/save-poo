<?php

require 'Toto.class.php';

/**
 * Les namespaces permettent de créer une hiérarchie pour organiser les fonctions, les classes, les interfaces et les constantes.
 * L'avantage, grâce au namespace nous n'auront aucun conflits avec les classes qui serait utiliser dans des framework.
 * Ainsi nous pourrions avoir 3x la même classe avec le même nom.
 * -----------------------------------------------------------------------
 * A savoir qu'il est tout a fait possible d'utiliser les namespaces pour le procédural.
 */

$myToto = new Toto;

var_dump($myToto);