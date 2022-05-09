<?php

abstract class Character
{
    protected $hp;
    protected $atq;
    protected $spd;
    protected $special = 0;

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
