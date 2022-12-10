<?php
class Example {
    // Property
    public $name = 'Christine Vanesyan';
    protected $city = 'Hrazdan';
    private $country = 'Armenia';

    // Magic Method
    // public function __construct() {
    //     echo 'In construct';
    // }

    // Method
    public function addition() {
        echo 'In addition';
        $this->division();
    }

    protected function subtraction() {
        echo 'In subtraction';
    }

    private function division() {
        echo 'In division';
    }


}