<?php

namespace Characters;

class Warrior extends Character
{
    private $hp = 30;
    private $atq = 5;
    private $spd = 6;
    private $shield = false;

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