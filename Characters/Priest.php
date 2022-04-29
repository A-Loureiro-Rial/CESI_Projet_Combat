<?php

namespace Characters;

class Priest extends Character
{
    private $hp = 22;
    private $atq = 3;
    private $spd = 4;

    public function useSpecial(Character $target)
    {
        $target->getHp() > 0 ? $target->setHp($target->getHp() + 8) : null;
        $this->setSpecial(2);
    }
}