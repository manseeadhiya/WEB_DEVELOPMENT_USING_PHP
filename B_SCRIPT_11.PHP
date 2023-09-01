<?php
    $size = 4;
    
  
    for ($i = 1; $i <= $size; $i++) {
        
        for ($j = $size; $j > $i; $j--) {
            echo "&nbsp;&nbsp;";
        }
        
        for ($k = 0; $k < $i * 2 - 1; $k++) {
            if ($k === 0 || $k === 2 * $i - 2) {
                echo "*";
            }
            else {
                echo "&nbsp;&nbsp;";
            }
        }
        echo "<br>";
    }
   
    for ($i = 1; $i <= $size - 1; $i++) {
   
        for ($j = 0; $j < $i; $j++) {
            echo "&nbsp;&nbsp;";
        }
        
        for ($k = ($size - $i) * 2 - 1; $k >= 1; $k--) {
            if ($k === 1 || $k === ($size - $i) * 2 - 1) {
                echo "*";
            }
            else {
                echo "&nbsp;&nbsp;";
            }
        }
        echo "<br>";
    }
?>