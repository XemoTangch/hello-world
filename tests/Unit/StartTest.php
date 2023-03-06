<?php

namespace Tests\Unit;

include_once '../../src/Start.php';

use HelloWorld\Start;
use PHPUnit\Framework\TestCase;

/**
 * @covers \HelloWorld\Start
 * @author jiangming@babymedu.com
 * @version
 * @date 2023/3/5 21:14
 */
class StartTest extends TestCase
{
    protected Start $Start;
    public function __construct()
    {
        parent::__construct();
        $this->Start = new Start();
    }

    public function test_run1()
    {
        $this->assertEquals('HelloWorld\Start::run', $this->Start->run());
    }

    public function test_run2()
    {
        $this->assertEquals('run2', $this->Start->run2());
    }

    public function test_run3()
    {
        $this->expectOutputString('foo2');
        print 'foo2';
    }

    public function testFailure()
    {
        $this->assertArrayHasKey('bar', ['bar' => 'baz']);
    }
}