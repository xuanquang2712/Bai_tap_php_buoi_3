<!-- Viết chương trình PHP để đảo ngược một chuỗi. -->
<?php
// Hàm đảo ngược chuỗi
function reverseString($str) {
    return strrev($str);
}

// Nhập chuỗi từ người dùng
echo "Nhập chuỗi: ";
$inputString = readline();

// Gọi hàm để đảo ngược chuỗi
$reversedString = reverseString($inputString);

// In kết quả
echo "Chuỗi đảo ngược là: $reversedString\n";
?>