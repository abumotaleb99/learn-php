<?php
class Shape {
    private $radius;
    private $height;
    private $width;
}

class Circle extends Shape {
    public function circleArea($radius) {
        $this->radius = $radius;

        $result =  3.1416 * $radius * $radius;

        return $result;
    }
}

class Rectangle extends Shape {
    public function rectangleArea($height, $width) {
        $this->height = $height;
        $this->width = $width;

        $result = $width * $height;

        return $result;
    }
}



$circle = new Circle();
echo "Area of Circle: ".$circle->circleArea(10)."<br>";

$rectangle = new Rectangle();
echo "Area of Rectangle: ".$rectangle->rectangleArea(10, 20)."<br>";


?>