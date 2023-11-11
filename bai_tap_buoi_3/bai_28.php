<!-- Viết chương trình PHP để tính tổng các số lẻ từ 1 đến n. -->
<?php
// Hàm tính tổng các số lẻ từ 1 đến n
function sumOfOddNumbers($n) {
    $sum = 0;

    for ($i = 1; $i <= $n; $i += 2) {
        $sum += $i;
    }

    return $sum;
}

// Nhập n từ người dùng
do {
    $inputN = readline("Nhập một số nguyên dương n: ");
} while (!ctype_digit($inputN) || $inputN < 1);

// Chuyển đổi n sang kiểu số nguyên
$n = intval($inputN);

// Gọi hàm để tính tổng các số lẻ từ 1 đến n
$sum = sumOfOddNumbers($n);

// In kết quả
echo "Tổng các số lẻ từ 1 đến $n là: $sum\n";
?>