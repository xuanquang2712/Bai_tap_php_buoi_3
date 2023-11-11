<!-- Viết chương trình PHP để tìm vị trí của một phần tử trong một mảng. -->
<?php
// Hàm tìm vị trí của một phần tử trong mảng
function findElementPosition($array, $element) {
    $positions = array_keys($array, $element);
    return $positions;
}

// Nhập mảng từ người dùng
echo "Nhập các phần tử của mảng (cách nhau bằng dấu phẩy): ";
$input = readline();
$array = explode(',', $input);

// Nhập phần tử cần tìm vị trí
$elementToFind = readline("Nhập phần tử cần tìm vị trí: ");

// Gọi hàm để tìm vị trí của phần tử trong mảng
$positions = findElementPosition($array, $elementToFind);

// In vị trí của phần tử trong mảng
if (empty($positions)) {
    echo "Phần tử '$elementToFind' không có trong mảng.\n";
} else {
    echo "Vị trí của phần tử '$elementToFind' trong mảng là: " . implode(', ', $positions) . "\n";
}
?>