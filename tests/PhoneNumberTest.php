<?php

declare(strict_types = 1);

namespace NeueCommerce\ValueObjects\Tests;

use NeueCommerce\ValueObjects\Exceptions\InvalidPhoneNumberException;
use NeueCommerce\ValueObjects\PhoneNumber;
use PHPUnit\Framework\TestCase;

class PhoneNumberTest extends TestCase
{
    /**
     * @test
     */
    public function can_instantiate_from_the_constructor()
    {
        $phoneNumber = new PhoneNumber('+351911234567');

        $this->assertSame(351, $phoneNumber->countryCode);
        $this->assertSame('911234567', $phoneNumber->number);
        $this->assertSame('+351 911 234 567', (string) $phoneNumber);
    }

    /**
     * @test
     */
    public function an_exception_will_be_thrown_if_the_country_code_is_missing()
    {
        $this->expectException(InvalidPhoneNumberException::class);
        $this->expectExceptionMessage('The phone number is missing or has an invalid country code extension.');

        new PhoneNumber('911234567');
    }

    /**
     * @test
     */
    public function an_exception_will_be_thrown_if_the_country_code_is_invalid()
    {
        $this->expectException(InvalidPhoneNumberException::class);
        $this->expectExceptionMessage('The phone number is missing or has an invalid country code extension.');

        new PhoneNumber('+000911234567');
    }

    /**
     * @test
     */
    public function an_exception_will_be_thrown_if_the_provided_number_is_not_a_number()
    {
        $this->expectException(InvalidPhoneNumberException::class);
        $this->expectExceptionMessage('The phone number does not seem to be a phone number.');

        new PhoneNumber('');
    }

    /**
     * @test
     */
    public function an_exception_will_be_thrown_if_the_number_provided_is_not_valid()
    {
        $this->expectException(InvalidPhoneNumberException::class);
        $this->expectExceptionMessage('The number does not seem to be a valid phone number.');

        new PhoneNumber('+33311');
    }

    /**
     * @test
     */
    public function an_exception_will_be_thrown_if_the_number_provided_is_too_short()
    {
        $this->expectException(InvalidPhoneNumberException::class);
        $this->expectExceptionMessage('The phone number is too short to be a phone number.');

        new PhoneNumber('+333');
    }

    /**
     * @test
     */
    public function an_exception_will_be_thrown_if_the_number_provided_is_too_long()
    {
        $this->expectException(InvalidPhoneNumberException::class);
        $this->expectExceptionMessage('The phone number is too long to be a phone number.');

        new PhoneNumber('+333111111111111111111');
    }
}
