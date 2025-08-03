<?php
// Include the BankAccount class
require_once("BankAccount.php");

// This class simulates a bank system with multiple accounts
class BankSystem {
    private $accounts = [];

    // Simulate some existing accounts
    public function __construct() {
        $this->accounts[] = new BankAccount("358818002", "Kemuel", "31963", 11000);
        $this->accounts[] = new BankAccount("37823932", "Tope", "89362", 3300);
        $this->accounts[] = new BankAccount("45888993", "Lia", "22222", 5000); // ✅ NEW ACCOUNT
    }

    // Simulate logging in using account number and PIN
    public function login($accountNumber, $pin) {
        foreach ($this->accounts as $account) {
            if ($account->getAccountNumber() === $accountNumber && $account->login($accountNumber, $pin)) {
                echo "<hr> Logged in successfully<br>";
                echo "Account Number: $accountNumber<br>";
                echo "Owner: " . $account->getOwner() . "<br><br>";
                return $account;
            }
        }
        echo " Login failed.<br><br>";
        return null;
    }
}
?>
