<?php
namespace tests;

class TestCase extends \PHPUnit\Framework\TestCase
{
    public function setUp() :void
    {
        parent::setUp();
    }

    public function tearDown() :void
    {
        parent::tearDown();

        \Mockery::close();
    }
}
