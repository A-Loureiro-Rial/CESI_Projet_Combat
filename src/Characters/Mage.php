<?php

require_once("Character.php");

class Mage extends Character
{
    public function __construct()
    {
        $this->hp = 20;
        $this->atq = 6;
        $this->spd = 5;
    }

    public function useSpecial(Character $target)
    {
        $target->setHp($target->getHp() - ($this->atq * 2));
        $this->setSpecial(2);
    }

    public function reset()
    {
        $this->setHP(20);
        $this->setSpecial(0);
    }
}