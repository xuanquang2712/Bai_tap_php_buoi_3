<!-- Viết chương trình PHP để tìm số âm lớn nhất trong một mảng. -->
<?php
// Hàm tìm số âm lớn nhất trong mảng
function findLargestNegative($array) {
    $largestNegative = null;

    foreach ($array as $number) {
        if ($number < 0 && ($largestNegative === null || $number > $largestNegative)) {
            $largestNegative = $number;
        }
    }

    return $largestNegative;
}

// Nhập mảng từ người dùng
echo "Nhập các phần tử của mảng (cách nhau bằng dấu phẩy): ";
$inputArray = readline();
$array = explode(',', $inputArray);

// Chuyển đổi các phần tử sang kiểu số
$array = array_map('intval', $array);

// Gọi hàm để tìm số âm lớn nhất trong mảng
$largestNegative = findLargestNegative($array);

// In kết quả
if ($largestNegative !== null) {
    echo "Số âm lớn nhất trong mảng là: $largestNegative\n";
} else {
    echo "Không có số âm trong mảng.\n";
}
?>