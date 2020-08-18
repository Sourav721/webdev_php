<?php

$search = 6;
$value = array(2,3,5,4,6,1);
$length = count($value);
$result = ls($search,$value,$length);

if($result== -1){
    echo "NOT FOUND";
}
else{
    echo "THE RESULT IS :".$result;
}


function ls($s,$v,$l){
    for($i=0;$i<$l;$i++){
        if($s==$v[$i]){
            return $i;
        }
    }
    return -1;
}

?>