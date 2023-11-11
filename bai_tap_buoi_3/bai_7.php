<!-- Viết chương trình PHP để tính giai thừa của một số nguyên dương. -->
<?php
// Hàm tính giai thừa
function calculateFactorial($number) {
    if ($number == 0 || $number == 1) {
        return 1;
    } else {
        return $number * calculateFactorial($number - 1);
    }
}

// Nhập số nguyên dương từ người dùng
do {
    $input = readline("Nhập một số nguyên dương: ");
    $number = intval($input);
} while ($number <= 0);

// Gọi hàm để tính giai thừa
$factorial = calculateFactorial($number);

// In kết quả
echo "Giai thừa của $number là: $factorial\n";
?>