<?php
function soChan($so) {
    if($so % 2 == 0) {
        echo "$so là số chẵn.";
    } else {
        echo "$so không là số chẵn.";
    }
}

// Sử dụng hàm để kiểm tra một số
$so_can_kiem_tra = 6;
kiem_tra_so_chan($so_can_kiem_tra);
?>
