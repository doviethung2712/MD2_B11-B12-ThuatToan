<?php

function selectionSort($list){
    for ($i=0;$i<count($list) -1 ;$i++){
        $min = $i;
        for ($j= $i +1;$j<count($list) ;$j++){
            if ($list[$j]<$list[$min]){
                $min = $j;
            }
        }
        $list = sortSclect($list,$i,$min);
    }
    return $list;
}

function sortSclect($list , $i ,$min){
    $temp = $list[$i];
    $list[$i] = $list[$min];
    $list[$min] = $temp;
    return $list;
}

$arr = [1, 9, 4.5, 6.6, 5.7, -4.5];

print_r(selectionSort($arr));
