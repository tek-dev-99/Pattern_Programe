<?php 
$p=1;
for($i=1; $i<=5; $i++)
{
    for($k=5; $k>$p; $k--)
    {
        echo "_";
    }
    $p++;
    for($j=1; $j<=$i; $j++)
    {
        echo "*";
    }
    echo "<br>";
}