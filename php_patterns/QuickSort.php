<?php

$array = [5,7,1,9];
function quickSort($arr){
    if(count($arr) <= 1){
        return $arr;
    }
    $pivotIndex = floor(count($arr)/2);
    $pivot = $arr[$pivotIndex];
    $less = [];
    $count = 0;
    $count ++;
    $great = [];
    for($i=0;$i<count($arr);$i++){
        if($i == $pivotIndex){
            continue;
        }
        if($arr[$i]<$pivot){
            $less[] = $arr[$i];
        }else{
            $great[] = $arr[$i];
        }
    }
    return [...quickSort($great),$pivot,...quickSort($less)];
}
