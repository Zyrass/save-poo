<?php

class Papa
{
    private $_prenom = 'Alain';
    private $_age = 32;

    public function __construct(string $p, int $a)
    {
        $this->_prenom = $p;
        $this->_age = $a;
    }
}

class Enfant extends Papa
{
    public function __construct(string $p, int $a)
    {
        parent::__construct($p, $a);
    }
}

$sheryle = new Enfant('Sheryle', 7);
var_dump($sheryle);
