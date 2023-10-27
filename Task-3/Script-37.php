<?php
$arr=array();
array_push($arr,1,2,3,4,5);
print_r("array after multiple insertions</br>");
print_r($arr);
array_pop($arr);
print_r("</br>array after a single pop</br>");
print_r($arr);

/*output:-
array after multiple insertions
Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 )
array after a single pop
Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 )*/
?>