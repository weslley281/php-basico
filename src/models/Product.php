<?php

declare(strict_types=1);

namespace Weslley\PhpBasico\Models;

class Product
{
    public function __construct(
        private string $name,
        private float $price,
        private string $description,
        private bool $isAvailable,
    ) {
    }

    public static function getAll(){
        return [
            [
                "id" => 1,
                "name" => "Chuca",
                "price" => 2.50,
                "description" => "Ducha Higiénica",
                "isAvailable" => true,
            ],
            [
                "id" => 2,
                "name" => "Supositório",
                "price" => 39.99,
                "description" => "Supositório para penetração Preto e Grosso",
                "isAvailable" => true,
            ],
            [
                "id" => 3,
                "name" => "Gel Lubrificante",
                "price" => 19.99,
                "description" => "Gel Lubrificante Íntimo 50g",
                "isAvailable" => false,
            ],
            [
                "id" => 4,
                "name" => "Vibrador",
                "price" => 89.90,
                "description" => "Vibrador Recarregável com 10 Modos de Vibração",
                "isAvailable" => true,
            ],
            [
                "id" => 5,
                "name" => "Algema",
                "price" => 29.90,
                "description" => "Algema de Metal com Chave",
                "isAvailable" => false,
            ],
            [
                "id" => 6,
                "name" => "Venda para os Olhos Vermelha",
                "price" => 15.00,
                "description" => "Venda de Cetim para os Olhos",
                "isAvailable" => true,
            ],
            [
                "id" => 7,
                "name" => "Plugues Anais",
                "price" => 49.90,
                "description" => "Kit com 3 Plugues Anais de Silicone",
                "isAvailable" => true,
            ],
            [
                "id" => 8,
                "name" => "Cinta-Liga",
                "price" => 39.90,
                "description" => "Cinta-Liga com Meia Arrastão",
                "isAvailable" => false,
            ],
            [
                "id" => 9,
                "name" => "Fantasia Erótica",
                "price" => 79.90,
                "description" => "Fantasia Erótica de Enfermeira",
                "isAvailable" => true,
            ],
            [
                "id" => 10,
                "name" => "BDSM Kit",
                "price" => 99.90,
                "description" => "Kit Iniciante de BDSM com Vários Acessórios",
                "isAvailable" => true,
            ],
        ];
    }

    public static function findById(int $id): ?array
    {
        foreach (self::getAll() as $product) {
            if ($product['id'] === $id) {
                return $product;
            }
        }
        return null;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function isAvailable(): bool
    {
        return $this->isAvailable;
    }
}