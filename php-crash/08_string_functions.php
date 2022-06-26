<?php

$string = 'Hello world';

/**
 * Get the length of a string
 */
echo strlen($string), '<br>';

/**
 * Find the position of the first occurrence of a substring in a string
 */
echo strpos($string, 'o'), '<br>';

/**
 * Reverse a string
 */
echo strrev($string), '<br>';

/**
 * Convert all characters to lowercase
 */
echo strtolower($string), '<br>';

/**
 * Convert all characters to uppercase
 */
echo strtoupper($string), '<br>';

/**
 * Uppercase the first character of each word
 */
echo ucwords($string), '<br>';

/**
 * String replace
 */
echo str_replace('world', 'everyone', $string), '<br>';

/**
 * Return portion of a string specified by the offset and length
 */
echo substr($string, 0, 7), '<br>';
echo substr($string, 7), '<br>';

/**
 * Starts with
 */
if (str_starts_with($string, 'Hello')) {
    echo 'YES', '<br>';
}

/**
 * Ends with
 */
if (str_ends_with($string, 'ld')) {
    echo 'YES', '<br>';
}

/**
 * HTML Entities
 */
$string2 = '<h1>Hello world</h1>';
echo htmlspecialchars($string2), '<br>';
echo $string2, '<br>';

/**
 * Formatted strings - useful when you have outside data
 * Different specifiers - for different data types
 */
printf('%s is a %s', 'Charlie', 'nice guy'); // s(tring)
echo '<br>';
printf('1 + 1 = %f', 1 + 1); // f(loat)