<?php

function countNumber($arr , $number){

    $count = 0;
    for ($i=0;$i<count($arr) ;$i++){
        if ($arr[$i] == $number){
            $count ++;
        }
    }
    return "Số ".$number." Xuất hiện : ". $count ."lần";
}

$arr =  [1,3,6,3,2,6,8,3,3];
$x = 3;
print_r($arr);
echo "<hr>";
print_r(countNumber($arr,$x));