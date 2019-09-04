<?php

namespace exceptions;

use core\Exception;

class BadDataException extends Exception{

    public function __toString()
    {
        return $this->render('errors/bad_data');
    }
}