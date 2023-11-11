<!-- Viết chương trình PHP để đếm số lần xuất hiện của một phần tử trong một mảng. -->
<?php
// Hàm đếm số lần xuất hiện của một phần tử trong mảng
function countOccurrences($array, $element) {
    return array_count_values($array)[$element] ?? 0;
}

// Nhập mảng từ người dùng
echo "Nhập các phần tử của mảng (cách nhau bằng dấu phẩy): ";
$inputArray = readline();
$array = explode(',', $inputArray);

// Chuyển đổi các phần tử sang kiểu số
$array = array_map('intval', $array);

// Nhập phần tử cần kiểm tra
$elementToCount = readline("Nhập phần tử cần đếm: ");

// Gọi hàm để đếm số lần xuất hiện của phần tử trong mảng
$occurrences = countOccurrences($array, $elementToCount);

// In kết quả
echo "Số lần xuất hiện của phần tử $elementToCount trong mảng là: $occurrences\n";
?>