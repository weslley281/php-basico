<?php

declare(strict_types=1);

require_once __DIR__ . '/../vendor/autoload.php';

use Weslley\PhpBasico\Models\Product;

$products = Product::getAll();

require_once __DIR__ . '/../resources/views/index.phtml';

?>

