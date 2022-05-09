<?php
require_once("./Characters/Mage.php");
require_once("./Characters/Priest.php");
require_once("./Characters/Warrior.php");

class Player
{

    private $characters = array();
    private $name;

    public function __construct($name, $choises)
    {
        $this->name = $name;
        $this->characters = $this->sortCharacters($choises);
    }

    private function sortCharacters($characters)
    {
        $tmp = $characters;
        $sorted = array();
        while (count($tmp) > 0)
        {
            $high = 0;
            foreach ($tmp as $key => $value)
            {
                $value->getSpd() > $tmp[$high]->getSpd() ? $high = $key : null;
            }
            array_push($sorted, $tmp[$high]);
            array_splice($tmp, $high, 1);
        }
        return $sorted;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getCharacters()
    {
        return $this->characters;
    }
}