<?php
use PHPUnit\Framework\TestCase;

class WarriorTest extends TestCase
{
    public function testWarriorParentClass()
    {
        $this->assertEquals("Character", get_parent_class(new Warrior));
    }

    public function testWarriorStats()
    {
        $warrior = new Warrior;
        $this->assertEquals(30, $warrior->getHp());
        $this->assertEquals(5, $warrior->getAtq());
        $this->assertEquals(6, $warrior->getSpd());
    }

    public function testWarriorSpecial()
    {
        $warrior = new Warrior;
        $warrior->useSpecial();
        $this->assertEquals(2, $warrior->getSpecial());
        $warrior->takeDamage(10);
        $this->assertEquals(25, $warrior->getHp());
    }
}