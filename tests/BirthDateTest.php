<?php

declare(strict_types = 1);

namespace NeueCommerce\ValueObjects\Tests;

use Carbon\Carbon;
use NeueCommerce\ValueObjects\BirthDate;
use PHPUnit\Framework\TestCase;

class BirthDateTest extends TestCase
{
    /**
     * @test
     */
    public function can_instantiate_from_the_constructor()
    {
        $birthDate = new BirthDate(2022, 1, 1);

        $this->assertSame(2022, $birthDate->year);
        $this->assertSame(1, $birthDate->month);
        $this->assertSame(1, $birthDate->day);
        $this->assertSame('2022-01-01', (string) $birthDate);
        $this->assertSame('2022-01-01', (string) $birthDate->date->format('Y-m-d'));
    }

    /**
     * @test
     */
    public function can_instantiate_from_a_carbon_instance()
    {
        $carbon = Carbon::parse('2022-1-1');

        $birthDate = BirthDate::fromCarbon($carbon);

        $this->assertSame(2022, $birthDate->year);
        $this->assertSame(1, $birthDate->month);
        $this->assertSame(1, $birthDate->day);
        $this->assertSame('2022-01-01', (string) $birthDate);
        $this->assertSame('2022-01-01', (string) $birthDate->date->format('Y-m-d'));
    }

    /**
     * @test
     */
    public function can_instantiate_from_a_string()
    {
        $birthDate = BirthDate::fromString('2022-1-1');

        $this->assertSame(2022, $birthDate->year);
        $this->assertSame(1, $birthDate->month);
        $this->assertSame(1, $birthDate->day);
        $this->assertSame('2022-01-01', (string) $birthDate);
        $this->assertSame('2022-01-01', (string) $birthDate->date->format('Y-m-d'));
    }
}
