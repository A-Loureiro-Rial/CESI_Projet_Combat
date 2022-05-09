<?php
namespace Characters;

class Mage extends Character
{
    private $hp = 20;
    private $atq = 6;
    private $spd = 5;

    public function useSpecial(Character $target)
    {
        $target->setHp($target->getHp() - ($this->atq * 2));
        $this->setSpecial(2);
    }
}