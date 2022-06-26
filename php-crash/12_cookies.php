<?php
/**
 * Store data in the remote browser and thus tracking or identifying return users.
 */
/**
 * 1. Set a cookie
 */
setcookie('name', 'charlie', time() + 86400 * 30); // 1 day(24 hours; 86400 seconds)

/**
 * 2. Get a cookie
 */
// if (isset($_COOKIE['name'])) {
//     echo $_COOKIE['name'], '<br>';
// }

/**
 * 3. Delete a cookie
 */
// setcookie('name', '', time() - 86400);

/**
 *  Do NOT store sensitive data in cookies because cookies are stored on the client.
 *  'sessions' are a better choice for storing sensitive data.
 */
?>

