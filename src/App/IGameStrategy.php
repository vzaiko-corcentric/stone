<?php


namespace App;


interface IGameStrategy
{
    public function run(Player $player1, Player $player2): ?string;
}