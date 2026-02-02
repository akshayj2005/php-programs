<?php
#array operators
$x = array("a" => "Red", "b" => "Green", "c" => "Blue");
$x = array("u" => "Yellow", "y" => "Orange", "z" => "Pink");

$z = $x+$y;
var_dump($z);
var_dump($x == $y);
var_dump($x === $y);
var_dump($x != $y);
var_dump($x<>$y);
var_dump($x!==$y);
?>
