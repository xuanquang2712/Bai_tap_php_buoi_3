<!-- Viết chương trình PHP để tìm số nguyên tố trong một khoảng cho trước. -->
<?php
// Hàm kiểm tra xem một số có phải là số nguyên tố hay không
function isPrime($number) {
    if ($number <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    return true;
}

// Hàm tìm và in số nguyên tố trong một khoảng
function findPrimesInRange($start, $end) {
    echo "Các số nguyên tố trong khoảng từ $start đến $end là:\n";
    for ($i = $start; $i <= $end; $i++) {
        if (isPrime($i)) {
            echo "$i ";
        }
    }
    echo "\n";
}

// Nhập khoảng từ người dùng
echo "Nhập khoảng số (bắt đầu và kết thúc, cách nhau bằng dấu cách): ";
$input = readline();
list($start, $end) = explode(' ', $input);

// Chuyển đổi các giá trị sang kiểu số nguyên
$start = intval($start);
$end = intval($end);

// Gọi hàm để tìm số nguyên tố trong khoảng
findPrimesInRange($start, $end);
?>