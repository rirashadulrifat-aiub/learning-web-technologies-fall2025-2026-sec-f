<?php
$arr=array(10,20,30,40,50,60);
$search =30;

foreach($arr as $value)
    if($value == $search)
    break;
     echo("Element found at $value");



?>