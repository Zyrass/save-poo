<?php

class Humain
{
    public $_lastname;
    public $_firstname;
    public $_dob;
    public $_sex;
    public $_city;
    public $_cp;
    public $_phone;

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

echo '<h1>La programmation orienté objet (POO)</h1>';
$myFirstHomme = new Humain;
echo '<h2>Voici le contenu de mon instanciation de ma classe Humain</h2>';
echo '<pre>'.var_dump($myFirstHomme).'</pre>';
echo '<h3>Grâce aux setters, je redéfinis le contenu de mon objet en lui spécifiant des valeurs</h3>';
echo '<ul>
        <li>' . strip_tags(htmlspecialchars($myFirstHomme->setLastname("Guillon"))) . $myFirstHomme->getLastname() . '</li>
        <li>' . strip_tags(htmlspecialchars($myFirstHomme->setFirstname("Alain"))) . $myFirstHomme->getFirstname() . '</li>
        <li>' . $myFirstHomme->setDob("1984-07-01") . $myFirstHomme->getDob() . '</li>
        <li>' . strip_tags(htmlspecialchars($myFirstHomme->setSex("Masculin"))) . $myFirstHomme->getSex() . '</li>
        <li>' . strip_tags(htmlspecialchars($myFirstHomme->setCity("Meyzieu"))) . $myFirstHomme->getCity() . '</li>
        <li>' . strip_tags(htmlspecialchars($myFirstHomme->setCp(69330))) . $myFirstHomme->getCp() . '</li>
        <li>' . strip_tags(htmlspecialchars($myFirstHomme->setTel("06-83-13-88-45"))) . $myFirstHomme->getTel() . '</li>
      </ul>';
echo '<h2>A présent, voici le même tableau d\'objet avec les informations saisie grâce aux setters</h2>';
echo '<pre>'.var_dump($myFirstHomme).'</pre>';

echo '<hr>';

$mySecondHomme = new Humain;
echo '<h2>Voici le contenu de ma 2ème instanciation de ma classe Humain</h2>';
echo '<pre>'.var_dump($mySecondHomme).'</pre>';
echo '<h3>Grâce aux setters, je redéfinis le contenu de mon 2ème objets en lui spécifiant des valeurs</h3>';
echo '<ul>
        <li>' . strip_tags(htmlspecialchars($mySecondHomme->setLastname("Boyer"))) . $mySecondHomme->getLastname() . '</li>
        <li>' . strip_tags(htmlspecialchars($mySecondHomme->setFirstname("Julien"))) . $mySecondHomme->getFirstname() . '</li>
        <li>' . $mySecondHomme->setDob("1990-01-01") . $mySecondHomme->getDob() . '</li>
        <li>' . strip_tags(htmlspecialchars($mySecondHomme->setSex("Masculin"))) . $mySecondHomme->getSex() . '</li>
        <li>' . strip_tags(htmlspecialchars($mySecondHomme->setCity("Décines"))) . $mySecondHomme->getCity() . '</li>
        <li>' . strip_tags(htmlspecialchars($mySecondHomme->setCp(69150))) . $mySecondHomme->getCp() . '</li>
        <li>' . strip_tags(htmlspecialchars($mySecondHomme->setTel("06-00-00-00-00"))) . $mySecondHomme->getTel() . '</li>
      </ul>';
echo '<h2>A présent, voici le même tableau d\'objet avec les informations saisie grâce aux setters</h2>';
echo '<pre>'.var_dump($mySecondHomme).'</pre>';
echo '<mark>Ainsi, ma class Humain me permet de récupérer une structure, de l\'adapter selon mes besoin sans 
retoucher cette dernière. De plus, via ce squelette, je peux recréer indéfiniment cet objet avec des valeurs différente à chaque fois.</mark>';
