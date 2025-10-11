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
                "name" => "Chuca",
                "price" => 2.50,
                "description" => "Ducha Higiénica",
                "isAvailable" => true,
            ],
            [
                "name" => "Supositório",
                "price" => 39.99,
                "description" => "Supositório para penetração Preto e Grosso",
                "isAvailable" => true,
            ],
            [
                "name" => "Gel Lubrificante",
                "price" => 19.99,
                "description" => "Gel Lubrificante Íntimo 50g",
                "isAvailable" => false,
            ],
            [
                "name" => "Vibrador",
                "price" => 89.90,
                "description" => "Vibrador Recarregável com 10 Modos de Vibração",
                "isAvailable" => true,
            ],
            [
                "name" => "Algema",
                "price" => 29.90,
                "description" => "Algema de Metal com Chave",
                "isAvailable" => false,
            ],
            [
                "name" => "Venda para os Olhos Vermelha",
                "price" => 15.00,
                "description" => "Venda de Cetim para os Olhos",
                "isAvailable" => true,
            ],
            [
                "name" => "Plugues Anais",
                "price" => 49.90,
                "description" => "Kit com 3 Plugues Anais de Silicone",
                "isAvailable" => true,
            ],
            [
                "name" => "Cinta-Liga",
                "price" => 39.90,
                "description" => "Cinta-Liga com Meia Arrastão",
                "isAvailable" => false,
            ],
            [
                "name" => "Fantasia Erótica",
                "price" => 79.90,
                "description" => "Fantasia Erótica de Enfermeira",
                "isAvailable" => true,
            ],
            [
                "name" => "BDSM Kit",
                "price" => 99.90,
                "description" => "Kit Iniciante de BDSM com Vários Acessórios",
                "isAvailable" => true,
            ],
        ];
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