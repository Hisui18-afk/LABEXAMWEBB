<?php
class StaffManager {
    private $staffList = [];

    public function addStaff(Staff $staff) {
        $this->staffList[] = $staff;
    }

    public function displayAllStaff() {
        foreach ($this->staffList as $staff) {
            echo $staff . "<br>";
        }
    }

    public function calculateTotalPayroll() {
        $total = 0;
        foreach ($this->staffList as $staff) {
            $total += $staff->calculateSalary();
        }
        return $total;
    }
}
?>
