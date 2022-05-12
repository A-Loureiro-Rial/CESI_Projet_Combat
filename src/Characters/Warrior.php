<?php

require_once("Character.php");

class Warrior extends Character
{
    protected $shield = false;

    public function __construct()
    {
        $this->hp = 30;
        $this->atq = 5;
        $this->spd = 6;
    }

    public function takeDamage($dmg)
    {
        if ($this->shield)
        {
            $this->hp -= $dmg / 2;
            $this->shield = false;
        }
        else
        {
            $this->hp -= $dmg;
        }
    }

    public function useSpecial()
    {
        $this->shield = true;
        $this->special = 2;
    }

    public function reset()
    {
        $this->setHP(30);
        $this->setSpecial(0);
        $this->shield = false;
    }
}