<!-- Array Merge -->
<?php
$array1 = [1, 2, 3];
$array2 = [4, 5, 6];
$mergedArray = array_merge($array1, $array2);
print_r($mergedArray);
echo "<br>";

// method 2
$array1 = [1, 2, 3];
$array2 = [4, 5, 6];

foreach ($array2 as $value) {
    $array1[] = $value;
}
print_r($array1);




?>
