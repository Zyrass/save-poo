<?php

namespace Zyrass\Info;

class Tata
{

    private $_tel = "06.83.13.88.45";
    private $_info = 'Lorem ipsum blablabla';

    public function __get($name)
    {
        $this->$name;
    }

    public function __set($name, $value)
    {
        $this->$name = $value;
    }

}