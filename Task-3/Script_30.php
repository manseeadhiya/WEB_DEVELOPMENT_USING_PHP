<?php
$a=array(1,2,2,3);
$b=array_unique($a);
$dupes=array_diff_key($a,$b);
array_count_values($dupes);
?>