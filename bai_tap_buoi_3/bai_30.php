<!-- Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi con của một chuỗi khác hay không. -->
<?php
// Hàm kiểm tra xem chuỗi $substring có phải là chuỗi con của $string hay không
function isSubstring($string, $substring) {
    return strpos($string, $substring) !== false;
}

// Nhập chuỗi từ người dùng
$string = readline("Nhập chuỗi gốc: ");
$substring = readline("Nhập chuỗi cần kiểm tra: ");

// Gọi hàm để kiểm tra chuỗi con
if (isSubstring($string, $substring)) {
    echo "\"$substring\" là chuỗi con của \"$string\".\n";
} else {
    echo "\"$substring\" không phải là chuỗi con của \"$string\".\n";
}
?>