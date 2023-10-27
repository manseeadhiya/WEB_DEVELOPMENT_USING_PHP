<?php
$n = array(4, 6, 2, 22, 11);
sort($n);

$arrlength = count($n);
for($x = 0; $x < $arrlength; $x++) {
  echo $n[$x];
  echo "<br>";
}
/* output:
numbers[0] = 2
numbers[1] = 4
numbers[2] = 6
numbers[3] = 11
numbers[4] = 22*/
?>
