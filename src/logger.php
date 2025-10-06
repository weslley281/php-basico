<?php

declare(strict_types=1);

namespace Weslley\PhpBasico;

use Monolog\Handler\StreamHandler;

class Logger
{
    protected \Monolog\Logger $logger;
    
    public function __construct(){
        $this->logger = new \Monolog\Logger('app');
        $this->logger->pushHandler(new StreamHandler(__DIR__ . '/../logs/app.log', \Monolog\Level::Warning));
    }

    public static function log(string $message): void
    {
        echo "[LOG]: " . $message . PHP_EOL;
    }

    public function write(string $message): void
    {
        $this->logger->debug($message);
    }
}