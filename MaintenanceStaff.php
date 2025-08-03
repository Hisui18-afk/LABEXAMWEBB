<?php
require_once("Staff.php");

class MaintenanceStaff extends Staff {
    private $hoursWorked;

    public function __construct($name, $department, $rate, $hoursWorked) {
        parent::__construct($name, $department, $rate);
        $this->hoursWorked = $hoursWorked;
    }

    public function calculateSalary() {
        $gross = $this->rate * $this->hoursWorked;
        $net = $gross - 0.05 * $gross; // 5% tax
        return $net;
    }
}
?>
