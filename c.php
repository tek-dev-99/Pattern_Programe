<?php
$p=1;
for($i=1; $i<=5; $i++)
{
    for($k=1; $k<$p; $k++)
    {
        echo '_';
        
    }
    $p++;
    for($j=5; $j>=$i; $j--)
    {
        echo "*";
    }
        
    echo '<br>';
}