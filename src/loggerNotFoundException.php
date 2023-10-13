<?php

namespace Logging;

use Exception;

/**
 * Логгер не найден
 */
class loggerNotFoundException extends Exception
{

    public function __construct(string $name)
    {
        $message = 'Логгер ' . $name . ' не найден.';
        parent::__construct($message);
    }

}
