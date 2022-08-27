<?php

declare(strict_types = 1);

namespace NeueCommerce\ValueObjects;

use InvalidArgumentException;

final readonly class Weight
{
    public function __construct(
        public int $value,
    ) {
        if ($this->value <= 0) {
            throw new InvalidArgumentException('Weight has invalid value');
        }
    }
}
