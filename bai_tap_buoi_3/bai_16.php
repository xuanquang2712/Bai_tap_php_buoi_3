<!-- Viết chương trình PHP để tính số lượng phần tử trong một mảng. -->
<?php
// Hàm đếm số lượng phần tử trong mảng
function countElements($array) {
    return count($array);
}

// Nhập mảng từ người dùng
echo "Nhập các phần tử của mảng (cách nhau bằng dấu phẩy): ";
$inputArray = readline();
$array = explode(',', $inputArray);

// Chuyển đổi các phần tử sang kiểu số
$array = array_map('intval', $array);

// Gọi hàm để đếm số lượng phần tử trong mảng
$elementCount = countElements($array);

// In kết quả
echo "Số lượng phần tử trong mảng là: $elementCount\n";
?>