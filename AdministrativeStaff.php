<?php
require_once("Staff.php");

class AdministrativeStaff extends Staff {
    private $daysWorked;

    public function __construct($name, $department, $rate, $daysWorked) {
        parent::__construct($name, $department, $rate);
        $this->daysWorked = $daysWorked;
    }

    public function calculateSalary() {
        $gross = $this->rate * $this->daysWorked;
        $net = $gross - 0.08 * $gross; // 8% tax
        return $net;
    }
}
?>
