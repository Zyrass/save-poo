<?php

require 'Toto.class.php';

use Zyrass\Info\Toto; /*as ZyrassToto;*/
/*use Super\Framework\Info\Toto;*/

/**
 * Imaginons qu'on va utiliser 2 classes portant le même nom..
 * On va se retrouver avec un problème.
 * ----------------------------------------------------------------
 * Comment savoir qu'elle classe utilisé ?
 * Et bien on peut comme avec MySQL créer des Alias !
 */

$myToto = new /*Zyrass*/Toto;

var_dump($myToto);