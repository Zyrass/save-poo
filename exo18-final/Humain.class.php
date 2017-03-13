<?php

/**
 * La classe final héritera de ces parents et arrières parents mais elle n'aura pas de déscendance.
 */

abstract class Race
{
    protected $_sex;
}

class Chat extends Race
{

}

final class Chaton extends Chat
{

}

class Chien extends Race
{

}

final class Chiot extends Chien
{

}
