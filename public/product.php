<?php

declare(strict_types=1);

require_once __DIR__ . '/../vendor/autoload.php';

use Weslley\PhpBasico\Models\Product;

$title = 'Produtos';
$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
$product = $id ? Product::findById($id) : null;

require_once __DIR__ . '/../resources/views/product.phtml';
?>

