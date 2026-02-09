<?php
#first 10 factors of 4200 using array
$arr = array();
$a = 4200;
$j = 0;
for($i=1; $i<=$a; $i++){
    if($a % $i == 0){
        $arr[$j] = $i;
        $j++;
    }
    if(count($arr)==10){
        break;
    }
}
foreach($arr as $val){
    echo "$val <br>";
}

?>