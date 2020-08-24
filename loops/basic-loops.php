<?php

$arr = [
    [
        'title' => 'Book',
        'price' => 25000
    ],
    [
        'title' => 'Keyboard',
        'price' => 120000
    ],
    [
        'title' => 'Mouse',
        'price' => 46000
    ]
];

echo "<h3>for</h3>";
for($i = 0; $i < count($arr); $i++){
    echo $arr[$i]['title'] . ': ' . $arr[$i]['price'] . '<br>';
}

echo "<hr>";


echo "<h3>foreach</h3>";
foreach($arr as $item){
    echo $item['title'] . ': ' . number_format($item['price'], 0, '.', ',') . '<br>';
}

echo "<hr>";