<!-- Viết chương trình PHP để kiểm tra xem một số có phải là số hoàn hảo hay không. -->
<?php
// Hàm kiểm tra số hoàn hảo
function isPerfectNumber($number) {
    if ($number <= 0) {
        return false;
    }

    $divisorsSum = 0;

    for ($i = 1; $i <= $number / 2; $i++) {
        if ($number % $i == 0) {
            $divisorsSum += $i;
        }
    }

    return $divisorsSum == $number;
}

// Nhập số từ người dùng
do {
    $inputNumber = readline("Nhập một số nguyên dương: ");
} while (!ctype_digit($inputNumber));

// Chuyển đổi số sang kiểu số nguyên
$number = intval($inputNumber);

// Gọi hàm để kiểm tra số hoàn hảo
if (isPerfectNumber($number)) {
    echo "$number là số hoàn hảo.\n";
} else {
    echo "$number không phải là số hoàn hảo.\n";
}
?>