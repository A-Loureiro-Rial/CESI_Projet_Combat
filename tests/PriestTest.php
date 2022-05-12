<?php
use PHPUnit\Framework\TestCase;

class PriestTest extends TestCase
{
    public function testPriestParentClass()
    {
        $this->assertEquals("Character", get_parent_class(new Priest));
    }

    public function testPriestStats()
    {
        $priest = new Priest;
        $this->assertEquals(22, $priest->getHp());
        $this->assertEquals(3, $priest->getAtq());
        $this->assertEquals(4, $priest->getSpd());
    }

    public function testPriestSpecial()
    {
        $priest = new Priest;
        $priest->useSpecial($priest);
        $this->assertEquals(30, $priest->getHp());
        $this->assertEquals(2, $priest->getSpecial());
    }
}