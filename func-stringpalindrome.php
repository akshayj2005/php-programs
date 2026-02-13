<?php
# string palindrome
function isPalindrome($str) {
 return strtolower($str.trim()) === strrev($str);
}

isPalindrome("Madam") ? print("Palindrome") : print("Not a palindrome");

?>