<?php
use PHPUnit\Framework\TestCase;

class MageTest extends TestCase
{
    public function testMageParentClass()
    {
        $this->assertEquals("Character", get_parent_class(new Mage));
    }

    public function testMageStats()
    {
        $mage = new Mage;
        $this->assertEquals(20, $mage->getHp());
        $this->assertEquals(6, $mage->getAtq());
        $this->assertEquals(5, $mage->getSpd());
    }

    public function testMageSpecial()
    {
        $mage = new Mage;
        $target = new Warrior;
        $mage->useSpecial($target);
        $this->assertEquals(2, $mage->getSpecial());
        $this->assertEquals(18, $target->getHp());
    }
}