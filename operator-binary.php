<?php
#bitwise operator
$num1 = 11;
$num2 = 0;
$result_and = $num1  & $num2;
$result_or = $num1  | $num2;
$result_xor = $num1  ^ $num2;
$logical = $num1 && $num2;
echo "Logical: $logical, And:   $result_and, OR:    $result_or, XOR:    $result_xor";
?>