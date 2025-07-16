<?php

namespace YourProject\Tests;

use PHPUnit\Framework\TestCase;

class SampleTest extends TestCase
{
    public function testTrueIsTrue()
    {
        $this->assertTrue(true);
    }

    public function testWordPressFunctionsAvailable()
    {
        $this->assertTrue(function_exists('add_action'));
    }
}