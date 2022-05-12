<?php
require_once("./Characters/Mage.php");
require_once("./Characters/Priest.php");
require_once("./Characters/Warrior.php");

class Player
{
    private $characters = array();
    private $name;

    public function __construct($number)
    {
        echo "Player " . $number . ", choose your name" . PHP_EOL;
        while (!$this->name = readline("My name is "))
        {
            echo "Please choose a name" . PHP_EOL;
        }
        echo(
            "Choose a class between: Warrior, Mage or Priest:" . PHP_EOL . PHP_EOL .
            "******************************************". PHP_EOL .
            "Warrior:" . PHP_EOL .
            "HP: 30" . PHP_EOL . 
            "ATQ : 5" . PHP_EOL . 
            "SPD : 6" . PHP_EOL . 
            "Special : can reduce damage taken" . PHP_EOL .
            "******************************************". PHP_EOL .
            "Mage:" . PHP_EOL .
            "HP: 20" . PHP_EOL . 
            "ATQ : 6" . PHP_EOL . 
            "SPD : 5" . PHP_EOL . 
            "Special : inflict 12 damage" . PHP_EOL .
            "******************************************". PHP_EOL .
            "Priest:" . PHP_EOL .
            "HP: 22" . PHP_EOL . 
            "ATQ : 3" . PHP_EOL . 
            "SPD : 4" . PHP_EOL . 
            "Special : Heals 8 HP" . PHP_EOL .
            "******************************************". PHP_EOL
        );
        $characters = array();
        for ($i = 1; $i <= 3 ; $i++)
        {
            echo "Choise n°" . $i . PHP_EOL;
            while (!in_array($choise = readline("I choose "), array("Mage", "Warrior", "Priest")))
            {
                echo "You must choose between Warrior, Priest or Mage" . PHP_EOL;
            }
            array_push($characters, new $choise);
        }
        $this->characters = $this->sortCharacters($characters);
        echo PHP_EOL . "Player ". $number ." created !" . PHP_EOL;
        sleep(3);
        system("clear");
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

    public function getCharacter($index)
    {
        if (count($this->characters) > $index)
        {
            return $this->characters[$index];
        }
    }

    public function showCharacters()
    {
        foreach($this->characters as $character)
        {
            echo "**************************************" . PHP_EOL;
            $character->showCharacter();
        }
        echo "**************************************" . PHP_EOL;
    }
}
