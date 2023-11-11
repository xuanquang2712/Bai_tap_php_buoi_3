<!-- Viết chương trình PHP để in ra bảng cửu chương từ 1 đến 10. -->
<?php
// Hàm in bảng cửu chương
function printMultiplicationTable($n) {
    echo "Bảng cửu chương $n:\n";
    for ($i = 1; $i <= 10; $i++) {
        $result = $n * $i;
        echo "$n x $i = $result\n";
    }
    echo "\n";
}

// In bảng cửu chương từ 1 đến 10
for ($j = 1; $j <= 10; $j++) {
    printMultiplicationTable($j);
}
?>