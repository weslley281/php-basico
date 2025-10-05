<?php

declare(strict_types=1);

namespace Weslley\PhpBasico;

use Monolog\Handler\StreamHandler;

class Logger
{
    public function __construct(
        protected \Monolog\Logger $logger
    ){
        $this->logger->pushHandler(new StreamHandler(__DIR__ . '/../logs/app.log', \Monolog\Level::Warning));
    }

    public static function log(string $message): void
    {
        echo "[LOG]: " . $message . PHP_EOL;
    }
}