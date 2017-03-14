<?php

require __DIR__ . '/vendor/autoload.php';

use Zyrass\Info\Toto;
use Zyrass\Info\Tata;
/**
 * Installer 2 packages !
 * ----------------------------------------------------------
 * - Var_dumper [X]
 * - Faker [X]
 */

$myToto = new Toto;
var_dump($myToto);
echo '<hr>';
$myTata = new Tata;
dump($myTata);
echo '<hr>';

$faker = Faker\Factory::create('fr_FR'); // create a French faker
for ($i=0; $i < 20; $i++) {
    echo $faker->name, "<br />";
}
dump($faker);