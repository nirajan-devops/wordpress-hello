<?php

namespace YourProject\Tests;

use WP_UnitTestCase;

class SampleTest extends WP_UnitTestCase
{
    public function testTrueIsTrue()
    {
        $this->assertTrue(true);
    }

    public function testWordPressFunctionsAvailable()
    {
        $this->assertTrue(function_exists('add_action'));
        $this->assertTrue(function_exists('apply_filters'));
        $this->assertTrue(function_exists('get_post'));
    }
}