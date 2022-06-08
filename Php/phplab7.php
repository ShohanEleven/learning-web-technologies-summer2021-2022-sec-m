<?php

 $total_row=2;
    for ($i = 0; $i<=$total_row; $i++)
    {
        for($j = 0; $j <= $i; $j++ )
        {
            echo "* ";
        }

        echo "<br>";
    }
    
    $total_row=3;
    for ($i=$total_row; $i>=1;$i--)
    {
        for($j = 1; $j <= $i; $j++ )
        {
            echo "$j ";
        }

        echo "<br>";
    }




?>