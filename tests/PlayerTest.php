<?php declare(strict_types=1);

use App\Player\Player;
use App\Player\PlayerStrategyInterface;
use PHPUnit\Framework\TestCase;
use App\Player\RandomStrategy;
use App\Player\SimpleStrategy;

final class PlayerTest extends TestCase
{
    public function testCreatePlayerSimpleStrategy(): void
    {
        $this->assertInstanceOf(Player::class, (new Player('Vasa', new SimpleStrategy())));
    }

    public function testCreatePlayerRandomStrategy(): void
    {
        $this->assertInstanceOf(Player::class, (new Player('Vasa', new RandomStrategy())));
    }

    public function testPlayerGetName(): void
    {
        $player = new Player('Vasa', new SimpleStrategy());
        $this->assertEquals('Vasa', $player->getName());
    }

    public function testPlayerPlayWithSimpleStrategy(): void
    {
        $player = new Player('Vasa', new SimpleStrategy());
        $this->assertEquals(PlayerStrategyInterface::PAPER, $player->play());
    }

    public function testPlayerPlayWithWrongSimpleStrategy(): void
    {
        $player = new Player('Vasa', new SimpleStrategy());
        $this->assertNotEquals('test', $player->play());
    }
}
