<!-- Viết chương trình PHP để tìm giá trị lớn nhất và nhỏ nhất trong một mảng. -->
<?php
// Hàm tìm giá trị lớn nhất trong mảng
function findMaxValue($array) {
    return max($array);
}

// Hàm tìm giá trị nhỏ nhất trong mảng
function findMinValue($array) {
    return min($array);
}

// Nhập mảng từ người dùng
echo "Nhập các phần tử của mảng (cách nhau bằng dấu phẩy): ";
$input = readline();
$array = explode(',', $input);

// Chuyển đổi các phần tử sang kiểu số
$array = array_map('intval', $array);

// Kiểm tra xem mảng có phần tử không
if (count($array) > 0) {
    // Tìm giá trị lớn nhất và nhỏ nhất và in kết quả
    $maxValue = findMaxValue($array);
    $minValue = findMinValue($array);

    echo "Giá trị lớn nhất trong mảng là: $maxValue\n";
    echo "Giá trị nhỏ nhất trong mảng là: $minValue\n";
} else {
    echo "Mảng không có phần tử.\n";
}
?>