<!-- Viết chương trình PHP để thêm một phần tử vào đầu hoặc cuối của một mảng. -->
<?php
// Hàm thêm phần tử vào đầu mảng
function addToFront($array, $element) {
    array_unshift($array, $element);
    return $array;
}

// Hàm thêm phần tử vào cuối mảng
function addToEnd($array, $element) {
    array_push($array, $element);
    return $array;
}

// Nhập mảng từ người dùng
echo "Nhập các phần tử của mảng (cách nhau bằng dấu phẩy): ";
$inputArray = readline();
$array = explode(',', $inputArray);

// Chuyển đổi các phần tử sang kiểu số
$array = array_map('intval', $array);

// Nhập phần tử cần thêm
$elementToAdd = readline("Nhập phần tử cần thêm: ");

// Chọn vị trí để thêm
$position = strtolower(readline("Bạn muốn thêm vào đầu (D) hay cuối (C) của mảng? "));

// Gọi hàm thêm phần tử vào mảng
if ($position === 'd') {
    $modifiedArray = addToFront($array, $elementToAdd);
} elseif ($position === 'c') {
    $modifiedArray = addToEnd($array, $elementToAdd);
} else {
    die("Vị trí không hợp lệ. Chương trình kết thúc.");
}

// In mảng sau khi thêm phần tử
echo "Mảng sau khi thêm phần tử là: " . implode(', ', $modifiedArray) . "\n";
?>