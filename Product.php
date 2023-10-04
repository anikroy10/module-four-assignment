<?php
class Product {

    private int $id;
    private string $name;
    private float $price;
    
    public function __construct(int $id, string $name, float $price) {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }

    public function getId(): int {
        return $this->id;
    }

    public function setId(int $id) {
        $this->id = $id;
    }

    public function getName(): string {
        return $this->name;
    }

    public function setName(string $name) {
        $this->name = $name;
    }

    public function getPrice(): float {
        return $this->price;
    }

    public function setPrice(float $price) {
        $this->price = $price;
    }

    public function getFormattedPrice (): string {
        return '$'.number_format($this->price, 2);
    }

    public function showDetails() {
        echo "ID: {$this->getId()}\n";
        echo "Name: {$this->getName()}\n";
        echo "Price: {$this->getFormattedPrice()}\n";
    }
}

$product = new Product(1, 'T-Shirt', 19.99);
$product->showDetails();