<?php
#recursive function to calculate multiplication of number by itself 
function multiply(&$number) {
 $number *= $number;
 return $number;
}
$mynum = 5;
echo $mynum . "<br>";

multiply($mynum);
echo $mynum;

?>