<?php
declare(strict_types=1);
namespace App;
require_once __DIR__ . '/vendor/autoload.php';

use App\Game\Game;
use App\Game\StoneScissorPaperGameStrategy;
use App\Player\Player;
use App\Player\RandomStrategy;
use App\Player\SimpleStrategy;

$game = new Game(
    new StoneScissorPaperGameStrategy(),
    new Player('Vasa', new SimpleStrategy()),
    new Player('Peta', new RandomStrategy())
);

$result = [];

for ($i = 0; $i < 100; $i++) {
    $winnerName = $game->run();
    if (isset($result[$winnerName])) {
        $result[$winnerName]++;
    } else {
        $result[$winnerName] = 1;
    }
}

foreach ($result as $player => $value) {
    echo sprintf("\nPlayer %s wins %s times", $player, $value);
}

