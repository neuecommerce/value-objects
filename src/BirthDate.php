<?php

declare(strict_types = 1);

namespace NeueCommerce\ValueObjects;

use Carbon\Carbon;

final readonly class BirthDate
{
    public Carbon $date;

    public function __construct(
        public int $year,
        public int $month,
        public int $day,
    ) {
        $date = new Carbon();
        $date->setYear($this->year);
        $date->setMonth($this->month);
        $date->setDay($this->day);

        $this->date = $date;
    }

    public static function fromCarbon(Carbon $carbon): self
    {
        return new self(
            year: $carbon->year,
            month: $carbon->month,
            day: $carbon->day,
        );
    }

    public static function fromString(string $date): self
    {
        return self::fromCarbon(Carbon::parse($date));
    }

    public function __toString(): string
    {
        return $this->date->format('Y-m-d');
    }
}
