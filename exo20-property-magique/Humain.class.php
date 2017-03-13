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
$papa = new Papa();
$papa->_prenom;
$papa->_nom;
echo '<hr>';
echo '<p>Pour l\'édition rien de plus simple... </p>';
$papa->_prenom = 'John';
$papa->_nom = ' Doe';
$papa->_prenom;
$papa->_nom;

if (isset($papa->_prenom)){
    echo 'Ce prénom existe';
} else {
    echo 'Ce prenom n\'existe pas !';
}
echo '<hr>';
echo '<h2>Avant le UNSET</h2>';
var_dump($papa);
unset($papa->_prenom);
echo '<h2>Après le UNSET</h2>';
var_dump($papa);