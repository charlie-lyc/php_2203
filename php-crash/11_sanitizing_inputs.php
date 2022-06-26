<?php
// if (isset($_POST['submit'])) {
//     echo $_POST['name'], '<br>';
//     echo $_POST['age'], '<br>';
// }

/**
 * Wrong input example
 * 
 *      Name: <script>alert(1);</script>
 */
?>

<?php
if (isset($_POST['submit'])) {
    /*----------Sanitize input methods ---------*/
    /**
     * htmlspecialchars()
     */
    // $name = htmlspecialchars($_POST['name']);
    // $age = htmlspecialchars($_POST['age']);

    /**
     * filter_var()
     */
    // $name = filter_var($_POST['name'], FILTER_SANITIZE_SPECIAL_CHARS);
    // $age = filter_var($_POST['age'], FILTER_SANITIZE_NUMBER_INT);

    /**
     * filter_input()
     */
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
    $age = filter_input(INPUT_POST, 'age', FILTER_SANITIZE_NUMBER_INT);

    /**
     * FILTER_SANITIZE_URL
     * FILTER_SANITIZE_EMAIL
     * FILTER_SANITIZE_NUMBER_INT
     * FILTER_SANITIZE_NUMBER_FLOAT
     * FILTER_SANITIZE_STRING        // deprecated
     * FILTER_SANITIZE_SPECIAL_CHARS // instead of FILTER_SANITIZE_STRING
     */

    echo $name, '<br>';
    echo $age, '<br>';
}
?>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
    <div>
        <label for="name">Name: </label>
        <input type="text" name="name">
    </div>
    <br>
    <div>
        <label for="age">Age: </label>
        <input type="text" name="age">
    </div>
    <br>
    <input type="submit" value="Submit" name="submit">
</form>