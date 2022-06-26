<?php

$fruits = ['apple', 'orange', 'pear'];

/**
 * Get length
 */
// echo count($fruits), '<br>';


/**
 * Search array
 */
// var_dump(in_array('apples', $fruits));
// echo '<br>';
// var_dump(in_array('apple', $fruits));
// echo '<br>';

/*****************************************/
/**
 * Add to array
 */
$fruits[] = 'grape';
// print_r($fruits);

array_push($fruits, 'blueberry');
// print_r($fruits);

array_unshift($fruits, 'mango');
// print_r($fruits);


/**
 * Remove from array
 */
array_pop($fruits);
// print_r($fruits);

array_shift($fruits);
// print_r($fruits);

// unset($fruits[2]);
// print_r($fruits);


/*****************************************/
/**
 * Split into 2 chunks
 */
$chunked_array = array_chunk($fruits, 2);
// print_r($chunked_array);

$chunked_array = array_chunk($fruits, 3);
// print_r($chunked_array);


/**
 * Concatenate arrays
 */
$arr1 = [1, 2, 3];
$arr2 = [4, 5, 6];

$arr3 = array_merge($arr1, $arr2);
// print_r($arr3);

$arr4 = [...$arr1, ...$arr2];
// print_r($arr4);


/**
 * Combine arrays
 */
$a = ['red', 'green', 'yellow'];
$b = ['apple', 'avocado', 'banana'];

$c = array_combine($a, $b);
// print_r($c);

$keys = array_keys($c);
// print_r($keys);

$flipped = array_flip($c);
// print_r($flipped);


/**
 * Create an array of numbers with range()
 */
$numbers = range(1, 10);
// print_r($numbers);


/**
 * Map through array and create new one
 */
$newNumbers = array_map(function($number) {
    return "Number $number";
}, $numbers);
// print_r($newNumbers);


/**
 * Filter array
 */
$lessThan7 = array_filter($numbers, fn($number) => $number < 7);
// print_r($lessThan7);


/**
 * Reduce array
 */
$sum = array_reduce($numbers, fn($carry, $number) => $carry + $number);
print_r($sum);