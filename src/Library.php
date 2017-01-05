<?php

namespace ContentDiscovered\Example;

class Library
{
    protected $breaks;
    protected $foo;
    protected $bar;

    public function __construct($foo)
    {
        $this->breaks = $foo;
        $this->foo = $foo;
        $this->bar = $foo;
    }

    public function fnOne()
    {
        return 'One';
    }

    public function fnTwo()
    {
        return 'Two';
    }

    public function iShouldBreak() {
        return 'x';
    }
}
