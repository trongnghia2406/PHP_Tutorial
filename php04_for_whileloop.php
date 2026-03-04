<?php
    // 1.1 Vòng lặp for trong PHP
    for ($i = 0; $i < 10; $i++) {
        if ($i % 2 == 0) {
            continue; // Bỏ qua các giá trị của i là số chẵn
        }
        if ($i >= 8) {
            break; // Dừng vòng lặp khi i lớn hơn hoặc bằng 5
        }
        echo "Giá trị của i: $i\n"; // Kết quả: Giá trị của i: 1, Giá trị của i: 3, Giá trị của i: 5, Giá trị của i: 7
    }

    // 1.2 Vòng lặp while trong PHP
    $j = 0;
    while ($j < 5) {
        echo "Giá trị của j: $j\n"; // Kết quả: Giá trị của j: 0, Giá trị của j: 1, Giá trị của j: 2, Giá trị của j: 3, Giá trị của j: 4
        $j++;
    }

    // 1.3 Vòng lặp do-while trong PHP
    $k = 6;
    do {
        echo "Giá trị của k: $k\n"; // Kết quả: Giá trị của k: 6
        $k++;
    } while ($k < 5);

    // 1.4 Vòng lặp foreach trong PHP
    $array = array("apple", "banana", "cherry");
    foreach ($array as $fruit) {
        echo "Trái cây: $fruit\n"; // Kết quả: Trái cây: apple, Trái cây: banana, Trái cây: cherry
    }

    // 1.5 Vòng lặp foreach với mảng kết hợp
    $assocArray = array("name" => "Alice", "age" => 30, "city" => "New York");
    foreach ($assocArray as $key => $value) {
        echo "$key: $value\n"; // Kết quả: name: Alice, age: 30, city: New York
    }
?>