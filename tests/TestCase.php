<?php

namespace Tests;

include_once '../src/Start.php';

use PHPUnit\Framework\TestCase;
use HelloWorld\Start;

abstract class BaseTestCase extends TestCase
{
    protected Start $Start;
    public function __construct()
    {
        parent::__construct();
        $this->Start = new Start();
    }
}
