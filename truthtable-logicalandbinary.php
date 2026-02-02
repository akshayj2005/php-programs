<?php
#explain truth table for each bitwise and logical operators
echo "
logical <br>

| A | B | A && B | A || B | A ^ B |<br>
| - | - | ------ | ------ | ----- |<br>                       1 = true 
| 0 | 0 | 0      | 0      | 0     |<br>                       0 = false
| 0 | 1 | 0      | 1      | 1     |<br>
| 1 | 0 | 0      | 1      | 1     |<br>
| 1 | 1 | 1      | 1      | 0     |<br>
<br>
logical not<br>
| A | !A |<br>
| - | -- |<br>
| 0 | 1  |<br>
| 1 | 0  |<br>
<br>
<br>
binary<br> 
| A | B | A & B | A | B | A ^ B |<br>
| - | - | ----- | ----- | ----- |<br>
| 0 | 0 | 0     | 0     | 0     |<br>
| 0 | 1 | 0     | 1     | 1     |<br>
| 1 | 0 | 0     | 1     | 1     |<br>
| 1 | 1 | 1     | 1     | 0     |<br>
<br>
<br>
binary not<br>
| A | ~A |<br>
| - | -- |<br>
| 0 | 1  |<br>
| 1 | 0  |<br>
";
echo "This Program Is Written And Executed By Akshay Jain 0231BCA222";
?>