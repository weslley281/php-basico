<?php

declare(strict_types=1);

require_once __DIR__ . '/../vendor/autoload.php';

use Weslley\PhpBasico\Gretings;

$gretings = new Gretings();
echo $gretings->sayHello('Weslley') . PHP_EOL;