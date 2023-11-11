<!-- Viết chương trình PHP để tìm số lẻ lớn nhất trong một mảng. -->
<?php
// Hàm tìm số lẻ lớn nhất trong mảng
function findLargestOdd($array) {
    $largestOdd = PHP_INT_MIN;

    foreach ($array as $number) {
        if ($number % 2 == 1 && $number > $largestOdd) {
            $largestOdd = $number;
        }
    }

    return ($largestOdd == PHP_INT_MIN) ? null : $largestOdd;
}

// Nhập mảng từ người dùng
echo "Nhập các phần tử của mảng (cách nhau bằng dấu phẩy): ";
$inputArray = readline();
$array = explode(',', $inputArray);

// Chuyển đổi các phần tử sang kiểu số
$array = array_map('intval', $array);

// Gọi hàm để tìm số lẻ lớn nhất trong mảng
$largestOdd = findLargestOdd($array);

// In kết quả
if ($largestOdd !== null) {
    echo "Số lẻ lớn nhất trong mảng là: $largestOdd\n";
} else {
    echo "Không có số lẻ nào trong mảng.\n";
}
?>