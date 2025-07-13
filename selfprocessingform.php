<?php
if(isset($_POST['submit'])) {
    $name = htmlspecialchars($_POST['name']);
    echo "Entered name: <b>$name</b><br>";
}
?>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <input type="text" name="name">
    <input type="submit" name="submit" value="Submit">
</form>