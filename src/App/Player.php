<?php


namespace App;


class Player implements IPlayerStrategy
{
    /**
     * @var string
     */
    protected string $name;

    /**
     * @var IPlayerStrategy
     */
    protected IPlayerStrategy $playerStrategy;

    /**
     * Player constructor.
     * @param string $name
     * @param IPlayerStrategy $playerStrategy
     */
    public function __construct(string $name, IPlayerStrategy $playerStrategy)
    {
        $this->name = $name;
        $this->playerStrategy = $playerStrategy;

    }

    public function play(): int
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