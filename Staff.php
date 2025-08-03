<?php
// Abstract base class for staff
abstract class Staff {
    protected $name;
    protected $department;
    protected $rate;

    public function __construct($name, $department, $rate) {
        $this->name = $name;
        $this->department = $department;
        $this->rate = $rate;
    }

    // Every child must implement this differently
    abstract public function calculateSalary();

    // Display summary of each staff
    public function __toString() {
        return "Name: $this->name | Dept: $this->department | Salary: ₱" . number_format($this->calculateSalary(), 2);
    }
}
?>
