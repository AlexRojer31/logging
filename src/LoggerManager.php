<?php

namespace Logging;

/**
 * Менеджер логгеров
 */
class LoggerManager
{
    private $loggers = [];

    /**
     * @param array<Loggerable> $loggers
     */
    public function __construct(array $loggers)
    {
        foreach ($loggers as $logger) {
            $this->loggers[$logger->getName()] = $logger;
        }
    }

    /**
     * Возвращает логгер по имени
     *
     * @param string $name
     *
     * @return Loggerable
     *
     * @throws loggerNotFound
     */
    public function getLogger(string $name): Loggerable
    {
        if (array_key_exists($name, $this->loggers)) {
            return $this->loggers[$name];
        } else {
            throw new loggerNotFoundException($name);
        }
    }
}
