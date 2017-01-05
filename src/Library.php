<?php

namespace ContentDiscovered\Example;

class Library
{
    protected $foo;

    public function __construct($foo)
    {
        $this->foo = $foo;
    }

    public function fnOne()
    {
        return 'One';
    }

    public function fnTwo()
    {
        return 'Two';
    }
}
