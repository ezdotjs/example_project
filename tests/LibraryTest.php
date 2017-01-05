<?php

use PHPUnit\Framework\TestCase;
use ContentDiscovered\Example\Library;

class LibraryTest extends TestCase
{
    public function testFnOne()
    {
        $library = new Library('baz');
        $this->assertEquals('One', $library->fnOne());
    }

    public function testFnTwo()
    {
        $library = new Library('baz');
        $this->assertEquals('Two', $library->fnTwo());
    }
}
