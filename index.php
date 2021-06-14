<?php
namespace App;

require_once __DIR__ . '/vendor/autoload.php';

$player1 = new Player('Vasa', new SimpleChoise());
$player2 = new Player('Peta', new RandomChoise());

$game = new Game(new StoneScissorPaperGameStrategy(), $player1, $player2);

$result = [];

for ($i = 0; $i < 10; $i++) {
    $winnerName = $game->run();
    if(isset($result[$winnerName])) {
        $result[$winnerName]++;
    } else {
        $result[$winnerName] = 1;
    }
}

foreach ($result as $player => $value)
{
    echo sprintf("\nPlayer %s wins %s times", $player, $value);
}

