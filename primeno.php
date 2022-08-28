<?php
$n=12;
$k=0;
for($i=2; $i<($n/2); $i++)
{
   if($n%$i == 0)
   {
     $k =1; 
     break;
   }

}
if($k == 1)
{
    echo "Not Prime"; 
}else{
    echo "Prime";
}

?>
