<?php
declare(strict_types=1);

use App\Game\Game;
use App\Game\StoneScissorPaperGameStrategy;
use App\Player\RandomStrategy;
use App\Player\SimpleStrategy;
use App\Player\Player;
use PHPUnit\Framework\TestCase;

final class GameTest extends TestCase
{
    public function testGame(): void
    {
        $player1 = new Player('Vasa', new SimpleStrategy());
        $player2 = new Player('Peta', new SimpleStrategy());

        $game = new Game(new StoneScissorPaperGameStrategy(), $player1, $player2);

        $this->assertEquals(StoneScissorPaperGameStrategy::DEAT_HEAT, $game->run());
    }

    public function testGamePaperStone(): void
    {
        $stub = $this->createMock(RandomStrategy::class);
        $stub->method('play')
            ->willReturn(Player::STONE);

        $player1 = new Player('Vasa', new SimpleStrategy());
        $player2 = new Player('Peta', $stub);

        $game = new Game(new StoneScissorPaperGameStrategy(), $player1, $player2);

        $this->assertEquals($player1->getName(), $game->run());
    }

    public function testGameStoneScissor(): void
    {
        $stubStone = $this->createMock(RandomStrategy::class);
        $stubStone->method('play')
            ->willReturn(Player::STONE);

        $stubScissor = $this->createMock(RandomStrategy::class);
        $stubScissor->method('play')
            ->willReturn(Player::SCISSORS);

        $player1 = new Player('Vasa', $stubScissor);
        $player2 = new Player('Peta', $stubStone);

        $game = new Game(new StoneScissorPaperGameStrategy(), $player1, $player2);
        $this->assertEquals($player2->getName(), $game->run());
    }

    public function testGameScissorPaper()
    {
        $stubScissor = $this->createMock(RandomStrategy::class);
        $stubScissor->method('play')
            ->willReturn(Player::SCISSORS);

        $stubPaper = $this->createMock(RandomStrategy::class);
        $stubPaper->method('play')
            ->willReturn(Player::PAPER);

        $player1 = new Player('Vasa', $stubScissor);
        $player2 = new Player('Peta', $stubPaper);

        $game = new Game(new StoneScissorPaperGameStrategy(), $player1, $player2);
        $this->assertEquals($player1->getName(), $game->run());
    }
}
