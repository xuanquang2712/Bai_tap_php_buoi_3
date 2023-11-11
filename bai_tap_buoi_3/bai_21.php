<!-- Viết chương trình PHP để tìm số lớn thứ hai trong một mảng. -->
<?php
// Hàm tìm số lớn thứ hai trong mảng
function findSecondLargest($array) {
    if (count($array) < 2) {
        die("Mảng phải có ít nhất 2 phần tử để tìm số lớn thứ hai.");
    }

    $max = $secondMax = PHP_INT_MIN;

    foreach ($array as $number) {
        if ($number > $max) {
            $secondMax = $max;
            $max = $number;
        } elseif ($number > $secondMax && $number != $max) {
            $secondMax = $number;
        }
    }

    return $secondMax;
}

// Nhập mảng từ người dùng
echo "Nhập các phần tử của mảng (cách nhau bằng dấu phẩy): ";
$inputArray = readline();
$array = explode(',', $inputArray);

// Chuyển đổi các phần tử sang kiểu số
$array = array_map('intval', $array);

// Gọi hàm để tìm số lớn thứ hai trong mảng
$secondLargest = findSecondLargest($array);

// In kết quả
echo "Số lớn thứ hai trong mảng là: $secondLargest\n";
?>