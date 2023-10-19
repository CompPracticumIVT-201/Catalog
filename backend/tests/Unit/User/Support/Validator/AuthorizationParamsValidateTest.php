<?php

// php vendor/bin/phpunit tests/Unit/User/Support/AuthorizationParamsValidateTest.php
// php artisan test --filter AuthorizationParamsValidateTest::test*

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

class AuthorizationParamsValidateTest extends TestCase
{
	use CreatesApplication;

	protected function setUp(): void
	{
		parent::setUp();
		$this->createApplication();
	}

	/**
	 * @throws InvalidEmailFormatException
	 * @throws EmptyRequiredParamException
	 */
	public function testAuthorizationParamsValidateWithValidParams(): void
	{
		$params = [
			'email' => 'test@test.test',
			'password' => 'password',
		];

		UserValidator::authorizationParamsValidate($params);
		$this->assertTrue(true);
	}

	/**
	 * @throws EmailAlreadyExistException
	 * @throws PhoneAlreadyExistException
	 * @throws InvalidEmailFormatException
	 * @throws InnAlreadyExistException
	 * @throws InvalidInnFormatException
	 */
	public function testAuthorizationParamsValidateWithInvalidParamKeys(): void
	{
		$params = [
			'someKey1' => 'test@test.ru',
			'someKey2' => 'password',
		];

		$this->expectException(EmptyRequiredParamException::class);
		UserValidator::authorizationParamsValidate($params);
	}

	/**
	 * @throws EmptyRequiredParamException
	 */
	public function testAuthorizationParamsValidateWithInvalidEmailFormat(): void
	{
		$params = [
			'email' => 'no email format string',
			'password' => 'password',
		];

		$this->expectException(InvalidEmailFormatException::class);
		UserValidator::authorizationParamsValidate($params);
	}

	/**
	 * @throws InvalidEmailFormatException
	 */
	public function testAuthorizationParamsValidateWithoutEmail(): void
	{
		$params = [
			'password' => 'password',
		];

		$this->expectException(EmptyRequiredParamException::class);
		UserValidator::authorizationParamsValidate($params);
	}

	/**
	 * @throws InvalidEmailFormatException
	 */
	public function testAuthorizationParamsValidateWithoutPassword(): void
	{
		$params = [
			'email' => 'test@test.ru',
		];

		$this->expectException(EmptyRequiredParamException::class);
		UserValidator::authorizationParamsValidate($params);
	}

	/**
	 * @throws InvalidEmailFormatException
	 */
	public function testAuthorizationParamsValidateWithEmptyPassword(): void
	{
		$params = [
			'password' => '',
		];

		$this->expectException(EmptyRequiredParamException::class);
		UserValidator::authorizationParamsValidate($params);
	}

	/**
	 * @throws InvalidEmailFormatException
	 */
	public function testAuthorizationParamsValidateWithEmptyEmail(): void
	{
		$params = [
			'email' => '',
		];

		$this->expectException(EmptyRequiredParamException::class);
		UserValidator::authorizationParamsValidate($params);
	}
}
