<?php
declare(strict_types=1);

namespace App\Player;

interface PlayerStrategyInterface
{
    const STONE = 'stone';
    const SCISSORS = 'scissors';
    const PAPER = 'paper';

    public function play(): string;
}