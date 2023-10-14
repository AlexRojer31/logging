<?php

namespace Logging;

/**
 * Уровни логирования
 */
class LogLevel
{
    public const INFO = 'info';
    public const ERROR = 'error';
    public const NOTICE = 'notice';
    public const WARNING = 'warning';

    public const TYPES = [
        self::INFO => 'информация',
        self::ERROR => 'ошибка',
        self::NOTICE => 'уведомление',
        self::WARNING => 'предупреждение',
    ];
}
