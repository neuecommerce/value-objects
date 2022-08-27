<?php

declare(strict_types = 1);

namespace NeueCommerce\ValueObjects\Exceptions;

use Exception;

class InvalidPhoneNumberException extends Exception
{
    public function __construct(Exception $e)
    {
        parent::__construct($e->getMessage());
    }
}
