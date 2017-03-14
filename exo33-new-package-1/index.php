<?php

require __DIR__ . '/vendor/autoload.php';

use Zyrass\Info\Toto;
use Zyrass\Info\Tata;
/**
 * Installer 2 packages !
 * ----------------------------------------------------------
 * - Var_dumper [X]
 * - Faker []
 */

$myToto = new Toto;
var_dump($myToto);
echo '<hr>';
$myTata = new Tata;
dump($myTata);