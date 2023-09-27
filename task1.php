<?php
$text="The quick brown fox jumps over the lazy dog";
$modText=modText($text);
echo $modText;


function modText($input){

$a=strtolower($input);
$b=str_replace("brown","red",$a);
return $b;
}


?>