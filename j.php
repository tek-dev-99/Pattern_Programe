<?php
$p=5;
for($i=1; $i<=5; $i++)
{
    for($j=1; $j<=$i; $j++ )
    {
        echo "&nbsp;";
    }
    for($k=1; $k<=$p; $k++)
    {
        echo "*";
    }
    echo "<br>";
    $p--;
}