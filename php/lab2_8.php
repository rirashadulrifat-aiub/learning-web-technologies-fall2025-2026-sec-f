<?php

$number=[
    [1,2,3],
    [1,2],
    [1]
];

$alphabet=[
    ["A"],
    ["B","C"],
    ["D","E","F"]
];


echo("Number shape: <br>");

foreach($number as $row){
    foreach($row as $value){
        echo($value);
    }
    echo("<br>");
}
foreach($alphabet as $row){
    foreach($row as $value){
        echo($value);
    }
    echo("<br>");
    echo("<br>");
}

?>