<!-- Viết chương trình PHP để loại bỏ các phần tử trùng lặp trong một mảng. -->
<?php
// Hàm loại bỏ các phần tử trùng lặp trong mảng
function removeDuplicates($array) {
    return array_values(array_unique($array));
}

// Nhập mảng từ người dùng
echo "Nhập các phần tử của mảng (cách nhau bằng dấu phẩy): ";
$input = readline();
$array = explode(',', $input);

// Chuyển đổi các phần tử sang kiểu số
$array = array_map('intval', $array);

// Gọi hàm để loại bỏ phần tử trùng lặp
$uniqueArray = removeDuplicates($array);

// In mảng sau khi loại bỏ phần tử trùng lặp
echo "Mảng sau khi loại bỏ phần tử trùng lặp là: " . implode(', ', $uniqueArray) . "\n";
?>