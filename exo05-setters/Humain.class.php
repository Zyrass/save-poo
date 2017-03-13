<?php

/**
 * Class Humain
 * ----------------------------------------------------------
 * Les setters sont des methods qui permettent de modifier le contenu
 * Chaque propriété doit avoir son propre setter
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


    /**
     * Les setters se placent après les getters
     */
    public function setLastname($lastname) {
        $this->_lastname = $lastname;
    }
    public function getFirstname($firstname) {
        $this->_firstname = $firstname;
    }
    public function getDob($dob) {
        $this->_dob = $dob;
    }
    public function getSex($sex) {
         = $this->_sex = $sex;
    }
    public function getCity($city) {
        $this->_city = $city;
    }
    public function getCp($cp) {
        $this->_cp = $cp;
    }
    public function getTel($phone) {
        $this->_phone = $phone;
    }
}