<?php

use PHPUnit\Framework\TestCase;

class SampleTest extends TestCase {
    public function testTrueIsTrue() {
        $this->assertTrue(true);
    }
    
    public function testWordPressLoaded() {
        $this->assertTrue(function_exists('add_action'));
    }
}