<?php 

// for($i=1; $i<=4; $i++)
// {
//     for($j=1; $j<=$i; $j++)
//     {
//         echo "*";
//     }
//     echo "<br>";
// }
// for($p=3; $p>=1; $p--)
// {
//     for($k=1; $k<=$p; $k++)
//     {
//         echo "*";
//     }
//     echo "<br>";
// }

// $array = [0,2,3,4,5,8];
// for($i=0; $i<=count($array); $i++)
// {
//     //echo $array[$i];
//     echo "<pre>";
//     print_r($array[$i]);
//     die;
// }

// for($i=1; $i<=10; $i++)
// {
//     if($i%2 == 0)
//     {
//         echo $i;
//     }
//     echo' <br>';
// }

// if($a==1)
// {
//    if($a==$b)
//     {
//         echo 'a ';
//     }
// }

$a=407;
$total=0;
for($i=$a; $i!=0; $i=$i/10)
{
    $rem = $i%10;
    $total= $total+$rem*$rem*$rem;
}
if($a == $total)
{
    echo "yes";
}
else{
    echo "no";
}

