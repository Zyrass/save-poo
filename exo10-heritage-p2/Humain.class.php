<?php

class Humain
{
    private $_lastname;
    private $_firstname;
    private $_dob;
    private $_sex;
    private $_city;
    private $_cp;
    private $_phone;

    public function getLastname() {
        $lastname = $this->_lastname;
        return $lastname;
    }
    public function getFirstname() {
        $firstname = $this->_firstname;
        return $firstname;
    }
    public function getDob() {
        $dob = $this->_dob;
        return $dob;
    }
    public function getSex() {
        $sex = $this->_sex;
        return $sex;
    }
    public function getCity() {
        $city = $this->_city;
        return $city;
    }
    public function getCp() {
        $cp = $this->_cp;
        return $cp;
    }
    public function getTel() {
        $phone = $this->_phone;
        return $phone;
    }

    public function setLastname($lastname) {
        $this->_lastname = $lastname;
    }
    public function setFirstname($firstname) {
        $this->_firstname = $firstname;
    }
    public function setDob($dob) {
        $this->_dob = $dob;
    }
    public function setSex($sex) {
         $this->_sex = $sex;
    }
    public function setCity($city) {
        $this->_city = $city;
    }
    public function setCp(int $cp) {
        $this->_cp = $cp;
    }
    public function setTel($phone) {
        $this->_phone = $phone;
    }
}

class Homme extends Humain
{
    public function __construct(string $nom, string $prenom, $dob = '', $sex = '', $city = '',$cp = null, $phone = '')
    {
        $this->_lastname = $nom;
        $this->_firstname = $prenom;
        $this->_dob = $dob;
        $this->_sex = $sex;
        $this->_city = $city;
        $this->_cp = $cp;
        $this->_phone = $phone;
    }
}
class Femme extends Humain
{
    public function __construct(string $nom, string $prenom, $dob = '', $sex = '', $city = '',$cp = null, $phone = '')
    {
        $this->_lastname = $nom;
        $this->_firstname = $prenom;
        $this->_dob = $dob;
        $this->_sex = $sex;
        $this->_city = $city;
        $this->_cp = $cp;
        $this->_phone = $phone;
    }
}

echo '<h1>La programmation orienté objet (POO) - Héritage (Partie 2) - <mark>Encapsulation</mark></h1>';
echo '<h2>/!\ J\'ai déplacer le constructeur dans chaque classe afin de voir le comportement de la visibilitée <mark>private</mark> /!\</h2>';
$myFirstHomme = new Homme("Guillon", "Alain");
echo '<h2>Voici le contenu de mon instanciation de ma classe <mark>Homme</mark></h2>';
echo '<pre>'.var_dump($myFirstHomme).'</pre>';
echo '<h3>Grâce aux propriétées qui sont private et surtout grâce aux getters qui sont définit dans ma class Humain. <mark>J\'utilise le constructeur de la classe Humain dans la class Homme et Femme</mark></h3>';
echo '<ul>
        <li>' . $myFirstHomme->getLastname() . '</li>
        <li>' . $myFirstHomme->getFirstname() . '</li>
        <li>' . $myFirstHomme->getDob() . '</li>
        <li>' . $myFirstHomme->getSex() . '</li>
        <li>' . $myFirstHomme->getCity() . '</li>
        <li>' . $myFirstHomme->getCp() . '</li>
        <li>' . $myFirstHomme->getTel() . '</li>
      </ul>';
echo '<h2>Voici le même tableau avec les informations saisies.</h2>';
echo '<pre>'.var_dump($myFirstHomme).'</pre>';

echo '<hr>';

$mySecondHomme = new Femme("Ward", "Susane", '1975-01-01', 'Femme', 'New York');
echo '<h2>Voici le contenu de ma 1ère instanciation de ma classe <mark>Femme</mark></h2>';
echo '<pre>'.var_dump($mySecondHomme).'</pre>';
echo '<h3>Comme pour la classe Homme, je peux récupérer le contenu de ma classe Femme. <mark>J\'utilise le constructeur de la classe Humain</mark></h3>';
echo '<ul>
        <li>' . $mySecondHomme->getLastname() . '</li>
        <li>' . $mySecondHomme->getFirstname() . '</li>
        <li>' . $mySecondHomme->getDob() . '</li>
        <li>' . $mySecondHomme->getSex() . '</li>
        <li>' . $mySecondHomme->getCity() . '</li>
        <li>' . $mySecondHomme->getCp() . '</li>
        <li>' . $mySecondHomme->getTel() . '</li>
      </ul>';
echo '<h2>A présent, voici le même tableau d\'objet avec les informations saisie grâce aux setters</h2>';
echo '<pre>'.var_dump($mySecondHomme).'</pre>';
echo '<mark>Ici, pour les 2 classes, il nous est impossible de récupérer le contenu de la classe Humain</mark>';
