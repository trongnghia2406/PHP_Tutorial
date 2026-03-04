<?php
    // 1. CONSTANT TRONG PHP
    // 1.1 Hằng số với define() và const
    define("PI", 3.14159); // Định nghĩa hằng số PI
    const GRAVITY = 9.81; // Định nghĩa hằng số GRAVITY
    echo "Value of PI: " . PI; // Kết quả: Value of PI: 3.14159
    echo "Value of GRAVITY: " . GRAVITY; // Kết quả: Value of GRAVITY: 9.81

    // 1.2 Magic constants trong php
    echo "Current file: " . __FILE__; // Kết quả: Current file: /path/to/php02_constant_operator.php
    echo "Current line: " . __LINE__; // Kết quả: Current line: 10
    echo "Current function: " . __FUNCTION__; // Kết quả: Current function: (trống vì không nằm trong hàm nào)
    echo "Current class: " . __CLASS__; // Kết quả: Current class: (trống vì không nằm trong lớp nào)
    // Còn có nhiều magic constants khác như __METHOD__, __NAMESPACE__, v.v.

    // 2. TOÁN TỬ TRONG PHP
    // 2.1 Toán tử số học
    $a = 10;
    $b = 3;
    echo "a + b = " . ($a + $b); // Kết quả: a + b = 13
    echo "a - b = " . ($a - $b); // Kết quả: a - b = 7
    echo "a * b = " . ($a * $b); // Kết quả: a * b = 30
    echo "a / b = " . ($a / $b); // Kết quả: a / b = 3.3333333333333
    echo "a % b = " . ($a % $b); // Kết quả: a % b = 1
    echo "a ** b = " . ($a ** $b); // Kết quả: a ** b = 1000

    // 2.2 Toán tử gán
    $c = 5;
    $c += 2; // Tương đương với $c = $c + 2
    echo "c += 2 => c = " . $c; // Kết quả: c += 2 => c = 7
    // Các toán tử gán khác: -=, *=, /=, %=, **=, v.v.

    // 2.3 Toán tử tăng giảm
    $d = 10;
    echo "d++ => " . $d++; // Kết quả: d++ => 10 (sau đó d trở thành 11)
    echo "++d => " . ++$d; // Kết quả: ++d => 12 (d đã là 11 trước đó, sau đó tăng lên 12)
    echo "d-- => " . $d--; // Kết quả: d-- => 12 (sau đó d trở thành 11)
    echo "--d => " . --$d; // Kết quả: --d => 10 (d đã là 11 trước đó, sau đó giảm xuống 10)

    // 2.4 Toán tử so sánh
    $x = 10;
    $y = 20;
    $z = "10";
    echo "x == y: " . ($x == $y ? "true" : "false"); // Kết quả: x == y: false
    echo "x < y: " . ($x < $y ? "true" : "false"); // Kết quả: x < y: true
    echo "x > y: " . ($x > $y ? "true" : "false"); // Kết quả: x > y: false
    echo "x != y: " . ($x != $y ? "true" : "false"); // Kết quả: x != y: true
    echo "x == z: " . ($x == $z ? "true" : "false"); // Kết quả: x == z: true (so sánh kiểu dữ liệu tự động chuyển đổi)
    echo "x === z: " . ($x === $z ? "true" : "false"); // Kết quả: x === z: false (so sánh cả giá trị và kiểu dữ liệu)
    echo "x != z: " . ($x != $z ? "true" : "false"); // Kết quả: x != z: false (so sánh kiểu dữ liệu tự động chuyển đổi)
    echo "x !== z: " . ($x !== $z ? "true" : "false"); // Kết quả: x !== z: true (so sánh cả giá trị và kiểu dữ liệu)

    // 2.5 Toán tử logic
    $p = true;
    $q = false;
    echo "p && q: " . ($p && $q ? "true" : "false"); // Kết quả: p && q: false
    echo "p || q: " . ($p || $q ? "true" : "false"); // Kết quả: p || q: true
    echo "!p: " . (!$p ? "true" : "false"); // Kết quả: !p: false
    echo "!q: " . (!$q ? "true" : "false"); // Kết quả: !q: true

    // 2.6 Toán tử chuỗi
    $str1 = "Hello";
    $str2 = "World";
    echo "str1 . str2: " . ($str1 . " " . $str2); // Kết quả: str1 . str2: Hello World
    $str1 .= " " . $str2; // Tương đương với $str1 = $str1 . " " . $str2
    echo "str1 after concatenation: " . $str1; // Kết quả: str1 after concatenation: Hello World

    // 2.7 Toán tử mảng
    $arr1 = array(1, 2, 3);
    $arr2 = array(4, 5, 6);
    print_r($arr1 + $arr2); // Toán tử hợp nhất. Kết quả: Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 [5] => 6 )
    $arr1 += $arr2; // Tương đương với $arr1 = $arr1 + $arr2
    print_r($arr1); // Kết quả: Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 [5] => 6 )
    echo "arr1 == arr2: " . ($arr1 == $arr2 ? "true" : "false"); // Kết quả: arr1 == arr2: false
    echo "arr1 === arr2: " . ($arr1 === $arr2 ? "true" : "false"); // Kết quả: arr1 === arr2: false
    echo "arr1 != arr2: " . ($arr1 != $arr2 ? "true" : "false"); // Kết quả: arr1 != arr2: true
    echo "arr1 !== arr2: " . ($arr1 !== $arr2 ? "true" : "false"); // Kết quả: arr1 !== arr2: true
    // Toán tử <> cũng tương đương với !=, nhưng ít được sử dụng hơn. 
    // Toán tử spaceship (<= >) được sử dụng để so sánh hai giá trị và trả về -1, 0, hoặc 1 tùy thuộc vào kết quả so sánh. Ví dụ:
    echo "5 <=> 10: " . (5 <=> 10); // Kết quả: 5 <=> 10: -1 (5 nhỏ hơn 10)
    echo "10 <=> 10: " . (10 <=> 10); // Kết quả: 10 <=> 10: 0 (10 bằng 10)
    echo "15 <=> 10: " . (15 <=> 10); // Kết quả: 15 <=> 10: 1 (15 lớn hơn 10)

    // 2.8 Toán tử điều kiện (ternary)
    $age = 18;
    $status = ($age >= 18) ? "Adult" : "Minor"; // Nếu age >= 18 thì status sẽ là "Adult", ngược lại sẽ là "Minor"
    echo "Status: " . $status; // Kết quả: Status: Adult
    // Toán tử null coalescing (??) được sử dụng để kiểm tra nếu một biến tồn tại và không phải là null, nếu không sẽ trả về giá trị mặc định. Ví dụ:
    $username = null;
    $displayName = $username ?? "Guest"; // Nếu $username là null thì $displayName sẽ là "Guest"
    echo "Display Name: " . $displayName; // Kết quả: Display Name: Guest
    // Toán tử null coalescing assignment (??=) được sử dụng để gán giá trị cho một biến nếu biến đó chưa tồn tại hoặc có giá trị null. Ví dụ:
    $email = null;
    $email ??= "default@example.com"; // Nếu $email là null thì sẽ gán "default@example.com" cho $email
    echo "Email: " . $email; // Kết quả: Email: default@example.com
?>