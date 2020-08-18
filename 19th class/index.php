<?php 

for($i=1;$i<=100;$i++){

    if($i%3 == 0 && $i%5 == 0){
        echo "FizzBuzz"."</br>";
    }
    elseif($i%3 == 0){
        echo "Fizz"."</br>";
    }
    elseif($i%5 == 0){
        echo "Buzz"."</br>";
    }
    else{ echo $i."</br>";}
}

/*Associative Array*/

$price = array("shirt"=>"100","punjabi"=>"300","tupi"=>"150");

foreach($price as $p=>$value){
    echo $p.":"." ".$value."</br>";
}

?>