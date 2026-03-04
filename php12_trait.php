<?php
// 1. Định nghĩa Trait
trait Logger {
    public function log($msg) {
        echo "[LOG]: " . $msg . "\n";
    }
}

trait Database {
    public function connect() {
        echo "Connecting to DB...\n";
    }
}

// 2. Sử dụng Trait trong các Class
class User {
    use Logger, Database; // Sử dụng đa Trait
    
    public function __construct() {}
}

class Product {
    use Logger; // Tái sử dụng Logger
}

// 3. Thực thi
$user = new User();
$user->connect(); // Output: Connecting to DB...
$user->log("User logged in"); // Output: [LOG]: User logged in

$product = new Product();
$product->log("Product viewed"); // Output: [LOG]: Product viewed
?>
