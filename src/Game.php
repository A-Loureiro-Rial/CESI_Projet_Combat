<?php
require_once("Player.php");

class Game
{
    private $player1;
    private $player2;
    private $first;
    private $over;
    private $rounds;

    public function __construct()
    {
        $this->player1 = new Player(1);
        $this->player2 = new Player(2);
    }

    private function checkOver()
    {
        $over = count($this->player1->getCharacters()) == 0 ? 2 : 0;
        $over = count($this->player2->getCharacters()) == 0 ? 1 : 0;
        return $over;
    }

    private function initializeGame()
    {
        $this->rounds = 0;
        $this->over = 0;
        $this->first = random_int(1, 2);
    }

    private function turn($number, $player)
    {
        echo("Turn " . $this->round * 3 + $number + 1 . PHP_EOL .
        "**********************************************" . PHP_EOL .
        $player ."'s turn" . PHP_EOL .
        "**********************************************" . PHP_EOL);
        $this->$player->getCharacter($number)->showCharacter();
        echo("**********************************************" . PHP_EOL);
        $this->over = $this->checkOver();
    }

    public function play()
    {
        $this->initializeGame();
        while (!$this->over)
        {
            for ($i = 0; $i < 3; $i++)
            {
                $this->first == 1 ? $this->turn($i, "player1") : $this->turn($i, "player2");
                $this->first == 1 ? $this->turn($i, "player2") : $this->turn($i, "player1");
            }
            $this->round++;
        }
    }
}

$game = new Game();
$game->play();