<?php

trait Tank
{
    private $_stuff = 'Equipement Royal';
}
trait Healer
{
    private $_stuff = 'Equipement Auto-Soignant';
}

class Guerrier
{
    use Tank,Healer;

    private $_nom;
}