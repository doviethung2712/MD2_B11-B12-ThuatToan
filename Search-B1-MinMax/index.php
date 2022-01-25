<?php
function searchMax($arr){

    $max = $arr[0];
    $index = 0;
    for ($i=1;$i<count($arr) ;$i++){
        if ($max<$arr[$i]){
            $max = $arr[$i];
            $index = $i;
        }
    }
    return "Max là : ". $max . ' Vị Trí : ' . $index;
}
function searchMin($arr){

    $min = $arr[0];
    $index = 0;
    for ($i=1;$i<count($arr) ;$i++){
        if ($min>$arr[$i]){
            $min = $arr[$i];
            $index = $i;
        }
    }
    return "Min là : ". $min. ' Vị Trí : ' . $index;
}

$arr = range(5,50,5);
shuffle($arr);
print_r($arr);
echo '<pre>';
print_r(searchMax($arr));
echo "<hr>";
print_r(searchMin($arr));