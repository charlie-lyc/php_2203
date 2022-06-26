<?php
/**
 * $_GET
 */
if (isset($_GET['name'])) {
    echo $_GET['name'], '<br>';
}
if (isset($_GET['age'])) {
    echo $_GET['age'], '<br>';
}
?>

<!-- Pass data through a link -->
<a href="<?php echo $_SERVER['PHP_SELF']; ?>?name=Charlie">Click1</a>
<br><br>

<a href="<?php echo $_SERVER['PHP_SELF']; ?>?name=Charlie&age=45">Click2</a>
<br><br>
<hr><br>


<?php
/**
 * $_POST
 */
if (isset($_POST['submit'])) {
    echo $_POST['name'], '<br>';
    echo $_POST['age'], '<br>';
    // echo $_POST['submit'], '<br>';
}
?>

<!-- Pass data through a form -->
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
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