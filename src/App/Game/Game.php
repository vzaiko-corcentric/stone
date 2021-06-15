<?php
declare(strict_types=1);

namespace App\Game;

use App\Player\Player;

class Game
{
    /**
     * @var Player
     */
    private Player $player1;

    /**
     * @var Player
     */
    private Player $player2;

    /**
     * @var GameStrategyInterface
     */
    private GameStrategyInterface $game;

    /**
     * Game constructor.
     * @param GameStrategyInterface $game
     * @param Player $player1
     * @param Player $player2
     */
    public function __construct(GameStrategyInterface $game, Player $player1, Player $player2)
    {
        $this->game = $game;
        $this->player1 = $player1;
        $this->player2 = $player2;
    }

    public function run(): ?string
    {
        return $this->game->run($this->player1, $this->player2);
    }
}