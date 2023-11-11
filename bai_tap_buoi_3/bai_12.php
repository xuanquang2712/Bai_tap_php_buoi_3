<!-- Viết chương trình PHP để chèn một phần tử vào một mảng ở vị trí bất kỳ. -->
<?php
// Hàm chèn số vào mảng ở vị trí bất kỳ
function insertNumberIntoArray($array, $number, $position) {
    array_splice($array, $position, 0, $number);
    return $array;
}

// Nhập mảng từ người dùng
echo "Nhập các phần tử của mảng (cách nhau bằng dấu phẩy): ";
$inputArray = readline();
$array = explode(',', $inputArray);

// Chuyển đổi các phần tử sang kiểu số
$array = array_map('intval', $array);

// Nhập số cần chèn và vị trí chèn
$numberToInsert = readline("Nhập số cần chèn: ");
$positionToInsert = readline("Nhập vị trí cần chèn: ");

// Chuyển đổi số và vị trí sang kiểu số nguyên
$numberToInsert = intval($numberToInsert);
$positionToInsert = intval($positionToInsert);

// Gọi hàm để chèn số vào mảng
$newArray = insertNumberIntoArray($array, $numberToInsert, $positionToInsert);

// In mảng sau khi chèn
echo "Mảng sau khi chèn số $numberToInsert vào vị trí $positionToInsert là: " . implode(', ', $newArray) . "\n";
?>