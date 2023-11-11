<!-- Viết chương trình PHP để sắp xếp một mảng theo thứ tự tăng dần. -->
<?php
// Hàm sắp xếp mảng theo thứ tự tăng dần
function sortArray($array) {
    sort($array);
    return $array;
}

// Nhập mảng từ người dùng
echo "Nhập các phần tử của mảng (cách nhau bằng dấu phẩy): ";
$input = readline();
$array = explode(',', $input);

// Chuyển đổi các phần tử sang kiểu số
$array = array_map('intval', $array);

// Gọi hàm để sắp xếp mảng
$sortedArray = sortArray($array);

// In mảng sau khi đã sắp xếp
echo "Mảng sau khi sắp xếp là: " . implode(', ', $sortedArray) . "\n";
?>