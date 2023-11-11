<!-- Viết chương trình PHP để in ra các số Fibonacci trong một khoảng cho trước. -->
<?php
// Hàm in ra các số Fibonacci trong một khoảng
function printFibonacciInRange($start, $end) {
    $fibonacciSequence = [];
    $fibonacciSequence[0] = 0;
    $fibonacciSequence[1] = 1;

    // Tính và lưu các số Fibonacci vào mảng
    for ($i = 2; $i <= $end; $i++) {
        $fibonacciSequence[$i] = $fibonacciSequence[$i - 1] + $fibonacciSequence[$i - 2];
    }

    // In ra các số Fibonacci trong khoảng
    echo "Các số Fibonacci trong khoảng từ $start đến $end là:\n";
    for ($i = $start; $i <= $end; $i++) {
        echo $fibonacciSequence[$i] . " ";
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

// Gọi hàm để in ra các số Fibonacci trong khoảng
printFibonacciInRange($start, $end);
?>