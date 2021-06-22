<?php
declare(strict_types=1);

namespace App\Game;

use App\Player\Player;

class Game
{
    private Player $player1;
    private Player $player2;
    private GameStrategyInterface $game;

    public function __construct(GameStrategyInterface $game, Player $player1, Player $player2)
    {
        $this->game = $game;
        $this->player1 = $player1;
        $this->player2 = $player2;
    }

    public function run(): ?Player
    {
        return $this->game->run($this->player1, $this->player2);
    }
}