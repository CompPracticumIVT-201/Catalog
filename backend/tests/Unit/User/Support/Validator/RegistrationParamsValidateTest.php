<?php

// php vendor/bin/phpunit tests/Unit/User/Support/Validator/RegistrationParamsValidateTest.php
// php artisan test --filter RegistrationParamsValidateTest::test*

namespace Tests\Unit\User\Support\Validator;

use App\Domain\User\Exceptions\EmailAlreadyExistException;
use App\Domain\User\Exceptions\EmptyRequiredParamException;
use App\Domain\User\Exceptions\InnAlreadyExistException;
use App\Domain\User\Exceptions\InvalidEmailFormatException;
use App\Domain\User\Exceptions\InvalidInnFormatException;
use App\Domain\User\Exceptions\PhoneAlreadyExistException;
use App\Domain\User\Support\UserValidator;
use Illuminate\Foundation\Testing\TestCase;
use Tests\CreatesApplication;
use function PHPUnit\Framework\assertTrue;

class RegistrationParamsValidateTest extends TestCase
{
    use CreatesApplication;

    protected function setUp(): void
    {
        parent::setUp();
        $this->createApplication();
    }

    /**
     * @throws EmptyRequiredParamException
     * @throws InvalidEmailFormatException
     * @throws InvalidInnFormatException
     * @throws EmailAlreadyExistException
     * @throws PhoneAlreadyExistException
     * @throws InnAlreadyExistException
     */
    public function testRegistrationParamsValidateWithValidParams(): void
    {
        $params = [
            'email' => 'test@test.ru',
            'phone' => '+7 (999) 999-99-99',
            'inn' => '123456789012',
            'fio' => 'Тестовый Т.Т.',
            'password' => 'password',
        ];

        UserValidator::registrationParamsValidate($params);
        $this->assertTrue(true);
    }

    /**
     * @throws EmptyRequiredParamException
     * @throws InvalidEmailFormatException
     * @throws InvalidInnFormatException
     * @throws EmailAlreadyExistException
     * @throws PhoneAlreadyExistException
     * @throws InnAlreadyExistException
     */
    public function testRegistrationParamsValidateWithInvalidParamKeys(): void
    {
        $params = [
            'someKey1' => 'test@test.ru',
            'someKey2' => '+79999999999',
            'someKey3' => '123456789012',
            'someKey4' => 'Тестовый Т.Т.',
            'someKey5' => 'password',
        ];

        $this->expectException(EmptyRequiredParamException::class);
        UserValidator::registrationParamsValidate($params);
    }

    /**
     * @throws EmptyRequiredParamException
     * @throws InvalidEmailFormatException
     * @throws InvalidInnFormatException
     * @throws EmailAlreadyExistException
     * @throws PhoneAlreadyExistException
     * @throws InnAlreadyExistException
     */
    public function testRegistrationParamsValidateWithInvalidEmailFormat(): void
    {
        $params = [
            'email' => 'no email format string',
            'phone' => '+79999999999',
            'inn' => '123456789012',
            'fio' => 'Тестовый Т.Т.',
            'password' => 'password',
        ];

        $this->expectException(InvalidEmailFormatException::class);
        UserValidator::registrationParamsValidate($params);
    }

    /**
     * @throws EmptyRequiredParamException
     * @throws InvalidEmailFormatException
     * @throws InvalidInnFormatException
     * @throws EmailAlreadyExistException
     * @throws PhoneAlreadyExistException
     * @throws InnAlreadyExistException
     */
    public function testRegistrationParamsValidateWithInvalidInnFormat(): void
    {
        $params = [
            'email' => 'test@test.ru',
            'phone' => '+79999999999',
            'inn' => '12345678901299', //цифр на две больше допустимого количества
            'fio' => 'Тестовый Т.Т.',
            'password' => 'password',
        ];

        $this->expectException(InvalidInnFormatException::class);
        UserValidator::registrationParamsValidate($params);
    }

    /**
     * @throws EmptyRequiredParamException
     * @throws InvalidEmailFormatException
     * @throws InvalidInnFormatException
     * @throws EmailAlreadyExistException
     * @throws PhoneAlreadyExistException
     * @throws InnAlreadyExistException
     */
    public function testRegistrationParamsValidateWithoutEmail(): void
    {
        $params = [
            'phone' => '+79999999999',
            'inn' => '123456789012',
            'fio' => 'Тестовый Т.Т.',
            'password' => 'password',
        ];

        $this->expectException(EmptyRequiredParamException::class);
        UserValidator::registrationParamsValidate($params);
    }

    /**
     * @throws EmailAlreadyExistException
     * @throws PhoneAlreadyExistException
     * @throws EmptyRequiredParamException
     * @throws InvalidEmailFormatException
     * @throws InnAlreadyExistException
     * @throws InvalidInnFormatException
     */
    public function testRegistrationParamsValidateWithoutPhone(): void
    {
        $params = [
            'email' => 'test@test.ru',
            'inn' => '123456789012',
            'fio' => 'Тестовый Т.Т.',
            'password' => 'password',
        ];

        UserValidator::registrationParamsValidate($params);
        assertTrue(true);
    }

    /**
     * @throws EmptyRequiredParamException
     * @throws InvalidEmailFormatException
     * @throws InvalidInnFormatException
     * @throws EmailAlreadyExistException
     * @throws PhoneAlreadyExistException
     * @throws InnAlreadyExistException
     */
    public function testRegistrationParamsValidateWithoutInn(): void
    {
        $params = [
            'email' => 'test@test.ru',
            'phone' => '+79999999999',
            'fio' => 'Тестовый Т.Т.',
            'password' => 'password',
        ];

        $this->expectException(EmptyRequiredParamException::class);
        UserValidator::registrationParamsValidate($params);
    }

    /**
     * @throws EmptyRequiredParamException
     * @throws InvalidEmailFormatException
     * @throws InvalidInnFormatException
     * @throws EmailAlreadyExistException
     * @throws PhoneAlreadyExistException
     * @throws InnAlreadyExistException
     */
    public function testRegistrationParamsValidateWithoutFio(): void
    {
        $params = [
            'email' => 'test@test.ru',
            'phone' => '+79999999999',
            'inn' => '123456789012',
            'password' => 'password',
        ];

        $this->expectException(EmptyRequiredParamException::class);
        UserValidator::registrationParamsValidate($params);
    }

    /**
     * @throws EmptyRequiredParamException
     * @throws InvalidEmailFormatException
     * @throws InvalidInnFormatException
     * @throws EmailAlreadyExistException
     * @throws PhoneAlreadyExistException
     * @throws InnAlreadyExistException
     */
    public function testRegistrationParamsValidateWithoutPassword(): void
    {
        $params = [
            'email' => 'test@test.ru',
            'phone' => '+79999999999',
            'inn' => '123456789012',
            'fio' => 'Тестовый Т.Т.',
        ];

        $this->expectException(EmptyRequiredParamException::class);
        UserValidator::registrationParamsValidate($params);
    }
}
