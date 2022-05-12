<?php
use PHPUnit\Framework\TestCase;

class CharacterTest extends TestCase
{
    public function testSetHp()
    {
        $character = new Warrior;
        $character->setHp(15);
        $this->assertTrue($character->getHp() == 15);
    }

    public function testGetAtq()
    {
        $character = new Mage;
        $this->assertTrue($character->getAtq() == 6);
    }
    

    public function testGetSpd()
    {
        $character = new Priest;
        $this->assertTrue($character->getSpd() == 4);
    }

    public function testShowCharacter()
    {
        
    }
}