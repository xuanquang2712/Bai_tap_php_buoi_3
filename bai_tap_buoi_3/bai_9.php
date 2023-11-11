<!-- Viết chương trình PHP để tính tổng của các số trong một mảng. -->
<?php
// Hàm tính tổng của các số trong mảng
function calculateArraySum($array) {
    return array_sum($array);
}

// Nhập mảng từ người dùng
echo "Nhập các phần tử của mảng (cách nhau bằng dấu phẩy): ";
$input = readline();
$array = explode(',', $input);

// Chuyển đổi các phần tử sang kiểu số
$array = array_map('intval', $array);

// Gọi hàm để tính tổng của các số trong mảng
$arraySum = calculateArraySum($array);

// In kết quả
echo "Tổng của các số trong mảng là: $arraySum\n";
?>