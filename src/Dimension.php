<?php

declare(strict_types = 1);

namespace NeueCommerce\ValueObjects;

use InvalidArgumentException;

final readonly class Dimension
{
    public function __construct(
        public int $width,
        public int $height,
        public int $length,
    ) {
        match (true) {
            $this->width  <= 0 => throw new InvalidArgumentException('Width has invalid value'),
            $this->height <= 0 => throw new InvalidArgumentException('Height has invalid value'),
            $this->length <= 0 => throw new InvalidArgumentException('Length has invalid value'),
            default            => true,
        };
    }
}
