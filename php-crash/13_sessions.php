<?php
/**
 * Store information (in variables) to be used across multiple pages.
 * Unlike cookies, sessions are stored on the server.
 */
if (isset($_POST['submit'])) {
    // Sanitize inputs
    $username = filter_input(
        INPUT_POST,
        'username',
        FILTER_SANITIZE_SPECIAL_CHARS
    );
    $password = filter_input(
        INPUT_POST,
        'password',
        FILTER_SANITIZE_SPECIAL_CHARS
    );

    /**
     * 1. Call session before accessing any session data
     */
    session_start();

    if ($username == 'charlie' && $password == 'password') {
        /**
         * 2. Set session variable
         */
        $_SESSION['username'] = $username;

        /**
         * 3. Redirect user to another page
         */
        header('Location: /php-crash/extras/dashboard.php');
        
    } else {
        echo 'Incorrect username or password', '<br>';
    }
}
?>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
    <div>
        <label for="username">Username: </label>
        <input type="text" name="username">
    </div>
    <br>
    <div>
        <label for="password">Password: </label>
        <input type="password" name="password">
    </div>
    <br>
    <input type="submit" value="Submit" name="submit">
</form>