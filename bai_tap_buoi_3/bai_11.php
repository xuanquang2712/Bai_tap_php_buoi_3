<!-- Viết chương trình PHP để kiểm tra xem một số có phải là số Armstrong hay không. -->
<?php
// Hàm kiểm tra số Armstrong
function isArmstrong($number) {
    $originalNumber = $number;
    $numDigits = strlen($number);
    $sum = 0;

    while ($number > 0) {
        $digit = $number % 10;
        $sum += pow($digit, $numDigits);
        $number = (int)($number / 10);
    }

    return $sum === $originalNumber;
}

// Nhập số từ người dùng
echo "Nhập một số: ";
$number = readline();

// Chuyển đổi số sang kiểu số nguyên
$number = intval($number);

// Gọi hàm và in kết quả
if (isArmstrong($number)) {
    echo "$number là số Armstrong.";
} else {
    echo "$number không phải là số Armstrong.";
}
?>