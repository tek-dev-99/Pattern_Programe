<?php 
$p=5;
for($i=1; $i<=5; $i++)
{
    for($j=1; $j<=$i; $j++)
    {
         echo "&nbsp;";        
    }
    for($k=1; $k<=$p; $k++)
    {
        echo "*";
    }
    $p--;
    echo "<br>";
}
$r=2;
for($i=2; $i<=5; $i++)
{
    for($j=1; $j<=$i; $j++)
    {
        echo "&nbsp;";
    }
    for($k=1; $k<=$r; $k++)
    {
        echo "*";
    }
    $r++;
    echo "<br>";
}