<?php
/**
 * First of all...
 * - http://localhost:8080/phpmyadmin/
 * - Database name: php_dev
 * - Create table
 *    - Table name: feedback
 *    - Columns: 5
 * - ...
 * - Privileges - Add user account
 */

define('DB_HOST', 'localhost');
define('DB_USER', 'charlie');
define('DB_PASS', '12345');
define('DB_NAME', 'php_dev');

/**
 * Create connection
 */
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

/**
 * Check connection
 */
if ($conn->connect_error) {
  die('Connection failed: ' . $conn->connect_error);
}

// echo 'Connected successfully!';
