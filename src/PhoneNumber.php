<?php

declare(strict_types = 1);

namespace NeueCommerce\ValueObjects;

use Exception;
use libphonenumber\NumberParseException;
use libphonenumber\PhoneNumber as PhoneNumberProto;
use libphonenumber\PhoneNumberFormat;
use libphonenumber\PhoneNumberUtil;
use NeueCommerce\ValueObjects\Exceptions\InvalidPhoneNumberException;

final readonly class PhoneNumber
{
    private PhoneNumberUtil $util;

    private PhoneNumberProto $value;

    public int $countryCode;

    public string $number;

    public function __construct(
        private string $phoneNumber,
    ) {
        $this->util = PhoneNumberUtil::getInstance();

        try {
            $this->value = $this->util->parse($phoneNumber);
        } catch (NumberParseException $e) {
            $message = match (true) {
                $e->getCode() === 0 => 'The phone number is missing or has an invalid country code extension.',
                $e->getCode() === 1 => 'The phone number does not seem to be a phone number.',
                $e->getCode() === 3 => 'The phone number is too short to be a phone number.',
                $e->getCode() === 4 => 'The phone number is too long to be a phone number.',
            };

            throw new InvalidPhoneNumberException(new Exception($message));
        }

        if (! $this->util->isValidNumber($this->value)) {
            throw new InvalidPhoneNumberException(new Exception('The number does not seem to be a valid phone number.'));
        }

        $this->countryCode = $this->value->getCountryCode();

        $this->number = $this->value->getNationalNumber();
    }

    public function __toString(): string
    {
        return $this->util->format($this->value, PhoneNumberFormat::INTERNATIONAL);
    }
}
