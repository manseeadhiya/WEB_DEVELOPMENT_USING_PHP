<?php
$a1=array(2,4,6,8,10,12);
$a2=array(1,2,3,4,5,6);
var_dump(array_intersect($a1,$a2));
/*output:-
array(3) { [0]=> int(2) [1]=> int(4) [2]=> int(6) }
*/
?>