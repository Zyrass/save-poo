<?php

interface MoveInterface
{
    function deplacement();
    function getPosition();
}


class Homme implements MoveInterface
{
    private $_nom;
    private $_prenom;
}

class Velo implements MoveInterface
{
    private $_nombre_de_vitesse;
    private $_taille;
}

