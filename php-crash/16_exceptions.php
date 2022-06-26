<?php
/**
 * Exception can be thrown, and caught ("catched") within PHP 
 * like other programming language exception model. 
 */
function inverse($x) {
    if (!$x) {
        throw new Exception('Division by zero');
    }
    return 1/$x;
}

/**
 * Cause an exception.
 */
// echo inverse(0); // Fatal error: Uncaught Exception: Division by zero

/**
 * 'Catch' block handles exception.
 */
// try {
//     echo inverse(5) . '<br>';
//     echo inverse(0) . '<br>';
// } catch (Exception $e) {
//     echo 'Caught exception: ', $e -> getMessage(), '<br>'; // Caught exception: Division by zero
// }

/**
 * 'Finally' block is executed regardless of whether an exception is thrown or not.
 */
try {
    echo inverse(5) . '<br>';
} catch (Exception $e) {
    echo 'Caught exception: ', $e -> getMessage(), '<br>';
} finally {
    echo 'First finally' . '<br>';
}

try {
    echo inverse(0) . '<br>';
} catch (Exception $e) {
    echo 'Caught exception: ', $e -> getMessage(), '<br>';
} finally {
    echo 'Second finally' . '<br>';
}
?>