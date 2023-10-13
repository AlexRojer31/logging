<?php

namespace Logging;

use PHPUnit\Framework\TestCase;

class LogLevelTest extends TestCase
{

    /**
     * @covers LogLevel::INFO
     */
    public function testGetString() : void
    {
        $code = LogLevel::INFO;
        $this->assertIsString($code);
    }
}

