<?php
#write code for logical operators 
$year = 2014;
if(($year %400==0)|| (($year !=0)&&($year %4 == 0)))
{
echo "$year is a leap year.";
}
else{
echo "$echo is not a leap year.";
}
?>

