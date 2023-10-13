<?php

namespace Logging;

use Messages\Message;

/**
 * Интерфейс логгера
 */
interface Loggerable
{
    /**
     * Получить имя логгера
     *
     * @return string
     */
    public function getName(): string;

    /**
     * Записать сообщение в логгер
     *
     * @param Message $message
     * @param string $level
     *
     * @return void
     */
    public function write(Message $message, string $level): void;

    /**
     * Прочитать логгер
     *
     * @return string
     */
    public function read(): string;
}
