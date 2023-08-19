<?php
class Animal {
    public function makeSound() {
        return "The animal makes a sound";
    }
}

class Bird extends Animal {
    public function makeSound() {
        return "The bird chirps";
    }
}

class Cat extends Animal {
    public function makeSound() {
        return "Cat makes sound meow meow";
    }
}



$animal = new Animal();
echo $animal->makeSound()."<br>";

$bird = new bird();
echo $bird->makeSound()."<br>";

$cat = new Cat();
echo $cat->makeSound()."<br>";


?>