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

    public function takeDamage($dmg)
    {
        $this->hp -= $dmg;
        $this->hp = $this->hp < 0 ? 0 : $this->hp;
    }

    public function showCharacter()
    {
        echo(gettype($this) . PHP_EOL .
            "HP : " . $this->getHp() . PHP_EOL .
            "ATQ : " . $this->getAtq() . PHP_EOL .
            "SPD : " . $this->getSpd() . PHP_EOL);
    }
}
