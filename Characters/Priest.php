<?php

require_once("Character.php");

class Priest extends Character
{
    public function __construct()
    {
        $this->hp = 22;
        $this->atq = 3;
        $this->spd = 4;
    }
    public function useSpecial(Character $target)
    {
        $target->getHp() > 0 ? $target->setHp($target->getHp() + 8) : null;
        $this->setSpecial(2);
    }
}