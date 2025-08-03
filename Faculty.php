<?php
require_once("Staff.php");

class Faculty extends Staff {
    private $teachingLoad; // Number of units/subjects

    public function __construct($name, $department, $rate, $teachingLoad) {
        parent::__construct($name, $department, $rate);
        $this->teachingLoad = $teachingLoad;
    }

    public function calculateSalary() {
        $gross = $this->rate * $this->teachingLoad;
        $net = $gross - 0.10 * $gross; // 10% tax
        return $net;
    }
}
?>
