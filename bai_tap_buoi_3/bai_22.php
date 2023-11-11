<!-- Viết chương trình PHP để tìm ước số chung lớn nhất và bội số chung nhỏ nhất của hai số nguyên dương. -->
<?php
// Hàm tìm USCLN của hai số
function findGCD($a, $b) {
    while ($b != 0) {
        $temp = $b;
        $b = $a % $b;
        $a = $temp;
    }
    return abs($a);
}

// Hàm tìm BSCNN của hai số
function findLCM($a, $b) {
    return ($a * $b) / findGCD($a, $b);
}

// Nhập hai số nguyên dương từ người dùng
do {
    $num1 = readline("Nhập số nguyên dương thứ nhất: ");
} while (!ctype_digit($num1));

do {
    $num2 = readline("Nhập số nguyên dương thứ hai: ");
} while (!ctype_digit($num2));

// Chuyển đổi các số sang kiểu số nguyên
$num1 = intval($num1);
$num2 = intval($num2);

// Gọi hàm để tìm USCLN và BSCNN
$gcd = findGCD($num1, $num2);
$lcm = findLCM($num1, $num2);

// In kết quả
echo "USCLN của $num1 và $num2 là: $gcd\n";
echo "BSCNN của $num1 và $num2 là: $lcm\n";
?>