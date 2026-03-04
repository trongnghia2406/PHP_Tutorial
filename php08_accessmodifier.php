<?php
class User {
    public $name;
    protected $email;
    private $password;

    public function __construct($name, $email, $password) {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }

    public function getPassword() {
        return $this->password; // Truy cập private bên trong lớp
    }
}

class Admin extends User {
    public function getEmail() {
        return $this->email; // Truy cập protected từ lớp cha
    }
}

$user = new User("Nam", "nam@example.com", "123456");

// Public
echo $user->name; // Hoạt động

// Protected (lỗi nếu truy cập bên ngoài)
// echo $user->email; 

// Private (lỗi nếu truy cập trực tiếp)
// echo $user->password; 
echo $user->getPassword(); // Hoạt động thông qua method public
?>