<?php

namespace core;

abstract class Exception extends \Exception{
    public function __toString()
    {
        return 'Server error!';
    }

    use Twig;
}