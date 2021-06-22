<?php declare(strict_types=1);

use App\Enum\GameActionEnum;
use App\Player\RandomStrategy;
use App\Player\SimpleStrategy;
use PHPUnit\Framework\TestCase;

final class PlayerStrategyTest extends TestCase
{
    public function testPlayerPlaySimpleStrategy(): void
    {
        $this->assertEquals(GameActionEnum::PAPER() ,(new SimpleStrategy())->play());
    }

    public function testPlayerPlayWrongSimpleStrategy(): void
    {
        $this->assertNotEquals(GameActionEnum::SCISSORS(), (new SimpleStrategy())->play());
    }

    public function testPlayerPlayWrongRandomStrategy(): void
    {
        $this->assertNotContains((new RandomStrategy())->play(), ['some_test', 4]);
    }
}
