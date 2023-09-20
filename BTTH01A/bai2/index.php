<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
   $arrs = ['đỏ', 'xanh', 'cam', 'trắng'];
   $nguoi = ['Anh', 'Sơn', 'Thắng', 'tôi'];
   $mau =['color:red','color:bue','color:orange','color:green'];
   $result = '';
   
   for ($i = 0; $i < count($arrs); $i++) {
       $result .= "Màu <span style = {$mau[$i]}>{$arrs[$i]}</span> là màu yêu thích của {$nguoi[$i]}";
       if ($i < count($arrs) - 1) {
           $result .= ', ';
       }
   }
   
   $result .= " còn màu yêu thích của tôi là màu {$arrs[count($arrs) - 1]}";
   
   echo $result;
   
    ?>
</body>
</html>