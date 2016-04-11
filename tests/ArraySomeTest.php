<?php

namespace Schnittstabil\ArraySome;

class ArraySomeTest extends \PHPUnit_Framework_TestCase
{
    public function testArraySomeUsageExample()
    {
        $this->assertTrue(\Schnittstabil\ArraySome\array_some(['l', 'e', 'e', 't'], 'is_string'));
        $this->assertFalse(\Schnittstabil\ArraySome\array_some([1, 3, 3, 7], 'is_string'));
    }

    public function testArraySomeKeyUsageExample()
    {
        $this->assertTrue(\Schnittstabil\ArraySome\array_some_key(['unicorns' => 24], 'is_string'));
        $this->assertFalse(\Schnittstabil\ArraySome\array_some_key([42 => 'unicorns'], 'is_string'));
    }
}
