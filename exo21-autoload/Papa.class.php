<?php
class Papa
{
    private $_prenom = 'Alain';
    private $_nom = ' Guillon';
    private $_age = 32;

    public function __get($name){
        echo $this->$name;
    }

    public function __set($name, $value){
        $this->$name = $value;
    }

    public function __isset($name)
    {
        return isset($this->$name);
    }

    public function __unset($name)
    {
        unset($this->$name);
    }
}