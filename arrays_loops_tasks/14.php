<?php

$arr = [4, 2, 5, 19, 13, 0, 10];
$e = [2,3,4];
$i = False;

foreach ($arr as $key){
    if(in_array($key, $e)){
        $i = True;
        break;
    }
}

if ($i){
    echo "Есть!";
    }

    else{
    echo "Нет!";
    }
?>
