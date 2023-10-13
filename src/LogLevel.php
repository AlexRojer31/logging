<?php

namespace Logging;

/**
 * Уровни логирования
 */
class LogLevel
{
    public const INFO = 'INFO';
    public const ERROR = 'ERROR';
    public const NOTICE = 'notice';
    public const WARNING = 'WARNING';

    public const TYPES = [
        self::INFO => 'Информация',
        self::ERROR => 'Ошибка',
        self::NOTICE => 'Уведомление',
        self::WARNING => 'Предупреждение',
    ];
}
