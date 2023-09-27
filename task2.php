<?php
$numbers=[1,2,3,4,5,6,7,8,9,10];
$a=removeEven($numbers);
 var_dump($a) ;

function removeEven($numbers)
{
    $a=[];
    foreach($numbers as $number){
        if($number%2!=0){
            $a[]=$number;
        }
    }
    return $a;
}
    
   
?>