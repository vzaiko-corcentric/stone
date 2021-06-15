<?php declare(strict_types=1);

use App\Player\PlayerStrategyInterface;
use App\Player\RandomStrategy;
use App\Player\SimpleStrategy;
use PHPUnit\Framework\TestCase;

final class PlayerStrategyTest extends TestCase
{
    public function testPlayerPlaySimpleStrategy(): void
    {
        $this->assertEquals(PlayerStrategyInterface::PAPER ,(new SimpleStrategy())->play());
    }

    public function testPlayerPlayWrongSimpleStrategy(): void
    {
        $this->assertNotEquals(PlayerStrategyInterface::SCISSORS, (new SimpleStrategy())->play());
    }

    public function testPlayerPlayRandomStrategy(): void
    {
        $this->assertContains((new RandomStrategy())->play(), [
            PlayerStrategyInterface::STONE,
            PlayerStrategyInterface::SCISSORS,
            PlayerStrategyInterface::PAPER]
        );
    }

    public function testPlayerPlayWrongRandomStrategy(): void
    {
        $this->assertNotContains((new RandomStrategy())->play(), ['some_test', 4]);
    }
}
