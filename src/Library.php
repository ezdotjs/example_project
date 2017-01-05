<?php

namespace ContentDiscovered\Example;

class Library
{
    protected $foo;
    protected $bar;

    public function __construct($foo)
    {
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
}
