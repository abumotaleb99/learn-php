<?php
require_once 'Example.php';

class Demo extends Example {
    // Property
    public $age = 22;
    protected $department = 'CSE';
    private $phone = '01717123068';

    // Method
    public function one() {
        // echo 'In one';
        // $this->addition();
        $this->subtraction();
    }

    public function two() {
        echo 'In two';
    }

    public function three() {
        echo 'In three';
    }


}