<!-- Viết chương trình PHP để tính tổng của các số từ 1 đến n. -->
<?php
// Hàm tính tổng từ 1 đến n
function calculateSum($n) {
    $sum = 0;
    for ($i = 1; $i <= $n; $i++) {
        $sum += $i;
    }
    return $sum;
}

// Nhập giá trị của n từ máy
$n = readline("Nhập giá trị của n: ");

// Kiểm tra xem n có phải là số nguyên dương hay không
if (!is_numeric($n) || $n <= 0 || floor($n) != $n) {
    echo "Vui lòng nhập một số nguyên dương.";
} else {
    // Gọi hàm và in kết quả
    $result = calculateSum($n);
    echo "Tổng của các số từ 1 đến $n là: $result";
}
?>