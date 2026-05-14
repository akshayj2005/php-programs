<!-- Date and String Functions in PHP -->
<?php
// | No. | Function           | Description             | Example                                    |
// | --- | ------------------ | ----------------------- | ------------------------------------------ |
// | 1   | `strlen()`         | Finds string length     | `strlen("Hello")`                          |
// | 2   | `str_word_count()` | Counts words in string  | `str_word_count("Hello World")`            |
// | 3   | `strrev()`         | Reverses string         | `strrev("Hello")`                          |
// | 4   | `strpos()`         | Finds position of text  | `strpos("Hello","e")`                      |
// | 5   | `str_replace()`    | Replaces text           | `str_replace("World","PHP","Hello World")` |
// | 6   | `strtoupper()`     | Converts to uppercase   | `strtoupper("hello")`                      |
// | 7   | `strtolower()`     | Converts to lowercase   | `strtolower("HELLO")`                      |
// | 8   | `substr()`         | Extracts part of string | `substr("Hello",1,3)`                      |
// | 9   | `trim()`           | Removes extra spaces    | `trim(" Hello ")`                          |
// | 10  | `ucfirst()`        | Converts first character to uppercase | `ucfirst("hello")`           |
// | 11  | `lcfirst()`        | Converts first character to lowercase | `lcfirst("Hello")`           |
// | 12  | `ucwords()`        | Converts first character of each word to uppercase | `ucwords("hello world")` |
// | 13  | 'explode()'        | Splits string into array | `explode(" ", "Hello World")`              |

// | No. | Function                      | Description                         | Example                                     |
// | --- | ----------------------------- | ----------------------------------- | ------------------------------------------- |
// | 1   | `date()`                      | Displays current date/time          | `date("d-m-Y")`                             |
// | 2   | `time()`                      | Returns current timestamp           | `time()`                                    |
// | 3   | `mktime()`                    | Creates timestamp for specific date | `mktime(0,0,0,5,14,2026)`                   |
// | 4   | `strtotime()`                 | Converts string to timestamp        | `strtotime("tomorrow")`                     |
// | 5   | `getdate()`                   | Gets date information               | `getdate()`                                 |
// | 6   | `checkdate()`                 | Checks valid date                   | `checkdate(2,29,2024)`                      |
// | 7   | `date_default_timezone_set()` | Sets timezone                       | `date_default_timezone_set("Asia/Kolkata")` |
// | 8   | `localtime()`                 | Gets local time                     | `localtime()`                               |
// | 9   | `gmdate()`                    | Gets GMT date/time                  | `gmdate("d-m-Y")`                           |
// | 10  | `microtime()`                 | Gets current microseconds           | `microtime()`                               |
// | 11  | `diff()`                      | Calculates difference between dates  | `date1->diff(date2)`                       |
?>