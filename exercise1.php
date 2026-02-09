<?php
#top 5 students using associative array
$student = array("Akshay" => 100, "Priyesh" => 50,"Yuvraj" => 90,"Mehak" => 20,"Rakshit" => 10,"tanish" => 0);
arsort($student);
$j = 0;
foreach ($student as $key => $value){
    echo "Student: $key, Marks: $value<br>";
    $j++;
    if($j==5){
        break;
    }}
?>