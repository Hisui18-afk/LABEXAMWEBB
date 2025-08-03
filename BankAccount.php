<?php
// This class represents a single bank account
class BankAccount {
    private $accountNumber; // Unique account number
    private $owner;         // Owner's name
    private $pin;           // PIN code
    private $balance;       // Current balance

    // Constructor to initialize account info
    public function __construct($accountNumber, $owner, $pin, $balance) {
        $this->accountNumber = $accountNumber;
        $this->owner = $owner;
        $this->pin = $pin;
        $this->balance = $balance;
    }

    // Method to validate login (matches account number and PIN)
    public function login($accountNumber, $pin) {
        return $this->accountNumber === $accountNumber && $this->pin === $pin;
    }

    // Getter for owner's name
    public function getOwner() {
        return $this->owner;
    }

    // Getter for account number
    public function getAccountNumber() {
        return $this->accountNumber;
    }

    // Deposit money into the account
    public function deposit($amount) {
        if ($amount > 0) {
            $this->balance += $amount;
            echo "{$this->owner} deposited: ₱{$amount}<br>";
            echo "Your balance is now: ₱{$this->balance}<br><br>";
        }
    }

    // Withdraw money if there's enough balance
    public function withdraw($amount) {
        if ($amount > 0 && $amount <= $this->balance) {
            $this->balance -= $amount;
            echo "{$this->owner} withdrew: ₱{$amount}<br>";
            echo "Your balance is now: ₱{$this->balance}<br><br>";
        } else {
            echo "{$this->owner} tried to withdraw ₱{$amount}, but it failed due to insufficient funds.<br><br>";
        }
    }

    // Show current balance
    public function checkBalance() {
        echo "{$this->owner}, your current balance is: ₱{$this->balance}<br><br>";
    }
}
?>
