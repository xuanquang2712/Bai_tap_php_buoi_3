<!-- Viết chương trình PHP để kiểm tra xem một chuỗi có chứa một từ cụ thể hay không. -->
<?php
// Hàm kiểm tra xem chuỗi có chứa từ cụ thể hay không
function containsWord($haystack, $needle) {
    // Sử dụng hàm strpos để kiểm tra
    $pos = strpos($haystack, $needle);
    
    // Nếu strpos trả về false, từ không được tìm thấy
    return $pos !== false;
}

// Chuỗi cần kiểm tra
$stringToCheck = "Hello, World!";

// Từ cụ thể cần kiểm tra trong chuỗi
$wordToFind = "World";

// Gọi hàm và in kết quả
if (containsWord($stringToCheck, $wordToFind)) {
    echo "Chuỗi chứa từ '$wordToFind'.";
} else {
    echo "Chuỗi không chứa từ '$wordToFind'.";
}
?>