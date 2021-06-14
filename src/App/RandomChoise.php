<?php

namespace App;


class RandomChoise implements IPlayerStrategy
{
    public function play(): int
    {
        return random_int(0, 2);
    }
}