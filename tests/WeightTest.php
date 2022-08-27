<?php

declare(strict_types = 1);

namespace NeueCommerce\ValueObjects\Tests;

use InvalidArgumentException;
use NeueCommerce\ValueObjects\Weight;
use PHPUnit\Framework\TestCase;

class WeightTest extends TestCase
{
    /**
     * @test
     */
    public function can_instantiate_from_the_constructor()
    {
        $weight = new Weight(
            value: 10,
        );

        $this->assertSame(10, $weight->value);
    }

    /**
     * @test
     */
    public function an_exception_will_be_thrown_if_the_value_has_negative_value()
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Weight has invalid value');

        new Weight(
            value: -1,
        );
    }
}
