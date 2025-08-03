<?php
require_once("Item.php");
require_once("Logger.php");

class InventoryManager {
    use Logger;

    private $items = [];

    public function addItem($item) {
        $this->items[$item->getName()] = $item;
        $this->logAction("Added item: {$item->getName()}");
    }

    public function updateItem($name, $newStock = null, $newPrice = null) {
        if (isset($this->items[$name])) {
            $item = $this->items[$name];
            if ($newStock !== null) {
                $item->updateStock($newStock);
                $this->logAction("Updated stock of {$name} to {$newStock}");
            }
            if ($newPrice !== null) {
                $item->updatePrice($newPrice);
                $this->logAction("Updated price of {$name} to ₱{$newPrice}");
            }
        }
    }

    public function deleteItem($name) {
        if (isset($this->items[$name])) {
            unset($this->items[$name]);
            $this->logAction("Deleted item: $name");
        }
    }

    public function displayInventory() {
        foreach ($this->items as $item) {
            echo $item . "<br>";
        }
    }

    public function getItem($name) {
        return $this->items[$name] ?? null;
    }
}
?>
