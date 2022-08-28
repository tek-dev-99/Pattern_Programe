<?php 
$p=1;

for($i=5; $i>=1; $i--)
{
    for($j=1; $j<=$i; $j++)
    {
        echo '&nbsp;';
    }
    for($k=1; $k<=$p; $k++)
    {
        echo "*";
    }
    $p++;
    echo "<br>";
}