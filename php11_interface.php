<?php
// 1. Định nghĩa Interface
interface PaymentMethod {
    // Chỉ khai báo phương thức, không có nội dung
    public function pay($amount);
}

// 2. Class triển khai interface cho PayPal
class PayPal implements PaymentMethod {
    public function pay($amount) {
        return "Đang thanh toán " . $amount . " VNĐ qua PayPal.<br>";
    }
}

// 3. Class triển khai interface cho Credit Card
class CreditCard implements PaymentMethod {
    public function pay($amount) {
        return "Đang thanh toán " . $amount . " VNĐ qua Credit Card.<br>";
    }
}

// 4. Sử dụng
function processPayment(PaymentMethod $method, $amount) {
    echo $method->pay($amount);
}

$paypal = new PayPal();
$creditCard = new CreditCard();

processPayment($paypal, 500000); // Kết quả: Đang thanh toán 500000 VNĐ qua PayPal.
processPayment($creditCard, 1000000); // Kết quả: Đang thanh toán 1000000 VNĐ qua Credit Card.
?>
