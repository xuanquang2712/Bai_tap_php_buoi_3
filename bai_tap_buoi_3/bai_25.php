<!-- Viết chương trình PHP để kiểm tra xem một số có phải là số nguyên tố hay không. -->
<?php
// Hàm kiểm tra số nguyên tố
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

// Nhập số từ người dùng
do {
    $inputNumber = readline("Nhập một số nguyên dương: ");
} while (!ctype_digit($inputNumber));

// Chuyển đổi số sang kiểu số nguyên
$number = intval($inputNumber);

// Gọi hàm để kiểm tra số nguyên tố
if (isPrime($number)) {
    echo "$number là số nguyên tố.\n";
} else {
    echo "$number không phải là số nguyên tố.\n";
}
?>