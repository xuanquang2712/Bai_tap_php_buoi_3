<!-- Viết chương trình PHP để sắp xếp một mảng theo thứ tự giảm dần. -->
<?php
// Hàm sắp xếp mảng theo thứ tự giảm dần
function sortDescending($array) {
    arsort($array);
    return $array;
}

// Nhập mảng từ người dùng
echo "Nhập các phần tử của mảng (cách nhau bằng dấu phẩy): ";
$inputArray = readline();
$array = explode(',', $inputArray);

// Chuyển đổi các phần tử sang kiểu số
$array = array_map('intval', $array);

// Gọi hàm để sắp xếp mảng theo thứ tự giảm dần
$sortedArray = sortDescending($array);

// In mảng sau khi sắp xếp
echo "Mảng sau khi sắp xếp giảm dần là: " . implode(', ', $sortedArray) . "\n";
?>