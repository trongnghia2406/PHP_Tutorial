<?php
// Lớp cha (Parent Class)
class Animal {
    public $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function makeSound() {
        return "Tiếng kêu động vật";
    }
}

// Lớp con (Child Class) kế thừa từ Animal
class Dog extends Animal {
    // Ghi đè phương thức (Override)
    public function makeSound() {
        return "Gâu gâu";
    }

    // Thêm phương thức mới
    public function fetch() {
        return $this->name . " đang nhặt bóng.";
    }
}

// Sử dụng
$dog = new Dog("Lucky");
echo $dog->name;       // Output: Lucky (kế thừa từ Animal)
echo $dog->makeSound(); // Output: Gâu gâu (ghi đè phương thức)
echo $dog->fetch();     // Output: Lucky đang nhặt bóng.
?>
