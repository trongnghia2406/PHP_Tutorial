<?php
    // Biến trong PHP được khai báo bằng cách sử dụng ký hiệu $ trước tên biến
    $name = "TrongNghia"; // Biến kiểu chuỗi
    $age = 21; // Biến kiểu số nguyên
    $height = 1.70; // Biến kiểu số thực float
    $isStudent = true; // Biến kiểu boolean
    $hobbies = array("reading", "swimming", "coding"); // Biến kiểu array
    // Biến kiểu object
    class Person {
        public $name;
        public $age;

        function __construct($name, $age) {
            $this->name = $name;
            $this->age = $age;
        }
    }
    $person = new Person("TrongNghia", 21);
    $address = null; // Biến kiểu null
    // Biến kiểu mixed
    $mixedVar = "This can be a string or a number";
    $mixedVar = 12345; // Bây giờ biến này là một số nguyên

    // In ra kiểu dữ liệu và giá trị của các biến
    echo "Name: $name; Age: $age; Height: $height; Is Student: $isStudent";
    // Kết quả: Name: TrongNghia; Age: 21; Height: 1.7; Is Student: 1
    // Kiểm tra kiểu dữ liệu của biến
    var_dump($name); // Kết quả: string(10) "TrongNghia"
    var_dump($age); // Kết quả: int(21)
    var_dump($height); // Kết quả: float(1.7)
    var_dump($isStudent); // Kết quả: bool(true)
    var_dump($hobbies); // Kết quả: array(3) { [0]=> string(7) "reading" [1]=> string(8) "swimming" [2]=> string(6) "coding" }
    var_dump($person); // Kết quả: object(Person)#1 (2) { ["name"]=> string(10) "TrongNghia" ["age"]=> int(21) }
    var_dump($address); // Kết quả: NULL 
    var_dump($mixedVar); // Kết quả: int(12345) 

    /* 
    Comment nhiều dòng
    */

    // Phạm vi biến trong php
    $globalVar = "I am a global variable"; // Biến toàn cục
    function testScope() {
        global $globalVar; // Sử dụng biến toàn cục trong hàm phải khai báo global
        echo $globalVar; // Kết quả: I am a global variable
        $localVar = "I am a local variable"; // Biến cục bộ
        echo $localVar; // Kết quả: I am a local variable
    }
    testScope();
    // echo $localVar; // Lỗi: Undefined variable $localVar 
?>