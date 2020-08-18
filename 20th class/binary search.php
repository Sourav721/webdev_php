<?php

$search_number = 3;
$list_of_number = array(3,4,7,1,8,9,2);
sort($list_of_number);
$l=0;
$r=count($list_of_number)-1;
$result = bs($search_number,$list_of_number,$l,$r);

function bs($sn,$arr,$l,$r){
    while($l<=$r){
        $mid=floor(($l+$r)/2);

        if($arr[$mid] == $sn){
            return $mid;
        }
        elseif($sn > $arr[$mid]){
            $l = $mid + 1;
        }
        else{$r = $mid - 1;}
    }

    return -1;
}

if($result== -1){
    echo "not fount";
}
else {
    echo "the result is: ".$result;
}





?>