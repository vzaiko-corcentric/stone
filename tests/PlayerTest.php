<?php declare(strict_types=1);

use App\Enum\GameActionEnum;
use App\Player\Player;
use PHPUnit\Framework\TestCase;
use App\Player\SimpleStrategy;

final class PlayerTest extends TestCase
{
    public function testPlayerGetName(): void
    {
        $player = new Player('Vasa', new SimpleStrategy());
        $this->assertEquals('Vasa', $player->getName());
    }

    public function testPlayerPlayWithSimpleStrategy(): void
    {
        $player = new Player('Vasa', new SimpleStrategy());
        $this->assertEquals(GameActionEnum::PAPER(), $player->go());
    }

    public function testPlayerPlayWithWrongSimpleStrategy(): void
    {
        $player = new Player('Vasa', new SimpleStrategy());
        $this->assertNotEquals('test', $player->go());
    }
}
