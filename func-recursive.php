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
echo '<hr>
<pre style="text-align:center;">
====================================================================
 This Program is Developed and Executed By 0231BCA222 - Akshay Jain
====================================================================
</pre>';
?>