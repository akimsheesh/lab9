<?php
if(isset($_POST['name'])) {
    echo "<p>Hi, ". htmlspecialchars($_POST['name']). "</p>";
}
?>
<form method="post">
    <input type="text" name="name">
    <input type="submit" value="Submit">
</form>