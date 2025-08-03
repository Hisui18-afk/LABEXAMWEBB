<?php
require_once("InventoryManager.php");

$inventory = new InventoryManager();

// Add 5 items
$inventory->addItem(new Item("Laptop", 10, 40000));
$inventory->addItem(new Item("Mouse", 100, 250));
$inventory->addItem(new Item("Keyboard", 50, 800));
$inventory->addItem(new Item("Monitor", 20, 7000));
$inventory->addItem(new Item("Webcam", 15, 1500));

// Perform transactions
$inventory->updateItem("Laptop", 8);                  // Decrease stock
$inventory->updateItem("Mouse", 95, 240);             // Change stock and price
$inventory->updateItem("Webcam", null, 1400);         // Only price change
$inventory->deleteItem("Keyboard");                   // Delete item

// Display current inventory
echo "<h3>Current Inventory</h3>";
$inventory->displayInventory();
?>
