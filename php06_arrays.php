<?php
    // ARRAY TRONG PHP
    // 1.1 Mảng có chỉ số (Indexed arrays)
    $fruits = array("apple", "banana", "cherry");
    foreach ($fruits as $fruit) {
        echo "Trái cây: $fruit\n"; // Kết quả: Trái cây: apple, Trái cây: banana, Trái cây: cherry
    }
    // Truy cập phần tử mảng bằng chỉ số
    echo "Phần tử đầu tiên: " . $fruits[0] . "\n"; // Kết quả: Phần tử đầu tiên: apple
    // Cập nhật phần tử mảng
    $fruits[1] = "blueberry";
    echo "Phần tử thứ hai sau khi cập nhật: " . $fruits[1] . "\n"; // Kết quả: Phần tử thứ hai sau khi cập nhật: blueberry
    // Thêm phần tử mới vào mảng
    $fruits[] = "orange";
    echo "Phần tử mới thêm vào: " . $fruits[3] . "\n"; // Kết quả: Phần tử mới thêm vào: orange
    // Thêm phần tử mới vào mảng bằng hàm array_push
    array_push($fruits, "grape");
    echo "Phần tử mới thêm vào bằng array_push: " . $fruits[4] . "\n"; // Kết quả: Phần tử mới thêm vào bằng array_push: grape
    // Thêm phần tử mới vào mảng bằng hàm array_unshift (thêm vào đầu mảng)
    array_unshift($fruits, "kiwi");
    echo "Phần tử mới thêm vào bằng array_unshift: " . $fruits[0] . "\n"; // Kết quả: Phần tử mới thêm vào bằng array_unshift: kiwi
    // Loại bỏ phần tử cuối cùng của mảng bằng hàm array_pop
    $removedFruit = array_pop($fruits);
    echo "Phần tử bị loại bỏ bằng array_pop: $removedFruit\n"; // Kết quả: Phần tử bị loại bỏ bằng array_pop: grape
    // Loại bỏ phần tử đầu tiên của mảng bằng hàm array_shift
    $removedFirstFruit = array_shift($fruits);
    echo "Phần tử bị loại bỏ bằng array_shift: $removedFirstFruit\n"; // Kết quả: Phần tử bị loại bỏ bằng array_shift: kiwi
    // Đếm số phần tử trong mảng
    echo "Số phần tử trong mảng: " . count($fruits) . "\n"; // Kết quả: Số phần tử trong mảng: 4

    // 1.2 Mảng kết hợp (Associative arrays)
    $person = array("name" => "Alice", "age" => 30, "city" => "New York");
    foreach ($person as $key => $value) {
        echo "$key: $value\n"; // Kết quả: name: Alice, age: 30, city: New York
    }

    // 1.3 Mảng đa chiều (Multidimensional arrays)
    $matrix = array(
        array(1, 2, 3),
        array(4, 5, 6),
        array(7, 8, 9)
    );
    for ($i = 0; $i < count($matrix); $i++) {
        for ($j = 0; $j < count($matrix[$i]); $j++) {
            echo "Giá trị tại [$i][$j]: " . $matrix[$i][$j] . "\n"; // Kết quả: Giá trị tại [0][0]: 1, Giá trị tại [0][1]: 2, ..., Giá trị tại [2][2]: 9
        }
    }

    // 1.4 Các hàm xử lý mảng trong PHP
    $numbers = array(5, 2, 9, 1, 5, 6);
    sort($numbers); // Sắp xếp mảng theo thứ tự tăng dần
    print_r($numbers); // Kết quả: Array ( [0] => 1 [1] => 2 [2] => 5 [3] => 5 [4] => 6 [5] => 9 )
    rsort($numbers); // Sắp xếp mảng theo thứ tự giảm dần
    print_r($numbers); // Kết quả: Array ( [0] => 9 [1] => 6 [2] => 5 [3] => 5 [4] => 2 [5] => 1 )
    $sum = array_sum($numbers); // Tính tổng các phần tử trong mảng
    echo "Tổng các phần tử trong mảng: $sum\n"; // Kết quả: Tổng các phần tử trong mảng: 28
    $average = array_sum($numbers) / count($numbers); // Tính trung bình cộng các phần tử trong mảng
    echo "Trung bình cộng các phần tử trong mảng: $average\n"; // Kết quả: Trung bình cộng các phần tử trong mảng: 4.6666666666667
    $max = max($numbers); // Tìm giá trị lớn nhất trong mảng
    echo "Giá trị lớn nhất trong mảng: $max\n"; // Kết quả: Giá trị lớn nhất trong mảng: 9
    $min = min($numbers); // Tìm giá trị nhỏ nhất trong mảng
    echo "Giá trị nhỏ nhất trong mảng: $min\n"; // Kết quả: Giá trị nhỏ nhất trong mảng: 1
    $uniqueNumbers = array_unique($numbers); // Loại bỏ các phần tử trùng lặp trong mảng
    print_r($uniqueNumbers); // Kết quả: Array ( [0] => 9 [1] => 6 [2] => 5 [4] => 2 [5] => 1 )
    $reversedNumbers = array_reverse($numbers); // Đảo ngược thứ tự của các phần tử trong mảng
    print_r($reversedNumbers); // Kết quả: Array ( [0] => 1 [1] => 2 [2] => 5 [3] => 5 [4] => 6 [5] => 9 )
    $slicedNumbers = array_slice($numbers, 1, 3); // Lấy một phần của mảng từ vị trí 1, với độ dài 3
    print_r($slicedNumbers); // Kết quả: Array ( [0] => 2 [1] => 5 [2] => 5 )
    $mergedNumbers = array_merge($numbers, array(10, 11)); // Hợp nhất hai mảng
    print_r($mergedNumbers); // Kết quả: Array ( [0] => 9 [1] => 6 [2] => 5 [3] => 5 [4] => 2 [5] => 1 [6] => 10 [7] => 11 )
?>