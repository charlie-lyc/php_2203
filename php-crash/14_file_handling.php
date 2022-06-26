<?php
/**
 * Built-in functions for reading and writing files.
 */

$file = 'extras/users.txt';

/**
 * file_exists(): return true or false
 */
if (file_exists($file)) {
    /**
     * readfile(): return contents and number of bytes
     */
    echo readfile($file), '<br>';

    /**
     * fopen(): open file
     */
    $handle = fopen($file, 'r');

    /**
     * fread(): read file
     */
    $contents = fread($handle, filesize($file));

    /**
     * fclose(): close the file resource
     */
    fclose($handle);
    echo $contents, '<br>';
} else {
    /**
     * Create new file, if file doesn't exist.
     */
    $handle = fopen($file, 'w');
    
    /**
     * PHP_EOL: constant, end of line
     */
    $contents = 'Jerry'. PHP_EOL . 'Ethan' . PHP_EOL . 'Jack';

    /**
     * fwrite(): write contents to the file and return the number of bytes
     */
    fwrite($handle, $contents);
    fclose($handle);
}

/* Modes:
    'r' - Read only. File pointer starts at the beginning of the file
    'w' - Open a file for write only. Erases the contents of the file or creates a new file if it doesn't exist. File pointer starts at the beginning of the file
    'a' - Open a file for write only. The existing data in file is preserved. File pointer starts at the end of the file. Creates a new file if the file doesn't exist
    'x' - Creates a new file for write only. Returns FALSE and an error if file already exists
    'r+' - Open a file for read/write. File pointer starts at the beginning of the file
    'w+' - Open a file for read/write. Erases the contents of the file or creates a new file if it doesn't exist. File pointer starts at the beginning of the file
    'a+' - Open a file for read/write. The existing data in file is preserved. File pointer starts at the end of the file. Creates a new file if the file doesn't exist
    'x+' - Creates a new file for read/write. Returns FALSE and an error if file already exists
*/

/** 
 * You may meet this situation 
 * ...
 * 
 * Warning: fopen(extras/users.txt): Failed to open stream: Permission denied in /opt/lampp/htdocs/php-crash/14_file_handling.php on line 36
 * 
 * ... 
 * 
 * Then you need to click 'Open Terminal' in XAMPP setup and typing like
 * ...
 * 
 * $ sudo chmod 777 /opt/lampp/htdocs/php-crash/extras/
 * 
 * ...
 */

