<?php

class Membre
{
    /**
     * Opérateur de résolution de porter. (::)
     */
    const MON_E_MAIL = 'zyrass@outlook.fr';
    const SITE = '<a href=\'https://fr.wikibooks.org/wiki/Programmation_PHP/Programmation_orient%C3%A9e_objet\'>Voir le site...</a>';
}

echo Membre::MON_E_MAIL;
echo '<hr>';
echo Membre::SITE;
echo '<hr>';