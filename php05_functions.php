<?php
    // FUNCTION TRONG PHP
    // 1.1 Định nghĩa và sử dụng hàm trong PHP
    function greet($name) {
        return "Hello, $name!";
    }
    echo greet("TrongNghia"); // Kết quả: Hello, TrongNghia!

    // 1.2 Hàm mũi tên (arrow functions) trong PHP 7.4 trở lên
    $greetArrow = fn($name) => "Hello, $name!";
    echo $greetArrow("Alice"); // Kết quả: Hello, Alice!

    // 1.3 Hàm có tham số mặc định
    function greetWithDefault($name = "Guest") {
        return "Hello, $name!";
    }
    echo greetWithDefault(); // Kết quả: Hello, Guest!
    echo greetWithDefault("Alice"); // Kết quả: Hello, Alice!

    // 1.4 Hàm có tham số biến đổi (variadic functions)
    function sum(...$numbers) {
        return array_sum($numbers);
    }
    echo sum(1, 2, 3); // Kết quả: 6
    echo sum(4, 5); // Kết quả: 9

    // 1.5 Hàm có kiểu trả về (return type declarations)
    function add(int $a, int $b): int {
        return $a + $b;
    }
    echo add(10, 20); // Kết quả: 30

    // 1.6 Hàm có kiểu tham số (type declarations)
    function multiply(float $x, float $y): float {
        return $x * $y;
    }
    echo multiply(2.5, 4.0); // Kết quả: 10.0
?>