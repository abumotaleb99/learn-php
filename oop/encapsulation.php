<?php
class Employee {
    private $name;
    private $salary;

    public function setName($name) {
        $this->name = $name;
    }

    public function setSalary($salary) {
        if ($salary > 0) {
            $this->salary = $salary;
        } else {
            $message = "Invalid Salary!<br>";
            echo $message;
        }
    }

    public function getName() {
        return $this->name;
    }

    public function getSalary() {
        return $this->salary;
    }
}

$employee = new Employee();

$employee->setName("Abu Motaleb");
$employee->setSalary(15000);

echo "Employee Name: ".$employee->getName()."<br>";
echo "Employee Salary: ".$employee->getSalary()."<br>";

$employee->setName("Ashikur Rahman Khan");
$employee->setSalary(20000);

echo "Employee Name: ".$employee->getName()."<br>";
echo "Employee Salary: ".$employee->getSalary();

?>


