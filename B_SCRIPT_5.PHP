

<?php

    $rowcount=4;
    $lcount=$rcount=$k=0;
    for($row=1;$row<=$rowcount;$row++)
    {
        for($s=1;$s<=$rowcount-$row;$s++)
        {
            print "&nbsp;&nbsp;";
            $lcount++;
        }
        while($k!=2*$row-1)
        {
            if($lcount<=$rowcount-1)
            {
                echo($row+$k);
                $lcount++;
            }
            else
            {
                $rcount++;
                echo($row+$k)-2*$rcount;
            }
            $k++;
        }
        $lcount=$rcount=$k=0;
        print "</br>";
    }

?>