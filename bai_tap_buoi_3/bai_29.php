<!-- Viết chương trình PHP để tìm số chính phương trong một khoảng cho trước. -->
<?php
// Hàm kiểm tra số chính phương
function isPerfectSquare($number) {
    $sqrt = sqrt($number);
    return ($sqrt * $sqrt == $number);
}

// Hàm tìm số chính phương trong khoảng cho trước
function findPerfectSquaresInRange($start, $end) {
    $perfectSquares = [];

    for ($i = $start; $i <= $end; $i++) {
        if (isPerfectSquare($i)) {
            $perfectSquares[] = $i;
        }
    }

    return $perfectSquares;
}

// Nhập khoảng từ người dùng
do {
    $start = readline("Nhập số bắt đầu của khoảng: ");
} while (!ctype_digit($start));

do {
    $end = readline("Nhập số kết thúc của khoảng: ");
} while (!ctype_digit($end) || $end < $start);

// Chuyển đổi các số sang kiểu số nguyên
$start = intval($start);
$end = intval($end);

// Gọi hàm để tìm số chính phương trong khoảng
$perfectSquaresInRange = findPerfectSquaresInRange($start, $end);

// In kết quả
if (empty($perfectSquaresInRange)) {
    echo "Không có số chính phương trong khoảng từ $start đến $end.\n";
} else {
    echo "Các số chính phương trong khoảng từ $start đến $end là: " . implode(', ', $perfectSquaresInRange) . "\n";
}
?>