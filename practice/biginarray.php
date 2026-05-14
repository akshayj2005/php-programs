<?php
// using sorting functions to sort an array of numbers and finding the largest and smallest number in the array
$numbers = [5, 2, 9, 1, 5, 6];
sort($numbers);
echo "Sorted numbers: " . $numbers[0] . ", " . $numbers[1] . ", " . $numbers[2] . ", " . $numbers[3] . ", " . $numbers[4] . ", " . $numbers[5];
echo "<br>Smallest number: " . $numbers[0];
rsort($numbers);
echo "<br>Largest number: " . $numbers[0];


// without using sorting functions to find the largest and smallest number in the array
$numbers = [5, 2, 9, 1, 5, 6];
$smallest = $numbers[0];
$largest = $numbers[0];
foreach ($numbers as $number) {
    if ($number < $smallest) {
        $smallest = $number;
    }
    if ($number > $largest) {
        $largest = $number;
    }
}
echo "<br>Smallest number: " . $smallest;
echo "<br>Largest number: " . $largest;
?>