<?php

// php vendor/bin/phpunit tests/Unit/User/Support/UserServiceTest.php
// php artisan test --filter UserServiceTest::test*

namespace Tests\Unit\User\Services;

use App\Domain\User\Exceptions\EmailAlreadyExistException;
use App\Domain\User\Models\User;
use App\Domain\User\Services\UserService; // тестируемый класс
use ErrorException;
use Illuminate\Database\UniqueConstraintViolationException;
use Illuminate\Foundation\Testing\TestCase;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Tests\CreatesApplication;

class UserServiceTest extends TestCase
{
    use CreatesApplication;

    private UserService $userService;

    protected function setUp(): void
    {
        parent::setUp();
        $this->createApplication();
        $this->userService = new UserService();
        DB::beginTransaction();
        DB::table('users')->delete();
    }

    protected function tearDown(): void
    {
        parent::tearDown();
        DB::rollBack();
    }

    public function testRegisterUserWithValidParams(): void
    {
        $params = [
            'fio' => 'Test',
            'email' => 'testRegisterUserWithValidParams@test.ru',
            'password' => 'testPassword',
            'phone' => '+79999999999',
            'additionalNumber' => '1234',
            'inn' => '123456789012',
            'subdivision' => 'subdivision',
        ];

        $this->userService->registerUser($params);

        $savedUser = User::where('email', '=', $params['email'])->first();

        $this->assertEquals($params['fio'], $savedUser->fio);
        $this->assertEquals($params['email'], $savedUser->email);
        $this->assertEquals($params['phone'], $savedUser->phone);
        $this->assertEquals($params['additionalNumber'], $savedUser->additional_number);
        $this->assertEquals($params['inn'], $savedUser->inn);
        $this->assertEquals($params['subdivision'], $savedUser->subdivision);
        $this->assertTrue(Hash::check($params['password'], $savedUser->password));
    }

    public function testRegisterUserWithEmptyParamsArray(): void
    {
        $params = [];

        $this->expectException(ErrorException::class);
        $this->userService->registerUser($params);
    }

    public function testRegisterUserWithInvalidKeys(): void
    {
        $params = [
            'someKey1' => 'Test',
            'someKey2' => 'testRegisterUserWithValidParams@test.ru',
            'someKey3' => 'testPassword',
            'someKey4' => '+79999999999',
            'someKey5' => '1234',
            'someKey6' => '123456789012',
            'someKey7' => 'subdivision',
        ];

        $this->expectException(ErrorException::class);
        $this->userService->registerUser($params);
    }

    public function testRegisterUserWithoutFio(): void
    {
        $params = [
            'email' => 'testRegisterUserWithValidParams@test.ru',
            'password' => 'testPassword',
            'phone' => '+79999999999',
            'additionalNumber' => '1234',
            'inn' => '123456789012',
            'subdivision' => 'subdivision',
        ];

        $this->expectException(ErrorException::class);
        $this->userService->registerUser($params);
    }

    public function testRegisterUserWithoutEmail(): void
    {
        $params = [
            'fio' => 'Test',
            'password' => 'testPassword',
            'phone' => '+79999999999',
            'additionalNumber' => '1234',
            'inn' => '123456789012',
            'subdivision' => 'subdivision',
        ];

        $this->expectException(ErrorException::class);
        $this->userService->registerUser($params);
    }

    public function testRegisterUserWithoutPassword(): void
    {
        $params = [
            'fio' => 'Test',
            'email' => 'testRegisterUserWithValidParams@test.ru',
            'phone' => '+79999999999',
            'additionalNumber' => '1234',
            'inn' => '123456789012',
            'subdivision' => 'subdivision',
        ];

        $this->expectException(ErrorException::class);
        $this->userService->registerUser($params);
    }

    public function testRegisterUserWithoutInn(): void
    {
        $params = [
            'fio' => 'Test',
            'email' => 'testRegisterUserWithValidParams@test.ru',
            'password' => 'testPassword',
            'phone' => '+79999999999',
            'additionalNumber' => '1234',
            'subdivision' => 'subdivision',
        ];

        $this->expectException(ErrorException::class);
        $this->userService->registerUser($params);
    }

    public function testRegisterUserWithoutPhone(): void
    {
        $params = [
            'fio' => 'Test',
            'email' => 'testRegisterUserWithValidParams@test.ru',
            'password' => 'testPassword',
            'additionalNumber' => '1234',
            'inn' => '123456789012',
            'subdivision' => 'subdivision',
        ];

        $this->userService->registerUser($params);

        $savedUser = User::where('email', '=', $params['email'])->first();

        $this->assertNull($savedUser->phone);
    }

    public function testRegisterUserWithoutAdditionalNumber(): void
    {
        $params = [
            'fio' => 'Test',
            'email' => 'testRegisterUserWithValidParams@test.ru',
            'password' => 'testPassword',
            'phone' => '+79999999999',
            'inn' => '123456789012',
            'subdivision' => 'subdivision',
        ];

        $this->userService->registerUser($params);

        $savedUser = User::where('email', '=', $params['email'])->first();

        $this->assertNull($savedUser->additional_number);
    }

    public function testRegisterUserWithoutSubdivision(): void
    {
        $params = [
            'fio' => 'Test',
            'email' => 'testRegisterUserWithValidParams@test.ru',
            'password' => 'testPassword',
            'phone' => '+79999999999',
            'inn' => '123456789012',
            'additionalNumber' => '1234',
        ];

        $this->userService->registerUser($params);

        $savedUser = User::where('email', '=', $params['email'])->first();

        $this->assertNull($savedUser->subdivision);
    }

    public function testRegisterUserWithAlreadyEmailExist(): void
    {
        User::create([
            'fio' => 'Test',
            'email' => 'testRegisterUser@test.ru',
            'password' => 'testPassword',
            'phone' => '+79999999991',
            'additionalNumber' => '1234',
            'inn' => '000000000001',
            'subdivision' => 'subdivision',
        ]);

        $this->expectException(UniqueConstraintViolationException::class);
        $this->userService->registerUser([
            'fio' => 'Test',
            'email' => 'testRegisterUser@test.ru',
            'password' => 'testPassword',
            'phone' => '+79999999992',
            'additionalNumber' => '1234',
            'inn' => '000000000002',
            'subdivision' => 'subdivision',
        ]);
    }

    public function testRegisterUserWithAlreadyPhoneExist(): void
    {
        User::create([
            'fio' => 'Test',
            'email' => 'testRegisterUser@test.ru',
            'password' => 'testPassword',
            'phone' => '+79999999991',
            'additionalNumber' => '1234',
            'inn' => '000000000001',
            'subdivision' => 'subdivision',
        ]);

        $this->expectException(UniqueConstraintViolationException::class);
        $this->userService->registerUser([
            'fio' => 'Test',
            'email' => 'testRegisterUser1@test.ru',
            'password' => 'testPassword',
            'phone' => '+79999999991',
            'additionalNumber' => '1234',
            'inn' => '000000000002',
            'subdivision' => 'subdivision',
        ]);
    }

    public function testRegisterUserWithAlreadyInnExist(): void
    {
        User::create([
            'fio' => 'Test',
            'email' => 'testRegisterUser@test.ru',
            'password' => 'testPassword',
            'phone' => '+79999999991',
            'additionalNumber' => '1234',
            'inn' => '000000000001',
            'subdivision' => 'subdivision',
        ]);

        $this->expectException(UniqueConstraintViolationException::class);
        $this->userService->registerUser([
            'fio' => 'Test',
            'email' => 'testRegisterUser1@test.ru',
            'password' => 'testPassword',
            'phone' => '+79999999992',
            'additionalNumber' => '1234',
            'inn' => '000000000001',
            'subdivision' => 'subdivision',
        ]);
    }
}
