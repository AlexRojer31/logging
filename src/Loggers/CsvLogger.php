<?php

namespace Logging\Loggers;

use Filesystem\Exceptions\FilesystemException;
use Filesystem\Files;
use Filesystem\Path;
use Messages\Message;
use Logging\Loggerable;

/**
 * CSV Логгер
 */
class CsvLogger implements Loggerable
{
    /**
     * Имя логгера
     *
     * @var string
     */
    private $name;

    /**
     * Путь к файлу csv
     *
     * @var Path
     */
    private $path;

    /**
     * Утилитарный объект для работы с файловой системой
     *
     * @var Files
     */
    private $files;

    public function __construct(string $name, Path $path, Files $files)
    {
        $this->name = $name;
        $this->path = $path;
        $this->files = $files;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function write(Message $message, string $level): void
    {
        $content = date('Y-m-d H:i:s') . ' | ' . $level . ' | ' . $message->getMessage() . ' | ' . $message->getType() . PHP_EOL;
        if (!$this->files->isFile($this->path)) {
            $this->files->createFile($this->path);
        }
        try {
            $this->files->writeFile($this->path, $content);
        } catch (FilesystemException $e) {
            return;
        }
    }

    public function read(): string
    {
        try {
            return $this->files->readFile($this->path);
        } catch (FilesystemException $e) {
            return '';
        }
    }
}
