<!-- Fibonacci Sequence -->
<?php
$a = 0;
$b = 1;
echo "Fibonacci Sequence: ";
echo $a . " " . $b . " ";
for ($i = 2; $i < 10; $i++) {
    $temp = $a + $b;
    echo $temp . " ";
    $a = $b;
    $b = $temp;
}
?>
<!-- 0   1   1       2      3      5      8         13       21     34
     a   b   temp
         a   b      temp
             a       b     temp
                     a       b     temp
                             a       b     temp
                                     a       b     temp
                                             a       b     temp
                                                     a       b     temp -->