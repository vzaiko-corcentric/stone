<?php
declare(strict_types=1);

namespace App\Player;

class Player implements PlayerStrategyInterface
{
    /**
     * @var string
     */
    protected string $name;

    /**
     * @var PlayerStrategyInterface
     */
    protected PlayerStrategyInterface $playerStrategy;

    /**
     * Player constructor.
     * @param string $name
     * @param PlayerStrategyInterface $playerStrategy
     */
    public function __construct(string $name, PlayerStrategyInterface $playerStrategy)
    {
        $this->name = $name;
        $this->playerStrategy = $playerStrategy;
    }

    public function play(): string
    {
        return $this->playerStrategy->play();
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
}