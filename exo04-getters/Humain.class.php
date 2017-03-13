<?php

/**
 * Class Humain
 * ----------------------------------------------------------
 * Les getters sont des methods qui permettent seulement de voir le contenu.
 * Chaque propriété doit avoir son propre getter
 */
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
}