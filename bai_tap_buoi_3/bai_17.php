<!-- Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi Palindrome hay không. -->
<?php
// Hàm kiểm tra chuỗi Palindrome
function isPalindrome($str) {
    $str = strtolower(preg_replace('/[^a-zA-Z0-9]/', '', $str));
    $reversedStr = strrev($str);
    return $str === $reversedStr;
}

// Nhập chuỗi từ người dùng
echo "Nhập chuỗi: ";
$inputString = readline();

// Gọi hàm để kiểm tra chuỗi Palindrome
if (isPalindrome($inputString)) {
    echo "Chuỗi '$inputString' là chuỗi Palindrome.\n";
} else {
    echo "Chuỗi '$inputString' không phải là chuỗi Palindrome.\n";
}
?>