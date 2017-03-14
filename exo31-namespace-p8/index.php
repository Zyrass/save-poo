<?php

require 'vendor/Zyrass/Info/Toto.class.php';

use Zyrass\Info\Toto;

/**
 * Une fois le fichier composer.json créé,
 * on ouvre le terminal et on saisie :
 *
 * composer dump-autoload -o
 */

$myToto = new Toto;
var_dump($myToto);