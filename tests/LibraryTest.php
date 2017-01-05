<?php

use PHPUnit\Framework\TestCase;
use ContentDiscovered\Example\Library;

class LibraryTest extends TestCase
{
    public function testFnOne()
    {
        $library = new Library();
        $this->assertEquals('One', $library->fnOne());
    }

    public function testFnTwo()
    {
        $library = new Library();
        $this->assertEquals('Two', $library->fnTwo());
    }
}
