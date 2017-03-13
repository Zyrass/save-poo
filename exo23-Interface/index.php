<?php

/**
 * La fonction magique d'autoload permet de ne pas avoir à saisir 50 require.
 * A savoir elle ne prends pas le mot clé public au début !
 */
function __autoload($className){
    require_once $className . '.class.php';
}

