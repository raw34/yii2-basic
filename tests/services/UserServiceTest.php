<?php
namespace tests\services;

use app\services\UserService;
use tests\TestCase;

/**
 * Class UserServiceTest
 * @author Randy Chang
 */
class UserServiceTest extends TestCase
{
    public function setUp() :void
    {
        parent::setUp();
    }

    public function testGetOne()
    {
        $service = new UserService();

        $user = $service->getOne(1);

        self::assertNull($user);

        $user = $service->getOne(100);

        self::assertNotNull($user);
        self::assertEquals(100, $user['id']);
    }
}