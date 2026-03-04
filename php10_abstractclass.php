<?php
// 1. Khai báo abstract class Animal
abstract class Animal {
    protected $name;

    public function __construct($name) {
        $this->name = $name;
    }

    // Phương thức thông thường: Lớp con có thể sử dụng trực tiếp
    public function getName() {
        return $this->name;
    }

    // 2. Phương thức trừu tượng: Không có thân hàm, lớp con BẮT BUỘC triển khai
    abstract public function makeSound();
}

// 3. Lớp Dog kế thừa Animal
class Dog extends Animal {
    // Triển khai phương thức trừu tượng
    public function makeSound() {
        return "Gâu gâu";
    }
}

// 4. Lớp Cat kế thừa Animal
class Cat extends Animal {
    // Triển khai phương thức trừu tượng
    public function makeSound() {
        return "Meo meo";
    }
}

// --- Sử dụng ---
// $animal = new Animal("Generic"); // LỖI: Cannot instantiate abstract class

$dog = new Dog("Chó cỏ");
echo $dog->getName() . " kêu: " . $dog->makeSound() . "\n"; // Chó cỏ kêu: Gâu gâu

$cat = new Cat("Mèo mướp");
echo $cat->getName() . " kêu: " . $cat->makeSound() . "\n"; // Mèo mướp kêu: Meo meo
?>
