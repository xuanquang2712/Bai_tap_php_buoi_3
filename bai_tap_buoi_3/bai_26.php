<!-- Viết chương trình PHP để tìm số dương lớn nhất trong một mảng. -->
<?php
// Hàm tìm số dương lớn nhất trong mảng
function findLargestPositive($array) {
    $largestPositive = null;

    foreach ($array as $number) {
        if ($number > 0 && ($largestPositive === null || $number > $largestPositive)) {
            $largestPositive = $number;
        }
    }

    return $largestPositive;
}

// Nhập mảng từ người dùng
echo "Nhập các phần tử của mảng (cách nhau bằng dấu phẩy): ";
$inputArray = readline();
$array = explode(',', $inputArray);

// Chuyển đổi các phần tử sang kiểu số
$array = array_map('intval', $array);

// Gọi hàm để tìm số dương lớn nhất trong mảng
$largestPositive = findLargestPositive($array);

// In kết quả
if ($largestPositive !== null) {
    echo "Số dương lớn nhất trong mảng là: $largestPositive\n";
} else {
    echo "Không có số dương trong mảng.\n";
}
?>