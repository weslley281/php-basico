<?php

declare(strict_types=1);

namespace Weslley\PhpBasico;

class Gretings
{
    public function sayHello(string $name): string
    {
        return "Hello, {$name}!";
    }
}