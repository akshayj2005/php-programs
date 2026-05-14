<?php
$a = "Hello World";
echo "The number of characters in the string is: " . strlen($a);

$ab = 0;
for($i = 0; isset($a[$i]); $i++) {
    $ab++;
}
echo "<br>The number of characters in the string using foreach loop is: " . $ab;

$myst = "into onto unto";
$sub = "to";
$myst = str_replace($sub, "j", $myst);
echo "<br>The modified string is: " . $myst;
?>