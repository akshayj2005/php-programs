<?php
#function call by refrence 
function selfMultiply(&$number){
$number *= $number;
return $number;}

$mynum = 5;
echo $munum;
echo "<br>";
selfMultiply(mynum);
echo $mynum;
?>