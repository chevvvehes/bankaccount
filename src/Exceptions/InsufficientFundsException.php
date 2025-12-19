<?php

namespace App\Exceptions;

class InsufficientFundsException extends \Exception
{
    public function __construct($message = "Недостаточно средств", $code = 0, \Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
