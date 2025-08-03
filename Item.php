<?php
class Item {
    private $name;
    private $stock;
    private $price;

    public function __construct($name, $stock, $price) {
        $this->name = $name;
        $this->stock = $stock;
        $this->price = $price;
    }

    // Getters
    public function getName() {
        return $this->name;
    }

    public function getStock() {
        return $this->stock;
    }

    public function getPrice() {
        return $this->price;
    }

    // Update methods
    public function updateStock($newStock) {
        $this->stock = $newStock;
    }

    public function updatePrice($newPrice) {
        $this->price = $newPrice;
    }

    public function __toString() {
        return "Item: {$this->name}, Stock: {$this->stock}, Price: ₱{$this->price}";
    }
}
?>
