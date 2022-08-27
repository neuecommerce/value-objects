<?php

declare(strict_types = 1);

namespace NeueCommerce\ValueObjects\Tests;

use InvalidArgumentException;
use NeueCommerce\ValueObjects\Dimension;
use PHPUnit\Framework\TestCase;

class DimensionTest extends TestCase
{
    /**
     * @test
     */
    public function can_instantiate_from_the_constructor()
    {
        $dimension = new Dimension(
            width: 10,
            height: 20,
            length: 40,
        );

        $this->assertSame(10, $dimension->width);
        $this->assertSame(20, $dimension->height);
        $this->assertSame(40, $dimension->length);
    }

    /**
     * @test
     */
    public function an_exception_will_be_thrown_if_the_width_has_negative_value()
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Width has invalid value');

        new Dimension(
            width: -1,
            height: 10,
            length: 20,
        );
    }

    /**
     * @test
     */
    public function an_exception_will_be_thrown_if_the_height_has_negative_value()
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Height has invalid value');

        new Dimension(
            width: 10,
            height: -1,
            length: 20,
        );
    }

    /**
     * @test
     */
    public function an_exception_will_be_thrown_if_the_length_has_negative_value()
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Length has invalid value');

        new Dimension(
            width: 10,
            height: 20,
            length: -1,
        );
    }
}
