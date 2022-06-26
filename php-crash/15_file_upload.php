<?php
$allowed_ext = array('png', 'jpg', 'jpeg', 'gif');

if (isset($_POST['submit'])) {
    /**
     * Check if file was uploaded
     */
    if (!empty($_FILES['upload']['name'])) {
        // print_r($_FILES);
        /*
            upload: {
                name: "costume1.gif",
                full_path: "costume1.gif",
                type: "image/gif",
                tmp_name: "/opt/lampp/temp/phpy9RSTD",
                error: "0",
                size: "13591"
            }
        */
        /**
         * Get file name, size, temporary name, target directory
         */
        $file_name = $_FILES['upload']['name'];
        $file_size = $_FILES['upload']['size'];
        $file_tmp = $_FILES['upload']['tmp_name'];
        $target_dir = "uploads/$file_name";

        /**
         * Get file extension
         */
        $file_ext = explode('.', $file_name);
        $file_ext = strtolower(end($file_ext));
        // echo $file_ext, '<br>';

        /**
         * Validate file typ/extension
         */
        if (in_array($file_ext, $allowed_ext)) {
            /**
             * Validate file size: allow until 1 MB(1000000 bytes)
             */
            if ($file_size <= 1000000) {
                /**
                 * Upload file
                 */
                move_uploaded_file($file_tmp, $target_dir);

                /**
                 * Success message
                 */
                $message = '<p style="color: green;">File uploaded!</p>';
            } else {
                $message = '<p style="color: red;">File too large!</p>';
            }
        } else {
            $message = '<p style="color: red;">Invalid file type!</p>';
        }
    } else {
        $message = '<p style="color: red;">Please choose a file!</p>';
    }
}

/**
 * You may meet this situation
 * ...
 *
 * Warning: move_uploaded_file(uploads/costume1.gif): Failed to open stream: Permission denied in /opt/lampp/htdocs/php-crash/15_file_upload.php on line 35
 *
 * ...
 *
 * Then you need to click 'Open Terminal' in XAMPP setup and typing like
 * ...
 *
 * $ sudo chmod 777 /opt/lampp/htdocs/php-crash/uploads/
 *
 * ...
 */
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>File Upload</title>
    </head>
    <body>
        <?php echo $message ?? null ?>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" enctype="multipart/form-data">
            <label for="select-image">Select image to upload: </label>
            <br><br>
            <input type="file" name="upload">
            <br><br>
            <input type="submit" value="Submit" name="submit">
        </form>
    </body>
</html>
