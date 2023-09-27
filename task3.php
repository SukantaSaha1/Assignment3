<?php
$grades=[85,92,78,88,95];
$a=SORT_DESC($grades);
print_r($a);

function SORT_DESC($grades)

{
    rsort($grades);
    return $grades;
}


?>