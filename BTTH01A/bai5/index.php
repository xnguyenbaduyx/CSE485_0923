<?php
$a = [
    'a' => [
        'b' => 0,
        'c' => 1
    ],
    'b' => [
        'e' => 2,
        'o' => [
            'b' => 3
        ]
    ]
   ];
   $valueB = $a['b']['o']['b'];
   $valueC = $a['a']['c'];
   
   echo "Giá trị có key 'b': $valueB<br>";
   echo "Giá trị có key 'c': $valueC<br>";

   $elementA = $a['a'];
    echo "Hiển thị thông tin của phần tử có key 'a' <br>";
    print_r($elementA);
