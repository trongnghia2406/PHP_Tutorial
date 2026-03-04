<?php
// CLASS TRONG PHP
// 1. Định nghĩa và sử dụng lớp trong PHP
class Person {
    // 1.1 Thuộc tính (properties)
    public $name;
    public $age;

    // Thuộc tính static
    public static $species = "Homo sapiens";

    // 1.2 Phương thức khởi tạo (constructor)
    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    // 1.3 getter và setter cho thuộc tính name
    public function getName() {
        return $this->name;
    }
    public function setName($name) {
        $this->name = $name;
    }
    // getter và setter cho thuộc tính age
    public function getAge() {
        return $this->age;
    }   
    public function setAge($age) {
        $this->age = $age;
    }

    // 1.4 Phương thức (methods)
    public function introduce() {
        return "Xin chào, tôi tên là {$this->name} và tôi {$this->age} tuổi.";
    }

    // 1.5 Phương thức static
    public static function getSpecies() {
        return self::$species;
    }
    // 1.6 Phương thức hủy (destructor)
    public function __destruct() {
        echo "Đối tượng {$this->name} đã bị hủy.\n";
    }
}

// Khởi tạo object từ class được định nghĩa
$person1 = new Person("Nguyễn Văn A", 25);
$person2 = new Person("Trần Thị B", 30);

echo $person1->introduce() . "\n";
echo $person2->introduce() . "\n";
// Kết quả:
    // Xin chào, tôi tên là Nguyễn Văn A và tôi 25 tuổi. 
    // Xin chào, tôi tên là Trần Thị B và tôi 30 tuổi.
// Truy cập thuộc tính static
echo "Loài: " . Person::getSpecies() . "\n";
    // Kết quả: Loài: Homo sapiens
?>