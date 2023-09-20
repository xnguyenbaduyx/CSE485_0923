<?php
$arrs = [2, 5, 6, 9, 2, 5, 6, 12, 5];
function Tong($arrs){
    $tong = $arrs[0];
for ($i = 1; $i < count($arrs); $i++) {
    $tong += $arrs[$i];
}
return $tong;
}
function Tich($arrs){
    $tich = $arrs[0];
for ($i = 1; $i < count($arrs); $i++) {
    $tich *= $arrs[$i];
}
return $tich;
}
function Hieu($arrs){
    $hieu = $arrs[0];
for ($i = 1; $i < count($arrs); $i++) {
    $hieu -= $arrs[$i];
}
return $hieu;
}
function Thuong($arrs){
    $thuong = $arrs[0];
for ($i = 1; $i < count($arrs); $i++) {
    $thuong /= $arrs[$i];
}
return $thuong;
}
echo "Tổng các phần tử = ".implode(" + ",$arrs)." = ".Tong($arrs). "<br>";
echo "Tích các phần tử = ".implode(" * ",$arrs)." = ".Tich($arrs). "<br>";
echo "Hiệu các phần tử = ".implode(" - ",$arrs)." = ".Hieu($arrs). "<br>";
echo "Thương các phần tử = ".implode(" / ",$arrs)." = ".Thuong($arrs). "<br>";
?>
<span style = {$mau[$i]}>đỏ</span>