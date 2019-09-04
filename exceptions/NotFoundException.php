<?php

namespace exceptions;

use core\Exception;

class NotFoundException extends Exception {
    public $code = 404;
    public $message = 'Page not found!';

    public function __toString()
    {
        return $this->render('errors/404');
    }
}