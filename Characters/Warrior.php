<?php

require_once("Character.php");

class Warrior extends Character
{
    private $shield = false;

    public function __construct()
    {
        $this->hp = 30;
        $this->atq = 5;
        $this->spd = 6;
    }

    public function setHp($hp)
    {
        if ($this->shield)
        {
            $this->hp -= $hp / 2;
            $this->shield = false;
        }
        else
        {
            $this->hp -= $hp;
        }
    }

    public function useSpecial()
    {
        $this->shield = true;
        $this->special = 2;
    }
}