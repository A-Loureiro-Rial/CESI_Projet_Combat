<?php
namespace Characters;

abstract class Character
{
    private $hp;
    private $atq;
    private $spd;
    private $special = 0;

    public function getHp()
    {
        return $this->hp;
    }

    public function setHp($hp)
    {
        $this->hp = $hp;
    }

    public function getAtq()
    {
        return $this->atq;
    }

    public function getSpd()
    {
        return $this->spd;
    }

    public function getSpecial()
    {
        return $this->special;
    }

    public function setSpecial($cooldown)
    {
        $this->special = $cooldown;
    }
}
