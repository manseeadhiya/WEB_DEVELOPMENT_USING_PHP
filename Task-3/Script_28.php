<?php
$n = array(4, 6, 2, 22, 11);
sort($n);

$arrlength = count($n);
for($x = 0; $x < $arrlength; $x++) {
  echo $n[$x];
  echo "<br>";
}
?>