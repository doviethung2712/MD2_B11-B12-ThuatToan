<?php
$matrix = [
    [0, 1, 1, 2],
    [0, 5, 0, 1],
    [2, 0, 3, 3]];

function totalMoney($arr)
{
    $total = 0;

    for ($i = 0; $i < count($arr); $i++) {
        for ($j = 0; $j < count($arr[$i]); $j++) {
            if ($arr[$j][$i] > 0) {
                $total += $arr[$j][$i];
            } else {
                break;
            }
        }
    }
    return $total;
}

echo totalMoney($matrix);